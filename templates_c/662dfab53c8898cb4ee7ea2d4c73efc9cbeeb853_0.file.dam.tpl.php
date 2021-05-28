<?php
/* Smarty version 3.1.39, created on 2021-05-27 11:34:42
  from 'C:\xampp\htdocs\sl-fw\templates\dam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af67b291d253_66787763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '662dfab53c8898cb4ee7ea2d4c73efc9cbeeb853' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sl-fw\\templates\\dam.tpl',
      1 => 1622108036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../inc/head.inc' => 1,
    'file:../inc/nav.inc' => 1,
    'file:components/dam.inc' => 1,
  ),
),false)) {
function content_60af67b291d253_66787763 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<?php $_smarty_tpl->_subTemplateRender('file:../inc/head.inc', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:../inc/nav.inc', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:components/dam.inc', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
    <div class="sl-l-block sl-js-tree-panel--toggler" style="padding-top:60px;margin-left:300px">
        <button class="sl-e-button">
            Toggle Menu
        </button>
    </div>

</body>
</html><?php }
}
