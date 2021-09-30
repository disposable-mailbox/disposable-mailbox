<?php
$awfnDE = "<p><a href=\"https://info.disposable-mailbox.eu/de/\" target=\"awfn\">&Uuml;ber D-M</a> - <a href=\"https://info.disposable-mailbox.eu/de/about.html\" target=\"awfn\">So funktioniert's</a> - <a href=\"https://info.disposable-mailbox.eu/de/why.html\" target=\"awfn\">Warum Wegwerf-eMails?</a> - <a href=\"https://info.disposable-mailbox.eu/de/FAQ.html\" target=\"awfn\">FAQ</a> - <a href=\"https://info.disposable-mailbox.eu/de/news.html\" target=\"awfn\">News</a></p>";
$awfnEN = "<p><a href=\"https://info.disposable-mailbox.eu/en/\" target=\"awfn\">About D-M</a> - <a href=\"https://info.disposable-mailbox.eu/en/about.html\" target=\"awfn\">How it works</a> - <a href=\"https://info.disposable-mailbox.eu/en/why.html\" target=\"awfn\">Why temporary eMails?</a> - <a href=\"https://info.disposable-mailbox.eu/en/FAQ.html\" target=\"awfn\">FAQ</a> - <a href=\"https://info.disposable-mailbox.eu/en/news.html\" target=\"awfn\">News</a></p>";
$awfnES = "<p><a href=\"https://info.disposable-mailbox.eu/es/\" target=\"awfn\">Breve información D-M</a> - <a href=\"https://info.disposable-mailbox.eu/es/about.html\" target=\"awfn\">Así es como funciona</a> - <a href=\"https://info.disposable-mailbox.eu/es/why.html\" target=\"awfn\">¿Por qué tirar los correos electrónicos?</a> - <a href=\"https://info.disposable-mailbox.eu/es/FAQ.html\" target=\"awfn\">Preguntas más frecuentes</a> - <a href=\"https://info.disposable-mailbox.eu/es/news.html\" target=\"awfn\">Noticias</a></p>";
$awfnHR = "<p><a href=\"https://info.disposable-mailbox.eu/hr/\" target=\"awfn\">Kratke informacije</a> - <a href=\"https://info.disposable-mailbox.eu/hr/about.html\" target=\"awfn\">Ovako to djeluje</a> - <a href=\"https://info.disposable-mailbox.eu/hr/why.html\" target=\"awfn\">Zašto baciti mailove?</a> - <a href=\"https://info.disposable-mailbox.eu/hr/FAQ.html\" target=\"awfn\">Pitanja</a> - <a href=\"https://info.disposable-mailbox.eu/hr/news.html\" target=\"awfn\">Vijesti</a></p>";
$awfnNL = "<p><a href=\"https://info.disposable-mailbox.eu/nl/\" target=\"awfn\">Beknopte informatie D-M</a> - <a href=\"https://info.disposable-mailbox.eu/nl/about.html\" target=\"awfn\">Dit is hoe het werkt</a> - <a href=\"https://info.disposable-mailbox.eu/nl/why.html\" target=\"awfn\">Waarom e-mails weggooien?</a> - <a href=\"https://info.disposable-mailbox.eu/nl/FAQ.html\" target=\"awfn\">FAQ</a> - <a href=\"https://info.disposable-mailbox.eu/nl/news.html\" target=\"awfn\">Nieuws</a></p>";
if(strpos($languagemainselection,"de")!==false) {$awfn = $awfnDE;}
if(strpos($languagemainselection,"en")!==false) {$awfn = $awfnEN;}
if(strpos($languagemainselection,"es")!==false) {$awfn = $awfnES;}
if(strpos($languagemainselection,"hr")!==false) {$awfn = $awfnHR;}
if(strpos($languagemainselection,"nl")!==false) {$awfn = $awfnNL;}

//edit disposable-mailbox.eu to your Main Domain ;)
$usercontent['headline'] = "<h2 style=\"text-align:center;\"><i class=\"far fa-envelope\"></i> <i style=\"font-family:'Calligraffitti',sans-serif;font-weight:300\"><a href=\"https://www.disposable-mailbox.eu/?$user->username@".$user->domain."\">disposable-mailbox&#8200;.eu</a></i></h2>$awfn<hr>"; 

//// only one domain usage:
//$usercontent['CookieConsentManagementTool'] = "<!-- Edit your CookieConsentManagementTool Settings in Usercontent please!!! -->";
//// Multi Domain Usage Hotfix:
$cookie_supported_domains = array(
   "Example.com" => 
	 "<!--<script src=\"https://consent.example.com/banner.js\" data-cookie-key=\"123\"></script>-->",
    "Example.org" =>
	 "<!--<script src=\"https://consent.example.com/banner.js\" data-cookie-key=\"456\"></script>-->",
    "Example.net" =>
	 "<!--<script src=\"https://consent.example.com/banner.js\" data-cookie-key=\"789\"></script>-->",
);
foreach ($cookie_supported_domains as $allSupportetDomains => $allSupportetCookies) {$cookieselected = $allSupportetCookies === $cookieselected ? '' : '';
if ($allSupportetDomains == $just_domain) {
	$cookiecode =
	$allSupportetCookies; }
}
$usercontent['CookieConsentManagementTool'] = $cookiecode;


$usercontent['adsContent'] = "<img src=\"https://cdn.info.disposable-mailbox.eu/images/placeholder-banner_$mobiledetect.png\">";

// Translation assistance is requested. Standard is:
//$usercontent['footer'] = "";
if ($localeselected == 'nl') {
$usercontent['footer'] = "<hr><blockquote>Deze vertaling is gemaakt met behulp van programma's.  help alstublieft op <a href=\"https://github.com/disposable-mailbox/disposable-mailbox\">GitHub</a> om een ​​begrijpelijke vertaling voor te bereiden.</blockquote>"; 
} elseif ($localeselected == 'es') {
$usercontent['footer'] = "<hr><blockquote>Esta traducción se creó con la ayuda de programas.  ayuda en <a href=\"https://github.com/disposable-mailbox/disposable-mailbox\">GitHub</a> para preparar una traducción comprensible.</blockquote>"; 
} else    { 
$usercontent['footer'] = "<br>"; }


// Impressum and Disclaimer
$usercontent['imprintanddisclaimer'] =
"<p>This service is provided for test purposes and free of charge; there is no guarantee of constant availability<!--, in particular not of the accessibility of the domains --></p>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/contact-form \">CONTACT</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/yourimprint\">IMPRINT</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/yourdisclaimer.html\">DISCLAIMER</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/cookiesandmore.info\">DATA PROTECTION</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/ise.php\">REFERENCES</a></h5>	
</p>";


?>
