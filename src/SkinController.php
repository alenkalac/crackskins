<?php 
	namespace Alen;

	use Silex\Application;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\RedirectResponse;

	include_once ('SkinRender.php');

	class SkinController {

		function invalidateLogin(Application $app) {

			if($app['session']->get('login', false) === false)
				return true;
			if($app['session']->get('username') == null)
				return true;
			return false;
		}

		function getSkinRender(Request $r, Application $app) {
			$skinid = $r->get('skinid');

			if(!file_exists("skins/rendered/$skinid.png")) {
				$image = new \SkinRender($skinid);
			}
			return  $app->sendFile("skins/rendered/$skinid.png");
		}

		function deleteSkinProcess(Request $r, Application $app) {
			if($this->invalidateLogin($app))
				return new RedirectResponse("/login");

			$skinid = $r->get('skinid');
			$username = $app['session']->get('username');

			$query = $app['db']->prepare("DELETE FROM skins WHERE skin = :SKIN AND user = :USER");
			$query->bindParam("SKIN", $skinid);
			$query->bindParam("USER", $username);

			$query->execute();

			return new RedirectResponse("/profile");


		}

		function changeSkinProcess2(Request $r, Application $app) {
			if($this->invalidateLogin($app))
				return new RedirectResponse("/login");

			$skinid = $r->get('skinid');

			$query = $app['db']->prepare("SELECT skin FROM skins WHERE skin = :SKINID");
			$query->execute([
				"SKINID" => $skinid,
			]);

			if(!$query->rowCount())
				return new RedirectResponse("/profile");

			$this->changeSkinWithSkinID($skinid, $app);

			return new RedirectResponse("/profile");

		}

		function changeSkinProcess(Request $r, Application $app) {
			if($this->invalidateLogin($app))
				return new RedirectResponse("/login");

			$file = $r->files->get('skin');
			$filetype_whitelist[] = 'image/png';
			$err = false;

			//CHECK IF FILE ACTUALLY EXIST
			if($file == null)
				$err = true;

			//CHECK IF THERE HAS BEEN ANY ERRORS
			if($err === false && $file->getError() < 0) 
				$err = true;

			if($err === false) {

				//CHECK FILE MEME TYPE
				$filetype = $file->getMimeType();
				if(!in_array($filetype, $filetype_whitelist))
					$err = true;
			}

			//MAKE SURE ITS THE MINECRAFT SKIN THAT'S BEING UPLOADED
			list($width, $height) = getimagesize($file->getPathname());
			if( !($width == 64 && ($height == 64 || $height == 32)) )
				die("incorrect file size");

			if($err === false) 
				//GENERATE SHA1 FOR THE UPLOADED FILE
				$sha_name = sha1_file($file->getPathname());

			if(!file_exists("skins/$sha_name.png"))
				$file->move("skins", $sha_name . ".png");

			$this->changeSkinWithSkinID($sha_name, $app);

			/*
			$app['db']->beginTransaction();
			try {

				$username = $app['session']->get('username');

				//CHANGE THE ACTIVE SKIN TO INACTIVE
				$query = $app['db']->prepare("UPDATE skins SET active = 0 WHERE user LIKE BINARY :USERNAME AND active = 1");
				$query->execute([
					'USERNAME' => $username,
				]);

				//SEE IF THE USER HAD THE SKIN BEFORE
				$query = $app['db']->prepare("UPDATE skins SET active = 1 WHERE user LIKE BINARY :USERNAME AND skin = :SKINID");
				$query->execute([
					'USERNAME' => $username,
					"SKINID" => $sha_name,
				]);

				//IF NO CHANGES HAVE BEEN MADE ABOVE, INSERT NEW ENTRY
				if($query->rowCount() === 0) {
					$query = $app['db']->prepare("INSERT INTO skins VALUES(NULL, :USERNAME, :SKINID, 1)");
					$query->execute([
						"USERNAME" =>  $username,
						"SKINID" => $sha_name,
					]);
				}

				$app['db']->commit();
				$app['session']->set('skin', $sha_name);

			}catch(\PDOException $e) {
				die("Something went wrong");
			}
			*/

			return new RedirectResponse("/profile");

		}

		function changeSkinWithSkinID($skinid, Application $app) {
			$app['db']->beginTransaction();
			try {

				$username = $app['session']->get('username');

				//CHANGE THE ACTIVE SKIN TO INACTIVE
				$query = $app['db']->prepare("UPDATE skins SET active = 0 WHERE user LIKE BINARY :USERNAME AND active = 1");
				$query->execute([
					'USERNAME' => $username,
				]);

				//SEE IF THE USER HAD THE SKIN BEFORE
				$query = $app['db']->prepare("UPDATE skins SET active = 1 WHERE user LIKE BINARY :USERNAME AND skin = :SKINID");
				$query->execute([
					'USERNAME' => $username,
					"SKINID" => $skinid,
				]);

				//IF NO CHANGES HAVE BEEN MADE ABOVE, INSERT NEW ENTRY
				if($query->rowCount() === 0) {
					$query = $app['db']->prepare("INSERT INTO skins VALUES(NULL, :USERNAME, :SKINID, 1)");
					$query->execute([
						"USERNAME" =>  $username,
						"SKINID" => $skinid,
					]);
				}

				$app['db']->commit();
				$app['session']->set('skin', $skinid);

			}catch(\PDOException $e) {
				die("Something went wrong");
			}
		}

		function getSkin(Request $r, Application $app) {
			$user = $r->get('username');
			$query = $app['db']->prepare("SELECT skin FROM skins WHERE user LIKE BINARY :USERNAME AND active = 1");
			$query->execute([
				"USERNAME" => $user,
			]);

			$result = $query->fetch(\PDO::FETCH_ASSOC);

			$file = $result['skin'];

			if($file == "")
				return $app->sendFile("skins/steve.png");
			else 
				return $app->sendFile("skins/$file.png");
		}
	}
?>