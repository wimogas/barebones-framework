<?php
/* Smarty version 3.1.39, created on 2021-05-27 11:40:59
  from 'C:\xampp\htdocs\sl-fw\templates\components\dam.inc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af692b28c694_05939396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e994abdeb591f93162e7657fb5f3fe27ca7bfe4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sl-fw\\templates\\components\\dam.inc',
      1 => 1622108458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/dam_folder.inc' => 1,
  ),
),false)) {
function content_60af692b28c694_05939396 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sl-c-tree-panel border-right">

    <div class="sl-l-block column align-start" >

        <div class="sl-l-block p-3 justify-between w-100">
            <h3>Folders<H3>
            <a class="icon medium" href="#">
			    <img src="./assets/icons/add.svg"/>
		    </a>
        </div>


        <div class="sl-l-block justify-between w-100">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOLDER_LIST']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender('file:components/dam_folder.inc', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FOLDER_DATA'=>$_smarty_tpl->tpl_vars['item']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            

        </div>

    </div>
</div>
<?php }
}
