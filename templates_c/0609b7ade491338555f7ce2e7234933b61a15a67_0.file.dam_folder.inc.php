<?php
/* Smarty version 3.1.39, created on 2021-05-27 11:23:05
  from 'C:\xampp\htdocs\sl-fw\templates\components\dam_folder.inc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af64f9c987a2_72190263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0609b7ade491338555f7ce2e7234933b61a15a67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sl-fw\\templates\\components\\dam_folder.inc',
      1 => 1622107366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60af64f9c987a2_72190263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('folder_id', $_smarty_tpl->tpl_vars['FOLDER_DATA']->value['folder_id']);
$_smarty_tpl->_assignInScope('folder_name', $_smarty_tpl->tpl_vars['FOLDER_DATA']->value['name']);?> 
<?php $_smarty_tpl->_assignInScope('folder_parent', $_smarty_tpl->tpl_vars['FOLDER_DATA']->value['path']);?>

<div
	class="sl-c-folder-block sl-l-block py-2 hover-light w-100"
	style="padding-left: <?php echo (($_smarty_tpl->tpl_vars['folder_parent']->value+1)*16);?>
px"
>
	<div class="sl-l-block flex-grow-100">
		<div class="sl-c-folder-name">
			<div class="sl-l-block">
				<a class="sl-c-folder-name--arrow mr-2" href="#">
					<i class="icon medium">
						<img src="./assets/icons/arrow2.svg" />
					</i>
				</a>
				<a class="color-text" href="#">
					<i class="sl-c-folder-name--icon icon medium mr-1">
						<img src="./assets/icons/folder-close.svg" />
					</i>
					<span class="sl-c-folder-name--text"
						><?php echo $_smarty_tpl->tpl_vars['folder_name']->value;?>
</span
					>
				</a>
			</div>
		</div>
	</div>
	<div class="sl-c-folder-menu sl-c-block">
		<a
			class="sl-c-folder-menu--toggler sl-js-dropdown"
			href="#"
			data-dropdown_name="<?php echo $_smarty_tpl->tpl_vars['folder_id']->value;?>
"
			data-dropdown_align="center"
		>
			<i class="icon medium">
				<img src="./assets/icons/more.svg" />
			</i>
		</a>
		<div class="sl-c-dropdown-menu" data-dropdown_parent="<?php echo $_smarty_tpl->tpl_vars['folder_id']->value;?>
">
			<ul>
				<li class="hover-light">
					<a class="p-3 w-100" href="#">Item 1</a>
				</li>
				<li class="hover-light">
					<a class="p-3 w-100" href="#">Item 2</a>
				</li>
				<li class="hover-light">
					<a class="p-3 w-100" href="#">Item 3</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php }
}
