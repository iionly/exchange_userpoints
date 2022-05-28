<?php

return [
	'bootstrap' => \ExchangeUserpointsBootstrap::class,
	'actions' => [
		'exchange_userpoints/exchange_userpoints' => ['access' => 'logged_in'],
	],
	'routes' => [
		'exchange_userpoints' => [
			'path' => '/exchange_userpoints/exchange_userpoints',
			'resource' => 'exchange_userpoints/exchange_userpoints',
			'middleware' => [
				\Elgg\Router\Middleware\Gatekeeper::class,
			],
			'required_plugins' => [
				'elggx_userpoints',
			],
		],
	],
];
