<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/download.php                  *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Proszę załadować swoje pliki do następujących katalogów: <br />pliki - ".e_FILE."downloads
<br />obrazki - ".e_FILE."downloadimages
<br />miniaturki obrazków - ".e_FILE."downloadthumbs .
<br /><br />
Aby dodać plik do pobrania, najpierw utwórz dział główny, następnie utwórz podkategorię do utworzonego działu głównego, po wykonaniu przedstawionych czynności będziesz mógł udostępnić pliki do pobrania.";
$ns -> tablerender("Download", $text);