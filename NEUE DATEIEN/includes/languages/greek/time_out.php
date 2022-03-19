<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 
 * @version $Id: time_out.php 628 2013-04-13 12:05:14Z webchills $
 */

define('NAVBAR_TITLE','Λήξη χρόνου σύνδεσης');
define('HEADING_TITLE','Ωχ! Η σύνδεση σας έληξε.');
define('HEADING_TITLE_LOGGED_IN', 'Συγνώμη, αλλά δεν σας επιτρέπεται να πραγματοποιήστε την συγκεκριμένη ενέργεια. ');
define('TEXT_INFORMATION','Μας συγχωρείτε, αλλά για λόγους ασφαλείας αναγκαστήκαμε να διακόψουμε τη σύνδεσή σας,
για να αποτρέψουμε μη εξουσιοδοτημένα άτομα να έχουν πρόσβαση στον λογαριασμό σας.
  <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Είσοδος</a>
  Το καλάθι σας θα αποκατασταθεί'.
  (DOWNLOAD_ENABLED == 'true' ? ', είχατε μια μεταφόρτωση και θέλετε να τη βρείτε' : '') . ',
  παρακαλούμε πηγαίνετε στη σελίδα <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Ο λογαριασμός μου</a> για να δείτε την παραγγελία σας.');
define('TEXT_INFORMATION_LOGGED_IN', 'Είστε συνδεδεμένος με το λογαριασμό σας και μπορείτε να συνεχίσετε τις αγορές σας. Παρακαλώ επιλέξτε ένα μενού.');
define('HEADING_RETURNING_CUSTOMER', 'Είσοδος');
define('TEXT_PASSWORD_FORGOTTEN', 'Ξεχάσατε τον Κωδικό σας?');
