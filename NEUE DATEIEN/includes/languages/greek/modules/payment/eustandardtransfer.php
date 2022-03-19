<?php
/**
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: eustandardtransfer.php 574 2015-12-23 20:36:14 webchills $
*/
define('MODULE_PAYMENT_EUTRANSFER_TEXT_TITLE', 'Προπληρωμή/Κατάθεση σε τραπεζικό λογαριασμό');

define('MODULE_PAYMENT_EUTRANSFER_TEXT_DESCRIPTION', 
'<div class="eustandardtransferdescription">Παρακαλούμε χρησιμοποιήστε τις παρακάτω πληροφορίες για την κατάθεση του συνολικού χρηματικού ποσού της αξίας της παραγγελίας σας:' .
'<br />Τράπεζα:  ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKNAM) .
'<br />Κάτοχος Λογαριασμού: ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCNAM) . 
'<br />IBAN:    ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCIBAN) .
'<br />BIC/SWIFT:   ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKBIC) .
'<br />Η παραγγελία σας θα αποσταλεί μόλις ολοκληρωθεί η πληρωμή στον παραπάνω τραπεζικό λογαριασμό.</div>');
   
define('MODULE_PAYMENT_EUTRANSFER_TEXT_EMAIL_FOOTER', 
"Παρακαλούμε χρησιμοποιήστε τις παρακάτω πληροφορίες για την κατάθεση του συνολικού χρηματικού ποσού της αξίας της παραγγελίας σας:\n" .
"\nΤράπεζα:  " . MODULE_PAYMENT_EUTRANSFER_BANKNAM .
"\nΚάτοχος Λογαριασμού: " . MODULE_PAYMENT_EUTRANSFER_ACCNAM . 
"\nIBAN:    " . MODULE_PAYMENT_EUTRANSFER_ACCIBAN .
"\nBIC/SWIFT:   " . MODULE_PAYMENT_EUTRANSFER_BANKBIC . 
"\n\nΗ παραγγελία σας θα αποσταλεί μόλις ολοκληρωθεί η πληρωμή στον παραπάνω τραπεζικό λογαριασμό.");