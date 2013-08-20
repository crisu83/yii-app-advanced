<?php
// development environment configuration
return array(
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'yii',
			'ipFilters' => array('127.0.0.1', '10.0.2.2'/* Vagrant */, '::1'/* WAMP */),
		),
	),
	'components' => array(
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=kidmemo',
			'username' => 'root',
			'password' => 'kidmemo',
			'charset' => 'utf8',
			'enableProfiling' => true,
			'enableParamLogging' => true,
		),
	),
);
