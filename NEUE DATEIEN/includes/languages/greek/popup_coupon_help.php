<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: popup_coupon_help.php 294 2015-12-23 19:28:14Z webchills $
 */

define('HEADING_COUPON_HELP', 'Βοήθεια για Εκπτωτικά Κουπόνια');
define('TEXT_CLOSE_WINDOW', 'Κλείσιμο Παράθυρου [x]');
define('TEXT_COUPON_HELP_HEADER', 'Συγχαρητήρια, εξαργυρώσατε ένα Εκπτωτικό Κουπόνι.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Όνομα Κουπονιού : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Το κουπόνι είναι εκπτωτικής αξία %s για την παραγγελία σας');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Πρέπει να ξοδέψετε %s για να χρησιμοποιήσετε αυτό το κουπόνι');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Αυτό το κουπόνι σας δίνει δωρεάν αποστολή στην παραγγελία σας');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Περιγραφή κουπονιού : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Το κουπόνι είναι έγκυρο από %s μέχρι %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Περιορισμοί Προϊόντος/Κατηγορίας');
define('TEXT_COUPON_HELP_CATEGORIES', 'Κατηγορία');
define('TEXT_COUPON_HELP_PRODUCTS', 'Προϊόν');
define('TEXT_ALLOW', 'Αποδοχή');
define('TEXT_DENY', 'Απόρριψη');
define('TEXT_ALLOWED', ' (Αποδεκτό)');
define('TEXT_DENIED', ' (Απορριπτέο)');
define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Αυτό το κουπόνι ισχύει μόνο για ορισμένα προϊόντα.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Αυτό το κουπόνι ισχύει για όλες τις Κατηγορίες.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Αυτό το κουπόνι ισχύει για όλα τα Προϊόντα.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Τα Εκπτωτικά Κουπόνια δεν μπορούν να χρησιμοποιηθούν για να αγοράσετε ' . TEXT_GV_NAMES . '.');
define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Ισχύουν περιορισμοί Διεύθυνσης Χρέωσης.');
