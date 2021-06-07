<?php
// set your time zone:
date_default_timezone_set('Europe/Paris');

// set locale (see supported locales: https://github.com/fightbulc/moment.php#switch-locale)
// format Date and Time
$config['locale'] = 'en_US';

/*
$moment_supported_languages = array(
   "de_DE" =>   "de", 
   "de_DE" =>   "de_DE", 
   "de_DE" =>   "de_AT", 
   "de_DE" =>   "de_CH", 
   "de_DE" =>   "de_LI", 
   "de_DE" =>   "de_LT",
   "en_US" =>   "en", 
   "en_US" =>	"en_US",
   "eb_GB" =>	"en_GB",
   "nl_NL" => 	"nl", 
   "nl_NL" => 	"nl_NL",
);
*/
/*
moment Supported languages so far:
ar_TN Arabic (Tunisia)
ca_ES Catalan
zh_CN Chinese
zh_TW Chinese (traditional)
cs_CZ Czech
da_DK Danish
nl_NL Dutch
en_CA English (Canada)
en_GB English (British)
en_US English (American)
eo_EO Esperanto
fa_IR Farsi
fi_FI Finnish
fr_FR French (Europe)
fr_CA French (Canada)
de_DE German (Germany)
hu_HU Hungarian
id_ID Indonesian
it_IT Italian
ja_JP Japanese
kz_KZ Kazakh
oc_LNC Lengadocian
lv_LV Latvian (Latviešu)
pl_PL Polish
pt_BR Portuguese (Brazil)
pt_PT Portuguese (Portugal)
ru_RU Russian (Basic version)
es_ES Spanish (Europe)
sv_SE Swedish
uk_UA Ukrainian
th_TH Thai
tr_TR Turkish
vi_VN Vietnamese
*/




// User Changable Languages
$config['availablelanguages'] = array(
"English" => "en",
"Deutsch" => "de",
"Español" => "es",
"Nederlands" => "nl",
"Hrvatski" => "hr",
//"British English" => "en_GB",
//"American English" => "en_US",
//"&Ouml;sterreichisches Deutsch" => "de_AT",
//"Schweizerdeutsch" => "de_CH",
//"Deutsch (Deutschland)" => "de_DE",
//"Deutsch (Liechtenstein)" => "de_LI",
//"Deutsch (Luxembourg)" => "de_LU",
//"Español (europeo)" => "es_ES",
);

// enable or disable Ads
// (edit the Ads-Code in usercontent.php)
$config['adsActive'] = "1";

// Show (1) or Hide (0) a List of All avaible Domains
$config['DomainActive'] = "1";



// enable in production:
error_reporting(0);


// enable while testing:
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


// Change IMAP settings (check SSL flags on http://php.net/manual/en/function.imap-open.php)
$config['imap']['url'] = '{imap.example.com:993/imap/ssl}INBOX';
$config['imap']['username'] = "myuser";
$config['imap']['password'] = "mypassword";

// For gmail you can use '{imap.gmail.com:993/imap/ssl}INBOX'
// and follow the troubleshooting at:
// https://stackoverflow.com/a/25238515/79461

// email domains, usually different from imap hostname:
$config['domains'] = array('mydomain.com', 'example.com');

// When to delete old messages?
$config['delete_messages_older_than'] = '30 days ago';


// Mails to those usernames can not be accessed:
$config['blocked_usernames'] = array(
'root',
'admin', 
'administrator', 
'hostmaster', 
'postmaster', 
'webmaster', 
'abuse', 
'ftp', 
'mysql', 'mysql-root', 
'oracle',
'info', 'guest', 'test', 'example', 'demo', 'default', 'user', 'username',
'noreply', 'reject',
'john.doe', 'johndoe', 'john', 
'jane.doe', 'janedoe', 'jane', 
);

// Mails are usually show as Text and only if not available as HTML. You can turn this around to prefer HTML over text.
$config['prefer_plaintext'] = true;







/*
$config['locale_supported_languages'] = array(
'ar_TN', 'ca_ES', 'zh_CN', 'zh_TW', 'cs_CZ', 
'da_DK', 'nl_NL', 'en_CA', 'en_GB', 'en_US', 
'fa_IR', 'fi_FI', 'fr_FR', 'fr_CA', 'de_DE', 
'hu_HU', 'id_ID', 'it_IT', 'ja_JP', 'oc_LNC', 
'lv_LV', 'pl_PL', 'pt_BR','pt_PT', 'ru_RU', 
'es_ES', 'sv_SE', 'uk_UA', 'th_TH', 'tr_TR', 
'vi_VN');
*/
