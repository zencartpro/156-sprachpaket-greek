<?php
/**
* @package languageDefines
* @copyright Copyright 2003-2016 Zen Cart Development Team
* @copyright Portions Copyright 2003 osCommerce
* @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
* @version $Id: index.php 2 2015-12-23 17:49:16Z webchills $
*/

define('TEXT_MAIN','Αυτή είναι η βασική δήλωση define για την σελίδα για τα Ελληνικά όταν δεν υπάρχει ορισμένο πρότυπο αρχείο. Βρίσκεται στο: <strong>/includes/languages/greek/responsive_classic/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Καλώς ορίσατε <span class="greetUser">Επισκέπτη!</span> θα επιθυμούσατε να <a href="%s">συνδεθείτε</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Καλώς ορίσατε, παρακαλούμε απόλαυστε την διαδικτυακή μας βιτρίνα.');
}
define('TEXT_GREETING_PERSONAL', 'Καλώς ήρθατε <span class="greetUser">%s</span>! Θα θέλατε να δείτε τις <a href="%s">τελευταίες προσθήκες</a>?');
define('TEXT_INFORMATION', 'Ορίστε το αντίγραφο της βασικής σελίδας Index εδώ <strong>/includes/languages/greek/responsive_classic/index.php</strong>.');


if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Διαθέσιμα προϊόντα');
  define('TABLE_HEADING_IMAGE', 'Φωτο/φία προϊόντος');
  define('TABLE_HEADING_MODEL', 'Κωδικός');
  define('TABLE_HEADING_PRODUCTS', 'Όνομα');
  define('TABLE_HEADING_MANUFACTURER', 'Κατασκευαστής');
  define('TABLE_HEADING_QUANTITY', 'Ποσότητα');
  define('TABLE_HEADING_PRICE', 'Τιμή');
  define('TABLE_HEADING_WEIGHT', 'Βάρος');
  define('TABLE_HEADING_BUY_NOW', 'Αγορά τώρα');
  define('TEXT_NO_PRODUCTS', 'Δεν υπάρχουν προϊόντα σε αυτή τη κατηγορία.');
  define('TEXT_NO_PRODUCTS2', 'Δεν υπάρχουν διαθέσιμα προϊόντα από αυτόν τον κατασκευαστή.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Αριθμός προϊόντων: ');
  define('TEXT_SHOW', 'Φιλτράρισμα ανά:');
  define('TEXT_BUY', 'Αγοράστε 1 \'');
  define('TEXT_NOW', '\' τώρα');
  define('TEXT_ALL_CATEGORIES', 'Όλες οι κατηγορίες');
  define('TEXT_ALL_MANUFACTURERS', 'Όλες οι Μάρκες');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Καλώς ήλθατε!');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Καλώς ήλθατε!'); 
}
