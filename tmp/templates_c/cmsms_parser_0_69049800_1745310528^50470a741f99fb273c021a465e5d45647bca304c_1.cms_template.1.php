<?php
/* Smarty version 4.5.2, created on 2025-04-22 10:28:48
  from 'cms_template:1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_68075340ad8e33_05752125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50470a741f99fb273c021a465e5d45647bca304c' => 
    array (
      0 => 'cms_template:1',
      1 => '1745309814',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68075340ad8e33_05752125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\cms\\lib\\plugins\\function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'C:\\xampp\\htdocs\\cms\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\cms\\cms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'C:\\xampp\\htdocs\\cms\\cms\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'C:\\xampp\\htdocs\\cms\\cms\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),5=>array('file'=>'C:\\xampp\\htdocs\\cms\\cms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),));
?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body>
  <div class="wrapper">
	<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
	</header>

	<nav id="menu">
		
	</nav>

	<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		
	</section>

        <section id="footer">

<?php echo smarty_function_global_content(array('name'=>'footer'),$_smarty_tpl);?>



        </section>     
 </div>      
</body>

</html><?php }
}
