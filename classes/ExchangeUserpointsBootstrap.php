<?php

use Elgg\DefaultPluginBootstrap;

class ExchangeUserpointsBootstrap extends DefaultPluginBootstrap {

	public function init() {
		// Show in Menu
		if (elgg_is_logged_in()) {
			elgg_register_menu_item('site', [
				'name' => 'exchange_userpoints_menu',
				'text' => elgg_echo('exchange_userpoints:menu'),
				'href' => 'exchange_userpoints/exchange_userpoints',
			]);
		}
	}
}