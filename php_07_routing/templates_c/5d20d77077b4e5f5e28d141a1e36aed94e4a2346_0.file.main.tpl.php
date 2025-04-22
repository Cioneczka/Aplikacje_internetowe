<?php
/* Smarty version 3.1.30, created on 2024-12-02 08:49:38
  from "X:\XAMPP\htdocs\php_07_routing\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_674d669252dd44_99977215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d20d77077b4e5f5e28d141a1e36aed94e4a2346' => 
    array (
      0 => 'X:\\XAMPP\\htdocs\\php_07_routing\\app\\views\\templates\\main.tpl',
      1 => 1733125655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674d669252dd44_99977215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Domyślny Opis" : $tmp);?>
>
    <title>Kalkulator Kredytowy &ndash; Oblicz swoje raty kredytu</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #0066cc;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 1.8em;
        }

        nav {
            background-color: #005bb5;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .banner {
            background-color: #e3f2fd;
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .banner h1 {
            margin: 0;
            font-size: 2em;
            color: #004080;
        }

        .info-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .info-box {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .info-box h3 {
            margin-top: 0;
            color: #00509e;
        }

        footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        footer a {
            color: #ffcc00;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Domyślny Tytuł" : $tmp);?>
</h1>
    </header>

    <nav>
        <a href="#">Strona Główna</a>
        <a href="#" class="current">Kalkulator</a>
        <a href="#">Kontakt</a>
    </nav>

    <div class="banner">
        <h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Domyślny Nagłówek" : $tmp);?>
</h1>
    </div>

    <div class="container">
        <div class="info-section">
            <div class="info-box">
                <h3>Jak działa kalkulator?</h3>
                <p>
                    Nasz kalkulator kredytowy pozwala na wprowadzenie kwoty kredytu, oprocentowania i okresu spłaty, aby łatwo obliczyć miesięczne raty. Pomaga to zrozumieć całkowity koszt pożyczki i wybrać najlepszą opcję kredytową.
                </p>
            </div>
            <div class="info-box">
                <h3>Dlaczego warto korzystać z kalkulatora kredytowego?</h3>
                <p>
                    Kalkulator kredytowy upraszcza proces podejmowania decyzji o kredycie. Niezależnie od tego, czy szukasz kredytu osobistego, hipotecznego, czy firmowego, kalkulator pokaże Ci dokładnie, ile zapłacisz co miesiąc. Pomaga wybrać kredyt dostosowany do Twojego budżetu.
                </p>
            </div>
        </div>

        <div class="content-wrapper">
            <div id="app_content" class="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1174232256674d669252d804_14756944', 'content');
?>

            </div>
        </div>
    </div>

    <footer>
        <p>
            <a href="#">Wypróbuj nasz kalkulator kredytowy</a> i uzyskaj dokładny szacunkowy koszt rat kredytowych. Nie wymaga karty kredytowej.
        </p>
    </footer>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_1174232256674d669252d804_14756944 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
