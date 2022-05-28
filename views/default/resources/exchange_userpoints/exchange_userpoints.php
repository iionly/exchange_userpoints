<?php
/**
 * Exchange userpoints
 * Transfer userpoints to the account of another site member.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

elgg_push_breadcrumb(elgg_echo('exchange_userpoints:menu'), 'exchange_userpoints/exchange_userpoints');
$title = elgg_echo('exchange_userpoints:title');
elgg_push_breadcrumb($title);

// Add the form
$form_vars = [
	'action' => 'action/exchange_userpoints/exchange_userpoints',
	'class' => 'elgg-form-settings',
];
$content = elgg_view_form('exchange_userpoints/exchange_userpoints', $form_vars);

// Format page
$body = elgg_view_layout('default', [
	'content' => $content,
	'filter' => '',
	'title' => $title,
]);

// Draw it
echo elgg_view_page($title, $body);
