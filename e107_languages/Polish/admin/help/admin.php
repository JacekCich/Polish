<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/admin.php                     *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Kokpit";
$text = "Ta strona oferuje ci przegląd informacji o możliwościach serwisu.<br /><br />";

if(e107::getPref('admincss')=='admin_dark.css' && deftrue('BOOTSTRAP') !== 3)
{
	$text .= "<small>Zbyt ciemny motyw? <a class='btn btn-default btn-xs btn-mini btn-inverse' href='".e_ADMIN."theme.php?mode=admin'>Zmień to tutaj</a></small>";

}

e107::getRender()->tablerender($caption, $text);

?>