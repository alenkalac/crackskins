<?php 
	require_once __DIR__ . "/../vendor/autoload.php";
	require_once __DIR__ . "/config.php";

	$templates = __DIR__ . "/../templates";

	$app = new Silex\Application();

	$app['debug'] = true;

	$app->register(new Silex\Provider\TwigServiceProvider(), [
		'twig.path' => $templates,
		'twig.options' => [
			'cache' => $templates . '/cache',
		]
	]);

	$app->register(new Silex\Provider\DoctrineServiceProvider(), $db_config);
	$app->register(new Silex\Provider\SessionServiceProvider());



?>