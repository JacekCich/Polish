<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/filemanager.php               *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Z poziomu tej strony możesz zarządzać plikami w swoich katalogach plików. Jeśli otrzymasz komunikat błędu o uprawnieniach podczas usiłowania przesyłania plików do określonego katalogu, ustaw CHMOD wskazanego folderu na wartość 777.";
$ns -> tablerender("Menedżer plików", $text);