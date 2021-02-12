<?php 

$setHTMLLanguageCode = "es";

$locale['title']  =  "Tu correo electrónico: ";

$locale['HowManyMailArrivedBevore']  = "hay "; //Counter
$locale['MailHaveBeArrivedAfter']  = " nuevos correos.";

$locale['MailArrived']  = "han llegado <strong>nuevos correos</strong> electrónicos.";

$locale['TranslationForRefresh']  = "Actualizar!";

$locale['MailboxReady']  =  "Su dirección de correo electrónico unidireccional está lista.";

$locale['TranslationforCopy']  =  "Copiar";

$locale['ChangeMailUsername']  = "Cambiar dirección";
$locale['SetToRandom']  = "Genere una dirección de correo electrónico aleatoria";
$locale['UseOwnUsername']  = "oo crea tu propia dirección:";

$locale['TranslationForDomain']  = "dominio";

$locale['OpenMailbox']  = "buzón abierto";

$locale['TranslationForDownload']  =  "Descargar";
$locale['TranslationForDelete']  =  "Claro";

$locale['EmptyMailbox']  = "<p>El buzón está vacío. Mientras esta página esté abierta, buscará automáticamente nuevos correos electrónicos ... </p>";

$onlynumber['delete_messages_older_than'] = preg_replace('![^0-9]!', '', $config['delete_messages_older_than']); 
$locale['QuickSummary']  = "Este es un servicio de buzón unidireccional.  
Quien conozca su nombre de usuario puede leer sus correos electrónicos.  <br/> 
Los correos electrónicos se eliminan automática e irremediablemente después de ". $onlynumber['delete_messages_older_than']."  Dias. ";

$locale['collapse']  = "Más información";
$locale['long-about-1']  = "<p class=\"text-justify\"Este buzón desechable mantendrá su buzón principal libre de spam.</p>";
$locale['long-about-2']  = "<p class=\"text-justify\">Simplemente elija una dirección y utilícela en sitios web en los que no confíe y en los que no desee revelar la dirección de correo electrónico privada principal.<br/>Una vez que haya terminado, puede simplemente olvidarse del buzón.<br/>Todo el spam permanece aquí y no terminará en la cuenta de correo Private.</p>";
$locale['long-about-3']  = "<p class=\"text-justify\">Selecciona la dirección que desea usar y los correos electrónicos recibidos aparecerán automáticamente.<br/>No hay registro ni contraseñas.<br/>Si conoce la dirección, puede leer los correos electrónicos.<br/><br/>             <strong>En principio, todos los correos electrónicos son públicos.<br/>Así que no lo use para datos confidenciales.</strong></p>";

$locale['success'] = "Exitosamente";
$locale['copied'] = "Copiado!";
$locale['show'] = "mostrar";

$locale['imprintanddisclaimer']  = "descargo de responsabilidad y pie de imprenta...";

$locale['adsLocale'] = "Anuncio:";

$locale['ourdomains'] = "Nuestros dominios";

$locale['Copyright']  = "<small><a href=\"https://github.com/pfeifferch/disposable-mailbox\"><strong>disposable-mailbox</strong></a> ".$config['versionnumber']." (ES)</small>";

?>
