<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/administrator.php             *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Pomoc dla strony Administratora";
$text = "Użyj tej strony, aby edytować preferencje lub usunąć administratorów serwisu. Administrator będzie miał jedynie pozwolenie na dostęp do funkcji, które są zaznaczone.<br /><br />
Aby utworzyć nowego administratora, przejdź do strony konfiguracji użytkownika i zaktualizuj istniejącego użytkownika do statusu admina.";
$ns -> tablerender($caption, $text);