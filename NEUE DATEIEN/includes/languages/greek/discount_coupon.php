<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: discount_coupon.php 697 2015-12-23 19:05:14Z webchills $
 */

define('NAVBAR_TITLE', 'Εκπτωτικό Κουπόνι');
define('HEADING_TITLE', 'Εκπτωτικό Κουπόνι');
define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', 'Ο <span class="alert important">%s</span> δεν φαίνεται να είναι ένας έγκυρος κωδικός εξαργύρωσης κουπονιού. Παρακαλούμε δοκιμάστε να τον πληκτρολογήσετε ξανά.');
define('HEADING_COUPON_HELP', 'Βοήθεια για το Εκπτωτικό Κουπόνι');
define('TEXT_CLOSE_WINDOW', 'Κλείσιμο Παράθυρου [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Ο κωδικός εξαργύρωσης του Εκπτωτικού Κουπονιού που εισάγατε είναι για ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Εκπτωτική προσφορά:</span> %s</p><p class="smallText">Κάποιοι άλλοι περιορισμοί μπορεί να είναι σε ισχύ. Παρακαλούμε δείτε παρακάτω για άλλες λεπτομέρειες.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Το κουπόνι είναι έγκυρο μεταξύ %s και %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Περιορισμοί Εκπτωτικού Κουπονιού</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Περιορισμοί Κατηγορίας:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Περιορισμοί Προϊόντος:</p>');
define('TEXT_ALLOW', 'Αποδοχή');
define('TEXT_DENY', 'Απόρριψη');
define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Αυτό το κουπόνι είναι έγκυρο μόνο για ορισμένα προϊόντα.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Αυτό το κουπόνι είναι έγκυρο για όλες τις κατηγορίες.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Αυτό το κουπόνι είναι έγκυρο για όλα τα προϊόντα.</p>');
define('TEXT_CAT_ALLOWED', ' (Έγκυρο για αυτή την κατηγορία)');
define('TEXT_CAT_DENIED', ' (Δεν επιτρέπεται σε αυτή την κατηγορία)');
define('TEXT_PROD_ALLOWED', ' (Έγκυρο για αυτό το προϊόν)');
define('TEXT_PROD_DENIED', ' (Μη επιτρεπτά προϊόντα)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Τα εκπτωτικά κουπόνια μπορεί να μην εφαρμόζονται σχετικά με την αγορά ' . TEXT_GV_NAMES . '. Όριο 1 κουπόνι ανά παραγγελία.</p>');
define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Αναζήτηση πληροφοριών για ένα εκπτωτικό κουπόνι ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Ο κωδικός σας: ');
define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Ισχύουν περιορισμοί Διεύθυνσης Χρέωσης.');
