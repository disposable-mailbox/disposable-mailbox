<?php
//edit disposable-mailbox.eu to your Main Domain ;)
$usercontent['headline'] = "<h2 style=\"text-align:center;\">📧 <i style=\"font-family:'Calligraffitti',sans-serif;font-weight:300\"><a href=\"https://www.disposable-mailbox.eu/?$user->username@".$user->domain."\">disposable mailbox</a></i></h2><hr>"; 

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


$usercontent['adsContent'] = "<img src=\"https://cdn.gh.disposable-mailbox.eu/images/placeholder-banner_$mobiledetect.png\">";

// Translation assistance is requested. Standard is:
//$usercontent['footer'] = "";
if ($localeselected == 'nl') {
$usercontent['footer'] = "<hr><blockquote>Deze vertaling is gemaakt met behulp van programma's.  help alstublieft op <a href=\"https://github.com/pfeifferch/disposable-mailbox\">GitHub</a> om een ​​begrijpelijke vertaling voor te bereiden.</blockquote>"; 
} elseif ($localeselected == 'es') {
$usercontent['footer'] = "<hr><blockquote>Esta traducción se creó con la ayuda de programas.  ayuda en <a href=\"https://github.com/pfeifferch/disposable-mailbox\">GitHub</a> para preparar una traducción comprensible.</blockquote>"; 
} else    { 
$usercontent['footer'] = "<br>"; }


// Impressum and Disclaimer
$usercontent['imprintanddisclaimer'] =
"<p>This service is provided for test purposes and free of charge; there is no guarantee of constant availability, in particular not of the accessibility of the domains </p>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/contact-form \">CONTACT</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/yourimprint\">IMPRINT</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/yourdisclaimer.html\">DISCLAIMER</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/cookiesandmore.info\">DATA PROTECTION</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/ise.php\">REFERENCES</a></h5>	
</p>";


?>
