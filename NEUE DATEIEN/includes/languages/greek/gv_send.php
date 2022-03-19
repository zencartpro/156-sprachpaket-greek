<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 
 * @version $Id: gv_send.php 629 2012-02-22 09:05:14Z webchills $
 */

define('HEADING_TITLE', 'Αποστολή ' . TEXT_GV_NAME . 'ς');
define('HEADING_TITLE_CONFIRM_SEND', 'Αποστολή επιβεβαίωσης' . TEXT_GV_NAME . 'ς');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Απεστάλη');
define('NAVBAR_TITLE', 'Αποστολή ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Μήνυμα από ' . STORE_NAME);
define('HEADING_TEXT','<br />Παρακαλούμε εισάγετε το όνομα, την δι/νση ηλεκτρονικού ταχυδρομείου και το ποσό της ' . TEXT_GV_NAME . 'ς που επιθυμείτε να στείλετε. Για περισσότερες πληροφορίες παρακαλούμε επισκεφθείτε <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '</a>.<br />');
define('ENTRY_NAME', 'Όνομα παραλήπτη:');
define('ENTRY_EMAIL', 'e-mail παραλήπτη:');
define('ENTRY_MESSAGE', 'Το μήνυμα σας:');
define('ENTRY_AMOUNT', 'Ποσό:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Δεν λάβαμε το όνομα του παραλήπτη. Παρακαλούμε συμπληρώστε το παρακάτω. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Το ποσό της' . TEXT_GV_NAME . 'ς δεν φαίνεται να είναι σωστό. Παρακαλούμε δοκιμάστε ξανά.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Είναι η δι/νση ηλεκτρονικού ταχυδρομείου σωστή? Παρακαλούμε δοκιμάστε ξανά.');
define('MAIN_MESSAGE', 'Στέλνετε μία ' . TEXT_GV_NAME . ' αξίας %s στον/στην %s,  του οποίου η δι/νση ηλεκτρονικού ταχυδρομείου είναι %s. Εάν αυτά τα στοιχεία δεν είναι σωστά, μπορείτε να επεξεργαστείτε το μήνυμα σας κάνοντας κλικ στο κουμπί <strong>επεξεργασία</strong>.<br /><br />Το μήνυμα που στέλνετε είναι:<br /><br />');
define('SECONDARY_MESSAGE', 'Αγαπητέ %s,<br /><br />' . 'Σας έχει αποσταλεί μία ' . TEXT_GV_NAME . ' αξίας %s από τον %s');
define('PERSONAL_MESSAGE', 'Ο/Η %s λέει:');
define('TEXT_SUCCESS', 'Συγχαρητήρια, η ' . TEXT_GV_NAME . ' έχει σταλεί.');
define('TEXT_SEND_ANOTHER', 'Θέλετε να στείλετε κι άλλη ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE',  'Το ποσό της Δωροεπιταγής είναι');
define('EMAIL_GV_TEXT_SUBJECT', 'Ένα δώρο από %s');
define('EMAIL_SEPARATOR', '');
define('EMAIL_GV_TEXT_HEADER', 'Συγχαρητήρια, λάβατε μία ' . TEXT_GV_NAME . ' αξίας %s');
define('EMAIL_GV_FROM', 'Αυτή η ' . TEXT_GV_NAME . ' σας έχει σταλεί από %s');
define('EMAIL_GV_MESSAGE', '<br />μαζί με ένα μήνυμα που λέει:<br />');
define('EMAIL_GV_SEND_TO', 'Γεια, %s');
define('EMAIL_GV_REDEEM', 'Για να εξαργυρώσεις την ' . TEXT_GV_NAME . ', κάνε κλικ στον παρακάτω σύνδεσμο. Παρακαλούμε επίσης σημείωσε κάπου το ' . TEXT_GV_REDEEM . ': %s  για περίπτωση προβλήματος.');
define('EMAIL_GV_LINK', 'Για εξαργύρωση κάνε κλικ εδώ');
define('EMAIL_GV_VISIT', ' ή επισκέψου ');
define('EMAIL_GV_ENTER', ' και συμπλήρωσε τον ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'Εάν έχεις πρόβλημα να εξαργυρώσεις την ' . TEXT_GV_NAME . ' χρησιμοποιώντας τον αυτοματοποιημένο σύνδεσμο παρακάτω, ' . "\n" .
                                'μπορείς επίσης να εισάγεις τον ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' κατά την διάρκεια της διαδικασίας του ταμείου στο κατάστημα.');
define('EMAIL_GV_SHOP_FOOTER', 'Σας Ευχαριστούμε!'. "\n" .'
Με εκτίμηση' . "\n".'
Η ομάδα του ' . STORE_NAME . ' ');
