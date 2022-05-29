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
	'river:user:exchange_userpoints' => "%s hat Benutzerpunkte an %s übertragen.",

	'exchange_userpoints:pointfail' => "Bei der Übertragung der Benutzerpunkte ist ein Fehler bei der Anwendung der Userpoints API aufgetreten!",
	'exchange_userpoints:recipient_error' => "Die Empfänger-Auswahl war ungültig.",
	'exchange_userpoints:self_error' => "Punkte an Dich selbst zu übertragen macht nun wirklich nicht viel Sinn...",
	'exchange_userpoints:not_enough_points' => "Die gewählte Anzahl zu übertragender Punkte ist höher als Deine gegenwärtige Anzahl an Benutzerpunkten.",
	'exchange_userpoints:pointsuccess' => "%s Benutzerpunkt(e) wurden an %s übertragen.",
	'exchange_userpoints:no_description' => "%s hat keinen Begleittext angefügt.",

	'exchange_userpoints:menu' => "Benutzerpunkte-Übertragung",
	'exchange_userpoints:title' => "Übertragung von Benutzerpunkten",
	'exchange_userpoints:proceed' => "Punkte übertragen",
	'exchange_userpoints:zeropoints' => "Du hast wohl derzeit keine Benutzerpunkte. Daher kannst Du zu diesem Zeitpunkt auch keine Punkte an ein anderes Mitglied der Community übertragen. Bitte versuche es zu einem späteren Zeitpunkt erneut, wenn Du ein paar Benutzerpunkte verdient hast.",
	'exchange_userpoints:overview' => "Im folgenden kannst Du ein Mitglied auswählen, dem Du einige Deiner Benutzerpunkte übertragen willst. Wähle das Mitglied und die Anzahl der Punkte aus. Wenn Du willst, kannst Du auch noch einen Begleittext eingeben, der in der Benachrichtigung, die das Mitglied erhält, enthalten sein wird.",
	'exchange_userpoints:recipient' => "Wem möchtest Du die Benutzerpunkte übertragen?",
	'exchange_userpoints:amount' => "Du hast derzeit %s Benutzerpunkte. Wie viele davon möchtest Du dem Mitglied übertragen?",
	'exchange_userpoints:description' => "Begleittext (optional)",

	'exchange_userpoints:mail:subject' => "Du hast Benutzerpunkte erhalten!",
	'exchange_userpoints:mail:body' => "Du hast %s Benutzerpunkt(e) von %s erhalten:

%s
",
];