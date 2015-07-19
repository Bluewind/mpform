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
/* This file deletes section specific entries in the module tables in the backend. It does not delete results and submissions! */
// Delete section
$database->query("DELETE FROM ".TABLE_PREFIX."mod_mpform_fields   WHERE section_id = '$section_id'");
$database->query("DELETE FROM ".TABLE_PREFIX."mod_mpform_settings WHERE section_id = '$section_id'");
$database->query("DELETE FROM ".TABLE_PREFIX."mod_mpform_submissions   WHERE section_id = '$section_id'");
$database->query("DROP TABLE IF EXISTS ".TABLE_PREFIX."mod_mpform_results_$section_id");
