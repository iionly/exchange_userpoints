<?php

class ExchangeUserpointsMenus {

	/**
	 * Add a menu item to the site menu
	 *
	 * @param \Elgg\Hook $hook 'register', 'menu:site'
	 *
	 * @return void|MenuItems
	 */
	public static function ExchangeUserpointsSitemenu(\Elgg\Hook $hook) {
		if (!elgg_is_logged_in()) {
			return;
		}

		$return_value = $hook->getValue();
		$return_value[] = \ElggMenuItem::factory([
			'name' => 'exchange_userpoints_menu',
			'text' => elgg_echo('exchange_userpoints:menu'),
			'href' => 'exchange_userpoints/exchange_userpoints',
			'icon' => 'exchange',
		]);
		
		return $return_value;
	}
}