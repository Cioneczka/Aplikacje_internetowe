<?php
/* Smarty version 4.5.2, created on 2025-04-22 21:17:22
  from 'tpl_head:15' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6807eb429c19e7_36645246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9158df61aac54aecbb2372ecc32197d2dc06448' => 
    array (
      0 => 'tpl_head:15',
      1 => '1745349440',
      2 => 'tpl_head',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6807eb429c19e7_36645246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
?>
<head>
  <meta charset="UTF-8">
  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
a[href*="General"] {
    display: none;
}

/* Styl dla kontenera z newsami */
.NewsSummary, .news-summary {
  background-color: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 30px;
  transition: transform 0.2s ease, box-shadow 0.3s ease;
}

.NewsSummary:hover, .news-summary:hover {
  transform: translateY(-4px);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}

/* Tytuł */
.NewsSummary h3, .news-summary h3 {
  font-size: 1.5rem;
  margin-top: 0;
  color: #005a9e;
}

.NewsSummary h3 a, .news-summary h3 a {
  color: inherit;
  text-decoration: none;
}

.NewsSummary h3 a:hover, .news-summary h3 a:hover {
  text-decoration: underline;
}

/* Opis */
.NewsSummary .news-summary-content, .news-summary p {
  font-size: 1rem;
  line-height: 1.6;
  margin-top: 10px;
}

/* Data */
.NewsSummary .news-summary-date, .news-summary-date {
  font-size: 0.9rem;
  color: #777;
  margin-top: 10px;
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
</head><?php }
}
