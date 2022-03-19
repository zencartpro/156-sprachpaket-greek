<?php
/**
 * Authorize.net AIM Payment Module V.1.0 created by Eric Stamper - 01/30/2004 Released under GPL
 *
  * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @translator: cyaneo/hugo13/wflohr/maleborg	http://www.zen-cart-pro.at	2007-01-03
 * @version $Id: authorizenet_aim.php 293 2008-05-28 21:10:40Z maleborg $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', (defined('MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE') && MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE == 'Produktion' ? '' : '<strong>Αυτοματοποιημένη Δοκιμή Πιστωτικής κάρτας Info:</strong><br /><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><strong>Hinweis:</strong> Αυτοί οι αριθμοί πιστωτικών καρτών θα επιστρέψουν άρνηση σε ζωντανή λειτουργία, και αποδοχή σε δοκιμαστική λειτουργία.  Κάθε μελλοντική ημερομηνία μπορεί να χρησιμοποιηθεί σαν ημερομηνία λήξης και κάθε τριψήφιος ή τετραψήφιος (AMEX) αριθμός μπορεί να χρησιμοποιηθεί σαν κωδικός CCV.<br /><br /><strong>Αριθμοί Πιστωτικών Καρτών Αυτόματης Απόρριψης:</strong><br /><br />Αριθμός: 4222222222222<br /><br />Αυτός ο αριθμός πιστωτικής κάρτας μπορεί να χρησιμοποιηθεί για τη λήψη μηνυμάτων απόρριψης για δοκιμαστικούς σκοπούς.<br /><br />'));

  if (MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Είσοδος Εμπόρου</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br />Δοκιμαστικές Πληροφορίες:<br /><b>Αριθμοί Πιστωτικών Καρτών Αυτόματης Αποδοχής:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Σημέιωση:</b> Αυτοί οι αριθμοί πιστωτικών καρτών θα επιστρέψουν άρνηση σε ζωντανή λειτουργία, και αποδοχή σε δοκιμαστική λειτουργία.  Κάθε μελλοντική ημερομηνία μπορεί να χρησιμοποιηθεί σαν ημερομηνία λήξης και κάθε τριψήφιος ή τετραψήφιος (AMEX) αριθμός μπορεί να χρησιμοποιηθεί σαν κωδικός CCV.<br /><br /><b>Αριθμοί Πιστωτικών Καρτών Αυτόματης Απόρριψης:</b><br /><br />Card #: 4222222222222<br /><br />Αυτός ο αριθμός πιστωτικής κάρτας μπορεί να χρησιμοποιηθεί για τη λήψη μηνυμάτων απόρριψης για δοκιμαστικούς σκοπούς.<br /><br />' : ''));
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Κάντε κλικ εδώ για να δημιουργήσετε ένα λογαριασμό</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Περιοχή Εμπόρων Authorize.net</a><br /><br /><strong>Απαιτήσεις:</strong><br /><hr />*<strong>Λογαριασμός Authorize.net</strong> (δείτε το σύνδεσμο παραπάνω για δημιουργία λογαριασμού)<br />*<strong>Το πακέτο CURL είναι απαραίτητο </strong> και πρέπει να έχει μεταγλωττιστεί με υποστήριξη για SSL στην PHP από τον παροχέα σας<br />*<strong>Το όνομα χρήστη και το κλειδί συναλλαγών του Authorize.net</strong> είναι διαθέσιμα από την Περιοχή Εμπόρων');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'Οι συναρτήσεις CURL δεν βρέθηκαν - απαραίτητες για το άρθρωμα πληρωμής Authorize.net AIM');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Πιστωτική Κάρτα');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Τύπος Πιστωτικής Κάρτας:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Όνομα κατόχου:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Αριθμός Πιστωτικής Κάρτας:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Ημερομηνία Λήξης:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'Κωδικός Ασφαλείας: (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . 'Τι είναι αυτό?' . '</a>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', 'Τι είναι αυτό?');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* Το όνομα του κατόχου της κάρτας πρέπει να είναι τουλάχιστον ' . CC_OWNER_MIN_LENGTH . ' χαρακτήρες.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Ο αριθμός πιστωτικής κάρτας πρέπει να είναι τουλάχιστον ' . CC_NUMBER_MIN_LENGTH . ' χαρακτήρες.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Ο τριψήφιος ή τετραψήφιος αριθμός CVV μπορεί να εισαχθεί από το πίσω μέρος της κάρτας.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Η κάρτα σας δεν έχει πιστοποιηθεί για αυτό το λόγο. Παρακαλούμε διορθώστε τις πληροφορίες και δοκιμάστε ξανά ή επικοινωνήστε μαζί μας για περισσότερη βοήθεια.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Σφάλμα Πιστωτικής Κάρτας!');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_AUTHENTICITY_WARNING', 'ΠΡΟΣΟΧΗ: Πρόβλημα ασφάλειας κατακερματισμού. Παρακαλούμε επικοινωνήστε άμεσα με τον ιδιοκτήτη του καταστήματος. Η παραγγελία σας *δεν* πιστοποιήθηκε πλήρως.');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'Επιστροφή Χρημάτων');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'Σφάλμα: Ζητήσατε επιστροφή χρημάτων αλλά δεν επιλέξατε το κουτάκι επιβεβαίωσης.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'Σφάλμα: Ζητήσατε επιστροφή χρημάτων αλλά δώσατε ένα μη έγκυρο ποσό.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'Σφάλμα: Ζητήσατε επιστροφή χρημάτων αλλά δεν δώσατε τα τελευταία 4 ψηφία του αριθμού πιστωτικής κάρτας.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'Η επιστροφή χρημάτων ξεκίνησε. Αναγνωριστικό Συναλλαγής: %s - Κωδικός Πιστοποίησης: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'Σφάλμα: Ζητήσατε δέσμευση χρημάτων αλλά δεν επιλέξατε το κουτάκι επιβεβαίωσης.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'Δέσμευση Χρημάτων');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', 'Σφάλμα: Ζητήσατε δέσμευση χρημάτων αλλά πρέπει να εισάγετε ένα ποσό.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'Σφάλμα: Πρέπει να ορίσετε ένα αναγνωριστικό συναλλαγής.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'Η δέσμευση χρημάτων ξεκίνησε. Ποσό: %s.  Αναγνωριστικό Συναλλαγής: %s - Κωδικός Πιστοποίησης: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Ακύρωση');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'Σφάλμα: Ζητήσατε μια ακύρωση αλλά δεν επιλέξατε το κουτάκι επιβεβαίωσης.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Η ακύρωση ξεκίνησε. Αναγνωριστικό Συναλλαγής: %s - Κωδικός Πιστοποίησης: %s ');
  
  
  
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>Επιστροφή Χρημάτων Συναλλαγών</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Μπορείτε να επιστρέψετε χρήματα στην πιστωτική κάρτα του πελάτη εδώ:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Επιλέξτε αυτό το κουτί για να επιβεβαιώσετε την προθεσή σας: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Εισάγετε το ποσό που επιθυμείτε να επιστρέψετε');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Εισάγετε τα τελευταία 4 ψηφία της πιστωτικής κάρτας στην οποία επιστρέφετε χρήματα.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Εισάγετε το πρωτότυπο αναγνωριστικό συναλλαγής:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Σημειώσεις (θα εμφανίζονται στο Ιστορικό Παραγγελιών):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Η επιστροφή χρημάτων εκδόθηκε');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'Μπορείτε να επιστρέψετε χρήματα για μια παραγγελία μέχρι το ποσό που έχει ήδη δεσμευθεί. Πρέπει να δώστε τα τελευταία 4 ψηφία της πιστωτικής κάρτας που χρησιμοποιήθηκε στην αρχική παραγγελία.<br />Οι επιστροφές χρημάτων πρέπει να εκδίδονται σε διάστημα 120 από την ημερομηνία της αρχικής συναλλαγής.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Δέσμευση Χρημάτων Συναλλαγών</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'Μπορείτε να δεσμέυσετε χρήματα τα οποία ήταν προηγουμένως εξουσιοδοτημένα εδώ:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Εισάγετε το ποσό προς δέσμευση: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Επιλέξτε αυτό το κουτί για να επιβεβαιώσετε την προθεσή σας: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Εισάγετε το πρωτότυπο αναγνωριστικό συναλλαγής: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Σημειώσεις (θα εμφανίζονται στο Ιστορικό Παραγγελιών):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Τακτοποιήθηκαν τα χρήματα τα οποία ήταν προηγουμένως εξουσιοδοτημένα.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Οι δεσμέυσεις πρέπει να γίνονται σε διάστημα 30 ημερών από την αρχική εξουσιοδότηση. Μπορείτε να δεσμέυσετε μια παραγγελία μόνο μια φορά. <br />Παρακαλούμε να είστε σίγουροι οτι το ποσό που ορίσατε είναι σωστό.<br />Εάν αφήσετε το πεδίο του ποσού άδειο, θα χρησιμοποιηθεί το αρχικό ποσό.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Ακύρωση συναλλαγών</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Μπορείτε να ακυρώσετε μια συναλλαγή η οποία δεν έχει τακτοποιηθεί ακόμα:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Επιλέξτε αυτό το κουτί για να επιβεβαιώσετε την προθεσή σας:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Σημειώσεις (θα εμφανίζονται στο Ιστορικό Παραγγελιών):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Η συναλλαγή ακυρώθηκε');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Οι ακυρώσεις πρέπει να ολοκληρώνονται πριν την τακτοποίηση της αρχικής συναλλαγής στην ημερήσια δέσμη συναλλαγών.');

