<?php 
	namespace Alen;

	use Silex\Application;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\RedirectResponse;

	class MainController {
		public function indexPage(Request $r, Application $app) {
			return $app['twig']->render('index.html.twig', []);
		}

		public function signupPage(Request $r, Application $app) {
			return $app['twig']->render('signup.html.twig', []);
		}

		public function signupProcess(Request $r, Application $app) {
			$username = $r->get("username");
			$password = $r->get("pass");
			$password2 = $r->get("pass_conf");
			$email = $r->get("email");

			$query = $app['db']->prepare("SELECT * FROM users WHERE username = :USERNAME");
			$query->bindParam(":USERNAME", $username);
			$query->execute();

			$result = $query->rowCount();
			if($result) {
				return $app['twig']->render('signup.html.twig', []);
			}


			//CHECK IF USERNAME ALREADY EXISTS


			//CHECK IF EMAIL ALREADY EXISTS

			//CHECK IF PASSWORDS MATCH

			//FINISH
			
		}
	}

?>