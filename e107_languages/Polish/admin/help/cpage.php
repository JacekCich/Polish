<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/cpage.php                     *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Na tej stronie możesz tworzyć własne menu oraz własne strony wraz z ich zawartością.<br />Menu oraz strony są powiązane, tak więcmasz łatwy dostęp do nich w każdej chwili. ";
// $text .= "Please see <a href='http://docs.e107.org/Using Custom Pages and Custom Menus'>http://docs.e107.org/Using Custom Pages and Custom Menus</a> for an explanation of all the features.";

$ns -> tablerender('Własne menu oraz strony', $text);