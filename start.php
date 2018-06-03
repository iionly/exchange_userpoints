<?php
/**
 * Exchange userpoints
 * Transfer userpoints to the account of another site member.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

elgg_register_event_handler('init', 'system', 'exchange_userpoints_init');

/*
 * Initialize Plugin
 */
function exchange_userpoints_init() {
	// Show in Menu
	if (elgg_is_logged_in()) {
		elgg_register_menu_item('site', [
			'name' => 'exchange_userpoints_menu',
			'text' => elgg_echo('exchange_userpoints:menu'),
			'href' => 'exchange_userpoints/exchange_userpoints',
		]);
	}

	// Routing of urls
	elgg_register_page_handler('exchange_userpoints', 'exchange_userpoints_page_handler');
	
	// Actions
	elgg_register_action('exchange_userpoints/exchange_userpoints', dirname(__FILE__) . '/actions/exchange_userpoints.php', 'logged_in');
}


function exchange_userpoints_page_handler($page) {
	if (!isset($page[0])) {
		$page[0] = 'exchange_userpoints';
	}

	$page_type = $page[0];
	switch ($page_type) {
		case 'exchange_userpoints':
			echo elgg_view_resource('exchange_userpoints/exchange_userpoints', []);
			break;
		default:
			return false;
	}

	return true;
}
