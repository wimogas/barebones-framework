<?php
/* Smarty version 3.1.39, created on 2021-05-27 08:48:25
  from 'C:\xampp\htdocs\sl-fw\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af40b901ed89_28275320',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '79001c9acec3bff0f07006c54c88d95463fc226b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sl-fw\\templates\\index.tpl',
      1 => 1622098063,
      2 => 'file',
    ),
    '7662537033e86056f5978e70a68a0ccf1ef165ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sl-fw\\inc\\head.inc',
      1 => 1622098104,
      2 => 'file',
    ),
    '8c7e8ea2903c2c3a920c772daf1d7205b3d5b148' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sl-fw\\inc\\nav.inc',
      1 => 1621955960,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_60af40b901ed89_28275320 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<?php echo '<?php
    ';?>
$d = dir("./dist");
    $files = scandir($d->path);
    $js_files = [];
    foreach ($files as $file) {
        if (strpos($file, '.js') !== false) {
            if (strpos($file, 'LICENSE') == false) {
                $js_file = "<script async src='./dist/" . $file . "'></script>";
                array_push($js_files, $js_file);
            }

        }
        if (strpos($file, '.css') !== false) {
            $css_file = "./dist/" . $file;
        }
    }
<?php echo '?>';?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Layer Design System - Playground</title>
    <?php echo '<?php 
        ';?>
foreach ($js_files as $js) {
            echo ($js);
        };
    <?php echo '?>';?>

    <link rel="stylesheet" href="<?php echo '<?php ';?>
echo $css_file <?php echo '?>';?>
">
    <link rel="stylesheet" href="https://use.typekit.net/yhp0ziy.css">
</head><body>
    <nav class="sl-c-nav sl-l-block p-3" data-justify="between" data-width="100" data-background="dark" style="position:fixed">
	<ul class="sl-l-block">
		<li class="pr-5">
			<a href="./index.php">
				<h3 data-color="white">SL DESIGN SYSTEM</h3>
			</a>
		</li>
		<li class="pr-5">
			<a
				class="sl-js-dropdown"
				data-dropdown_name="elements"
				data-color="light"
				data-icon="arrow"
				href="#"
			>
				Elements
			</a>
			<div class="sl-c-dropdown-menu" data-dropdown_parent="elements">
				<ul>
					<li data-hover="light">
						<a class="p-3 w-100" data-color="text" href="links.php">Links</a>
					</li>
					<li data-hover="light">
						<a class="p-3 w-100" data-color="text" href="buttons.php"
							>Buttons</a
						>
					</li>
				</ul>
			</div>
		</li>

		<li class="pr-5">
			<a
				class="sl-js-dropdown"
				data-dropdown_name="components"
				data-color="light"
				data-icon="arrow"
				href="#"
			>
				Components
			</a>
			<div class="sl-c-dropdown-menu" data-dropdown_parent="components">
				<ul>
					<li data-hover="light">
						<a class="p-3 w-100" data-color="text" href="dropdowns.php"
							>Dropdowns</a
						>
					</li>
					<li data-hover="light">
						<a class="p-3 w-100" data-color="text" href="dam.php"
							>DAM</a
						>
					</li>
				</ul>
			</div>
		</li>
	</ul>
</nav>
    <h1>Hello, Guillem</h1>
</body>
</html><?php }
}
