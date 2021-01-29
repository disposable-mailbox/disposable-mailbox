<?php 

$SoMeSettings['UserFB'] = "disposablemailbox";
$SoMeSettings['UserTwttr'] = "disposablemxbox";
$SoMeSettings['UserInsta'] = "#InstaUsername";
$SoMeSettings['UserYT'] = "#YTusername";
$SoMeSettings['UserPinterest'] = "disposablemxbox";
$SoMeSettings['WtsAppID'] = "#WAid";


$SoMeSettings['UserGitHub'] = "pfeifferch";
$SoMeSettings['RepoGitHub'] = "disposable-mailbox-ML";
$SoMeSettings['UserDocker'] = "pfeifferch";
$SoMeSettings['RepoDocker'] = "disposable-mailbox";
$SoMeSettings['UserGitter'] = "pfeifferch";
$SoMeSettings['GitterRoom'] = "disposable-mailbox";
$SoMeSettings['UserElement'] = "#ElementUsername";
$SoMeSettings['ElementRoom'] = "#ElementRoom";
$SoMeSettings['StartWaChat'] = "https://wa.me/".$SoMeSettings['WtsAppID']."&text=Website ".$just_domain;


$SoMeSettings['disclaimerShareButtons'] = "<br/><span style=\"font-size:XX-SMALL;\">Advertising cookies required for share buttons and Pinterest - only available for the main domain disposable-mailbox.eu</span>";


// Hier den Link für den Teilen-Button einfügen
// Insert the link for the share button here
$SoMeSettings['ShareFB'] = "#FBshareURL";
$SoMeSettings['ShareTwttr'] = "#TWTTRshareURL";
$SoMeSettings['ShareInsta'] = "#INSTAshareURL";
$SoMeSettings['ShareWtsApp'] = "#WAshareURL";


// Hier den JavaScript Code des Teilen-Button-Anbieters einfügen - oder je nach Gesetzgebung (zb. DSGVO in der EU) beim CookieConsent-Anbieter
// Insert the Button- provider's JavaScript code here - or depending on the legislation (e.g. GDPR in the EU) from the CookieConsent provider
$SoMeSettings['CodeShareFB'] = "#FBshareCode";
$SoMeSettings['CodeShareTwttr'] = "#TWTTRshareCode";
$SoMeSettings['CodeShareInsta'] = "#INSTAshareCode";
$SoMeSettings['CodeShareWtsApp'] = "#WAshareCode";
$SoMeSettings['CodePinterest'] = "#PinCode";


// ab hier nichts mehr ändern, ausser du weißt was du tust
// Don't change anything from here on, unless you know what you're doing

$SoMeSettings['URL.FB'] = "https://fb.me/".$SoMeSettings['UserFB'];
$SoMeSettings['URL.Twttr'] = "https://twitter.com/".$SoMeSettings['UserTwttr'];
$SoMeSettings['URL.Insta'] = "https://www.instagram.com/".$SoMeSettings['UserInsta'];
$SoMeSettings['URL.YT'] = "https://www.youtube.com/".$SoMeSettings['UserYT'];
$SoMeSettings['URL.Pin'] = "https://www.pinterest.de/".$SoMeSettings['UserPinterest']."/pins/follow/";
$SoMeSettings['URL.GitHubProfile'] = "https://github.com/".$SoMeSettings['UserGitHub'];
$SoMeSettings['URL.GitHubRepo'] ="https://github.com/".$SoMeSettings['UserGitHub']."/".$SoMeSettings['RepoGitHub']."/";
$SoMeSettings['URL.DockerProfile'] = "https://hub.docker.com/r/".$SoMeSettings['UserDocker'];
$SoMeSettings['URL.DockerRepo'] ="https://hub.docker.com/r/".$SoMeSettings['UserDocker']."/".$SoMeSettings['RepoDocker']."/";
$SoMeSettings['URL.GitterRoom'] = "https://gitter.im/".$SoMeSettings['UserGitter']."/".$SoMeSettings['GitterRoom']; 
$SoMeSettings['URL.ElementRoom'] = "https://element.im/".$SoMeSettings['UserElement']."/".$SoMeSettings['ElementRoom'];
$SoMeSettings['SharePin'] = "https://www.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\" data-pin-lang=\"".$localeSoMePhrases['PinterestLng']."\" ";

?>
