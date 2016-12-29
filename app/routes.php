<?php 
	use Alen\MainController;

	$app->get('/', "Alen\MainController::indexPage");
	$app->get('/signup', "Alen\MainController::signupPage");
	$app->get('/validate/{email}/{token}', "Alen\MainController::validateProcess");
	$app->post('/signup', 'Alen\MainController::signupProcess');

?>