<?php

$setHTMLLanguageCode = "en";

$locale['title']  =  "Your email address: ";

$locale['HowManyMailArrivedBevore']  = "There are "; //Counter
$locale['MailHaveBeArrivedAfter']  = " new Mails.";

$locale['MailArrived']  = "<strong>New emails</strong> have arrived";

$locale['TranslationForRefresh']  = "Reload!";

$locale['MailboxReady']  =  "Your disposable mailbox is ready.";

$locale['TranslationforCopy']  =  "copy";

$locale['ChangeMailUsername']  = "Change address";
$locale['SetToRandom']  = "Open random mailbox";
$locale['UseOwnUsername']  = "or create your own address:";

$locale['TranslationForDomain']  = "Domain";

$locale['OpenMailbox']  = "Open mailbox";

$locale['TranslationForDownload']  =  "Download";
$locale['TranslationForDelete']  =  "Delete";

$locale['EmptyMailbox']  = "<p>Emails will appear here automatically. </p>";

$onlynumber['delete_messages_older_than'] = preg_replace('![^0-9]!', '', $config['delete_messages_older_than']); 
$locale['QuickSummary']  = "This is a disposable mailbox service. <br/>Whoever knows your username, can read your emails.<br/>&nbsp;<br/>Emails will be deleted after ".$onlynumber['delete_messages_older_than']." days.";
$locale['collapse']  = "Show Details";
$locale['long-about-1']  = "<p class=\"text-justify\">This disposable mailbox keeps your main mailbox clean from spam.</p>";
$locale['long-about-2']  = "<p class=\"text-justify\">you don't trust and don't  want to use your main email address.<br/>Once you are done, you can just forget about the mailbox. <br/>All the spam stays here and does not fill up your main mailbox.</p>";
$locale['long-about-3']  = "<p class=\"text-justify\">You select the address you want to use and received emails will be displayed automatically. <br/>There is not registration and no passwords. If you know the address, you can read the emails. <br/><strong>Basically, all emails are public. So don't use it for sensitive data.</strong></p>";

$locale['imprintanddisclaimer']  = "Legal information - imprint, disclaimer and more...";

$locale['ourdomains'] = "Our Domains";

$locale['success'] = "success";
$locale['copied'] = "Copied!";
$locale['show'] = "show";

$locale['adsLocale'] = "Advertisement:";

$locale['Copyright']  = "<small><a href=\"https://github.com/disposable-mailbox/disposable-mailbox\"><strong>disposable-mailbox</strong></a> ".$config['versionnumber']." (EN)</small>";

?>
