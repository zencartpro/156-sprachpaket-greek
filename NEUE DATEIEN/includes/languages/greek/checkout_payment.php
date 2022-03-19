<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 
 * @version $Id: checkout_payment.php 628 2012-12-07 07:05:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Ταμείο - Βήμα 1');
define('NAVBAR_TITLE_2', ' Βήμα 2 - Τρόπος Πληρωμής');
define('HEADING_TITLE', 'Βήμα 2 από 3 : Πληροφορίες Πληρωμής');
define('TABLE_HEADING_BILLING_ADDRESS', 'Διεύθυνση Χρέωσης');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Η διεύθυνση χρέωσης σας φαίνεται στα αριστερά. Μπορείτε να αλλάξετε την διεύθυνση χρέωσης κάνοντας κλικ στο κουμπί <em>Αλλαγή Διεύθυνσης</em>.');
define('TITLE_BILLING_ADDRESS', 'Διεύθυνση Χρέωσης:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Τρόπος Πληρωμής');
define('TEXT_SELECT_PAYMENT_METHOD', 'Παρακαλώ επιλέξτε ένα τρόπο πληρωμής για αυτή την παραγγελία.');
define('TITLE_PLEASE_SELECT', 'Παρακαλώ επιλέξτε');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'Προς το παρόν, αυτή είναι η μόνη δυνατή μέθοδος πληρωμής.');
define('TABLE_HEADING_COMMENTS', 'Σχόλια ή Σημειώσεις');
define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Δεν είναι διαθέσιμο αυτή τη στιγμή');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Λυπόμαστε αλλά δεν δεχόμαστε πληρωμές από την περιοχή σας αυτή τη στιγμή.</span><br />Παρακαλούμε επικοινωνήστε μαζί μας για τις εναλλακτικές μεθόδους.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Προχωρήστε στο Βήμα 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- για να επιβεβαιώστε την παραγγελία σας ...');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Όροι Χρήσης</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Παρακαλώ αναγνωρίστε ότι δέχεστε τους όρους χρήσης αυτής της παραγγελίας επιλέγοντας το παρακάτω κουτάκι. Μπορείτε να διαβάσετε <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">ΕΔΩ</span></a> τους όρους χρήσης.</span>');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Έχω διάβάσει τους όρους χρήσης της παραγγελίας και συμφωνώ. Το σημείωμα σχετικά με το <a href="' . zen_href_link(FILENAME_WIDERRUFSRECHT, '', 'SSL') . '"><span class="pseudolink">δικαίωμα υπαναχώρησης</span></a> το κατανόησα.</span>');
define('TEXT_CHECKOUT_AMOUNT_DUE', 'Συνολικό Ποσό');
define('TEXT_YOUR_TOTAL','Το σύνολο σας');
