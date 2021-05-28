<?php
require 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$folder_list = array(
    array("folder_id" => "1", "name" => "Super Long Title of Folder Mega Long", "path" => "0"),
    array("folder_id" => "2", "name" => "Folder 2", "path" => "1"),
    array("folder_id" => "3", "name" => "FAsdlamwdiasd219312djaskld1209312", "path" => "1"));
$smarty->assign('FOLDER_LIST', $folder_list);
$smarty->display('templates/dam.tpl');