<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 
 * @version $Id: index.php 627 2010-08-30 15:05:14Z webchills $
 */

define('TEXT_MAIN','Εδώ μπορείτε να ορίσετε το κείμενο σας. Αυτό το κείμενο μπορείτε στο <strong>/includes/languages/greek/index.php</strong> να το επεξεργαστείτε.');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Καλώς ήρθες <span class="greetUser">Επισκέπτη!</span> Θα επιθυμούσες να <a href="%s">συνδεθείς</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Καλώς ήρθες, παρακαλώ απόλαυσε την διαδικτυακή μας βιτρίνα.');
}

define('TEXT_GREETING_PERSONAL', 'Γεια σου <span class="greetUser">%s</span>! Θα ήθελες να δεις τα <a href="%s">Νέα προϊόντα</a>?');
define('TEXT_INFORMATION', 'Εδώ μπορείτε να ορίσετε το κείμενο σας. Αυτό το κείμενο μπορείτε στο <strong>/includes/languages/greek/index.php</strong> να το επεξεργαστείτε.');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Προτεινόμενα προιόντα');

//define('TABLE_HEADING_NEW_PRODUCTS', 'Νέα προιόντα %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Προσεχώς');
//define('TABLE_HEADING_DATE_EXPECTED', 'Ημ/νία παραλαβής');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE','Κατηγορίες');
  define('TABLE_HEADING_IMAGE','Φωτογραφία προϊόντος');
  define('TABLE_HEADING_MODEL','Κωδικός');
  define('TABLE_HEADING_PRODUCTS','Όνομα');
  define('TABLE_HEADING_MANUFACTURER','Κατασκευαστής');
  define('TABLE_HEADING_QUANTITY','Ποσότητα');
  define('TABLE_HEADING_PRICE','Τιμή');
  define('TABLE_HEADING_WEIGHT','Βάρος');
  define('TABLE_HEADING_BUY_NOW','Αγορά τώρα');
  define('TEXT_NO_PRODUCTS','Δεν υπάρχουν προϊόντα σε αυτή τη κατηγορία.');
  define('TEXT_NO_PRODUCTS2','Δεν υπάρχουν διαθέσιμα προϊόντα από αυτόν τον κατασκευαστή.');
  define('TEXT_NUMBER_OF_PRODUCTS','Αριθμός προϊόντων:');
  define('TEXT_SHOW','<strong>Φιλτράρισμα ανά:</strong>');
  define('TEXT_BUY','Αγοράστε 1 ');
  define('TEXT_NOW',' τώρα');
  define('TEXT_ALL_CATEGORIES','Όλες οι κατηγορίες');
  define('TEXT_ALL_MANUFACTURERS','Όλοι οι Κατασκευαστές');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Καλώς ήλθατε στο ηλεκτρονικό μας κατάστημα!');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Καλώς ήλθατε στο ηλεκτρονικό μας κατάστημα!'); 
}
