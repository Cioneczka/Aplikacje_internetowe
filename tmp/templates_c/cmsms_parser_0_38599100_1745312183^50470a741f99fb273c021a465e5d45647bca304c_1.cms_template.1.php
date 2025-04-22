<?php
/* Smarty version 4.5.2, created on 2025-04-22 10:56:23
  from 'cms_template:1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_680759b760d223_77972965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50470a741f99fb273c021a465e5d45647bca304c' => 
    array (
      0 => 'cms_template:1',
      1 => '1745312137',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680759b760d223_77972965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Segoe UI", "Helvetica Neue", sans-serif;
      background-color: #f5f5f5;
      color: #333;
    }

    .wrapper {
      min-height: 100%;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: #111;
      color: #fff;
      padding: 20px;
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 10px 0;
    }

    nav a {
      color: #ccc;
      text-decoration: none;
      font-weight: 500;
    }

    nav a:hover {
      color: #fff;
    }

    main {
      flex: 1;
      padding: 40px 20px;
      max-width: 900px;
      margin: 0 auto;
    }

    footer {
      background-color: #111;
      color: #eee;
      padding: 30px 15px;
      text-align: center;
      font-size: 0.95rem;
      line-height: 1.6;
    }

    footer p {
      margin: 5px 0;
    }

    footer a {
      color: #ccc;
      text-decoration: none;
    }

    footer a:hover {
      color: #fff;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="wrapper">
<header>
    <nav>
        <a href="index.php?page=home">Strona główna</a>
        <a href="index.php?page=aktualnosci">Aktualności</a>
        <a href="index.php?page=galeria">Galeria</a>
        <a href="index.php?page=kontakt">Kontakt</a>
    </nav>
</header>


    <main>
       <!-- CMSMS dynamic content -->
    </main>

      <footer>
      <p>© 2025 Narodowe Centrum Muzyki i Sztuki Nowoczesnej</p>
      <p>Aleja Harmonii 7, 50-123 Wrocław</p>
      <p>tel. +48 71 400 55 00 | <a href="mailto:kontakt@ncmisn.pl">kontakt@ncmisn.pl</a></p>
    </footer>
  </div>
</body>
</html><?php }
}
