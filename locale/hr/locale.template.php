<?php 

$setHTMLLanguageCode = "hr";

$locale['title']  =  "Vaša email adresa: ";

$locale['HowManyMailArrivedBevore']  = "postoje "; //Counter
$locale['MailHaveBeArrivedAfter']  = " nove mailove.";

$locale['MailArrived']  = "stigli su <strong>novi mailovi</strong>";

$locale['TranslationForRefresh']  = "Ažurirati!";

$locale['MailboxReady']  =  "Vaš spremnik za jednokratnu upotrebu je spreman.";

$locale['TranslationforCopy']  =  "Kopirati";

$locale['ChangeMailUsername']  = "Promijeniti adresu ";
$locale['SetToRandom']  = "Generirajte slučajnu e-adresu";
$locale['UseOwnUsername']  = "ili izradite vlastitu adresu:";

$locale['TranslationForDomain']  = "domena";

$locale['OpenMailbox']  = "otvoreni poštanski sandučić";

$locale['TranslationForDownload']  =  "preuzimanje datoteka";
$locale['TranslationForDelete']  =  "Čisto";

$locale['EmptyMailbox']  = "<p> Poštanski sandučić je prazan.  Sve dok je ova stranica otvorena, automatski će tražiti nove e-adrese ... </p> ";

$onlynumber['delete_messages_older_than'] = preg_replace('![^0-9]!', '', $config['delete_messages_older_than']); 
$locale['QuickSummary']  = "Ovo je usluga jednosmjernog poštanskog sandučića.  Tko zna vaše korisničko ime, može čitati vaše e-mailove.  <br/> E-adrese se automatski i nepovratno brišu nakon ". $onlynumber['delete_messages_older_than']."  Dana.";
$locale['collapse']  = "Više informacija";
$locale['long-about-1']  = "<p class=\"text-justify\">Ovaj jednokratni poštanski sandučić sačuvat će vaš glavni poštanski sandučić bez neželjene pošte..</p>";
$locale['long-about-2']  = "<p class=\"text-justify\">ne vjerujete i ne želite koristiti svoju glavnu adresu e-pošte.Kad završite, jednostavno možete zaboraviti na poštanski sandučić. Sav neželjeni sadržaj ostaje ovdje i ne ispunjava vaš glavni poštanski sandučić.</p>";
$locale['long-about-3']  = "<p class=\"text-justify\">Odaberite adresu koju želite koristiti i primljena e-pošta će se automatski prikazati.Nema registracije i lozinki.  Ako znate adresu, možete pročitati e-poštu.<strong>U osnovi su sve e-adrese javne.  Stoga ga nemojte koristiti za osjetljive podatke.</strong></p>";

$locale['imprintanddisclaimer']  = "Pravne informacije - otisak, izjava o odricanju odgovornosti i još mnogo toga...";

$locale['ourdomains'] = "Pregled dostupnih domena";

$locale['success'] = "Uspješno";
$locale['copied'] = "Kopirano!";
$locale['show'] = "Pokazati";

$locale['adsLocale'] = "Oglas:";

$locale['Copyright']  = "<small><a href=\"https://github.com/pfeifferch/disposable-mailbox\"><strong>disposable-mailbox</strong></a> ".$config['versionnumber']." (HR)</small>";

?>
