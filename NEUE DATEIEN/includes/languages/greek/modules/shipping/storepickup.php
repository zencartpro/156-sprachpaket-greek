<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: storepickup.php 656 2014-02-22 08:45:57Z webchills $
 */

define('MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE', 'Παραλαβή από το κατάστημα');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION', 'Παραλαμβάνετε την παραγγελία σας από το κατάστημα μας');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_WAY', 'Παραλαμβάνετε την παραγγελία σας από το κατάστημα μας');

//Hier haben Sie die Möglichkeit, die Ortsangaben für die Abholung je nach Sprache eigens zu definieren. Das Setting in der Adminsitartion bei der Selbstabholung greift nur für die Standardsprache des Shops.
//Beispiele:
// Demogasse 17 - 1010 Wien;Beispielweg 15 - 8020 Graz<br/>
// Demogasse 17 - 1010 Wien,4.00;Beispielweg 15 - 8020 Graz,5.00<br/>
// Demogasse 17 - 1010 Wien,4.00;Beispielweg 15 - 8020 Graz,0.00<br/>
// Wenn Sie den Eintrag leer lassen, dann werden die unter Module > Versandarten > Selbstabholung eingetragenen Werte verwendet
// HINWEIS: Wenn Sie nur eine Sprache verwenden, oder keine multilinguale Darstellung dieser Ortsangaben brauchen, dann tragen Sie hier NICHTS ein, es werden sonst nie die Admineinstellungen verwendet. Was Sie hier eintragen überschreibt Ihre Konfiguration im Versandmodul Selbstabholung!
define('MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS', "");
