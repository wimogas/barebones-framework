<?php
/* Smarty version 3.1.39, created on 2021-05-27 09:17:46
  from 'C:\xampp\htdocs\sl-fw\inc\nav.inc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af479a9381c3_81518568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c7e8ea2903c2c3a920c772daf1d7205b3d5b148' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sl-fw\\inc\\nav.inc',
      1 => 1622099865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60af479a9381c3_81518568 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="sl-c-nav sl-l-block p-3 justify-between w-100 bg-dark">
	<ul class="sl-l-block">
		<li class="pr-5">
			<a href="./index.php">
				<h3 class="color-white">SL DESIGN SYSTEM</h3>
			</a>
		</li>
		<li class="pr-5">
			<a
				class="sl-js-dropdown color-light"
				data-dropdown_name="elements"
				href="#"
			>
				Elements
				<i class="icon medium ml-2">
					<img src="./assets/icons/arrow.svg" />
				</i>
			</a>
			<div class="sl-c-dropdown-menu" data-dropdown_parent="elements">
				<ul>
					<li class="hover-light">
						<a class="p-3 w-100 color-text" href="links.php">Links</a>
					</li>
					<li class="hover-light">
						<a class="p-3 w-100 color-text" href="buttons.php">Buttons</a>
					</li>
				</ul>
			</div>
		</li>

		<li class="pr-5">
			<a
				class="sl-js-dropdown color-light"
				data-dropdown_name="components"
				href="#"
			>
				Components
				<i class="icon medium ml-2">
					<img src="./assets/icons/arrow.svg" />
				</i>
			</a>
			<div class="sl-c-dropdown-menu" data-dropdown_parent="components">
				<ul>
					<li class="hover-light">
						<a class="p-3 w-100 color-text" href="dropdowns.php">Dropdowns</a>
					</li>
					<li class="hover-light">
						<a class="p-3 w-100 color-text" href="dam.php">DAM</a>
					</li>
				</ul>
			</div>
		</li>
	</ul>
</nav>
<?php }
}
