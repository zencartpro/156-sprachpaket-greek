<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 
 * @version $Id: password_forgotten.php 627 2010-08-30 15:05:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Είσοδος');
define('NAVBAR_TITLE_2', 'Ξέχασα τον Κωδικό');
define('HEADING_TITLE', 'Ξέχασα τον Κωδικό');
define('TEXT_MAIN', 'Εισάγετε την διεύθυνση E-Mail και θα σας στείλουμε τον νέο σας Κωδικό.');
define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Σφάλμα: Η διεύθυνση E-Mail δεν βρέθηκε παρακαλώ δοκιμάστε ξανά.');
define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Νέος Κωδικός');
define('EMAIL_PASSWORD_REMINDER_BODY','Ένας νέος Κωδικός ζητήθηκε από ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Ο νέος σας Κωδικός για το \'' . STORE_NAME . '\' είναι:' . "\n\n" . '   %s' . "\n\n");
define('SUCCESS_PASSWORD_SENT', 'Επιτυχία! Ένας νέος Κωδικός στάλθηκε στο E-Mail σας.');
