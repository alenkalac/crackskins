<?php 
	use Alen\MainController;

	$app->get('/', "Alen\MainController::indexPage");
	$app->get('/signup', "Alen\MainController::signupPage");
	$app->get('/login', "Alen\MainController::signupPage");
	$app->get('/validate/{email}/{token}', "Alen\MainController::validateProcess");
	$app->get('/logout', "Alen\MainController::logoutProcess");
	$app->get('/profile', "Alen\MainController::profilePage");
	$app->get('/skin/{username}', "Alen\SkinController::getSkin");
	$app->get('/skin/render/{skinid}', "Alen\SkinController::getSkinRender");

	$app->post("/login", "Alen\MainController::loginProcess");
	$app->post('/signup', "Alen\MainController::signupProcess");


	$app->get('/skinchange/{skinid}', "Alen\SkinController::changeSkinProcess2");
	$app->get('/skinchange/delete/{skinid}', "Alen\SkinController::deleteSkinProcess");
	$app->post('/skinchange', "Alen\SkinController::changeSkinProcess");
?>