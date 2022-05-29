<?php
/**
 * Exchange userpoints
 * Transfer userpoints to the account of another site member.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

return [
	'river:user:exchange_userpoints' => "%s gave userpoints to %s.",

	'exchange_userpoints:pointfail' => "An error occured within the userpoints API!",
	'exchange_userpoints:recipient_error' => "The recipient selection was invalid.",
	'exchange_userpoints:self_error' => "What's the point in transfering userpoints to yourself?",
	'exchange_userpoints:not_enough_points' => "The number of points seleted is higher than your current number of userpoints.",
	'exchange_userpoints:pointsuccess' => "%s userpoint(s) successfully given to %s.",
	'exchange_userpoints:no_description' => '%s hasn\'t added an accompanying text.',

	'exchange_userpoints:menu' => "Exchange userpoints",
	'exchange_userpoints:title' => "Exchange userpoints",
	'exchange_userpoints:proceed' => "Exchange points",
	'exchange_userpoints:zeropoints' => "It seems you currently have no userpoints. This means you can't give any userpoints to another member right now. Please come back later when you have earned some userpoints.",
	'exchange_userpoints:overview' => "In the following you can select a site member who you want to give some of your userpoints to. Select the member and the number of points. Optionally, you can add a description that will be included in the notification the member will receive.",
	'exchange_userpoints:recipient' => "Who do you want to give the userpoints to? ",
	'exchange_userpoints:amount' => "You currently have %s userpoints. How many points do you want to give to the member? ",
	'exchange_userpoints:description' => "Description (optional)",

	'exchange_userpoints:mail:subject' => "You have received userpoints!",
	'exchange_userpoints:mail:body' => "You have received %s userpoint(s) from %s:

%s
",
];