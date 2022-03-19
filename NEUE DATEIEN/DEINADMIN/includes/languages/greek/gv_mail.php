<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_mail.php 634 2019-06-16 17:39:16Z webchills $
 */

require 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAME . ' an Kunden versenden');

define('TEXT_CUSTOMER', 'Kunde:');
define('TEXT_SUBJECT', 'Betreff:');
define('TEXT_FROM', 'Absender:');
define('TEXT_TO', 'E-Mail an:');
define('TEXT_AMOUNT', 'Betrag');
define('TEXT_MESSAGE', 'Nur-Text <br />Nachricht:');
define('TEXT_RICH_TEXT_MESSAGE', 'Rich-Text <br />Nachricht:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Verwenden Sie dieses Feld, um eine einzelne E-Mail zu senden, ansonsten verwenden Sie das Drodown oben</span>');
define('TEXT_SELECT_CUSTOMER', 'Kunde wählen');
define('TEXT_ALL_CUSTOMERS', 'Alle Kunden');
define('TEXT_NEWSLETTER_CUSTOMERS', 'An alle Newsletter Abonnementen');

define('NOTICE_EMAIL_SENT_TO', 'HINWEIS: E-Mail wurde versendet an: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'FEHLER: Es wurde kein Kunde ausgewählt.');
define('ERROR_NO_AMOUNT_SELECTED', 'FEHLER: Kein Betrag gewählt.');
define('ERROR_NO_SUBJECT', 'FEHLER: Es wurde kein Betreff angegeben.');
define('ERROR_GV_AMOUNT', 'Bitte den Wert ohne Symbole angeben. Beispiel: 25.00');

define('TEXT_GV_ANNOUNCE', '<font color="#0000ff">Wir freuen uns, Ihnen einen ' . TEXT_GV_NAME . ' schenken zu können.</font>');
define('TEXT_GV_WORTH', 'Der ' . TEXT_GV_NAME . ' hat einen Wert von ');
define('TEXT_TO_REDEEM', 'Um den ' . TEXT_GV_NAME . ', einzulösen, klicken Sie bitte auf nachstehenden Link.');
define('TEXT_WHICH_IS', ' notieren Sie sich hierfür bitte diese Gutscheinnummer: ');
define('TEXT_IN_CASE', ' Klicken Sie nun auf den nachstehenden Link: ');
define('TEXT_OR_VISIT', 'Alternativ dazu können Sie uns auf ');
define('TEXT_ENTER_CODE', ' besuchen und tragen die Gutscheinnummer während Ihres Bestellvorgangs ein.');
define('TEXT_CLICK_TO_REDEEM', 'Zum Einlösen bitte hier klicken');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Sie haben einen ' . TEXT_GV_NAME . ' erworben. Aus Sicherheitsgründen wurde der Betrag des ' . TEXT_GV_NAME . 's nicht sofort freigegeben. Der Shop Inhaber hat diesen Betrag nun freigegeben.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'Der Betrag des  ' . TEXT_GV_NAME . 's war %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Sie können nun unseren Shop besuchen, sich anmelden und den Betrag des   ' . TEXT_GV_NAME . 's weiterverschicken.');

define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");