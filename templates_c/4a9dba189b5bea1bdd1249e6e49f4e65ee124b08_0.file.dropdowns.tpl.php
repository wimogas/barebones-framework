<?php
/* Smarty version 3.1.39, created on 2021-05-27 09:16:17
  from 'C:\xampp\htdocs\sl-fw\templates\dropdowns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af47414e17a8_06093944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a9dba189b5bea1bdd1249e6e49f4e65ee124b08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sl-fw\\templates\\dropdowns.tpl',
      1 => 1622098371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../inc/head.inc' => 1,
    'file:../inc/nav.inc' => 1,
    'file:components/dropdowns.inc' => 1,
  ),
),false)) {
function content_60af47414e17a8_06093944 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<?php $_smarty_tpl->_subTemplateRender('file:../inc/head.inc', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:../inc/nav.inc', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="sl-l-container">
        <?php $_smarty_tpl->_subTemplateRender('file:components/dropdowns.inc', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    
</body>
</html><?php }
}
