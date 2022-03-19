<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |   
// | http://www.zen-cart.com/index.php                                    |   
// |                                                                      |   
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: advanced_search_result.php 293 2008-05-28 21:10:40Z maleborg $
//

define('NAVBAR_TITLE_1', 'Προχωρημένη αναζήτηση');
define('NAVBAR_TITLE_2', 'Αποτελέσματα αναζήτησης');
//define('HEADING_TITLE_1', 'Προχωρημένη αναζήτηση');
define('HEADING_TITLE', 'Προχωρημένη αναζήτηση');
define('HEADING_SEARCH_CRITERIA', 'Κριτήρια αναζήτησης:');
define('TEXT_SEARCH_IN_DESCRIPTION', 'Περιγραφές Προϊόντων');
define('ENTRY_CATEGORIES', 'Κατηγορίες:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Με Υποκατηγορίες');
define('ENTRY_MANUFACTURERS', 'Κατασκευαστές:');
define('ENTRY_PRICE_FROM', 'Τιμή από:');
define('ENTRY_PRICE_TO', 'Τιμή έως:');
define('ENTRY_DATE_FROM', 'Ημερομηνία από:');
define('ENTRY_DATE_TO', 'Ημερομηνία έως:');

define('TEXT_SEARCH_HELP_LINK', 'Βοήθεια [?]');

define('TEXT_ALL_CATEGORIES', 'Όλες οι κατηγορίες');
define('TEXT_ALL_MANUFACTURERS', 'Όλοι οι κατασκευαστές');
define('HEADING_SEARCH_HELP', 'Βοήθεια Αναζήτησης');
define('TEXT_SEARCH_HELP', 'Οι λέξεις κλειδιά μπορεί να χωρίζονται με AND και/ή OR.<br /><br /> Για παράδειγμα, η φράση Microsoft AND mouse θα επιστρέψει αποτελέσματα τα οποία περιέχουν και τις 2 λέξεις. Η φράση Microsoft OR mouse θα επιστρέψει αποτελέσματα τα οποία θα περιέχουν κάποια από τις 2 λέξεις.');
define('TEXT_CLOSE_WINDOW', 'Κλείσιμο [x]');

define('TABLE_HEADING_IMAGE', 'Φωτογραφία προϊόντος');
define('TABLE_HEADING_MODEL', 'Κωδικός');
define('TABLE_HEADING_PRODUCTS', 'Όνομα προϊόντος');
define('TABLE_HEADING_MANUFACTURER', 'Κατασκευαστής');
define('TABLE_HEADING_QUANTITY', 'Ποσότητα');
define('TABLE_HEADING_PRICE', 'Τιμή');
define('TABLE_HEADING_WEIGHT', 'Βάρος');
define('TABLE_HEADING_BUY_NOW', 'Αγορά τώρα');
define('TEXT_NO_PRODUCTS', 'Κανένα προϊόν δεν ταιριάζει στα κριτήρια.');
define('ERROR_AT_LEAST_ONE_INPUT', 'Τουλάχιστον ένα πεδίο πρέπει να συμπληρωθεί.');
define('ERROR_INVALID_FROM_DATE', 'Μη έγκυρη "Ημερομηνία από"');
define('ERROR_INVALID_TO_DATE', 'Μη έγκυρη "Ημερομηνία έως"');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Η "Ημερομηνία έως" πρέπει να είναι μεγαλύτερη ή ίση από την "Ημερομηνία από" .');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Η "Τιμή από" πρέπει να είναι αριθμός.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Η "Τιμή έως" πρέπει να είναι αριθμός.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Η "Τιμή έως" πρέπει να είναι μεγαλύτερη ή ίση από την "Τιμή από".');
define('ERROR_INVALID_KEYWORDS', 'Μη έγκυρες λέξεις κλειδιά.');