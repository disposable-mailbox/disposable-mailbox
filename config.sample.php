<?php
$config['versionnumber'] = '2.1.1';

// set your time zone:
date_default_timezone_set('Europe/Paris');

// set locale (see supported locales: https://github.com/fightbulc/moment.php#switch-locale)
$config['locale'] = 'en_US';

//Funktion für mehrere Sprachen hinzugefügt. 
//    Diese kann mit en_US oder de_DE ausgewählt werden.
//    Weitere Übersetzungen müssen in /locale/%LOCALECODE%/locale.template.php abgelegt werden.
//    Es fehlt noch eine Debug Fassung falls keine Sprachdatei gefunden wurde - aktuell ist die Seite dann ohne Text.
//    Die Möglichkeit, die Sprache durch den User zu ändern ist auch noch nicht Integriert!
//Added functionality for multiple languages.
//    This can be selected with en_US or de_DE.
//    further translations must be stored in /locale/CODE/locale.template.php.
//    A debug version is still missing if no language file was found - the current page is then without text.
//    The possibility of changing the language by the user is also not yet integrated!


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
