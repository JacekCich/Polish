<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/notify.php                    *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Powiadomienia email będą rozsyłane, gdy na Twojej stronie zajdzie jakieś ściśle określone wydarzenie.<br /><br />
Na przykład, ustawienie powiadomienia o <i>Adresach IP zablokowanych w wyniku ataków typu flood</i> dla grupy <i>Adminstratorzy</i> spowoduje wysłanie emaili do wszystkich administratorów, kiedy Twojej stronie będzie groziło zapchanie w wyniku ataku typu flood.<br /><br />
Możesz również, jako inny przykład, ustawić powiadomienie o <i>Nowych pozycjach dodanych przez administratorów</i> dla grupy <i>Zarejestrowani</i>, co spowoduje wysłanie emaili o nowościach dodanych do serwisu do wszystkich użytkowników serwisu.<br /><br />
Jeśli chcesz, aby powiadomienia email były wysyłane na alternatywny adres email - zaznacz opcję <i>Email</i> i wpisz w pole docelowy adres email.";

$ns -> tablerender("Notify Help", $text);