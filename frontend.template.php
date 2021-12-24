<?php
@include './versioninfo.php';
@include './functions.php';
@include './usercontent.php';
if (!file_exists('./usercontent.php')) { @include './sample.usercontent.php';}
@include './social.settings.php';
if (!file_exists('./social.settings.php')) { @include './sample.social.settings.php';}
@include './social.usercontent.php';
if (!file_exists('./social.usercontent.php')) { @include './sample.social.usercontent.php';}


if (file_exists('./locale/domaininfobanner.php')) {
include './locale/domaininfobanner.php';
$domaininfos = "1";
$domaininfolng = $languagemainselection;
}

//@include './social.template.php';
//@include './usercontent.php';


// Sprachdateien nicht gefunden oder keine Sprache gesetzt, Standarttext vorgeben

$localeSoMePhrases['PinterestLng'] = $languagemainselection;


$moment_supported_languages = array(
"de"=>"de_DE",
"de_DE"=>"de_DE",
"de_AT"=>"de_DE",
"de_CH"=>"de_DE",
"de_LI"=>"de_DE",
"de_LT"=>"de_DE",

"en"=>"en_US",
"en_US"=>"en_US",

"en_GB"=>"en_GB",
"en_GB"=>"en_GB",

"es"=>"es_ES",
"es_ES"=>"es_ES",


"nl"=> "nl_NL",
"nl_NL"=>"nl_NL",

/*
ar_TN Arabic (Tunisia)
ca_ES Catalan
zh_CN Chinese
zh_TW Chinese (traditional)
cs_CZ Czech
da_DK Danish
nl_NL Dutch
en_CA English (Canada)
en_GB English (British)
en_US English (American)
eo_EO Esperanto
fa_IR Farsi
fi_FI Finnish
fr_FR French (Europe)
fr_CA French (Canada)
de_DE German (Germany)
hu_HU Hungarian
id_ID Indonesian
it_IT Italian
ja_JP Japanese
kz_KZ Kazakh
oc_LNC Lengadocian
lv_LV Latvian (Latviešu)
pl_PL Polish
pt_BR Portuguese (Brazil)
pt_PT Portuguese (Portugal)
ru_RU Russian (Basic version)
es_ES Spanish (Europe)
sv_SE Swedish
uk_UA Ukrainian
th_TH Thai
tr_TR Turkish
vi_VN Vietnamese
*/
);

// set locale (see supported locales: https://github.com/fightbulc/moment.php#switch-locale)
if(array_key_exists($languagemainselection, $moment_supported_languages)) {
  $config['localemoment'] = $moment_supported_languages[$languagemainselection];
} else {
  $config['localemoment'] = "en_US"; 
}




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

\Moment\Moment::setLocale($config['localemoment']);

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
<title><?php
echo $locale['title'];
echo $emails ? "(" . count($emails) . ") " : "";
echo $user->address ?></title>
<link rel="stylesheet" href="assets/spinner.css">
<link rel="stylesheet" href="assets/custom.css">
<?php 
$allestyledateien = scandir('css'); 
$stylecolors = array($stylecolorsdatei);
//Ordner "files" auslesen 
foreach ($allestyledateien as $stylecolorsdatei) { 
if ($stylecolorsdatei != "" && $stylecolorsdatei != "." && $stylecolorsdatei != ".." && $stylecolorsdatei != "ADSstyle.mobile.css" && $stylecolorsdatei != "ADSstyle.desktop.css" && $stylecolorsdatei != "style.css") { 
array_push($stylecolors,$stylecolorsdatei);}
};
$styleszaehlen = count($stylecolors)-1;
if (!file_exists('./css/style.css')) { $stylefile = './css/'.$stylecolors[rand(1,$styleszaehlen)];}
else { $stylefile = './css/style.css';}
?>

<link rel="stylesheet" href="<?php echo $stylefile; ?>">
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

<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="description" content="disposable-mailbox" />
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
<div style="height: 5rem"> </div>
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


<form class="collapse change-address-toggle" id="address-box-edit" action="<?php echo $_SERVER['PHP_SELF']; ?>?action=redirect" method="post">
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

<select id="language-selection" name="localeselect"  class="custom-select" title="Language"> 
<?php
	
foreach ($config['availablelanguages'] as $aLanguagecd => $aLanguages) {
$lngselected = $aLanguages === $localeselected ? ' selected ' : '';
print "<option hidden=\"hidden\" value='$aLanguages' $lngselected>$aLanguagecd</option>";
}

?>
</select>

<div class="col-auto my-1">
<button type="submit" class="btn btn-primary"><?php echo $locale['OpenMailbox']; ?></button>
</div>
</div>

</div>
</div>
</form>


<blockquote>
Active? <?php echo $domaininfos; ?>  &nbsp; 
Lang? <?php echo $domaininfolng; ?>
</blockquote>


</div>
</header>

<?php 

if ($config['adsActive'] == "1") {echo "<div style=\"height: 1rem\"> </div><div class=\"container\"><div class=\"hwadw\">".$locale['adsLocale']."</div> <div class=\"adw\">".$usercontent['adsContent']."</div></div>";	
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
echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.FB']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['followFB']."-Facebook-red?&style=plastic&logo=Facebook&logoColor=1877F2&colorA=$bgcolorFollow&colorB=1877F2\"></a>";
echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.Twttr']."\" class=\"twitter-follow-button\" data-show-count=\"false\" \"><img src=\"https://shields.io/badge/".$localeSoMePhrases['followTwttr']."-Twitter-red?&style=plastic&logo=Twitter&logoColor=1DA1F2&colorA=$bgcolorFollow&colorB=1DA1F2\"></a>";
if (!$SoMeSettings['UserInsta'] == "#InstaUsername") {echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.Insta']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['followInsta']."-Instagramm-red?&style=plastic&logo=Instagram&logoColor=E4405F&colorA=$bgcolorFollow&colorB=E4405F\"></a>";}
if (!$SoMeSettings['UserYT'] == "#YTusername") {echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.YT']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['followYT']."-YouTube-red?&style=plastic&logo=YouTube&logoColor=FF0000&colorA=$bgcolorFollow&colorB=FF0000\"></a>";}
echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.Pin']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['followPinterest']."-Pinterest-red?&style=plastic&logo=Pinterest&logoColor=BD081C&colorA=$bgcolorFollow&colorB=BD081C\"></a>";
echo "</blockquote>";
echo "<blockquote>";
echo "<p>".$localeSoMePhrases['CommunityHeading']."</p>";
echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.GitHubProfile']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['devOnGitHub']."-GitHub-red?&style=plastic&logo=GitHub&logoColor=181717&colorA=$bgcolorTalk&colorB=181717\"></a>";
echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.GitHubRepo']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['ReposOnGitHub']."-GitHub-red?&style=social&logo=GitHub&logoColor=181717&colorA=$bgcolorTalk&colorB=181717\"></a>";
echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.DockerProfile']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['devOnDocker']."-Docker-red?&style=plastic&logo=Docker&logoColor=2496ED&colorA=$bgcolorTalk&colorB=2496ED\"></a>";
echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.DockerRepo']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['ReposOnGitHub']."-Docker-red?&style=social&logo=GitHub&logoColor=2496ED&colorA=$bgcolorTalk&colorB=2496ED\"></a>";

echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.GitterRoom']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['chatOnGitter']."-Gitter-red?&style=plastic&logo=Gitter&logoColor=ED1965&colorA=$bgcolorTalk&colorB=ED1965\"></a>";
if (!$SoMeSettings['UserElement'] == "#ElementUsername") {echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['URL.ElementRoom']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['chatOnElement']."-Element-red?&style=plastic&logo=Element&logoColor=0DBD8B&colorA=$bgcolorTalk&colorB=0DBD8B\"></a>";}

if (!$SoMeSettings['WtsAppID'] == "#WAid") {echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['StartWaChat']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['chatOnWtsApp']."-WhatsApp-red?&style=plastic&logo=WhatsApp&logoColor=25D366&colorA=$bgcolorTalk&colorB=25D366\"></a>";}
echo "</blockquote>";
echo "<blockquote>";
echo "<p>".$localeSoMePhrases['ShareHeading']."</p>";
if (!$SoMeSettings['ShareFB'] == "#FBshareURL") {echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['ShareFB']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['ShareOnFB']."-Facebook-red?&style=plastic&logo=Facebook&logoColor=1877F2&colorA=$bgcolorSafeAndShare&colorB=1877F2\"></a>";}
if (!$SoMeSettings['ShareTwttr'] == "#TWTTRshareURL") {echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['ShareTwttr']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['ShareOnTwttr']."-Twitter-red?&style=plastic&logo=Twitter&logoColor=1DA1F2&colorA=$bgcolorSafeAndShare&colorB=1DA1F2\"></a>";}
if (!$SoMeSettings['ShareInsta'] == "#INSTAshareURL") {echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['ShareInsta']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['ShareOnInsta']."-Instagramm-red?&style=plastic&logo=Instagram&logoColor=E4405F&colorA=$bgcolorSafeAndShare&colorB=E4405F\"></a>";}
if (!$SoMeSettings['ShareWtsApp'] == "#WAshareURL") {echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['ShareWtsApp']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['ShareOnWtsApp']."-WhatsApp-red?&style=plastic&logo=Whatsapp&logoColor=25D366&colorA=$bgcolorSafeAndShare&colorB=25D366\"></a>";} //if (!$SoMeSettings['SharePin'] == "#PinURL") {
echo "<a target=\"DpMbEx\" href=\"".$SoMeSettings['SharePin']."\"><img src=\"https://shields.io/badge/".$localeSoMePhrases['PinOnPinterest']."-Pinterest-red?&style=plastic&logo=Pinterest&logoColor=BD081C&colorA=$bgcolorSafeAndShare&colorB=BD081C\"></a>"; //}
echo $SoMeSettings['disclaimerShareButtons'];
echo "</blockquote>";


if (!$SoMeSettings['CodeShareFB'] == "#FBshareCode")
{ echo $SoMeSettings['CodeShareFB']; }
if (!$SoMeSettings['CodeShareTwttr'] == "#TWTTRshareCode")
{ echo $SoMeSettings['CodeShareTwttr']; }
if (!$SoMeSettings['CodeShareInsta'] == "#INSTAshareCode")
{ echo $SoMeSettings['CodeShareInsta']; }
if (!$SoMeSettings['CodeShareWtsApp'] == "#WAshareCode")
{ echo $SoMeSettings['CodeShareWtsApp']; }
if (!$SoMeSettings['CodePinterest'] == "#PinCode")
{ echo $SoMeSettings['CodePinterest']; }
} 
?>

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
