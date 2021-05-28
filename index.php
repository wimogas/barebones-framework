<?php
require 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->assign('name', 'Guillem');
$smarty->display('templates/index.tpl');