<?php
/* Smarty version 3.1.30, created on 2024-11-19 10:15:18
  from "X:\XAMPP\htdocs\php_06_kontroler_glowny\app\calc_kred\CalcCredView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673c5726b420f0_61835597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c015713cfee3de33858ae97bd3e972dd524747d8' => 
    array (
      0 => 'X:\\XAMPP\\htdocs\\php_06_kontroler_glowny\\app\\calc_kred\\CalcCredView.html',
      1 => 1732007708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c5726b420f0_61835597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1548011222673c5726b2bd95_80638237', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1506302256673c5726b418f4_47455292', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_1548011222673c5726b2bd95_80638237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa treść stopki wpisana do szablonu głównego z szablonu kalkulatora kredytowego<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1506302256673c5726b418f4_47455292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCredCompute" method="post">
		<fieldset>

			<label for="LoanAmount">Kwota kredytu</label>
			<input id="LoanAmount" type="text" placeholder="Kwota kredytu" name="LoanAmount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->LoanAmount;?>
">
				
			<label for="InterestRate">Oprocentowanie (w %)</label>
			<input id="InterestRate" type="text" placeholder="Oprocentowanie" name="InterestRate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->InterestRate;?>
">
					
			<label for="LoanTerm">Okres spłaty (w miesiącach)</label>
			<input id="LoanTerm" type="text" placeholder="Okres spłaty" name="LoanTerm" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->LoanTerm;?>
">

			<button type="submit" class="pure-button">Oblicz ratę</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
		Miesięczna rata wynosi: <strong><?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł</strong>
	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
