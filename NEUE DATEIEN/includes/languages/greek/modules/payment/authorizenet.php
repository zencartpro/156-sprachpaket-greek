<?php
/**
 * Authorize.net SIM
 *
  * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @translator: cyaneo/hugo13/wflohr/maleborg	http://www.zen-cart-pro.at	2007-01-03
 * @version $Id: authorizenet.php 627 2010-08-30 15:05:14Z webchills $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Πιστωτική κάρτα');  // Payment option title as displayed to the customer


  if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Είσοδος εμπόρου</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Produktion' ? '<br /><br />Δοκιμή πληροφοριών:<br /><b>Αριθμοί πιστωτικών καρτών αυτόματης αποδοχής:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><strong>Σημείωση:</strong> Αυτοί οι αριθμοί πιστωτικών καρτών θα επιστρέψουν άρνηση σε ζωντανή λειτουργία, και αποδοχή σε δοκιμαστική λειτουργία. Κάθε μελλοντική ημερομηνία μπορεί να χρησιμοποιηθεί σαν ημερομηνία λήξης και κάθε τριψήφιος ή τετραψήφιους (AMEX) αριθμός μπορεί να χρησιμοποιηθεί για τον κωδικό CVV.<br /><br /><strong>Αριθμοί πιστωτικών καρτών αυτόματης απόρριψης:</strong><br /><br />Card #: 4222222222222<br /><br />Αυτός ο αριθμός πιστωτικής κάρτας μπορεί να χρησιμοποιηθεί για μηνύματα απόρριψης για δοκιμαστικούς σκοπούς.<br /><br />' : ''));
  } else { 
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Κάντε κλικ εδώ για να δημιουργήσετε ένα λογαριασμό</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Κάντε κλικ για είσοδο στην περιοχή εμπόρων</a><br /><br /><strong>Απαιτήσεις:</strong><br /><hr />*<strong>Λογαριαμός Authorize.net</strong> (Χρησιμοποιήστε τον σύνδεσμο παραπάνω για δημιουργία λογαριασμού)<br />*<strong>Το όνομα χρήστη και το κλειδί συναλλαγών του Authorize.net</strong>');
  }
  
  
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION','Δοκιμή Πιστωτικής κάρτας Info:<br /><br />CC#: 4111111111111111<br />Ημερομηνία λήξης: κάθε');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Τύπος:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Ιδιοκτήτης πιστωτικής κάρτας:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Αριθμός πιστωτικής κάρτας:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Ημερομηνία λήξης πιστωτικής κάρτας:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'Αριθμός CVV:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'Τι είναι αυτό?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Το όνομα του ιδιοκτήτη της κάρτας θα πρέπει να είναι τουλάχιστον ' . CC_OWNER_MIN_LENGTH . ' χαρακτήρες.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Ο αριθμός της κάρτας θα πρέπει να είναι τουλάχιστον ' . CC_NUMBER_MIN_LENGTH . ' χαρακτήρες.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* Ο τριψήφιος ή τετραψήφιος αριθμός CVV μπορεί να εισαχθεί από το πίσω μέρος της κάρτας.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Παρουσιάστηκε ένα σφάλμα κατά την επεξεργασία της κάρτας σας. Παρακαλούμε δοκιμάστε ξανά.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Η κάρτα σας απορρίφθηκε. Παρακαλούμε δοκιμάστε άλλη κάρτα ή επικοινωνήστε με την τράπεζα σας για περισσότερες πληροφορίες.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Σφάλμα Πιστωτικής κάρτας!');
