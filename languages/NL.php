<?php

/*
   WebsiteBaker CMS module: mpForm
   ===============================
   This module allows you to create customised online forms, such as a feedback form with file upload and email attachment mpForm allows forms over one or more pages.  User input for the same session_id will become a single row in the submitted table.  Since Version 1.1.0 many ajax helpers enable you to speed up the process of creating forms with this module.
   
   @module              mpform
   @authors             Frank Heyne, NorHei(heimsath.org), Christian M. Stefan (Stefek), Quinto, Martin Hecht (mrbaseman)
   @copyright           (c) 2009 - 2015, Website Baker Org. e.V.
   @url                 http://www.websitebaker.org/
   @license             GNU General Public License

   Improvements are copyright (c) 2009-2011 Frank Heyne

   For more information see info.php   

*/
/* The file NL.php provides strings in Dutch language. */

// Dutch module description
$module_description = 'Deze module biedt mogelijkheden om krachtige webformulieren te maken. 
Zie http://www.websitebakers.com/pages/modules/interaction/mpform.php en de uitgebreide documentatie
van de maker op http://wbdemo.heysoft.de/pages/en/mpform.php.';

// declare module language array
global $LANG;
$LANG = array();

// Text outputs for the backend
$LANG['backend'] = array(
        'SETTINGS' => 'Formulierinstellingen',
        'TXT_TYP'        => 'Type',
        'TXT_LIST'        => "Lijst",
        'TXT_DEFAULT'        => "Standaardwaarde",
        'TXT_ISFOLLOWING' => "Heeft een voorgaand formulier",
        'des_is_following'=> 'Geeft aan of het formulier onderdeel is van een samengesteld formulier, of niet.<br />
Voor formulieren die uit een enkele pagina bestaan is NEE vereist!',
        'TXT_MP_SETTINGS' => 'Workflow-instellingen',
        'TXT_LAYOUT_SETTINGS' => 'Lay-out',
        'EMAIL_SETTINGS_1' => 'Instellingen voor mail aan BEHEERDER',
        'EMAIL_SETTINGS_2' => 'Instellingen voor mail aan BEZOEKER',
        'TXT_STATIC'        => 'Kies een veld, of voer hieronder een tekst in',
        'EMAIL_SUBJECT' => 'Ingezonden webformulier',
        'EMAIL_SUC_TEXT' => 'Hartelijk dank voor het inzenden van het formulier op ',
        'EMAIL_SUC_SUBJ' => 'Uw ingezonden webformulier',
        'VERIFICATION' => 'Verificatie (anti-spam maatregel)',
        'HELP' => 'Hulp voor',
        'TXT_COPY_FIELD' => 'Veld kopi&euml;ren',
        'TXT_ADD_FIELD'        => 'Veld toevoegen',
        'ROWS'        => 'Hoogte (aantal regels)',
        'TXT_TBLSFX' => 'Achtervoegsel voor databasetabel',
        'DES_TXT_TBLSFX' => 'Maar als u meerdere mpForm-formulieren gebruikt op uw site, is het aan te raden om de resultaten in aparte databasetabellen op te slaan, om te voorkomen dat alle resultaten in dezelfde tabel terechtkomen.',
        'textfield'        => 'Korte tekst (1 regel)',
        'textarea'        => 'Lange tekst (meerdere regels)',
        'date'        => 'Datum',
        'fileupload'        => 'Bestandsupload',
        'txt_email_to'        => 'E-mailadres(sen) ontvanger(s)',
        'des_email_to'        => 'Plaats niet meer dan 1 ontvanger per regel en gebruik de volgende notatie:<br>
 <strong>Algemeen &lt;info@uwbedrijf.nl&gt;<br>
 Support &lt;support@uwbedrijf.nl&gt;<br>
 Marketing &lt;marketing@uwbedrijf.nl,marketing2@uwbedrijf.nl&gt;</strong><br>
 U kunt ook gewoon e-mailadressen gebruiken (ipv namen met adressen tussen haakjes),
 maar in dat geval zal de bezoeker wel het e-mailadres kunnen zien als hij zelf de ontvanger kan kiezen.',
 
        'txt_success_email_to'        => 'E-mailadres ontvanger',
        'txt_email_fromname_field'        => 'Naam afzender',
        'txt_success_email_fromname'        => 'Naam afzender',
        'txt_email_from_field'        => 'E-mailadres afzender',
        'txt_success_email_from'        => 'E-mailadres afzender',
        'txt_success_page'        => 'Landingspagina na verzenden',
        'des_success_page'        => 'De landingspagina wordt in de browser getoond nadat het formulier zonder fouten is ingevuld.<br />
Als geen landingspagina is ingesteld wordt de in het volgende veld gespecificeerde tekst verzonden.',
        'txt_success_text'        => 'Succestekst',
        'des_success_text'        => 'Als geen landingspagina is ingesteld wordt deze tekst getoond nadat het formulier zonder fouten is ingevuld.',
        'txt_submissions_text'        => 'Gegevens worden opgeslagen in de tabel mpform_submissions',
        'des_submissions_text'        => 'Deze tekst wordt in het veld <b>body</b> van de tabel mpform_submissions opgeslagen.',
        'success_options'        => 'De volgende codes zijn mogelijk:<br />
 &nbsp; {DATA} - de gegevens die in het formulier zijn ingevuld<br />
 &nbsp; {REFERER} - indien bekend, de pagina waarvandaan het formulier is opgeroepen<br />
 &nbsp; {IP} - het IP-adres van de afzender<br />
 &nbsp; {DATE} - datum en tijd<br />
',
        'des_success_email_text'        => 'Inhoud van de bevestigingsmail aan de afzender',
        'des_email_text'        => 'Inhoud van de e-mail aan de site-eigenaar',
        'fieldset_start'        => 'Veldset (start)',
        'fieldset_end'        => 'Veldset (eind)',
        'integer_number'        => 'Numerieke waarde',
        'decimal_number'        => 'Numerieke waarde met decimaal',
        'email_recip'        => 'E-mailadres ontvanger',
        'email_subj'        => 'E-mailonderwerp (achtervoegsel)',
        'module_name'        => 'Multi Purpose Form',

        'TXT_SUBMIT'        => 'Verzenden',
        'HTML'        => "HTML-Code",
        
        'entry'        => "Invoer is",
        'compulsory_entry'        => "verplicht",
        'optional_entry'        => "optioneel",
        'ro_entry'        => "alleen lezen",
        'des_field_loop'        => 'De volgende codes zijn mogelijk:<br />
 &nbsp; {CLASSES} - CSS-class (afhankelijk van het formulierveld en foutstatus)<br />
 &nbsp; {TITLE} - naam van het formulierveld<br />
 &nbsp; {FIELD} - het formulierveld zelf<br />
 &nbsp; {REQUIRED} - markering voor verplichte velden<br />
 &nbsp; {HELP} - initieel verborgen helptekst (vereist Javascript om te tonen)<br />
 &nbsp; {HELPTXT} - altijd zichtbare helptekst<br />
 &nbsp; {ERRORTEXT} - fouttekst (alleen voor bepaalde veldtypen)<br />',
        'des_footer'        => 'De volgende code is mogelijk:<br />
 &nbsp; {SUBMIT} - Verzendknop',
 'TXT_MODIFY_FIELD'        => 'Bewerken veld (ID: %s)',

 'TXT_ADD_FIELD'        => 'Add Field',
 'TXT_SETTINGS'                => 'General Options',
 'TXT_EDIT_CSS'                => 'CSS Settings'   
);
        
$LANG['backend_adv'] = array(
        'adv_settings'        => 'Geavanceerde instellingen',
        'CAPTCHA_CONTROL_HINT'        => 'Captcha choice and settings can be performed with the Admin-Tool "Captcha-Control"',
        'TXT_NOTIFICATION_SETTINGS'        => 'Notificatie-instellingen',
        'txt_heading_html'        => 'Titel',
        'des_heading_html'        => 'Gebruikt voor type: Titel<br />Code: {HEADING}',
        'txt_short_html'        => 'Invoer op ��n regel',
        'des_short_html'        => 'Gebruikt voor typen: Korte tekst, Radiobutton, E-mail ontvanger, E-mailonderwerp, Datum, Nummer<br />Codes: {TITLE} en {DATA}',
        'txt_long_html'        => 'Invoer op meerdere regels',
        'des_long_html'        => 'Gebruikt voor typen: Lange tekst, Aankruisvakje, Keuzemenu<br />Codes: {TITLE} en {DATA}',
        'txt_email_html'        => 'E-mailadres',
        'des_email_html'        => 'Gebruikt voor type: E-mailadres<br />Codes: {TITLE} en {DATA}',
        'txt_uploadfile_html'        => 'Uploaden bestand',
        'des_uploadfile_html'        => 'Gebruikt voor type: Uploaden bestand<br />Codes: {TITLE} en {DATA}',
        'SPECIAL_SETTINGS'        => 'Speciale instellingen',
        'txt_enum'        => 'Startwaarde voor Radiobutton en Aankruisvakje',
        'des_enum'        => 'Standaard gedrag: Als dit veld leeg is tonen de radiobuttons en aankruisvakjes de zichtbare tekst.<br />
Als dit veld een cijfer of letter krijgt (handige cijfers of letters kunnen bijvoorbeeld, 0, 1 of a zijn), dan wordt deze waarde opgehoogd voor elke optie en in plaats van de tekst getoond.',
        'TXT_DATE_FORMAT' => "Datumnotatie",
        'TXT_ASP_SETTINGS'        => 'Spam-protectie', 
         'des_date_format'        => 'Datumnotatie, bijv. %d-%m-%Y',
        'TXT_UPLOAD_FILE_FOLDER' => "Upload-folder",
        'TXT_UPLOAD_ONLY_EXTS' => "Toegestane bestandstype(n)",
        'TXT_UPLOAD_SETTINGS'        => 'Upload-instellingen',
        'TXT_UPLOAD_FILEMASK' => "Rechten voor geupload bestand",
        'TXT_UPLOAD_DIRMASK' => "Rechten voor upload-folder",
        'TXT_ATTACH_FILE' => "Voeg geupload bestand bij e-mail",
        'TXT_MAX_FILE_SIZE_KB' => "Max. upload bestandsgrootte in Kb",
        'date_format'        => '%d-%m-%Y',
        'help_extensions'        => 'Voer extensies kommagescheiden in, bijv. doc,pdf,xls,jpg,gif,png,tif,bmp.',
        'help_filemask'        => 'Rechten voor geupload bestand, bijv. 0204',
        'help_dirmask'        => 'Rechten voor upload-folder, bijv. 0705'
 
);

// Text outputs for the frontend
$LANG['frontend'] = array(
        'integer_error'        => 'Cijfervelden kunnen alleen cijfers bevatten.',
        'decimal_error'        => 'Geef een juist decimaal nummer',
        'MAX_FILESIZE' => "Max. bestandsgrootte: %d Kilobyte<br />Toegestane bestandstypen: %s",
        'err_too_large'        => 'Bestandsgrootte is groter dan de max. grootte van %d bytes!',
        'err_too_large2'        => 'Bestand is te groot, max. %d byte is toegestaan!',
        'err_partial_upload' => 'Bestand is slechts voor een deel geupload!',
        'err_no_upload' => 'Bestand is niet geupload!',
        'err_upload' => 'Er is een fout opgetreden bij uploaden van bestand %s (%s). Probeer opnieuw svp!',
        'select' => "Maak een keuze...",
        'select_recip' => "U dient een ontvanger voor het formulier te kiezen!",
        'REQUIRED_FIELDS' => "Vul de rood gemarkeerde velden alsnog of juist in!",
        'INCORRECT_CAPTCHA' => "Het verificatienummer dat is ingevuld is onjuist.",
        
        'VERIFICATION' => "Verification code (SPAM protection)"
);

?>