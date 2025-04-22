<?php
/* Smarty version 4.5.2, created on 2025-04-22 13:50:43
  from 'tpl_body:1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_680782936501d0_72400707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763e63b089e7c52bfafe4a16588e3defdf19eb95' => 
    array (
      0 => 'tpl_body:1',
      1 => '1745322631',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680782936501d0_72400707 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
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
      <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?> 
    </main>

      <footer>
  <p>© 2025 Narodowe Centrum Rybołówstwa</p>
  <p>Wspieramy zrównoważone rybołówstwo i ochronę zasobów wodnych.</p>
  <p>tel. +48 71 400 55 00 | kontakt@ncmisn.pl</p>
    </footer>
  </div>
</body>
</html><?php }
}
