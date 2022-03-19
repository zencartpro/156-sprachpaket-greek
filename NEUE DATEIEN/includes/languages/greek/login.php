<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 
 * @version $Id: login.php 628 2011-11-28 15:05:14Z webchills $
 */

define('NAVBAR_TITLE','Είσοδος');
define('HEADING_TITLE','Καλώς ήρθατε, Παρακαλώ Συνδεθείτε.');
define('HEADING_NEW_CUSTOMER','Νέος πελάτης? Παρακαλώ δημιουργήστε ένα προφίλ εισόδου');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Νέοι πελάτες');

define('TEXT_NEW_CUSTOMER_INTRODUCTION','Ένα προφίλ πελάτη στο ' . STORE_NAME . ' σας επιτρέπει να αγοράζετε ταχύτερα, να παρακολουθείτε την κατάσταση των παραγγελιών σας και να κάνετε επισκόπηση των παλιών σας παραγγελιών.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Έχετε λογαριασμό PayPal? Θέλετε να πληρώνετε γρήγορα με τη χρήση πιστωτικής κάρτας? Χρησιμοποιήστε το κουμπί PayPal παρακάτω για να χρησιμοποιήσετε την επιλογή "Paypal Express".');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Ή</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Ένα προφίλ πελάτη στο ' . STORE_NAME . ' σας επιτρέπει να αγοράζετε ταχύτερα, να παρακολουθείτε την κατάσταση των παραγγελιών σας, να κάνετε επισκόπηση των παλιών σας παραγγελιών και να εκμεταλεύεστε τα υπόλοιπα προνόμια που δίνουμε στα μέλη.');
define('HEADING_RETURNING_CUSTOMER','Πελάτες που επιστρέφετε στο κατάστημα: Παρακαλώ συνδεθείτε');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Πελάτες που επιστρέφουν στο κατάστημα');
define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Για να συνεχίσετε, παρακαλώ συνδεθείτε');
define('TEXT_PASSWORD_FORGOTTEN','Ξεχάσατε τον Κωδικό σας?');
define('TEXT_LOGIN_ERROR','Σφάλμα: Αυτό το E-Mail και/ή αυτός ο Κωδικός δεν υπάρχει στα αρχεία μας.');
define('TEXT_VISITORS_CART','<strong class="note">Σημείωση:</strong> Τα περιεχόμενα στο Καλάθι σας σαν Επισκέπτης μόλις συνδεθείτε θα μεταφερθούν στα περιεχόμενα του Καλαθιού σαν Μέλος. <a href="javascript:session_win();">[Βοήθεια]</a>');
define('TABLE_HEADING_PRIVACY_CONDITIONS','Προστασία Προσωπικών Δεδομένων');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION','Παρακαλώ δηλώστε οτι συμφωνείτε με τους Όρους Προστασίας Προσωπικών Δεδομένων. Μπορείτε <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>ΕΔΩ</u></a> να ενημερωθείτε.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM','Έχω διαβάσει και συμφωνώ με τους Όρους Προστασίας Προσωπικών Δεδομένων.');
define('ERROR_SECURITY_ERROR', 'Υπήρξε ένα σφάλμα ασφάλειας κατά τη διαδικασία της εισόδου.');
define('TEXT_LOGIN_BANNED', 'ΣΦΑΛΜΑ: Άρνηση Πρόσβασης.');
