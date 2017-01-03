<?php 
	namespace Alen;

	use Silex\Application;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\RedirectResponse;

	include_once realpath(dirname(__FILE__) . '/skinrender.php');

	class SkinController {

		function getSkinRender(Request $r, Application $app) {
			$user = $r->get('username');
			$image = new \SkinRender($user);
			return new Response($image, 200, $image);
		}

		function getSkin(Request $r, Application $app) {
			$user = $r->get('username');
			$image = new \SkinRender($user);
			return new Response($image, 200, $image);
		}

	}

?>