<?php
/**
* @package languageDefines
* @copyright Copyright 2003-2016 Zen Cart Development Team
* @copyright Portions Copyright 2003 osCommerce
* @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
* @version $Id: email_extras.php 630 2016-03-05 10:05:14Z webchills $
*/

define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
define ('EMAIL_LOGO_WIDTH', '600');
define ('EMAIL_LOGO_HEIGHT', '70');
define ('EMAIL_LOGO_ALT_TITLE_TEXT', '');

// -----
// If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
// set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
//
define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
  define('OFFICE_FROM','<strong>Από:</strong>');
  define('OFFICE_EMAIL','<strong>E-Mail:</strong>');
  
  define('OFFICE_SENT_TO','<strong>Αποστολή σε:</strong>');
  define('OFFICE_EMAIL_TO','<strong>Σε E-Mail:</strong>');
  
  define('OFFICE_USE','<strong>Μόνο για εσωτερική χρήση:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Όνομα χρήστη:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>E-Mail χρήστη:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Τηλέφωνο:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>Διεύθυνση IP:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Διεύθυνση υπολογιστή:</strong>');
  define('OFFICE_DATE_TIME','<strong>Ημερομηνία και Ώρα:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

// email disclaimer
  define('EMAIL_DISCLAIMER', '');
  define('EMAIL_SPAM_DISCLAIMER', '-');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>');
  define('TEXT_UNSUBSCRIBE', "\n\n" . 'Για να απεγγραφείτε από το newsletter, απλά κάντε κλικ στον παρακάτω σύνδεσμο: ' . "\n");

// email advisory for all emails customer generate -  and GV send
define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>ΣΗΜΑΝΤΙΚΟ:</strong> Για λόγους ασφάλειας και για την προστασία σας, όλα τα E-Mails που στέλνονται μέσω αυτού του ιστοχώρου καταγράφονται.<br />Εάν έχετε οποιεσδήποτε απορίες, παρακαλούμε στείλτε ένα μήνυμα στο: ' . STORE_OWNER_EMAIL_ADDRESS);

// email advisory included warning for all emails customer generate - and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Αυτό το κείμενο περιλαμβάνεται σε όλα τα μηνύματα που στέλνονται από αυτόν τον ιστοχώρο:</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[ΝΕΟΣ ΛΟΓΑΡΙΑΣΜΟΣ]');
  define('SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_SUBJECT', '[ΠΡΟΤΕΙΝΕΤΕ]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[ΚΟΥΠΟΝΙ ΔΩΡΟΥ]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[ΝΕΑ ΠΑΡΑΓΓΕΛΙΑ]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[ΠΑΡΑΓΓΕΛΙΑ ME ΠΙΣΤΩΤΙΚΗ ΚΑΡΤΑ EXTRA INFO] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Προειδοποίηση: Χαμηλό στοκ');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Αναφορά χαμηλού στοκ: ');
