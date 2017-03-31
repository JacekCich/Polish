<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/links.php                     *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Tutaj możesz dodać wszystkie linki związane bezpośrednio z Twoim serwisem. Dodane linki zostaną wyświetlone w głównym menu strony. Jeśli chcesz utworzyć stronę z linkami do zewnętrznych serwisów użyj plugina <i>Links Page</i> (Strona linków).
<br />
";
$ns -> tablerender("Linki", $text);