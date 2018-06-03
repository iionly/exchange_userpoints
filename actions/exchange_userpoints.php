<?php
/**
 * Exchange userpoints
 * Transfer userpoints to the account of another site member.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

// Get the form input
$recipient_guid = (array) get_input('recipient_guid');
$recipient_guid = (int) elgg_extract(0, $recipient_guid);
$points = (int) get_input('points');
$description = (string) get_input('description');

// Get user who wants to exchange userpoints
$user = elgg_get_logged_in_user_entity();

// Get recipient user
$recipient = get_entity($recipient_guid);

if (!($recipient instanceof ElggUser)) {
	return elgg_error_response(elgg_echo('exchange_userpoints:recipient_error'));
}

if ($recipient_guid == $user->getGUID()) {
	return elgg_error_response(elgg_echo('exchange_userpoints:self_error'));
}

// Fetch available number of userpoints
$pTemp = (array) elggx_userpoints_get($user->getGUID());
$currentpoints = (int) $pTemp['approved'];

if (($points < 1) || ($currentpoints < $points)) {
	return elgg_error_response(elgg_echo('exchange_userpoints:not_enough_points'));
}

// Substract points from user who wants to give the points
if (elggx_userpoints_subtract($user->getGUID(), $points, $description)) {
	// Add points to the user who receives the points
	$access = elgg_set_ignore_access(true);
	$success = elggx_userpoints_add($recipient_guid, $points, $description);
	elgg_set_ignore_access($access);

	if ($success) {
		if ($description == '') {
			$description = elgg_echo('exchange_userpoints:no_description', [$user->name]);
		}
		notify_user($recipient_guid,
			$user->getGUID(),
			elgg_echo('exchange_userpoints:mail:subject'),
			elgg_echo('exchange_userpoints:mail:body', [$points, $user->name, $description])
		);
		elgg_create_river_item([
			'view' => 'river/object/exchange_userpoints/exchange',
			'action_type' => 'exchange_userpoints',
			'subject_guid' => $user->getGUID(),
			'object_guid' => $recipient_guid,
		]);
	} else {
		return elgg_error_response(elgg_echo('exchange_userpoints:pointfail'));
	}
} else {
	return elgg_error_response(elgg_echo('exchange_userpoints:pointfail'));
}

return elgg_ok_response('', elgg_echo('exchange_userpoints:pointsuccess', [$points, $recipient->name]), REFERER);
