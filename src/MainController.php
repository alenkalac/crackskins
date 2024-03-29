<?php 
	namespace Alen;

	use Silex\Application;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\RedirectResponse;

	//require_once "/SkinRender.php";

	class MainController {

		private $ERROR_USERNAME 	= 1;
		private $ERROR_EMAIL 		= 2;
		private $ERROR_PASSWORD 	= 3;
		private $ERROR_ROLLBACK  	= 4;

		private $LOGIN_ERROR_TEXT = "Incorrect Details, Try Again";

		public function indexPage(Request $r, Application $app) {
			return $app['twig']->render('index.html.twig', []);
		}

		public function signupPage(Request $r, Application $app) {
			return $app['twig']->render('signup.html.twig', []);
		}

		public function browsePage(Request $r, Application $app) {
			$query = $app['db']->prepare("SELECT DISTINCT skin FROM skins");
			$query->execute();
			$skins = $query->fetchAll(\PDO::FETCH_ASSOC);
			return $app['twig']->render('browse.html.twig', ['skins' => $skins]);
		}

		public function profilePage(Request $r, Application $app) {
			if(!$this->isAuth($app)) 
				return new RedirectResponse('/login');

			$query = $app['db']->prepare("SELECT skin FROM skins WHERE user LIKE BINARY :USERNAME");
			$query->execute([
				"USERNAME" => $app['session']->get('username'),
			]);

			$history = $query->fetchAll(\PDO::FETCH_ASSOC);

			//get user details, post as whatever
			return $app['twig']->render('profile.html.twig', ['history' => $history]);
		}

		public function logoutProcess(Request $r, Application $app) {
			$app['session']->clear();
			return new RedirectResponse('/');
		}

		public function loginProcess(Request $r, Application $app) {
			$username = $r->get("username");
			$password = $r->get("password");
			$data = [];

			$rexSafety = "/^([a-zA-Z0-9]){2,20}/";
			if(!preg_match_all($rexSafety, $username) || !strlen($password) > 0) {
				$data['error_login'] = $this->LOGIN_ERROR_TEXT;
				return $app['twig']->render('signup.html.twig', $data);
			}

			$query = $app['db']->prepare("SELECT password,validated,username FROM users WHERE username LIKE BINARY :USERNAME");
			$query->execute([
				"USERNAME" => $username,
			]);

			$result = $query->fetch(\PDO::FETCH_ASSOC);
			$user = $result['username'];


			if(!password_verify($password, $result['password'])) {
				$data['error_login'] = "Incorrect Details, Try Again"; 
				return $app['twig']->render('signup.html.twig', $data);
			}

			$query = $app['db']->prepare("SELECT skin FROM skins WHERE user LIKE BINARY :USERNAME AND active = 1");
			$query->execute([
				"USERNAME" => $username,
			]);

			$result = $query->fetch(\PDO::FETCH_ASSOC);
			$skin = $result['skin'];

			$app['session']->set('login', true);
			$app['session']->set('username', $user);
			$app['session']->set('skin', $skin);

			return new RedirectResponse('/profile');
		}

		public function validateProcess(Request $r, Application $app) {
			$email = $r->get("email");
			$token = $r->get("token");

			$query = $app['db']->prepare("SELECT * FROM validate WHERE email = :EMAIL AND token = :TOKEN");
			$query->execute([
				"EMAIL" => $email,
				"TOKEN" => $token,
			]);

			$rows = $query->rowCount();

			if($rows === 1) {
				$app['db']->beginTransaction();
				try {
					$query = $app['db']->prepare("UPDATE users SET validated = 1 WHERE email = :EMAIL");
					$query->execute([
						"EMAIL" => $email,
					]);

					$query = $app['db']->prepare("DELETE FROM validate WHERE email = :EMAIL");
					$query->execute([
						"EMAIL" => $email,
					]);

					$app['db']->commit();
				}catch(PDOException $e) {
					die("Oppps something went wrong ");
				}
			}
			return new RedirectResponse("/");
		}

		public function signupProcess(Request $r, Application $app) {
			$username = $r->get("username");
			$password = $r->get("pass");
			$password2 = $r->get("pass_conf");
			$email = $r->get("email");
			$errorcode = 0;
			$errormessage = '';

			$data = [
				'username' => $username,
				'password' => $password,
				'password2' => $password2,
				'email'	=> $email,
			];

			//CHECK IF EMAIL IS VALID
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errorcode = $this->ERROR_EMAIL;
				$errormessage = 'Invalid Email Format';
			}

			//CHECK IF PASSWORDS MATCH
			if(strcmp($password, $password2) !== 0) {
				$errorcode = $this->ERROR_PASSWORD;
				$errormessage = 'Passwords Dont Match!';
			}

			//CHECK IF USERNAME IS VALID
			$rexSafety = "/^([a-zA-Z0-9]){2,20}/";
			if(!preg_match_all($rexSafety, $username)) {
				$errorcode = $this->ERROR_USERNAME;
				$errormessage = 'Invalid Username';
			}

			//CHECK IF USERNAME ALREADY EXISTS
			if($errorcode === 0) {

				$query = $app['db']->prepare("SELECT * FROM users WHERE username = :USERNAME");
				$query->bindParam(":USERNAME", $username);
				$query->execute();

				$result = $query->rowCount();
				if($result) {
					$errorcode = $this->ERROR_USERNAME;
					$errormessage = 'Username is not available';
				}
			}

			//CHECK IF EMAIL ALREADY EXISTS
			if($errorcode === 0) {
				$query = $app['db']->prepare("SELECT * FROM users WHERE email = :EMAIL");
				$query->bindParam(":EMAIL", $email);
				$query->execute();

				$result = $query->rowCount();

				if($result) {
					$errorcode = $this->ERROR_PASSWORD;
					$errormessage = 'Email already in use';
				}
			}
			//FINISH
			if($errorcode > 0) {
				$data['errorcode'] = $errorcode;
				$data['error'] = $errormessage;
				return $app['twig']->render('signup.html.twig', $data);
			}
			else {
				$token = uniqid();
				$app['db']->beginTransaction();

				try {
					$query = $app['db']->prepare("INSERT INTO users VALUES (NULL, :USERNAME, :PASSWORD, :EMAIL, 1)");
					$query->execute([
						"USERNAME" => $username,
						"EMAIL" => $email,
						"PASSWORD" => password_hash($password, PASSWORD_DEFAULT),
					]);

					$query = $app['db']->prepare("INSERT INTO validate VALUES (NULL, :EMAIL, :TOKEN)");
					$query->execute([
						"EMAIL" => $email,
						"TOKEN" => $token,
					]);

					$app['db']->commit();

					//implement email functionality.

					$app['session']->set('login', true);
					$app['session']->set('username', $username);
					$app['session']->set('skin', '');

					return new RedirectResponse('/profile');
				}
				catch(PDOException $e) {
					$app['db']->rollBack();
					$data['errorcode'] = $this->ERROR_ROLLBACK;
					$data['error'] = "Something went wrong, Please try again";
					return $app['twig']->render('signup.html.twig', $data);
				}
				return new RedirectResponse('/');
			}
		}

		public function isAuth(Application $app) {
			return ($app['session']->get('login', false));
		}
	}
?>