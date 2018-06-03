<?php
/**
 * Exchange userpoints
 * Transfer userpoints to the account of another site member.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

$subject = $vars['item']->getSubjectEntity();
$object = $vars['item']->getObjectEntity();

$subject_icon = elgg_view_entity_icon($subject, 'tiny');
$object_icon = elgg_view_entity_icon($object, 'tiny');

echo elgg_view('river/elements/layout', [
	'item' => $vars['item'],
	'attachments' => $subject_icon . elgg_view_icon('arrow-right') . $object_icon,
]);
