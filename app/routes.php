<?php 
	use Alen\MainController;

	$app->get('/', "Alen\MainController::indexPage");
	$app->get('/signup', "Alen\MainController::signupPage");
	$app->get('/login', "Alen\MainController::signupPage");
	$app->get('/validate/{email}/{token}', "Alen\MainController::validateProcess");
	$app->get('/logout', "Alen\MainController::logoutProcess");
	$app->get('/profile', "Alen\MainController::profilePage");
	$app->get('/skin/{username}', "Alen\SkinController::getSkin");
	$app->get('/skin/render/{username}', "Alen\SkinController::getSkinRender");

	$app->post("/login", "Alen\MainController::loginProcess");
	$app->post('/signup', "Alen\MainController::signupProcess");
?>