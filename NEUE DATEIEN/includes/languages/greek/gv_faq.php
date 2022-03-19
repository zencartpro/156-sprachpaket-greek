<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_faq.php 294 2015-12-23 19:28:14Z webchills $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' Συχνές Ερωτήσεις');
define('HEADING_TITLE', TEXT_GV_NAME . ' Συχνές Ερωτήσεις');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Πως να παραγγείλετε ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Πως θα στείλω ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Αγορές με ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Εξαργυρώνοντας από ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Όταν συμβαίνουν προβλήματα</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Πώς να παραγγείλετε ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' πωλούνται στο κατάστημά μας όπως και όλα τα υπόλοιπα προϊόντα. Μπορείτε επομένως, να τις αγοράσετε χρησιμοποιόντας κάποια από τις μεθόδους που σας παρέχει το ηλεκτρονικό μας κατάστημα.
  Εφόσον αγοράσετε και πληρώσετε την ' . TEXT_GV_NAME . ', η αξία της θα προστεθεί στον Λογαριασμό σας. 
  Εάν έχετε χρήματα στην ' . TEXT_GV_NAME . ' σας, θα παρατηρήσετε ότι το ποσό τώρα εμφανίζεται στο πλαίσιο του καλαθιού αγορών σας, και επιπλέον παρέχει ένα σύνδεσμο σε μια σελίδα όπου μπορείτε να στείλετε την ' . TEXT_GV_NAME . ' σε κάποιον μέσω E-Mail.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Πως να στείλετε ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Για να στείλετε ' . TEXT_GV_NAME . ' θα πρέπει να πάτε στην σελίδα ' . TEXT_GV_NAME . ' . Μπορείτε να βρείτε το σύνδεσμο για αυτή την σελίδα στο πλαίσιο του καλαθιού αγορών σας.
   Όταν στέλνετε μία ' . TEXT_GV_NAME . ', θα πρέπει να ορίσετε τα παρακάτω:<br />
   Το <strong>Όνομα</strong> του ατόμου στο οποίο στέλνετε την ' . TEXT_GV_NAME . '.<br />
   Την <strong>Δι/νση E-Mail</strong> του ατόμου στο οποίο στέλνετε την ' . TEXT_GV_NAME . '.<br />
   Το <strong>Ποσό</strong> που θέλετε να στείλετε.<br /> (Σημειώστε ότι δεν χρειάζεται να στείλετε όλο το ποσό που έχετε διαθέσιμο στην ' . TEXT_GV_NAME . ' σας.)<br /><br />
   Επιπρόσθετα θα λάβετε ένα σύντομο μήνυμα στο E-Mail σας.
   Παρακαλούμε εξασφαλίστε ότι έχετε συμπληρώσει όλες τις πληροφορίες σωστά, αν και θα σας δοθεί η ευκαιρία να τις αλλάξετε όσο θέλετε προτού αυτό το μήνυμα πραγματικά σταλεί.');

  break;
  case '3':
  define('SUB_HEADING_TITLE','Αγορές με ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Εάν έχετε χρήματα στην ' . TEXT_GV_NAME . ' , μπορείτε να τα χρησιμοποιήσετε για να
  αγοράσετε άλλα είδη από το καταστημά μας. Στο ταμείο, ένα εξτρά πλαίσιο θα εμφανιστεί. Εισάγετε το ποσό προς εξαργύρωση από τα χρήματα σας στην ' . TEXT_GV_NAME . ' .
  Παρακαλούμε σημειώστε οτι θα πρέπει να επιλέξετε μια εναλλακτική μέθοδο πληρωμής εάν δεν υπάρχουν αρκετά χρήματα στην ' . TEXT_GV_NAME . ' για να καλύψουν το κόστος των αγορών σας.
  Εάν έχετε περισσότερα χρήματα στην ' . TEXT_GV_NAME . ' από το κόστος των αγορών σας τότε το υπόλοιπο θα παραμείνει στην ' . TEXT_GV_NAME . ' για μελλοντική χρήση.');

  break;
  case '4':
  define('SUB_HEADING_TITLE','Εξαργυρώνοντας από ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Εάν λάβετε μία ' . TEXT_GV_NAME . ' μέσω ηλεκτρονικού ταχυδρομείου θα περιέχει λεπτομέρειες σχετικά με το ποιος σας έστειλε
  την ' . TEXT_GV_NAME . ', και πιθανώς ένα μικρό μήνυμα από αυτόν. Το μήνυμα ηλεκτρονικού ταχυδρομείου θα περιέχει επίσης την ' . TEXT_GV_NAME . ' και θα περιλαμβάνεται και ο ' . TEXT_GV_REDEEM . '. Πιθανώς είναι καλή ιδέα να εκτυπώσετε αυτό το μήνυμα για μελλοντική χρήση.<br /><br /><u>Μπορείτε τώρα να εξαργυρώσετε την ' . TEXT_GV_NAME . ' με
  δύο τρόπους:</u><br /><br />
  1. Κάνοντας κλικ στο σύνδεσμο που περιέχεται στο E-Mail, για αυτό το συγκεκριμένο σκοπό.
  Αυτό θα σας μεταφέρει στη σελίδα εξαργύρωσης της ' . TEXT_GV_NAME . 'ς . Έπειτα θα σας ζητηθεί να δημιουργήσετε ένα λογαριασμό, 
  προτού η ' . TEXT_GV_NAME . ' επικυρωθεί και τοποθετηθεί στον λογαριασμό ' . TEXT_GV_NAME . 'ς και είναι έτοιμη να την εξαργυρώσετε ή να την κάνετε ότι θέλετε.<br /><br />
  2. Κατά τη διάρκεια της διαδικασίας του ταμείου, στην ίδια σελίδα όπου επιλέγετε μέθοδο πληρωμής θα υπάρχει ένα πεδίο για να εισαχθεί ο ' . TEXT_GV_REDEEM . '. Κατόπιν και αφού εισαχθεί ο ' . TEXT_GV_REDEEM . ' εκεί, 
  κάντε κλικ στο κουμπί "Εξαργύρωση". Ο κωδικός θα επικυρωθεί και το ποσό θα προστεθεί στον λογαριασμό της ' . TEXT_GV_NAME . 'ς . Μπορείτε έπειτα να χρησιμοποιήσετε αυτό το ποσό για να αγοράσετε οποιοδήποτε είδος από το καταστημά μας.');

  break;
  case '5':
  define('SUB_HEADING_TITLE','Όταν συμβαίνουν προβληματα.');
  define('SUB_HEADING_TEXT','Για τυχόν απορίες σχετικά με το σύστημα της ' . TEXT_GV_NAME . 'ς, παρακαλούμε επικοινωνήστε 
  μέσω του E-Mail <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS .'">' . STORE_OWNER_EMAIL_ADDRESS . '</a> με την εξυπηρέτηση πελατών. Παρακαλούμε εξασφαλίστε ότι θα παρέχετε όσο το δυνατόν περισσότερες πληροφορίες στο ηλεκτρονικό μήνυμα μέσω του E-Mail που θα μας στείλετε. ');


  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Παρακαλούμε επιλέξτε μια από τις παραπάνω ερωτήσεις.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Παρακαλούμε εισάγετε τον κωδικό εξαργύρωσης της ' . TEXT_GV_NAME . 'ς : ');
  define('TEXT_GV_REDEEM_ID', 'Κωδικός:');
