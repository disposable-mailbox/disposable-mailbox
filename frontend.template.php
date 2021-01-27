<?php
@include './versioninfo.php';
@include './functions.php';
@include './usercontent.php';
@include './social.settings.php';
@include './social.usercontent.php';
//@include './social.template.php';
//@include './usercontent.php';


// Sprachdateien nicht gefunden oder keine Sprache gesetzt, Standarttext vorgeben

if (empty($setHTMLLanguageCode)) {$setHTMLLanguageCode = "en";}
if (empty($locale['HowManyMailArrivedBevore'])) {$locale['HowManyMailArrivedBevore'] = "There are ";}
if (empty($locale['MailHaveBeArrivedAfter'])) {$locale['MailHaveBeArrivedAfter'] = " new Mails.";}
if (empty($locale['MailArrived'])) {$locale['MailArrived'] = "<strong>New emails</strong> have arrived";}
if (empty($locale['TranslationForRefresh'])) {$locale['TranslationForRefresh'] = "Reload!";}
if (empty($locale['MailboxReady'])) {$locale['MailboxReady'] = "Your disposable mailbox is ready.";}
if (empty($locale['TranslationforCopy'])) {$locale['TranslationforCopy'] = "copy";}
if (empty($locale['ChangeMailUsername'])) {$locale['ChangeMailUsername'] = "Change address";}
if (empty($locale['SetToRandom'])) {$locale['SetToRandom'] = "Open random mailbox";}
if (empty($locale['UseOwnUsername'])) {$locale['UseOwnUsername'] = "or create your own address:";}
if (empty($locale['TranslationForDomain'])) {$locale['TranslationForDomain'] = "Domain";}
if (empty($locale['OpenMailbox'])) {$locale['OpenMailbox'] = "Open mailbox";}
if (empty($locale['TranslationForDownload'])) {$locale['TranslationForDownload'] = "Download";}
if (empty($locale['TranslationForDelete'])) {$locale['TranslationForDelete'] = "Delete";}
if (empty($locale['EmptyMailbox'])) {$locale['EmptyMailbox'] = "<p>Emails will appear here automatically. </p>";}
if (empty($locale['QuickSummary'])) {$locale['QuickSummary'] = "This is a disposable mailbox service. <br/>Whoever knows your username, can read your emails.<br/> <br/>Emails will be deleted after ".$config['delete_messages_older_than']."days.";}
if (empty($locale['collapse'])) {$locale['collapse'] = "Show Details";}
if (empty($locale['long-about-1'])) {$locale['long-about-1']  = "<p class=\"text-justify\">This disposable mailbox keeps your main mailbox clean from spam.</p>";}
if (empty($locale['long-about-2'])) {$locale['long-about-2'] = "<p class=\"text-justify\">you don't trust and don't want to use your main email address.<br/>}Once you are done, you can just forget about the mailbox. <br/>All the spam stays here and does not fill up your main mailbox.</p>";}
if (empty($locale['long-about-3'])) {$locale['long-about-3'] = "<p class=\"text-justify\">You select the address you want to use and received emails will be displayed automatically. <br/>There is not registration and no passwords. If you know the address, you can read the emails. <br/><strong>Basically, all emails are public. So don't use it for sensitive data.</strong></p>";}
if (empty($locale['ourdomains'])) {$locale['ourdomains'] = "Our Domains";}
if (empty($locale['copied'])) {$locale['copied'] = "Copied.";}
if (empty($locale['success'])) {$locale['success'] = "success";}
if (empty($locale['show'])) {$locale['show'] = "show";}
if (empty($locale['imprintanddisclaimer'])) {$locale['imprintanddisclaimer'] = "Legal information - imprint, disclaimer and more";}
if (empty($locale['Copyright'])) {$locale['Copyright'] = "<small><a href=\"https://github.com/pfeifferch/disposable-mailbox\"><strong>disposable-mailbox</strong></a> ".$config['versionnumber']." (NT)</small>";}

if (empty($config['OurDomainsActive'] )) {$config['OurDomainsActive'] = "1";} 

if (empty($awfnDE)){$awfnDE = "<p><a href=\"https://gh.disposable-mailbox.eu/de/\" target=\"awfn\">&Uuml;ber D-M</a> - <a href=\"https://gh.disposable-mailbox.eu/de/about.html\" target=\"awfn\">So funktioniert's</a> - <a href=\"https://gh.disposable-mailbox.eu/de/why.html\" target=\"awfn\">Warum Wegwerf-eMails?</a> - <a href=\"https://gh.disposable-mailbox.eu/de/FAQ.html\" target=\"awfn\">FAQ</a> - <a href=\"https://gh.disposable-mailbox.eu/de/news.html\" target=\"awfn\">News</a></p>";}
if (empty($awfnEN)){$awfnEN = "<p><a href=\"https://gh.disposable-mailbox.eu/en/\" target=\"awfn\">About D-M</a> - <a href=\"https://gh.disposable-mailbox.eu/en/about.html\" target=\"awfn\">How it works</a> - <a href=\"https://gh.disposable-mailbox.eu/en/why.html\" target=\"awfn\">Why temporary eMails?</a> - <a href=\"https://gh.disposable-mailbox.eu/en/FAQ.html\" target=\"awfn\">FAQ</a> - <a href=\"https://gh.disposable-mailbox.eu/en/news.html\" target=\"awfn\">News</a></p>";}
if (empty($awfnES)){$awfnES = "<p><a href=\"https://gh.disposable-mailbox.eu/es/\" target=\"awfn\">Breve información D-M</a> - <a href=\"https://gh.disposable-mailbox.eu/es/about.html\" target=\"awfn\">Así es como funciona</a> - <a href=\"https://gh.disposable-mailbox.eu/es/why.html\" target=\"awfn\">¿Por qué tirar los correos electrónicos?</a> - <a href=\"https://gh.disposable-mailbox.eu/es/FAQ.html\" target=\"awfn\">Preguntas más frecuentes</a> - <a href=\"https://gh.disposable-mailbox.eu/es/news.html\" target=\"awfn\">Noticias</a></p>";}
if (empty($awfnHR)){$awfnHR = "<p><a href=\"https://gh.disposable-mailbox.eu/hr/\" target=\"awfn\">Kratke informacije</a> - <a href=\"https://gh.disposable-mailbox.eu/hr/about.html\" target=\"awfn\">Ovako to djeluje</a> - <a href=\"https://gh.disposable-mailbox.eu/hr/why.html\" target=\"awfn\">Zašto baciti mailove?</a> - <a href=\"https://gh.disposable-mailbox.eu/hr/FAQ.html\" target=\"awfn\">Pitanja</a> - <a href=\"https://gh.disposable-mailbox.eu/hr/news.html\" target=\"awfn\">Vijesti</a></p>";}
if (empty($awfnNL)){$awfnNL = "<p><a href=\"https://gh.disposable-mailbox.eu/nl/\" target=\"awfn\">Beknopte informatie D-M</a> - <a href=\"https://gh.disposable-mailbox.eu/nl/about.html\" target=\"awfn\">Dit is hoe het werkt</a> - <a href=\"https://gh.disposable-mailbox.eu/nl/why.html\" target=\"awfn\">Waarom e-mails weggooien?</a> - <a href=\"https://gh.disposable-mailbox.eu/nl/FAQ.html\" target=\"awfn\">FAQ</a> - <a href=\"https://gh.disposable-mailbox.eu/nl/news.html\" target=\"awfn\">Nieuws</a></p>";}
if (empty($awfn)){if(strpos($languagemainselection,"de")!==false) {$awfn = $awfnDE;} }
if (empty($awfn)){if(strpos($languagemainselection,"en")!==false) {$awfn = $awfnEN;} }
if (empty($awfn)){if(strpos($languagemainselection,"es")!==false) {$awfn = $awfnES;} }
if (empty($awfn)){if(strpos($languagemainselection,"hr")!==false) {$awfn = $awfnHR;} }
if (empty($awfn)){if(strpos($languagemainselection,"nl")!==false) {$awfn = $awfnNL;} }

if (empty($usercontent['headline'])) {$usercontent['headline'] = "<h2 style=\"text-align:center;\">📧 <i style=\"font-family:'Calligraffitti',sans-serif;font-weight:300\"><a href=\"https://www.disposable-mailbox.eu/?$user->username@".$user->domain."\">disposable-mailbox&#8200;.eu</a></i></h2>$awfn<hr>"; }
if (empty($usercontent['footer'])) {$usercontent['footer'] = "<!-- <hr>Thank you 4 using DisposableMailbox --->";} 
if (empty($usercontent['CookieConsentManagementTool'])) {$usercontent['CookieConsentManagementTool'] = "<!-- EDIT CookieConsentManagementTool SETTINGS, PLEASE! -->";} 
if (empty($usercontent['imprintanddisclaimer'])) {$usercontent['imprintanddisclaimer'] = "<!-- EDIT imprintanddisclaimer in Usercontent, PLEASE! -->";} 

// ADS
if (empty($config['adsActive'])) {$config['adsActive'] = "1";}
if (empty($locale['adsLocale'])) {$locale['adsLocale'] = "Advertisement:";}
if (empty($usercontent['adsContent'])) {$usercontent['adsContent'] = "<img src=\"https://cdn.gh.disposable-mailbox.eu/images/placeholder-banner_$mobiledetect.png\">";} 

if (empty($config['SocialMediaActive'])) {$config['SocialMediaActive'] = "0";}

if (empty($localeSoMePhrases['FollowHeading'])) {$localeSoMePhrases['FollowHeading'] = "FOLLOW US";}
if (empty($localeSoMePhrases['followFB']))     {$localeSoMePhrases['followFB'] = "Like us on ";}
if (empty($localeSoMePhrases['followTwttr']))  {$localeSoMePhrases['followTwttr'] = "Follow us on ";}
if (empty($localeSoMePhrases['followPinterest']))  {$localeSoMePhrases['followPinterest'] = "Follow us on ";}
if (empty($localeSoMePhrases['PinOnPinterest'])) {$localeSoMePhrases['PinOnPinterest'] = "Save on ";}
if (empty($localeSoMePhrases['followInsta']))  {$localeSoMePhrases['followInsta'] = "Follow us on ";}
if (empty($localeSoMePhrases['followYT']))     {$localeSoMePhrases['followYT'] = "Subscribe us on ";}
if (empty($localeSoMePhrases['followInsta']))  {$localeSoMePhrases['followInsta'] = "Follow us on ";}
if (empty($localeSoMePhrases['CommunityHeading'])) {$localeSoMePhrases['CommunityHeading'] = "TALK / CONTRIBUTE WITH US";}
if (empty($localeSoMePhrases['devOnGitHub']))  {$localeSoMePhrases['devOnGitHub'] = "Contribute on ";}
if (empty($localeSoMePhrases['devOnDocker']))  {$localeSoMePhrases['devOnDocker'] = "Contribute on ";}
if (empty($localeSoMePhrases['chatOnGitter'])) {$localeSoMePhrases['chatOnGitter'] = "Join the Chat on ";}
if (empty($localeSoMePhrases['chatOnElement'])) {$localeSoMePhrases['chatOnElement'] = "Join the Chat on ";}
if (empty($localeSoMePhrases['chatOnWtsApp'])) {$localeSoMePhrases['chatOnWtsApp'] = "Chat with me on ";}
if (empty($localeSoMePhrases['ShareHeading'])) {$localeSoMePhrases['ShareHeading'] = "SHARE THIS PAGE";}
if (empty($localeSoMePhrases['ShareOnFB']))    {$localeSoMePhrases['ShareOnFB'] = "Share this post on ";}
if (empty($localeSoMePhrases['ShareOnTwttr'])) {$localeSoMePhrases['ShareOnTwttr'] = "Share this post on ";}
if (empty($localeSoMePhrases['ShareOnInsta'])) {$localeSoMePhrases['ShareOnInsta'] = "Share this post on ";}
if (empty($localeSoMePhrases['ShareOnWtsApp'])) {$localeSoMePhrases['ShareOnWtsApp'] = "Share this post on ";}


$bgcolorFollow = "eee";
$bgcolorTalk = "a3a9af";
$bgcolorSafeAndShare = "51565c";

/*
input:
User $user - User object
array $config - config array
array $emails - array of emails
*/

require_once './autolink.php';

// Load HTML Purifier
$purifier_config = HTMLPurifier_Config::createDefault();
$purifier_config->set('HTML.Nofollow', true);
$purifier_config->set('HTML.ForbiddenElements', array("img"));
$purifier = new HTMLPurifier($purifier_config);

\Moment\Moment::setLocale($config['locale']);

$mailIds = array_map(function ($mail) {
return $mail->id;
}, $emails);
$mailIdsJoinedString = filter_var(join('|', $mailIds), FILTER_SANITIZE_SPECIAL_CHARS);

// define bigger renderings here to keep the php sections within the html short.
function niceDate($date) {
$m = new \Moment\Moment($date, date_default_timezone_get());
return $m->calendar();
}

function printMessageBody($email, $purifier) {
global $config;

// To avoid showing empty mails, first purify the html and plaintext
// before checking if they are empty.
$safeHtml = $purifier->purify($email->textHtml);

$safeText = htmlspecialchars($email->textPlain);
$safeText = nl2br($safeText);
$safeText = \AutoLinkExtension::auto_link_text($safeText);

$hasHtml = strlen(trim($safeHtml)) > 0;
$hasText = strlen(trim($safeText)) > 0;

if ($config['prefer_plaintext']) {
if ($hasText) {
echo $safeText;
} else {
echo $safeHtml;
}
} else {
if ($hasHtml) {
echo $safeHtml;
} else {
echo $safeText;
}
}
}


?><!doctype html>
<html lang="<?php echo $setHTMLLanguageCode; ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/bootstrap/4.1.1/bootstrap.min.css"
integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
crossorigin="anonymous">
<link rel="stylesheet" href="assets/fontawesome/v5.0.13/all.css"
integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
crossorigin="anonymous">
<title>📧<?php
echo $emails ? "(" . count($emails) . ") " : "";
echo $user->address ?></title>
<link rel="stylesheet" href="assets/spinner.css">
	
	
<link rel="stylesheet" href="assets/custom.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/ADSstyle.<?php echo $mobiledetect; ?>.css">

<link href='https://fonts.googleapis.com/css?family=Calligraffitti:300,400,500,300italic' rel='stylesheet' type='text/css'>
<script>
var mailCount = <?php echo count($emails)?>;
setInterval(function () {
var r = new XMLHttpRequest();
r.open("GET", "?action=has_new_messages&address=<?php echo $user->address?>&email_ids=<?php echo $mailIdsJoinedString?>", true);
r.onreadystatechange = function () {
if (r.readyState != 4 || r.status != 200) return;
if (r.responseText > 0) {
console.log($locale['HowManyMailArrivedBevore'], r.responseText, $locale['HowManyMailArrivedBevore']);
document.getElementById("new-content-avalable").style.display = 'block';

// If there are no emails displayed, we can reload the page without losing any state.
if (mailCount === 0) {
location.reload();
}
}
};
r.send();

}, 15000);

</script>

</head>
<body>
<?php echo $usercontent['CookieConsentManagementTool']; ?>

<div id="new-content-avalable">
<div class="alert alert-info alert-fixed" role="alert">
<?php echo $locale['MailArrived']; ?>

<button type="button" class="btn btn-outline-secondary" onclick="location.reload()">
<i class="fas fa-sync"></i>
<?php echo $locale['TranslationForRefresh']; ?>
</button>

</div>
<!-- move the rest of the page a bit down to show all content -->
<div style="height: 3rem"> </div>
</div>

<header>
<div class="container">
		<!--
<p class="lead ">
			<?php
foreach ($config['domains'] as $aDomain) {
$selected = $aDomain === $user->domain ? '' : '';
print "<p>$user->username @ <a href=\"https://$aDomain\?$user->username@$aDomain\">$aDomain</a></p> ";
}
?>
		<hr>		
		</p>
-->	
<?php echo $usercontent['headline']; ?>
		<p class="lead ">
</p>
<p class="lead ">
<?php echo $locale['MailboxReady']; ?></p>
<div class="row" id="address-box-normal">

<div class="col my-address-block">
<span id="my-address"><?php echo $user->address ?></span> <button class="copy-button" data-clipboard-target="#my-address"><?php echo $locale['TranslationforCopy']; ?></button>
</div>


<div class="col get-new-address-col">
<button type="button" class="btn btn-outline-dark"
data-toggle="collapse" title="choose your own address"
data-target=".change-address-toggle"
aria-controls="address-box-normal address-box-edit" aria-expanded="false">
<i class="fas fa-magic"></i> <?php echo $locale['ChangeMailUsername']; ?>
</button>
</div>
</div>


<form class="collapse change-address-toggle" id="address-box-edit" action="?action=redirect&localeselect=<?php echo $localeselected; ?>" method="post">
<div class="card">
<div class="card-body">
<p>
<a href="?action=random" role="button" class="btn btn-dark">
<i class="fa fa-random"></i>
<?php echo $locale['SetToRandom']; ?>
</a>
</p>


<?php echo $locale['UseOwnUsername']; ?>
<div class="form-row align-items-center">
<div class="col-sm">
<label class="sr-only" for="inlineFormInputName">username</label>
<input name="username" type="text" class="form-control" id="inlineFormInputName"
placeholder="username"
value="<?php echo $user->username ?>">
<input name="localeselect" id="localeselect" type="hidden" class="form-control"
value="<?php echo $localeselected; ?>">
</div>
<div class="col-sm-auto my-1">
<label class="sr-only" for="inlineFormInputGroupUsername"><?php echo $locale['TranslationForDomain']; ?></label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">@</div>
</div>

<select class="custom-select" id="inlineFormInputGroupUsername" name="domain">
<?php
foreach ($config['domains'] as $aDomain) {
$selected = $aDomain === $user->domain ? ' selected ' : '';
print "<option value='$aDomain' $selected>$aDomain</option>";
}
?>
</select>


</div>
</div>
<div class="col-auto my-1">
<button type="submit" class="btn btn-primary"><?php echo $locale['OpenMailbox']; ?></button>
</div>
</div>

</div>
</div>
</form>
</div>
</header>

<?php 

if ($config['adsActive'] == "1") {echo "<div class=\"container\"><div class=\"hwadw\">".$locale['adsLocale']."</div> <div class=\"adw\">".$usercontent['adsContent']."</div></div>";	
}

?>

<main>
<div class="container">

<div id="email-list" class="list-group">

<?php
foreach ($emails as $email) {
$safe_email_id = filter_var($email->id, FILTER_VALIDATE_INT); ?>

<a class="list-group-item list-group-item-action email-list-item" data-toggle="collapse"
href="#mail-box-<?php echo $email->id ?>"
role="button"
aria-expanded="false" aria-controls="mail-box-<?php echo $email->id ?>">

<div class="media">
<button class="btn btn-white open-collapse-button">
<i class="fas fa-caret-right expand-button-closed"></i>
<i class="fas fa-caret-down expand-button-opened"></i>
</button>


<div class="media-body">
<h6 class="list-group-item-heading"><?php echo filter_var($email->fromName, FILTER_SANITIZE_SPECIAL_CHARS) ?>
<span class="text-muted"><?php echo filter_var($email->fromAddress, FILTER_SANITIZE_SPECIAL_CHARS) ?></span>
<small class="float-right"
title="<?php echo $email->date ?>"><?php echo niceDate($email->date) ?></small>
</h6>
<p class="list-group-item-text text-truncate" style="width: 75%">
<?php echo filter_var($email->subject, FILTER_SANITIZE_SPECIAL_CHARS); ?>
</p>
</div>
</div>
</a>


<div id="mail-box-<?php echo $email->id ?>" role="tabpanel" aria-labelledby="headingCollapse1"
class="card-collapse collapse"
aria-expanded="true">
<div class="card-body">
<div class="card-block email-body">
<div class="float-right primary">
<a class="btn btn-outline-primary btn-sm" download="true"
role="button"
href="<?php echo "?action=download_email&email_id=$safe_email_id&address=$user->address" ?>">
<?php echo $locale['TranslationForDownload']; ?>
</a>

<a class="btn btn-outline-danger btn-sm"
role="button"
href="<?php echo "?action=delete_email&email_id=$safe_email_id&address=$user->address" ?>">
<?php echo $locale['TranslationForDelete']; ?>
</a>
</div>
<div id="emailMessageBody"><hr>
<?php printMessageBody($email, $purifier); ?>
<hr></div>

</div>
</div>
</div>
<?php
} ?>

<?php
if (empty($emails)) {
?>
<div id="empty-mailbox">
<?php echo $locale['EmptyMailbox']; ?>
<div class="spinner">
<div class="rect1"></div>
<div class="rect2"></div>
<div class="rect3"></div>
<div class="rect4"></div>
<div class="rect5"></div>
</div>
</div>
<?php
} ?>
</div>
</div>
</main>

<footer>
<div class="container">

	
<?php 
if (empty($config['availablelanguages'])) {
	 echo "<!--
// a language selection is unfortunately not available"; }
?>
	
	
<form action="<?php echo $_SERVER['PHP_SELF']."?".$user->username."@".$user->domain; ?>" method="post">
<img src="locale/Language-Icons/icon128px-exported-black.jpg" hight="30px" width="30px">
<select id="language-selection" name="localeselect"  class="custom-select" title="Language"> 
<?php
	
foreach ($config['availablelanguages'] as $aLanguagecd => $aLanguages) {
$lngselected = $aLanguages === $localeselected ? ' selected ' : '';
print "<option value='$aLanguages' $lngselected>$aLanguagecd</option>";
}

?>
</select>
<input type="submit" />
</form>
<?php 
if (empty($config['availablelanguages'])) {
	 echo "// a language selection is unfortunately not available
	 -->"; }
?>
<br>

<small class="text-justify quick-summary">
<?php echo $locale['QuickSummary']; ?>

<a data-toggle="collapse" href="#about"
aria-expanded="false"
aria-controls="about">
<?php echo $locale['collapse']; ?>
</a>
</small>
<div class="card card-body collapse" id="about" style="max-width: 40rem">
<?php echo $locale['long-about-1']; ?>
<?php echo $locale['long-about-2']; ?>
<?php echo $locale['long-about-3']; ?>
</div>
<?php if ($config['SocialMediaActive'] =="1") {
echo "<hr>";
echo "<blockquote>";
echo "<p>".$localeSoMePhrases['FollowHeading']."</p>";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['followFB']."-Facebook-red?&style=plastic&logo=Facebook&logoColor=1877F2&colorA=$bgcolorFollow&colorB=1877F2\">";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['followTwttr']."-Twitter-red?&style=plastic&logo=Twitter&logoColor=1DA1F2&colorA=$bgcolorFollow&colorB=1DA1F2\">";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['followInsta']."-Instagramm-red?&style=plastic&logo=Instagram&logoColor=E4405F&colorA=$bgcolorFollow&colorB=E4405F\">";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['followYT']."-YouTube-red?&style=plastic&logo=YouTube&logoColor=FF0000&colorA=$bgcolorFollow&colorB=FF0000\">";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['followPinterest']."-Pinterest-red?&style=plastic&logo=Pinterest&logoColor=BD081C&colorA=$bgcolorFollow&colorB=BD081C\">";
echo "</blockquote>";
echo "<blockquote>";
echo "<p>".$localeSoMePhrases['CommunityHeading']."</p>";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['devOnGitHub']."-GitHub-red?&style=plastic&logo=GitHub&logoColor=181717&colorA=$bgcolorTalk&colorB=181717\">";
echo "<a href=\"https://github.com/pfeifferch/\"><img src=\"https://camo.githubusercontent.com/5b9892dbe9afbf5efe21afc4d3ea5d98ef3aaa5b8a4a51ba2e8457bdfcb4d2a2/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f5265706f7369746f726965732d6f6e2532304769744875622d6c69676874677265793f7374796c653d736f6369616c266c6f676f3d476974487562\" alt=\"Repositories on GitHub\" data-canonical-src=\"https://img.shields.io/badge/Repositories-on%20GitHub-lightgrey?style=social&amp;logo=GitHub\" style=\"max-width:100%;\"></a>";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['devOnDocker']."-Docker-red?&style=plastic&logo=Docker&logoColor=2496ED&colorA=$bgcolorTalk&colorB=2496ED\">";
echo "<a href=\"https://hub.docker.com/r/pfeifferch/\" rel=\"nofollow\"><img src=\"https://camo.githubusercontent.com/9a6932a8cde023a110510c0e9251a2132a5c389951593ea83435edee173677dd/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f5265706f7369746f726965732d6f6e253230446f636b65722d626c75653f7374796c653d736f6369616c266c6f676f3d446f636b6572\" alt=\"Repositories on Docker\" data-canonical-src=\"https://img.shields.io/badge/Repositories-on%20Docker-blue?style=social&amp;logo=Docker\" style=\"max-width:100%;\"></a>";

echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['chatOnGitter']."-Gitter-red?&style=plastic&logo=Gitter&logoColor=ED1965&colorA=$bgcolorTalk&colorB=ED1965\">";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['chatOnElement']."-Element-red?&style=plastic&logo=Element&logoColor=0DBD8B&colorA=$bgcolorTalk&colorB=0DBD8B\">";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['chatOnWtsApp']."-WhatsApp-red?&style=plastic&logo=WhatsApp&logoColor=25D366&colorA=$bgcolorTalk&colorB=25D366\">";
echo "</blockquote>";
echo "<blockquote>";
echo "<p>".$localeSoMePhrases['ShareHeading']."</p>";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['ShareOnFB']."-Facebook-red?&style=plastic&logo=Facebook&logoColor=1877F2&colorA=$bgcolorSafeAndShare&colorB=1877F2\">";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['ShareOnTwttr']."-Twitter-red?&style=plastic&logo=Twitter&logoColor=1DA1F2&colorA=$bgcolorSafeAndShare&colorB=1DA1F2\">";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['ShareOnInsta']."-Instagramm-red?&style=plastic&logo=Instagram&logoColor=E4405F&colorA=$bgcolorSafeAndShare&colorB=E4405F\">";
echo "<img src=\"https://shields.io/badge/".$localeSoMePhrases['ShareOnWtsApp']."-WhatsApp-red?&style=plastic&logo=Whatsapp&logoColor=25D366&colorA=$bgcolorSafeAndShare&colorB=25D366\">";
echo "<a data-pin-do=\"buttonBookmark\" href=\"https://www.pinterest.com/pin/create/button/\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['PinOnPinterest']."-Pinterest-red?&style=plastic&logo=Pinterest&logoColor=BD081C&colorA=$bgcolorSafeAndShare&colorB=BD081C\">*</a>";
echo "<h6 style=\"font-size:XX-SMALL;\">*: Advertising cookies required (Pinterest)</h6>";
echo "</blockquote>";
} ?>
<hr>
<a data-toggle="collapse" href="#imprintanddisclaimer"
aria-expanded="false"
aria-controls="imprintanddisclaimer">
<?php echo $locale['imprintanddisclaimer']; ?>
</a>
</small>
<div class="card card-body collapse" id="imprintanddisclaimer" style="max-width: 40rem">
<?php echo $usercontent['imprintanddisclaimer']; ?>
</div>
<hr>
<?php 

if ($config['DomainActive'] == "1") {echo "
<small class=\"text-justify quick-summary\">
<a data-toggle=\"collapse\" href=\"#ourdomains\"
aria-expanded=\"false\"
aria-controls=\"about\">";
echo $locale['ourdomains'];
echo "</a>
</small>
<div class=\"card card-body collapse\" id=\"ourdomains\" style=\"max-width: 40rem\">
<p class=\"lead \">";
echo $user->username."@ ...";
foreach ($config['domains'] as $aDomain) {
$selected = $aDomain === $user->domain ? '' : '';
print "<p><!--$user->username @--><a href=\"https://$aDomain\?$user->username@$aDomain\">$aDomain</a></p> ";
}
echo "</p></div><hr>";
	}  ?>

<p>
<?php echo $locale['Copyright']; ?>
<?php echo $usercontent['footer']; ?>
</p>
</div>
</footer>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/jquery/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="assets/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="assets/bootstrap/4.1.1/bootstrap.min.js"
integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
crossorigin="anonymous"></script>
<script src="assets/clipboard.js/clipboard.min.js"
integrity="sha384-8CYhPwYlLELodlcQV713V9ZikA3DlCVaXFDpjHfP8Z36gpddf/Vrt47XmKDsCttu"
crossorigin="anonymous"></script>

<script>
clipboard = new ClipboardJS('[data-clipboard-target]');
$(function () {
$('[data-tooltip="tooltip"]').tooltip()
});

/** from https://github.com/twbs/bootstrap/blob/c11132351e3e434f6d4ed72e5a418eb692c6a319/assets/js/src/application.js */
clipboard.on('success', function (e) {
$(e.trigger)
.attr('title', '<?php echo $locale['copied']; ?>')
.tooltip('_fixTitle')
.tooltip('show')
.tooltip('_fixTitle');
e.clearSelection();
});

</script>
</body>
</html>
