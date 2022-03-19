<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: rl.vat_info.php 657 2014-04-12 15:45:57Z webchills $
 */
 
define('VAT_SHOW_TEXT_VERSANDKOSTENFREI','<br/><span class="taxAddon">περιέχει %s Φ.Π.Α.</span>');

if(DISPLAY_PRICE_WITH_TAX=='true')
define('VAT_SHOW_TEXT','<br/><span class="taxAddon">περιέχει %s Φ.Π.Α.<br/> δεν περιέχει <a href="' . zen_href_link(FILENAME_SHIPPING) . '">μεταφορικά</a></span>');
else
define('VAT_SHOW_TEXT','<br/><span class="taxAddon">δεν περιέχει %s Φ.Π.Α.<br/> δεν περιέχει <a href="' . zen_href_link(FILENAME_SHIPPING) . '">μεταφορικά</a></span>');