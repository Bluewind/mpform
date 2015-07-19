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
/* This file shows the content of a submission for a page in the backend. */
// manually include the config.php file (defines the required constants)
require('../../config.php');
require(WB_PATH.'/modules/admin.php');

// obtain module directory
$mod_dir = basename(dirname(__FILE__));

// include module.functions.php (introduced with WB 2.7)
@include_once(WB_PATH . '/framework/module.functions.php');

// convert page/section id to numbers (already checked by /modules/admin.php but kept for consistency)
$page_id = (isset($_GET['page_id'])) ? (int) $_GET['page_id'] : '';
$section_id = (isset($_GET['section_id'])) ? (int) $_GET['section_id'] : '';

// include the module language file depending on the backend language of the current user
if (!@include(get_module_language_file($mod_dir))) return;

//START HEADER HERE
require_once(WB_PATH.'/modules/'.$mod_dir.'/functions.php');
module_header_footer($page_id,$mod_dir);
//END HEADER HERE

// Get id
$submission_id = $admin->checkIDKEY('submission_id', false, 'GET');
if (!$submission_id) {
        $admin->print_error($MESSAGE['GENERIC_SECURITY_ACCESS'], ADMIN_URL);
        exit();
}

// Get submission details
$query_content = $database->query("SELECT * FROM `".TABLE_PREFIX."mod_mpform_submissions` WHERE `submission_id` = '$submission_id'");
$submission = $query_content->fetchRow();

// Get the user details of whoever did this submission
$query_user = "SELECT username,display_name FROM `".TABLE_PREFIX."users` WHERE `user_id` = '".$submission['submitted_by']."'";
$get_user = $database->query($query_user);
if($get_user->numRows() != 0) {
        $user = $get_user->fetchRow();
} else {
        $user['display_name'] = 'Unknown';
        $user['username'] = 'unknown';
}

?>
<table class="settings_table" cellpadding="0" cellspacing="0" border="0" width="100%">
<caption><?php echo $TEXT['SUBMISSION_ID']; ?>: <?php echo $submission['submission_id']; ?>
</caption>
<tr>
        <th><?php echo $TEXT['SUBMITTED']; ?>:</th>
        <td><?php echo date(TIME_FORMAT.', '.DATE_FORMAT, $submission['submitted_when']); ?></td>
</td>
<tr>
        <th><?php echo $TEXT['USER']; ?>:</th>
        <td><?php echo $user['display_name'].' ('.$user['username'].')'; ?></td>
</tr>
<tr>
        <td colspan="2">
                <?php
                        $lines = explode("\n",$submission['body']);
                        foreach($lines as $k => $v) {
                                $hr = explode('url]',$v);
//                                print_r($hr);
                                if (count($hr)>1) {
                                        $hr[0] = substr($hr[0],0,-1);
                                        $hr[1] = substr($hr[1],0,-2);
                                        $v = $hr[0]."[url]".$hr[1]."[/url]".$hr[2];
                                        echo str_replace(array('[url]','[/url]'), array('<a href="','" target="_blank">'.$hr[1].'</a>'), $v); 
                                } else {
                                        echo $v;
                                }
                                echo "<br>";
                        }
                ?>
        </td>
</tr>
</table>
<?php 
        $sModuleUrl =  WB_URL.'/modules/'.basename(dirname(__FILE__));
        $sIconDir = $sModuleUrl.'/images'
?>
<table cellpadding="0" cellspacing="0" border="0" width="99%">
        <tr>                
                <td align="left">
                        <button class="" onclick="javascript: confirm_link('<?php echo $TEXT['ARE_YOU_SURE']; ?>', '<?php echo $sModuleUrl; ?>/delete_submission.php?page_id=<?php
                echo $page_id; ?>&section_id=<?php echo $section_id; ?>&submission_id=<?php
                echo $submission_id; ?>');"><img src="<?php echo $sIconDir; ?>/delete.png" alt="" width="16" height="16" border="0" /> <?php echo $TEXT['DELETE']; ?></button>
                </td>
                <td align="right">
                        <button onclick="javascript: window.location = '<?php echo ADMIN_URL; ?>/pages/modify.php?page_id=<?php echo $page_id; ?>';"><?php echo $TEXT['BACK']; ?></button>
                </td>
        </tr>
</table>

<?php
// Print admin footer
$admin->print_footer();
