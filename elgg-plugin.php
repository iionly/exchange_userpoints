<?php

return [
	'plugin' => [
		'name' => 'Exchange Userpoints',
		'version' => '4.0.0',
		'dependencies' => [
			'elggx_userpoints' => [],
		],
	],
	'hooks' => [
		'register' => [
			'menu:site' => [
				'ExchangeUserpointsMenus::ExchangeUserpointsSitemenu' => [],
			],
		],
	],
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
