<?php
/**
 * Exchange userpoints
 * Transfer userpoints to the account of another site member.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

$item = elgg_extract('item', $vars);
if (!($item instanceof ElggRiverItem)) {
	return;
}

$subject = $item->getSubjectEntity();
if (!($subject instanceof ElggUser)) {
	return;
}

$object = $item->getObjectEntity();
if (!($object instanceof ElggUser)) {
	return;
}

$subject_icon = elgg_view_entity_icon($subject, 'tiny');
$object_icon = elgg_view_entity_icon($object, 'tiny');

$vars['attachments'] = $subject_icon . elgg_view_icon('arrow-right') . $object_icon;

echo elgg_view('river/elements/layout', $vars);
