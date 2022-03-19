<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 628 2013-07-22 08:05:14Z webchills $
 */
 
 define('NAVBAR_TITLE', 'Δημιουργία λογαριασμού');
 
 define('HEADING_TITLE', 'Οι πληροφορίες του λογαριασμού μου');
 
 define('TEXT_ORIGIN_LOGIN', '<strong class="note">ΣΗΜΕΙΩΣΗ:</strong> Εάν έχετε ήδη ένα λογαριασμό σε μας, παρακαλούμε συνδεθείτε από την <a href="%s">σελίδα εισόδου</a>.');
 
 define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Σας ευχαριστούμε, το αίτημά της εγγραφής σας έχει υποβληθεί προς εξέταση.');
 
 
 // greeting salutation
define('EMAIL_SUBJECT', 'Καλώς ήρθατε στο ' . STORE_NAME . '!');
define('EMAIL_GREET_MR', 'Αγαπητέ Κύριε. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Αγαπητή Κυρία. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Αγαπητή(ε) Κυρία/Κύριε  %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Καλωσορίσατε στο <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Συγχαρητήρια! Κάνετε την επισκεψή σας στο καταστημά μας μια ευχάριστη εμπειρία, χρησιμοποιήστε το Εκπτωτικό Κουπόνι που δημιουργήθηκε αποκλειστικά για εσάς!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Για να χρησιμοποιήσετε το Εκπτωτικό Κουπόνι, εισάγετε τον κωδικό στο ταμείο. ' . TEXT_GV_REDEEM . ' <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Το κουπόνι είναι έγκυρο μεταξύ %s και %s</p>');
define('EMAIL_GV_INCENTIVE_HEADER', 'Μόνο επειδή μας επισκεφθήκατε σήμερα, σας στείλαμε ένα ' . TEXT_GV_NAME . ' για %s!' . "\n\n");
define('EMAIL_GV_REDEEM', 'Το ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' σας έχει αξία: %s ' . "\n\n" . 'Μπορείτε να εισάγετε τον κωδικό ' . TEXT_GV_REDEEM . ' στο ταμείο, αφού κάνετε τις επιλογές σας στο κατάστημα.' . "\n\n");
define('EMAIL_GV_LINK', ' Ή, μπορείτε να το εξαργυρώσετε στον παρακάτω σύνδεσμο: ' . "\n\n");
// GV link will automatically be included before this line
define('EMAIL_GV_LINK_OTHER','Μόλις εισάγετε το ' . TEXT_GV_NAME . ' στο λογαριασμό σας, μπορείτε να χρησιμοποιήσετε το ' . TEXT_GV_NAME . ' για εσάς, ή να το στείλετε σε έναν φίλο!' . "\n\n");
define('EMAIL_TEXT', 'Με τον λογαριασμό σας, μπορείτε να λάβετε μέρος στις διάφορες υπηρεσίες μας που σας προσφέρουμε.' . "\n\n" . '
Αυτές οι υπηρεσίες περιλαμβάνουν:' . "\n\n" . '
<strong>Μόνιμο καλάθι:' . "\n" . '</strong>Κάθε προϊόν που προστίθεται στο καλάθι σας παραμένει εκεί,' . "\n" . 'μέχρι να το αφαιρέσετε ή προχωρήσετε στο ταμείο.' . "\n\n" . '
<strong>Ευρετήριο διευθύνσεων:</strong>' . "\n" . 'Μπορούμε τώρα να παραδώσουμε τα προϊόντα σας σε άλλη διεύθυνση διαφορετική από τη δική σας!.' . "\n" . 'Αυτή η υπηρεσία είναι εξαιρετική για να στέλνετε δώρα γενεθλίων απευθείας στους εορτάζοντες.' . "\n\n" . '
<strong>Ιστορικό παραγγελιών:</strong>' . "\n" . 'Δείτε το ιστορικό των παραγγελιών σας!' . "\n" . 'Ιδανικό για να π.χ. δείτε και να τυπώσετε την απόδειξη/τιμολόγιο ή να έχετε μια συνολική εικόνα του λογαριασμού σας.' . "\n\n" . '
<strong>Σχόλια προϊόντων:</strong>' . "\n" . 'Μοιραστείτε την γνώμη σας για τα προϊόντα με τους άλλους πελάτες μας!' . "\n\n\n" . '
');
define('EMAIL_CONTACT', 'Για βοήθεια σχετικά με κάποια από τις διαδικτυακές μας υπηρεσίες, παρακαλούμε στείλτε μήνυμα στο: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . '</a>' . "\n\n\n" . '');
define('EMAIL_GV_CLOSURE','Με εκτίμηση,' . "\n\n" . STORE_OWNER . "\nο ιδιοκτήτης του καταστήματος\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers 
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Αυτή η διεύθυνση ηλεκτρονικού ταχυδρομείου μας δόθηκε από εσάς ή από κάποιον πελάτη μας. Εάν δεν κάνατε εσείς εγγραφή για λογαριασμό, ή αισθάνεστε ότι λάβατε αυτό το μήνυμα κατά λάθος, παρακαλούμε στείλτε ένα μήνυμα στο %s ');
