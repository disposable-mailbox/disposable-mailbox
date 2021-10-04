# Change Log
All notable changes to this project will be documented in this file. The format is based on [Keep a Changelog](http://keepachangelog.com/).

## [2.5.30] - 2021-09-30
(2.3.3 bis 2.5.30)
 Bugfixes, fontawesome statt emoji, Anpassungen der Links für Info-Seiten, Links zu GitHub aktualisiert,
 Diverse andere kleine Aktualisierungen
2.5.30-33 
 Verbesserungen bei den Übersetzungen (bei Mails werden die Zeiten - soweit von "moment" supportet möglich - auch übersetzt)
2.5.34
 Wenn kein style.css vorhanden ist, wird eine zufällige CSS verwendet. 
 Wenn du zufällige Farben nutzen möchtest, lasse einfach die style.css weg.

 Wenn du nur weitere Farben anlegen möchtest, fertige die CSS entsprechend den Vorlagen. 
 Sind jedoch andere (Benutzerdefinierte oder Fertige wie Fontawesome, ect.) .css Dateien mit in dem Ordner /css/ packe sie bitte in einen extra Ordner (jedoch keinen Unterordner)

 Hast du dich für einen Style entschieden benenne ihn um in style.css, nun kannst du auch Custom-Styles in den Ordner packen. 


 If there is no style.css, a random CSS is used.
 If you want to use random colors, just leave out the style.css.

 If you just want to add more colors, make the CSS according to the templates.
 However, if there are other (user-defined or ready-made such as Fontawesome, etc.) .css files in the / css / folder, please pack them in a separate folder (but not a subfolder)

 Once you have decided on a style rename it to style.css, now you can also put custom styles in the folder.




## [2.3.3]-[2.2.3a] - 2020-12-xx -ML Branch
Bugfixes 

## [2.3.2] - 2020-12-09 -ML Branch
Show/Hide overview of All Domains 
Enable/Disable in Config
## [2.3.2] 
imprintanddisclaimer moved to usercontent.php

## [2.3.01] - 2020-12-07 -ML Branch
## [2.3.0] - 2020-12-05 -ML Branch
Einige Kleinigkeiten (unter anderem fehlende Uebersetzungen)
Advertisement Settings integriert (2.3.01: Bugfix On/Off)
Vorbereitung für Social Media Banner

## [2.2.4] - 2020-11-30 -ML Branch
Viele Kleinigkeiten
.NL hinzugefuegt

## [2.2.x] - 2020-11-01 -ML Branch
### Changed
2.2 : Sprache kann vom User gewechselt werden. 
      Bleibt bei einem Wechsel der Adresse oder Refresh nicht gespeichert, 
      dann wird auf die Browservorgabe zurück gegriffen.
   X: kleine Optimierungen


## [2.1.3] - 2020-10-31 -ML Branch

### Changed

Funktion für mehrere Sprachen erweitert. 
-    Diese wird nun vom Browser ausgelesen. 
     In der  config.php per $config['locale']  wird die Formatierung von Datum Uhrzeit und co festgelegt.  
     Ist die vom Browser vorgegebene Sprache nicht verfügbar, wird versucht, die Übersetzungsdatei zu Laden die der Sprache der Konfiguration entspricht. 
     Ist auch diese Übersetzungsdatei nicht auffindbar, wird ein Standardtext verwendet. 
-    Weitere Übersetzungen müssen in /locale/%LOCALECODE%/locale.template.php abgelegt werden.
-    BEHOBEN: Es fehlt noch eine Debug Fassung falls keine Sprachdatei gefunden wurde - aktuell ist die Seite dann ohne Text.
-    Die Möglichkeit, die Sprache durch den User zu ändern ist noch nicht Integriert!


## [2.1.1] - 2020-10-26 -ML Branch

### Changed

Funktion für mehrere Sprachen hinzugefügt. 
-    Diese kann mit en_US oder de_DE in der config.php per $config['locale']  ausgewählt werden
-    Weitere Übersetzungen müssen in /locale/%LOCALECODE%/locale.template.php abgelegt werden.
-    Es fehlt noch eine Debug Fassung falls keine Sprachdatei gefunden wurde - aktuell ist die Seite dann ohne Text.
-    Die Möglichkeit, die Sprache durch den User zu ändern ist auch noch nicht Integriert!

Added functionality for multiple languages.
-    This can be selected with en_US or de_DE in config.php (  $config['locale']   ) 
-    further translations must be stored in /locale/CODE/locale.template.php
-    A debug version is still missing if no language file was found - the current page is then without text.
-    The possibility of changing the language by the user is also not yet integrated!



## [Unreleased]

### Changed
- find config.php automatically in current and parent directories. Show error message if not found. 
- use local CSS/JS instead of CDN
- detect missing imap extension and config error
- refactoring to simplify routing

### Removed
- JSON API (json-api.php), this feature would better fit in a separate project. 

## [0.2.1] - 2018-07-01

### Breaking Changes
- added $config['locale'].  See config.sample.php - you have to set it.

### Changed
- new layout & design with more whitespace and more explanations.  
- Show dates in local and relative format. 

## [0.2.0] - 2018-06-16

### Changed
- Show list of mails and show them only on click. 
- Removed Turbolinks to allow for simpler code in new features. Add new mail alert. 
- Rewrote to use mostly pure php. Uses Javascript only where it’s necessary. 
- fixed problem where only one domain is defined
- fix: restore focus on reload
- #33 improve button style
- fixed bug where html in plaintext emails are interpreted as html. 
- changed footer style
- refactored code into multiple php files.
- Requires PHP version  >=7.2
- make all addresses lowercase  #30
- fixed error when downloading email 

### Added 
- better horizontal spacing for header (from @Spegeli) and style
- improved validation of user input
- Added $config['prefer_plaintext'] = true; Prefer HTML or Text and removed toggle buttons.
- Added multiple domain support #21
- Blacklist some usernames, configurable  #27
- copyToClipboard button #30
- mail counter in title
- rest api option

## [0.1.4] - 2017-04-15

### Changed
- Improved styling using card layout
- Changed license to GPL-3.0 in order to allow commercial use and advertisement.

## [0.1.3] - 2017-03-24
### Changed
- new nicer login form
- layout optimized (show html now on the right)
- tell user that mails will be deleted

### Added
- set delete period in config

## [<=0.1.2]
See https://github.com/synox/disposable-mailbox/releases
