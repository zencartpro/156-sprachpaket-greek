<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: popup_cvv_help.php 294 2015-12-23 19:28:14Z webchills $
 */

define('HEADING_CVV', 'Τι είναι το (CVV)?');
define('TEXT_CVV_HELP1', 'Τριψήφιος αριθμός επιβεβαίωσης για κάρτες Visa, Mastercard, Discover<br /><br />
                    Για την δική σας ασφάλεια, θα πρέπει να εισάγετε τον αριθμό επιβεβαίωσης της κάρτας σας.<br /><br />
                    Ο αριθμός επιβεβαίωσης είναι ένας τριψήφιος αριθμός που είναι τυπωμένος στο πίσω μέρος της κάρτας.
                    Εμφανίζεται μετά και δεξιά από τον αριθμό της κάρτας σας.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));
define('TEXT_CVV_HELP2', 'Τετραψήφιος αριθμός επιβεβαίωσης για κάρτες American Express<br /><br />
                    Για την δική σας ασφάλεια, θα πρέπει να εισάγετε τον αριθμό επιβεβαίωσης της κάρτας σας.<br /><br />
                    Ο αριθμός επιβεβαίωσης των καρτών American Express είναι ένας τετραψήφιος αριθμός που είναι τυπωμένος στο εμπρός μέρος της κάρτας.
                    Εμφανίζεται μετά και δεξιά από τον αριθμό της κάρτας σας.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));
define('TEXT_CLOSE_CVV_WINDOW', 'Κλείσιμο παράθυρου [x]');
