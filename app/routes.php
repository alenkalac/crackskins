<?php 
	use Alen\MainController;

	$app->get('/', "Alen\MainController::indexPage");
	$app->get('/signup', "Alen\MainController::signupPage");

	$app->post('/signup', 'Alen\MainController::signupProcess')

?>