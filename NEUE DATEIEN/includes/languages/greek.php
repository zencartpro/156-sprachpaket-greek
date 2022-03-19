<?php
/**
 * Zen Cart German Specific
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: greek.php 2019-12-22 10:21:57Z webchills $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart-pro.at" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
// @setlocale(LC_TIME, 'el_GR.ISO_8859-7'); geändert von MaleBorg
@setlocale(LC_TIME, 'el_GR.UTF-8', 'el_GR.ISO_8859-7','el_GR@euro', 'el_GR', 'greek');
define('DATE_FORMAT_SHORT', '%d.%m %Y'); // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
function zen_date_raw($date, $reverse = false){
     if ($reverse){
         return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
         }else{
        // edit by cyaneo for german Date support - thx to hugo13
        // return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
         }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag

if (FACEBOOK_OPEN_GRAPH_STATUS == "true") {
define('HTML_PARAMS','dir="ltr" lang="el" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"');

} else {
define('HTML_PARAMS','dir="ltr" lang="el"');
}

// charset for web pages and emails
define('CHARSET', 'utf-8');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'Εμφανίσεις από');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
define('TEXT_GV_NAME','Δωροεπιταγή');
define('TEXT_GV_NAMES','Δωροεπιταγές');

// used for redeem code, redemption code, or redemption id
define('TEXT_GV_REDEEM','Κωδικός:');

// used for redeem code sidebox
define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
define('BOX_GV_REDEEM_INFO', 'Κωδικός Δωροεπιταγής: ');

// text for gender
define('MALE', 'Κος.');
define('FEMALE', 'Κα.');
define('MALE_ADDRESS', 'Κος.');
define('FEMALE_ADDRESS', 'Κα.');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

//text for sidebox heading links
define('BOX_HEADING_LINKS', ' [περισσότερα]');

// categories box text in sideboxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Κατηγορίες');

// manufacturers box text in sideboxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Κατασκευαστές');

// whats_new box text in sideboxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Νέα προϊόντα');
define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Νέα προϊόντα ...');

define('TEXT_NO_FEATURED_PRODUCTS', 'Περισσότερα προτεινόμενα προϊόντα θα προστεθούν σύντομα. Παρακαλώ ελέγξτε αργότερα.');
define('BOX_HEADING_FEATURED_PRODUCTS', 'Προτεινόμενα');
define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Προτεινόμενα Προϊόντα ...');

define('TEXT_NO_ALL_PRODUCTS', 'Περισσότερα προϊόντα θα προστεθούν σύντομα. Παρακαλώ ελέγξτε αργότερα.');
define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Όλα τα προϊόντα ...');

// quick_find box text in sideboxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Αναζήτηση');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Προχωρημένη αναζήτηση');
define('SEARCH_DEFAULT_TEXT', 'Λέξη(εις) Αναζήτησης');

// specials box text in sideboxes/specials.php
define('BOX_HEADING_SPECIALS', 'Προσφορές');
define('CATEGORIES_BOX_HEADING_SPECIALS','Προσφορές ...');

// reviews box text in sideboxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Σχόλια');
define('BOX_REVIEWS_WRITE_REVIEW', 'Γράψτε ένα Σχόλιo.');
define('BOX_REVIEWS_NO_REVIEWS', 'Δεν υπάρχουν Σχόλια προς το παρόν.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s από 5 Αστέρια!');

// shopping_cart box text in sideboxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'Καλάθι');
define('BOX_SHOPPING_CART_EMPTY', 'Το καλάθι σας είναι άδειο.');
define('BOX_SHOPPING_CART_DIVIDER', '&nbsp;x&nbsp;');

// order_history box text in sideboxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Προϊόντα σε παραγγελία');

// best_sellers box text in sideboxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Δημοφιλή προϊόντα');
define('BOX_HEADING_BESTSELLERS_IN', 'Δημοφιλή προϊόντα σε<br /> ');

// notifications box text in sideboxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Ειδοποιήσεις');
define('BOX_NOTIFICATIONS_NOTIFY', 'Ειδοποίηση όταν ανανεωθεί το <strong>%s</strong>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Να μην ειδοποιηθώ όταν ανανεωθεί το <strong>%s</strong>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Πληροφορίες Κατασκευαστή');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Αρχική Σελίδα');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Άλλα Προϊόντα');

// languages box text in sideboxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Γλώσσες');

// currencies box text in sideboxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Νομίσματα');

// information box text in sideboxes/information.php
define('BOX_HEADING_INFORMATION', 'Πληροφορίες');
define('BOX_INFORMATION_PRIVACY', 'Προσωπικά Δεδομένα');
define('BOX_INFORMATION_CONDITIONS', 'Όροι Χρήσης');
define('BOX_INFORMATION_SHIPPING', 'Αποστολές και Επιστροφές');
define('BOX_INFORMATION_WIDERRUFSRECHT', 'Υπαναχώρηση');
define('BOX_INFORMATION_ZAHLUNGSARTEN', 'Τρόποι πληρωμών');
define('BOX_INFORMATION_IMPRESSUM', 'Στοιχεία Επιχείρησης');
define('BOX_INFORMATION_CONTACT', 'Επικοινωνία');

define('BOX_INFORMATION_UNSUBSCRIBE', 'Απεγγραφή από το Newsletter');

define('BOX_INFORMATION_SITE_MAP', 'Χάρτης Ιστοχώρου');

// information box text in sideboxes/more_information.php - were TUTORIAL_
define('BOX_HEADING_MORE_INFORMATION', 'Περισσότερες πληροφορίες');
define('BOX_INFORMATION_PAGE_2', 'Σελίδα 2');
define('BOX_INFORMATION_PAGE_3', 'Σελίδα 3');
define('BOX_INFORMATION_PAGE_4', 'Σελίδα 4');


//New billing address text
define('SET_AS_PRIMARY' , 'Διεύθυνση αποστολής');
define('NEW_ADDRESS_TITLE', 'Διεύθυνση χρέωσης');

// javascript messages
define('JS_ERROR', 'Σφάλμα κατά την επεξεργασία της φόρμας.\n\n Παρακαλώ κάντε τις ακόλουθες διορθώσεις:\n\n');
define('JS_REVIEW_TEXT', '* Παρακαλώ προσθέστε μερικούς ακόμα χαρακτήρες στα σχόλια σας. Το σχόλιο πρέπει να περιέχει τουλάχιστον ' . REVIEW_TEXT_MIN_LENGTH . ' χαρακτήρες.');
define('JS_REVIEW_RATING', '* Παρακαλώ επιλέξτε μια βαθμολογία για αυτό το προϊόν.');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Παρακαλώ επιλέξτε ένα τρόπο πληρωμής για την παραγγελία σας.');
define('JS_ERROR_SUBMITTED', 'Αυτή η φόρμα έχει ήδη υποβληθεί. Παρακαλώ πατήστε \"OK\" και περιμένετε να ολοκληρωθεί η επεξεργασία.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Παρακαλώ επιλέξτε ένα τρόπο πληρωμής για την παραγγελία σας.');
define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Παρακαλώ επιβεβαιώστε ότι διαβάσατε τους Όρους Χρήσης επιλέγοντας το παρακάτω κουτάκι.');
define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Παρακαλώ επιβεβαιώστε ότι διαβάσατε τους όρους Προσωπικών Δεδομένων επιλέγοντας το παρακάτω κουτάκι.');

define('CATEGORY_COMPANY', 'Μόνο για Επιχειρήσεις / Στοιχεία Επιχείρησης');
define('CATEGORY_PERSONAL', 'Παρακαλώ συμπληρώστε τα πεδία');
define('CATEGORY_ADDRESS', 'Διεύθυνση');
define('CATEGORY_CONTACT', 'Στοιχεία επικοινωνίας');
define('CATEGORY_OPTIONS', 'Επιλογές');
define('CATEGORY_PASSWORD', 'Κωδικός  Εισόδου');
define('CATEGORY_LOGIN', 'Όνομα Εισόδου');
define('PULL_DOWN_DEFAULT', 'Χώρα');
define('PLEASE_SELECT', 'Παρακαλώ επιλέξτε ...');
define('TYPE_BELOW', 'Παρακαλώ Συμπληρώστε τα παρακάτω ...');

define('ENTRY_COMPANY', 'Όνομα Επιχ/σης:');
define('ENTRY_COMPANY_ERROR', 'Παρακαλώ εισάγετε ένα όνομα επιχ/σης.');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Προσφώνηση:');
define('ENTRY_GENDER_ERROR', 'Παρακαλώ επιλέξτε μια προσφώνηση.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Όνομα:');
define('ENTRY_FIRST_NAME_ERROR', 'Είναι το όνομα σας σωστό? Το σύστημα απαιτεί τουλάχιστον ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' χαρακτήρες για το όνομα. Παρακαλώ προσπαθήστε ξανά.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Επώνυμο:');
define('ENTRY_LAST_NAME_ERROR', 'Είναι το επώνυμο σας σωστό? Το σύστημα απαιτεί τουλάχιστον ' . ENTRY_LAST_NAME_MIN_LENGTH . ' χαρακτήρες για το επώνυμο. Παρακαλώ προσπαθήστε ξανά.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Ημερομηνία Γέννησης:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Είναι η ημερομηνία γέννησης σας σωστή? Το σύστημα απαιτεί την ημερομηνία σε αυτή τη μορφή: ΜΜ/ΜΜ/ΕΕΕΕ  (πχ 21/02/1970 - μέρα/μήνας/έτος)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (π.χ 21.02.1970)');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Είναι το E-Mail σωστό? Το σύστημα απαιτεί τουλάχιστον ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' χαρακτήρες. Παρακαλώ προσπαθήστε ξανά.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Συγνώμη, το σύστημα δεν αναγνωρίζει το E-Mail σας. Παρακαλώ προσπαθήστε ξανά.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Το σύστημα έχει ήδη καταχωρημένο αυτο το E-Mail. Παρακαλούμε προσπαθήστε να κάνετε είδοσο με αυτή τη διεύθυνση ή με μία διαφορετική διεύθυνση E-Mail.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_EMAIL_ADDRESS_CONFIRM', 'Eπιβεβαί. E-Mail:');
define('ENTRY_EMAIL_ADDRESS_CONFIRM_NOT_MATCHING', 'Η επιβεβαίωση E-Mail πρέπει να είναι ίδια με το πρώτο E-Mail.');
define('ENTRY_NICK', 'Όνομα χρήστη ομάδας συζήτησης:');
define('ENTRY_NICK_TEXT', '*');   // note to display beside nickname input field
define('ENTRY_NICK_DUPLICATE_ERROR', 'Αυτό το όνομα χρήστη χρησιμοποιείται ήδη. Παρακαλούμε επιλέξτε ένα άλλο');
define('ENTRY_NICK_LENGTH_ERROR', 'Παρακαλούμε προσπαθήστε ξανά. Το όνομα χρήστη σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_NICK_MIN_LENGTH . ' χαρακτήρες.');
define('ENTRY_STREET_ADDRESS', 'Διεύθυνση:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Η διεύθυνση σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' χαρακτήρες.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Δι/νση γραμμή 2:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Τ.Κ:');
define('ENTRY_POST_CODE_ERROR', 'Ο Τ.Κ. πρέπει να περιέχει τουλάχιστον ' . ENTRY_POSTCODE_MIN_LENGTH . ' χαρακτήρες.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Πόλη:');
define('ENTRY_CUSTOMERS_REFERRAL', 'Πως ενημερωθήκατε για το ηλεκτρονικό μας κατάστημα');
define('ENTRY_CITY_ERROR', 'Το όνομα της πόλης πρέπει να περιέχει τουλάχιστον ' . ENTRY_CITY_MIN_LENGTH . ' χαρακτήρες.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Περιοχή:');
define('ENTRY_STATE_ERROR', 'Η περιοχή σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_STATE_MIN_LENGTH . ' χαρακτήρες.');
define('ENTRY_STATE_ERROR_SELECT', 'Παρακαλώ επιλέξτε μια περιοχή από τη λίστα.');
define('ENTRY_STATE_TEXT', '*');
define('JS_STATE_SELECT', '-- Παρακαλώ επιλέξτε --');
define('ENTRY_COUNTRY', 'Χώρα:');
define('ENTRY_COUNTRY_ERROR', 'Πρέπει να επιλέξτε μια χώρα από τη λίστα με τις χώρες.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Τηλέφωνο:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Το τηλέφωνο σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_TELEPHONE_MIN_LENGTH . ' χαρακτήρες.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Εγγραφή στο Newsletter.');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Εγγραφή');
define('ENTRY_NEWSLETTER_NO', 'Απεγραφή');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Κωδικός:');
define('ENTRY_PASSWORD_ERROR', 'Για λόγους ασφαλείας ο Κωδικός σας πρέπει να αποτελείται τουλάχιστον από ' . ENTRY_PASSWORD_MIN_LENGTH . ' χαρακτήρες.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Η επιβεβαίωση κωδικού πρέπει να είναι ίδια με τον πρώτο κωδικό.');
define('ENTRY_PASSWORD_TEXT', '* (τουλάχιστον ' . ENTRY_PASSWORD_MIN_LENGTH . ' χαρακτήρες)');
define('ENTRY_PASSWORD_CONFIRMATION', 'Eπιβεβαί. κωδικού:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Τρέχον κωδικός:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Ο Κωδικός σας πρέπει να αποτελείται τουλάχιστον από ' . ENTRY_PASSWORD_MIN_LENGTH . ' χαρακτήρες.');
define('ENTRY_PASSWORD_NEW', 'Νέος κωδικός:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Για λόγους ασφαλείας ο Νέος κωδικός πρέπει να αποτελείται τουλάχιστον από ' . ENTRY_PASSWORD_MIN_LENGTH . ' χαρακτήρες.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Η επιβεβαίωση κωδικού πρέπει να είναι ίδια με τον πρώτο κωδικό.');
define('PASSWORD_HIDDEN', '--ΚΡΥΜΜΕΝΟ--');

define('FORM_REQUIRED_INFORMATION', '* Υποχρεωτικό πεδίο');
define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', '');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Προϊόντα <strong>%d</strong> έως <strong>%d</strong> (από <strong>%d</strong> )');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Παραγγελίες <strong>%d</strong> έως <strong>%d</strong> (από <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Σχόλια <strong>%d</strong> έως <strong>%d</strong> (από <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Νέα προϊόντα <strong>%d</strong> έως <strong>%d</strong> (από <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Προσφορές <strong>%d</strong> έως <strong>%d</strong> (από <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Προτεινόμενα προϊόντα <strong>%d</strong> έως <strong>%d</strong> (από <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Σύνολο προϊόντων <strong>%d</strong> έως <strong>%d</strong> (από <strong>%d</strong>)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Πρώτη σελίδα');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Προηγούμενη σελίδα');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Επόμενη σελίδα');
define('PREVNEXT_TITLE_LAST_PAGE', 'Τελευταία σελίδα');
define('PREVNEXT_TITLE_PAGE_NO', 'Σελίδα %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Προηγούμενες %d Σελίδες');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Επόμενες %d Σελίδες');
define('PREVNEXT_BUTTON_FIRST', '<<ΠΡΩΤΗ');
define('PREVNEXT_BUTTON_PREV', '[<< Προηγούμενη]');
define('PREVNEXT_BUTTON_NEXT', '[Επόμενη >>]');
define('PREVNEXT_BUTTON_LAST', 'ΤΕΛΕΥΤΑΙΑ>>');

define('TEXT_BASE_PRICE','από: ');

define('TEXT_CLICK_TO_ENLARGE', 'Μεγέθυνση');

define('TEXT_SORT_PRODUCTS', 'Ταξινόμηση προϊόντων ');
define('TEXT_DESCENDINGLY', 'φθίνουσα σειρά');
define('TEXT_ASCENDINGLY', 'αύξουσα σειρά');
define('TEXT_BY', ' από ');

define('TEXT_REVIEW_BY', 'από %s');
define('TEXT_REVIEW_WORD_COUNT', '%s λέξεις');
define('TEXT_REVIEW_RATING', 'Βαθμολογία: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Ημερομηνία προσθήκης: %s');
define('TEXT_NO_REVIEWS', 'Προς το παρόν δεν υπάρχουν σχόλια για αυτό το προϊόν.');
define('TEXT_NO_NEW_PRODUCTS', 'Περισσότερα νέα προϊόντα θα προστεθούν σύντομα. Παρακαλούμε ελέγξτε αργότερα.');
define('TEXT_UNKNOWN_TAX_RATE', 'Άγνωστος Φόρος');

define('TEXT_REQUIRED', '<span class="errorText">Απαιτείται</span>');

  $warn_path = (isset($_SERVER['SCRIPT_FILENAME']) ? @dirname($_SERVER['SCRIPT_FILENAME']) : '.....');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'ΠΡΟΣΟΧΗ: Ο κατάλογος εγκατάστασης υπάρχει στο: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/zc_install. Για λόγους ασφαλείας παρακαλούμε διαγράψτε αυτό τον κατάλογο.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'ΠΡΟΣΟΧΗ: Υπάρχει η δυνατότητα εγγραφής στο αρχείο ρυθμίσεων: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/includes/configure.php. Αυτό είναι ένα πιθανό πρόβλημα ασφαλείας - Παρακαλούμε ρυθμίστε τα κατάλληλα δικαιώματα χρήστη σε αυτό το αρχείο.');
  unset($warn_path);
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'ΠΡΟΣΟΧΗ: Ο κατάλογος των συνόδων δεν υπάρχει: ' . zen_session_save_path() . '. Οι σύνοδοι δεν θα λειτουργούν μέχρι να δημιουργήσετε αυτόν τον κατάλογο.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'ΠΡΟΣΟΧΗ: Δεν υπάρχει η δυνατότητα εγγραφής στον κατάλογο των συνόδων: ' . zen_session_save_path() . '. Οι σύνοδοι δεν θα λειτουργούν μέχρι να ρυθμίσετε τα κατάλληλα δικαιώματα χρήστη.');
define('WARNING_SESSION_AUTO_START', 'ΠΡΟΣΟΧΗ: Η επιλογή session.auto_start είναι ενεργή - Παρακαλώ απενεργοποιήστε αυτό το χαρακτηριστικό στο php.ini και κάντε επανεκκίνηση του Webserver.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'ΠΡΟΣΟΧΗ: Ο κατάλογος των μεταφορτώσιμων προϊόντων δεν υπάρχει: ' . DIR_FS_DOWNLOAD . '. Τα μεταφορτώσιμα προϊόντα δεν θα λειτουργούν μέχρι αυτός ο κατάλογος να είναι έγκυρος.');
define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'ΠΡΟΣΟΧΗ: Ο κατάλογος λανθάνουσας μνήμης SQL δεν υπάρχει: ' . DIR_FS_SQL_CACHE . '. Η προσωρινή αποθήκευση SQL για γρήγορη απόκριση δεν θα λειτουργεί μέχρι να δημιουργήσετε αυτό τον κατάλογο.');
define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'ΠΡΟΣΟΧΗ: Δεν υπάρχει η δυνατότητα εγγραφής στον κατάλογο λανθάνουσας μνήμης SQL: ' . DIR_FS_SQL_CACHE . '. Η προσωρινή αποθήκευση SQL για γρήγορη απόκριση δεν θα λειτουργεί μέχρι να ρυθμίσετε τα κατάλληλα δικαιώματα χρήστη.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Η βάση δεδομένων σας φαίνεται να χρειάζεται επιδιόρθωση σε ανώτερο επίπεδο. Δείτε το Admin->Tools->Server Information (Patch-Level).');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ΠΡΟΣΟΧΗ: Δεν ήταν δυνατό να εντοπιστεί το γλωσσικό αρχείο ');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Η ημερομηνία λήξης για αυτή την πιστωτική κάρτα δεν είναι έγκυρη. Παρακαλούμε ελέγξτε την ημερομηνία και προσπαθήστε ξανά.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Ο αριθμός πιστωτικής κάρτας που εισάγατε δεν είναι έγκυρος. Παρακαλούμε ελέγξτε τον αριθμό και προσπαθήστε ξανά.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Ο αριθμός πιστωτικής κάρτας που ξεκινάει με %s δεν εισήχθηκε σωστά, ή απλά δεν δεχόμαστε αυτό των τύπο καρτών. Παρακαλούμε προσπαθήστε ξανά ή χρησιμοποιείστε άλλη πιστωτική κάρτα.');
define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Εκπτωτικά κουπόνια');
define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' Συχνές ερωτήσεις');
define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Υπόλοιπο: ');
define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Λογαριασμός');
define('GV_FAQ', TEXT_GV_NAME . ' Συχνές ερωτήσεις');
define('ERROR_REDEEMED_AMOUNT', 'Συγχαρητήρια!<br />Έχετε εξαργυρώσει με επιτυχία το κουπόνι σας.<br />Ποσό: ');
define('ERROR_NO_REDEEM_CODE', 'Δεν εισάγατε ' . TEXT_GV_REDEEM . '.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Άκυρη ' . TEXT_GV_NAME . ' ή ' . TEXT_GV_REDEEM);
define('TABLE_HEADING_CREDIT', 'Υπόλοιπο');
define('GV_HAS_VOUCHERA', 'Έχετε χρήματα στο λογαριασμό της ' . TEXT_GV_NAME . 'ς. Εάν θέλετε <br />μπορείτε να στείλετε αυτά τα χρήματα μέσω <a class="pageResults" href="');

define('GV_HAS_VOUCHERB', '"><strong>E_Mail</strong></a> σε ένα άλλο άτομο.');
define('ENTRY_AMOUNT_CHECK_ERROR', 'Δεν έχετε αρκετά χρήματα για να στείλετε αυτό το ποσό.');
define('BOX_SEND_TO_FRIEND', TEXT_GV_NAME . ' Αποστολή >>');

define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' Εξαργυρώθηκε');
define('CART_COUPON', 'Κουπόνι:');
define('CART_COUPON_INFO', 'Περισσότερες πληροφορίες');
define('TEXT_SEND_OR_SPEND','Έχετε διαθέσιμο υπόλοιπο στον λογαριασμό της ' . TEXT_GV_NAME . 'ς.<br /> Αν θέλετε μπορείτε να τα ξοδέψετε ή να τα στείλετε σε κάποιον άλλον. Για αποστολή κάντε κλικ στο κουμπί παρακάτω.');
define('TEXT_BALANCE_IS', 'Το υπόλοιπό σας είναι: ');
define('TEXT_AVAILABLE_BALANCE', 'Ο λογαριασμός της ' . TEXT_GV_NAME . 'ς σας');

// payment method is GV/Discount
define('PAYMENT_METHOD_GV', 'Πιστοποιητικό Δώρου/Κουπόνι');
define('PAYMENT_MODULE_GV', 'GS/AK');

define('TABLE_HEADING_CREDIT_PAYMENT', 'Διαθέσιμα Υπόλοιπα');

define('TEXT_INVALID_REDEEM_COUPON', 'Μη έγκυρος κωδικός κουπονιού');
define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Πρέπει να πραγματοποιήσετε αγορές άνω των %s για να εξαργυρώσετε αυτό το κουπόνι');
define('TEXT_INVALID_STARTDATE_COUPON', 'Αυτό το κουπόνι δεν είναι διαθέσιμο ακόμα');
define('TEXT_INVALID_FINISDATE_COUPON', 'Αυτό το κουπόνι έληξε');
define('TEXT_INVALID_USES_COUPON', 'Αυτό το κουπόνι μπορεί να χρησιμοποιηθεί μόνο για ');
define('TIMES', 'φορές.');
define('TIME', 'φορά.');
define('TEXT_INVALID_USES_USER_COUPON', 'Έχετε ήδη χρησιμοποιήσει το Εκπτωτικό Κουπόνι: %s. Το κουπόνι έχει φτάσει στο μέγιστο όριο χρήσης ανά πελάτη.');
define('REDEEMED_COUPON', 'κουπόνι αξίας ');
define('REDEEMED_MIN_ORDER', 'για παραγγελίες άνω των ');
define('REDEEMED_RESTRICTIONS', ' [Ισχύουν οι περιορισμοί της κατηγορίας προϊόντων]');
define('TEXT_ERROR', 'Συνέβη ένα σφάλμα');
define('TEXT_INVALID_COUPON_PRODUCT', 'Αυτός ο κωδικός κουπονιού δεν είναι έγκυρος για κανένα προϊόν του καλαθιού σας');
define('TEXT_VALID_COUPON', 'Συγχαρητήρια, εξαργυρώσατε το εκπτωτικό σας κουπόνι');
define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Ο κωδικός κουπονιού δεν μπορεί να εξαργυρωθεί με την επιλεγμένη διεύθυνση.');

// more info in place of buy now
define('MORE_INFO_TEXT','... περισσότερα');

// IP Address
define('TEXT_YOUR_IP_ADDRESS','Οι διεύθυνση IP είναι:');

//Generic Address Heading
define('HEADING_ADDRESS_INFORMATION','Πληροφορίες διεύθυνσης');

// cart contents
define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Ποσότητα στο καλάθι: ');
define('PRODUCTS_ORDER_QTY_TEXT','Ποσότητα: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Το προϊόν προστέθηκε στο καλάθι με επιτυχία ...');
// only for where multiple add to cart is used:
define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Τα επιλεγμένα προϊόν(τα) προστέθηκαν στο καλάθι με επιτυχία ...');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Shipping
define('TEXT_SHIPPING_WEIGHT','kg');
define('TEXT_SHIPPING_BOXES', 'Πακέτα');

// Discount Savings
define('PRODUCT_PRICE_DISCOUNT_PREFIX','Εξοικονομείτε ');
define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE', '% !');
define('PRODUCT_PRICE_DISCOUNT_AMOUNT','λιγότερα');

// Sale Maker Sale Price
define('PRODUCT_PRICE_SALE','τώρα ');

//universal symbols
define('TEXT_NUMBER_SYMBOL', '#');

// banner_box
define('BOX_HEADING_BANNER_BOX','Συνεργάτες');
define('TEXT_BANNER_BOX','Επισκεφθείτε τους συνεργάτες μας ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Έχετε δει ...');
define('TEXT_BANNER_BOX2','Δείτε το σήμερα!');

// banner_box - all
define('BOX_HEADING_BANNER_BOX_ALL','Συνεργάτες');
define('TEXT_BANNER_BOX_ALL','Επισκεφθείτε τους συνεργάτες μας ...');

// boxes defines
define('PULL_DOWN_ALL','Παρακαλούμε επιλέξτε');
define('PULL_DOWN_MANUFACTURERS','- Επαναφορά -');
// shipping estimator
define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Παρακαλούμε επιλέξτε');

// general Sort By
define('TEXT_INFO_SORT_BY','Ταξινόμηση βάση: ');

// close window image popups
define('TEXT_CLOSE_WINDOW',' - Κάντε κλικ στην εικόνα για κλείσιμο');
// close popups
define('TEXT_CURRENT_CLOSE_WINDOW','[ Κλείσιμο ]');

// iii 031104 added:  File upload error strings
define('ERROR_FILETYPE_NOT_ALLOWED', 'ΣΦΑΛΜΑ:  Μη επιτρεπτός τύπος αρχείου.');
define('WARNING_NO_FILE_UPLOADED', 'ΠΡΟΣΟΧΗ:  Κανένα αρχείο δεν ανέβηκε.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Το αρχείο αποθηκεύτηκε με επιτυχία.');
define('ERROR_FILE_NOT_SAVED', 'ΣΦΑΛΜΑ: Το αρχείο δεν αποθηκεύτηκε.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'ΣΦΑΛΜΑ: Δεν υπάρχει δυνατότητα εγγραφής στον προορισμό.');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'ΣΦΑΛΜΑ: ο προορισμός δεν υπάρχει.');
define('ERROR_FILE_TOO_BIG', 'ΠΡΟΣΟΧΗ: Το αρχείο ήταν πολύ μεγάλο για να ανέβει!<br />Μπορεί να υποβληθεί παραγγελία αλλά παρακαλούμε επικοινωνήστε μαζί μας για βοήθεια σχετικά με το ανέβασμα αρχείων');
// End iii added

define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'ΕΠΙΣΗΜΑΝΣΗ: Αυτός ο ιστοχώρος δεν θα λειτουργεί λόγω εργασιών συντήρησης στις (dd/mm/yy) (hh-hh): ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'ΕΠΙΣΗΜΑΝΣΗ: Αυτός ο ιστοχώρος είναι προς το παρόν μη διαθέσιμος λόγω εργασιών συντήρησης');

define('PRODUCTS_PRICE_IS_FREE_TEXT','Είναι Δωρεάν!');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Τηλεφωνήστε για την τιμή');
define('TEXT_CALL_FOR_PRICE','Τηλεφωνήστε για την τιμή');
define('TEXT_ERROR_OPTION_FOR',' Η επιλογή για: ');
define('TEXT_INVALID_SELECTION',' Είναι Άκυρη Επιλογή: ');
define('TEXT_INVALID_USER_INPUT', 'Παρακαλώ συμπληρώστε το πεδίο<br />');

// product_listing
define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Ελάχιστο: ');
define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Τεμάχια: ');
define('PRODUCTS_QUANTITY_IN_CART_LISTING','Στο καλάθι:');
define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Προσθήκη:');

define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Μέγιστο:');

define('TEXT_PRODUCTS_MIX_OFF','*μίξη: ΜΗ ΕΝΕΡΓΟ');
define('TEXT_PRODUCTS_MIX_ON','*μίξη: ΕΝΕΡΓΟ');
define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','*μίξη των επιλογών: ΜΗ ΕΝΕΡΓΟ');
define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*μίξη των επιλογών: ΕΝΕΡΓΗ');
define('ERROR_MAXIMUM_QTY','Η ποσότητα ρυθμίστηκε κατάλληλα - έχει προστεθεί ο μέγιστος αριθμός στο καλάθι ');

define('ERROR_CORRECTIONS_HEADING','Παρακαλούμε διορθώστε τα ακόλουθα: <br />');
define('ERROR_QUANTITY_ADJUSTED', 'Σφάλμα στην επιλεγμένη ποσότητα<br />');
define('ERROR_QUANTITY_CHANGED_FROM', ', έχει τροποποιηθεί από: ');
define('ERROR_QUANTITY_CHANGED_TO', ' σε ');

// Downloads Controller
define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG', 'Σημείωση: Οι μεταφορτώσεις δεν είναι διαθέσιμες μέχρι την επιβεβαίωση της πληρωμής');
define('TEXT_FILESIZE_BYTES', ' bytes');
define('TEXT_FILESIZE_KBS', ' KB');
define('TEXT_FILESIZE_MEGS', ' MB');
define('TEXT_FILESIZE_UNKNOWN', 'Unbekannt');

// shopping cart errors
define('ERROR_PRODUCT','Προιόν: ');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />Λυπούμαστε αλλά αυτό το αντικείμενο έχει αφαιρεθεί από τον κατάλογο προς το παρόν.<br />Το αντικείμενο αφαιρέθηκε από το καλάθι σας.');
define('ERROR_PRODUCT_QUANTITY_MIN', '  ... κάτω από την ελάχιστη ποσότητα - ');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br />Es tut uns leid, aber die gewählten Optionen für diesen Artikel haben sich geändert und stehen derzeit in unserem Sortiment nicht mehr zur Verfügung.<br />Dieser Artikel wurde aus Ihrem Warenkorb entfernt.');
define('ERROR_PRODUCT_QUANTITY_MIN', '... minimale Stückzahl unterschritten -');
define('ERROR_PRODUCT_QUANTITY_UNITS', ' ... μη έγκυρη ποσότητα - ');
define('ERROR_PRODUCT_OPTION_SELECTION', '... έχουν γίνει μη έγκυρες επιλογές -');
define('ERROR_PRODUCT_QUANTITY_ORDERED', 'Το σύνολο της παραγγελίας σας:');
define('ERROR_PRODUCT_QUANTITY_MAX', ' ... υπέρβαση μέγιστης ποσότητας - ');
define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART', ' υπέρβαση ελάχιστης ποσότητας -');
define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART', ' ... μη έγκυρη ποσότητα - ');
define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART', ' ... υπέρβαση μέγιστης ποσότητας - ');
define('WARNING_SHOPPING_CART_COMBINED', 'ΠΑΡΑΤΗΡΗΣΗ: Για δική σας διευκόλυνση, τα προϊόντα από το τρέχον καλάθι σας έχουν προστεθεί σε αυτά που είχατε στο καλάθι σας κατά την τελευταία σας επίσκεψη. Παρακαλούμε ελέγξτε το καλάθι αγορών σας πριν την τελική παραγγελία.');
define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'Η ποσότητα έχει ρυθμιστεί αυτόματα στο διαθέσιμο απόθεμα. ');
define('OUT_OF_STOCK_CANT_CHECKOUT', 'Mit ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' gekennzeichnete Artikel sind derzeit nicht in ausreichender Menge lagernd.<br />Bitte ändern Sie die Menge bei den mit (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ') gekennzeichneten Artikeln. Danke.');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Mit ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' gekennzeichnete Artikel sind nicht lagernd.<br />Diese Artikel werden nachgeliefert.');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
define('ERROR_CUSTOMERS_ID_INVALID', 'Μη εγγεγραμμένος χρήστης!<br />Παρακαλούμε κάντε είσοδο ή δημιουργήστε ξανά τον λογαριασμό σας ...');

define('TABLE_HEADING_FEATURED_PRODUCTS', 'Σας προτείνουμε');

define('TABLE_HEADING_NEW_PRODUCTS', 'Νέα προϊόντα για %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Προσεχώς');
define('TABLE_HEADING_DATE_EXPECTED', 'Ημερομηνία παραλαβής');
define('TABLE_HEADING_SPECIALS_INDEX', 'Προσφορές μήνα για %s');
define('CAPTION_UPCOMING_PRODUCTS','Αυτά τα αντικείμενα θα είναι σε στοκ σύντομα');
define('SUMMARY_TABLE_UPCOMING_PRODUCTS','Ο πίνακας περιέχει μια λίστα των προϊόντων τα οποία θα είναι σε στόκ σύντομα καθώς και τις ημερομηνίες που αναμένονται');

// meta tags special defines
define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Δωρεάν!');

// customer login
define('TEXT_SHOWCASE_ONLY', 'Επικοινωνία');
// set for login for prices
define('TEXT_LOGIN_FOR_PRICE_PRICE', 'Τιμή μη διαθέσιμη');
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE', 'Κάντε είσοδο για τιμές');
// set for show room only
define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', '');// blank for prices or enter your own text
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Μόνο για Παρουσίαση');

// authorization pending
define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Μη διαθέσιμη τιμή');
define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'ΑΝΑΜΕΝΕΤΑΙ ΑΠΟΔΟΧΗ');
define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Κάντε είσοδο στο κατάστημα');
define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Checkout nicht möglich - Ihr Kundenkonto ist noch nicht freigeschaltet');

// text pricing
define('TEXT_CHARGES_WORD', 'Υπολογισμένη χρέωση:');
define('TEXT_PER_WORD', '<br />Τιμή ανά λέξη: ');
define('TEXT_WORDS_FREE', ' Λέξη(εις) δωρεάν ');
define('TEXT_CHARGES_LETTERS', 'Υπολογισμένη χρέωση:');
define('TEXT_PER_LETTER', '<br />Τιμή ανά γράμμα: ');
define('TEXT_LETTERS_FREE', ' Γράμμα(τα) δωρεάν ');
define('TEXT_ONETIME_CHARGES', '*χρεώσεις μιας φοράς = ');
define('TEXT_ONETIME_CHARGES_EMAIL', "\t" . '*χρεώσεις μιας φοράς = ');
define('TEXT_ONETIME_CHARGES_BASKET', "-&nbsp;χρεώσεις μιας φοράς");
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Επιλογή εκπτώσεων ποσότητας');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY', 'Ποσότητα');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE', 'ΤΙΜΗ');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Επιλογή εκπτώσεων ποσότητας για χρεώσεις μιας φοράς');

// textarea attribute input fields
define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' μέγιστοι επιτρεπόμενοι χαρακτήρες');
define('TEXT_REMAINING','απομένουν');

// Shipping Estimator
define('CART_SHIPPING_OPTIONS', 'Εκτιμώμενο κόστος αποστολής');
define('CART_SHIPPING_OPTIONS_LOGIN', 'Παρακαλούμε συνδεθείτε <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>εδώ</u></a>, για να εμφανίστε το προσωπικό σας κόστος αποστολής.');
define('CART_SHIPPING_METHOD_TEXT', 'Διαθέσιμες μέθοδοι αποστολής');
define('CART_SHIPPING_METHOD_RATES', 'Τιμές');
define('CART_SHIPPING_METHOD_TO','Αποστολή σε: ');
define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Αποστολή σε: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>Είσοδος</u></a>');
define('CART_SHIPPING_METHOD_FREE_TEXT','δωρεάν Αποστολή');
define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Μεταφορτώσεις');
define('CART_SHIPPING_METHOD_RECALCULATE','Επαναϋπολογισμός');
define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
define('CART_SHIPPING_METHOD_ADDRESS','Διεύθυνση:');
define('CART_OT','Εκτιμώμενο κόστος αποστολής:');
define('CART_OT_SHOW','true'); // set to false if you don't want order totals
define('CART_ITEMS','στο Καλάθι: ');
define('CART_SELECT','Επιλέξτε');
define('ERROR_CART_UPDATE', 'Παρακαλούμε ανανεώστε την παραγγελία σας...<br />');
define('IMAGE_BUTTON_UPDATE_CART', 'Ανανέωση');
define('EMPTY_CART_TEXT_NO_QUOTE', 'ΩΧ! Η σύνδεση σας έληξε ... Παρακαλούμε ανανεώστε το καλάθι σας για Έξοδα Αποστολής');
define('CART_SHIPPING_QUOTE_CRITERIA', 'Τα έξοδα αποστολής είναι βασισμένα στις πληροφορίες διεύθυνσης που εισάγατε:');

// multiple product add to cart
define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Προσθήκη: ');
define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Προσθήκη: ');
define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Προσθήκη: ');
define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Προσθήκη: ');
//moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Έκπτωση λόγω ποσότητας');
define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Νέα τιμή λόγω έκπτωσης ποσότητας');
define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Έκπτωση λόγω ποσότητας');
define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Οι εκπτώσεις μπορεί να κυμαίνονται λόγω των παραπάνω επιλογών');
define('TEXT_HEADER_DISCOUNTS_OFF', 'Μη διαθέσιμες Εκπτώσεις ...');

// sort order titles for dropdowns
define('PULL_DOWN_ALL_RESET','- ΕΠΑΝΑΦΟΡΑ - ');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Όνομα Προϊόντος');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Όνομα προϊόντος - περιγραφή');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Τιμή - χαμηλότερη πρώτα');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Τιμή - υψηλότερη πρώτα');
define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Κωδικός προιόντος');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Ημερομηνία προσθήκης - Νεότερο Πρώτα');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Ημερομηνία προσθήκης - Παλαιότερο Πρώτα');
define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Βασική Κατάταξη');

// downloads module defines
define('TABLE_HEADING_DOWNLOAD_DATE', 'Σύνδεσμος ενεργός μέχρι');
define('TABLE_HEADING_DOWNLOAD_COUNT', 'Απομένουν');
define('HEADING_DOWNLOAD', 'Για να μεταφορτώστε τα αρχεία σας κάντε κλικ στο κουμπί Μεταφόρτωση και επιλέξτε "Αποθήκευση στον δίσκο".');
define('TABLE_HEADING_DOWNLOAD_FILENAME','Όνομα αρχείου');
define('TABLE_HEADING_PRODUCT_NAME','Προιόν');
define('TABLE_HEADING_BYTE_SIZE','Μέγεθός αρχείου');
define('TEXT_DOWNLOADS_UNLIMITED', 'Απεριόριστο');
define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
define('COLON_SPACER', ':&nbsp;&nbsp;');
define('PAYMENT_JAVASCRIPT_DISABLED', 'Η παραγγελία δεν μπορεί να συνεχιστεί, επειδή η Javascript είναι απενεργοποιημένη. Παρακαλούμε ενεργοποιήστε τη Javascript για να συνεχίσετε.');

// table headings for cart display and upcoming products
define('TABLE_HEADING_QUANTITY', 'Ποσότητα.');
define('TABLE_HEADING_PRODUCTS', 'Όνομα προϊόντος');
define('TABLE_HEADING_TOTAL', 'Σύνολο');

// create account - login shared
define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Όροι Προσωπικών Δεδομένων');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Παρακαλούμε αποδεχθείτε τους όρους Προσωπικών Δεδομένων κάνοντας κλικ στο κουτάκι παρακάτω. Τους όρους Προσωπικών Δεδομένων μπορείτε να τους διαβάσετε κάνοντας <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">ΕΔΩ</span></a> κλικ.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Διάβασα και συμφωνώ με τους όρους Προσωπικών Δεδομένων.');
define('TABLE_HEADING_ADDRESS_DETAILS', 'Παρακαλούμε εισάγετε τα στοιχεία της διεύθυνση σας');
define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Πως μπορούμε να επικοινωνήσουμε μαζί σας?');
define('TABLE_HEADING_DATE_OF_BIRTH', 'Παρακαλούμε εισάγετε την ημερομηνία γέννησής σας');
define('TABLE_HEADING_LOGIN_DETAILS', 'Παρακαλούμε εισάγετε τις Λεπτομέρειες Εισόδου');
define('TABLE_HEADING_REFERRAL_DETAILS', 'Πώς μάθατε για το κατάστημά μας?');
define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Δυστυχώς, δεν δεχόμαστε πλέον διευθύνσεις χρέωσης ή διευθύνσεις παράδοσης στο "%s".  Παρακαλούμε αλλάξτε αυτή τη διεύθυνση για να συνεχίσετε.');
define('ENTRY_EMAIL_PREFERENCE','Newsletter και E-Mail');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Μόνο κείμενο');
define('EMAIL_SEND_FAILED','ΣΦΑΛΜΑ: Αποτυχία αποστολής E-Mail σε: "%s" <%s> με θέμα: "%s"');
define('DB_ERROR_NOT_CONNECTED', 'ΣΦΑΛΜΑ: Αποτυχία σύνδεσης στη βάση δεδομένων');
define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Φαίνεται να είναι ένα πρόβλημα με τη βάση δεδομένων. Απαιτείται συντήρηση της βάσης δεδομένων</a>');

// EZ-PAGES Alerts
define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'WARNING: EZ-PAGES HEADER - Επιτρέπεται να ανοιχτεί μόνο από τον Διαχειριστή συστήματος');
define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'WARNING: EZ-PAGES FOOTER - Επιτρέπεται να ανοιχτεί μόνο από τον Διαχειριστή συστήματος');
define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'WARNING: EZ-PAGES SIDEBOX - Επιτρέπεται να ανοιχτεί μόνο από τον Διαχειριστή συστήματος');

// extra product listing sorter
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Προιόντα που αρχίζουν με ...');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Επαναφορά --');

///////////////////////////////////////////////////////////

  $file_list = array(FILENAME_EMAIL_EXTRAS, FILENAME_HEADER, FILENAME_BUTTON_NAMES, FILENAME_ICON_NAMES, FILENAME_OTHER_IMAGES_NAMES, FILENAME_CREDIT_CARDS, FILENAME_WHOS_ONLINE, FILENAME_META_TAGS); 
  foreach ($file_list as $file) { 
    $file = str_replace(".php","",$file); 
    require_once(zen_get_file_directory(DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/', $file . '.php', 'false'));
  }

// END OF EXTERNAL LANGUAGE LINKS
