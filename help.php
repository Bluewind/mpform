<?php
/**
 * WebsiteBaker CMS module: mpForm
 * ===============================
 * This module allows you to create customised online forms, such as a feedback form with file upload and email attachment mpForm allows forms over one or more pages.  User input for the same session_id will become a single row in the submitted table.  Since Version 1.1.0 many ajax helpers enable you to speed up the process of creating forms with this module.
 *  
 * @category            page
 * @module              mpform
 * @version             1.1.24
 * @authors             Frank Heyne, NorHei(heimsath.org), Christian M. Stefan (Stefek), Quinto, Martin Hecht (mrbaseman)
 * @copyright           (c) 2009 - 2016, Website Baker Org. e.V.
 * @url                 http://forum.websitebaker.org/index.php/topic,28496.0.html
 * @license             GNU General Public License
 * @platform            2.8.x
 * @requirements        
 *
 **/
/* English language Help file. */
// manually include the config.php file (defines the required constants)
require('../../config.php');

// prevent this file from being accessed directly
if (!defined('WB_PATH')) die(header('Location: ../../index.php'));

// obtain module directory
$mod_dir = basename(dirname(__FILE__));

// Include admin wrapper script
require(WB_PATH.'/modules/admin.php');

// 2nd level...
require_once(WB_PATH.'/framework/class.admin.php');

// include core functions to edit the optional module CSS files (frontend.css, backend.css)
@include_once(WB_PATH .'/framework/module.functions.php');

// include the module language file depending on the backend language of the current user
if (!@include(get_module_language_file($mod_dir))) return;

//START HEADER HERE
require_once(WB_PATH.'/modules/'.$mod_dir.'/functions.php');
$adm = module_header_footer($page_id, $mod_dir);
//END HEADER HERE

?>
<div class="helppage">
        <?php if(LANGUAGE == 'DE') : ?>
        
        <p>Die Dokumentation zu diesem Modul war online und ist noch <a href="https://web.archive.org/web/http://wbdemo.heysoft.de/pages/de/mpform.php" target="help">im Web Archiv</a> verf&uuml;gbar.</p>
        <p>In einem zuk&uuml;nftigen Release des Moduls wird eine aktualisierte Version der Dokumentation mit ausgeliefert.</p>

        <?php else : ?>
        
        <p>The help and documentation for this module was available online and it is currently still available <a href="https://web.archive.org/web/http://wbdemo.heysoft.de/pages/en/mpform.php" target="help">in the web archive</a>.</p>
        <p>In a future release an updated version of the documentation will be included in the module package.</p>
        
        <?php endif; ?>
</div>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
                <td align="center">
                        <input type="button" value="<?php echo $TEXT['BACK']; ?>" onclick="javascript: window.location = '<?php echo ADMIN_URL; ?>/pages/modify.php?page_id=<?php echo $page_id; ?>';" style="width: 100px; margin-top: 5px;" />
                </td>
        </tr>
</table>
<?php
$admin->print_footer();

