<?php 

	$SANDBOX = true;

	if($SANDBOX)
		$db_config = array(
			'db.options' 	=> [
				'driver' 	=> 'pdo_mysql',
				'host' 		=> 'localhost',
				'dbname' 	=> 'crackskins',
				'user' 		=> 'root',
				'password' 	=> '',
				'charset' 	=> 'utf8',
				'port'		=> '3307'
			]
		);
	else 
		$db_config = array(
			'db.options' 	=> [
				'driver' 	=> 'pdo_mysql',
				'host' 		=> '',
				'dbname' 	=> '',
				'user' 		=> '',
				'password' 	=> '',
				'charset' 	=> 'utf8',
				'port'		=> '3306'
			]
		);
?>