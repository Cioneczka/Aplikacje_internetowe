<?php
/* Smarty version 4.5.2, created on 2025-04-22 13:45:29
  from 'cms_template:15' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_680781592a42c6_41864105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec558f8edd8126104d3464e65f6965c39d71712f' => 
    array (
      0 => 'cms_template:15',
      1 => '1745322318',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680781592a42c6_41864105 (Smarty_Internal_Template $_smarty_tpl) {
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
a[href*="General"] {
    display: none;
}


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
        <a href="index.php?page=aktualności">Aktualności</a>
        <a href="index.php?page=galeria">Galeria</a>
        <a href="index.php?page=kontakt">Kontakt</a>
    </nav>
</header>


    <main>
<div class="news-list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entries']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
        <div class="news-item">
            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->detail_url;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->title;?>
</a></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>
</p>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

       
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
