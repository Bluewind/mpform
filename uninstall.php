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
/* This file provides the deinstallation function of the module. */
// Must include code to stop this file from being accessed directly
if(defined('WB_PATH') == false) { exit("Cannot access this file directly"); }

$database->query("DELETE FROM ".TABLE_PREFIX."search WHERE name = 'module' AND value = 'mpform'");
$database->query("DELETE FROM ".TABLE_PREFIX."search WHERE extra = 'mpform'");

$database->query("DROP TABLE IF EXISTS `".TABLE_PREFIX."mod_mpform_fields`");
$database->query("DROP TABLE IF EXISTS `".TABLE_PREFIX."mod_mpform_settings`");
$database->query("DROP TABLE IF EXISTS `".TABLE_PREFIX."mod_mpform_submissions`");

$results = TABLE_PREFIX . "mod_mpform_results_%";
$t = $database->query("SHOW TABLES LIKE '".$results."'");
if ($t->numRows() > 0 ) {
        while ($tn = $t->fetchRow()) {
                $database->query("DROP TABLE IF EXISTS `".$tn[0]."`");
        }
}

