<?php
// set your time zone:
date_default_timezone_set('Europe/Paris');

// set locale (see supported locales: https://github.com/fightbulc/moment.php#switch-locale)
$config['locale'] = 'en_US';

// Languages
$config['availablelanguages'] = array(
'English', 
'Deutsch',
'Español', 
'Test1', 
'Test2');

// Language Codes - have to match Languages
$config['availablelanguagescodes'] = array(
'en', 
'de', 
'es', 
't1',
't2');


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
$config['blocked_usernames'] = array('root', 'admin', 'administrator', 'hostmaster', 'postmaster', 'webmaster');

// Mails are usually show as Text and only if not available as HTML. You can turn this around to prefer HTML over text.
$config['prefer_plaintext'] = true;

// Impressum and Disclaimer show in "more Info"
config['imprintanddisclaimer'] =
"<p>This service is provided for test purposes and free of charge; there is no guarantee of constant availability, in particular not of the accessibility of the domains </p><h5><span id=\"more-24\"></span></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/\">CONTACT</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/\">IMPRINT</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/\">DISCLAIMER</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/\">DATA PROTECTION</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/\">REFERENCES</a></h5>	
</p>";
