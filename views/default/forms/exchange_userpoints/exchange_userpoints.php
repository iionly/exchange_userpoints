<?php
/**
 * Exchange userpoints
 * Transfer userpoints to the account of another site member.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

$currentpoints = 0;
$pTemp = (array) elggx_userpoints_get(elgg_get_logged_in_user_guid());
$currentpoints = (int) $pTemp['approved'];

if ($currentpoints > 0) {
	$max = 1;
	if ($currentpoints >= 100) {
		$max = 100;
	} else if ($currentpoints >= 50) {
		$max = 50;
	} else if ($currentpoints >= 20) {
		$max = 20;
	} else if ($currentpoints >= 10) {
		$max = 10;
	} else if ($currentpoints >= 5) {
		$max = 5;
	} else if ($currentpoints >= 2) {
		$max = 2;
	}

	echo elgg_view('output/longtext', [
		'value' => elgg_echo('exchange_userpoints:overview'),
		'class' => 'mbm',
	]);

	echo  elgg_view_field([
		'#type' => 'userpicker',
		'#label' => elgg_echo('exchange_userpoints:recipient'),
		'name' => 'recipient_guid',
		'limit' => 1,
		'required' => true,
	]);

	echo  elgg_view_field([
		'#type' => 'number',
		'#label' => elgg_echo('exchange_userpoints:amount', [$currentpoints]),
		'name' => 'points',
		'min' => 1,
		'max' => $max,
		'step' => 1,
		'required' => true,
	]);

	echo  elgg_view_field([
		'#type' => 'text',
		'#label' => elgg_echo('exchange_userpoints:description'),
		'name' => 'description',
		'value' => '',
	]);

	$footer = elgg_view_field([
		'#type' => 'submit',
		'value' => elgg_echo('exchange_userpoints:proceed'),
	]);

	elgg_set_form_footer($footer);

} else {
	echo elgg_view('output/longtext', [
		'value' => elgg_echo('exchange_userpoints:zeropoints'),
	]);
}
