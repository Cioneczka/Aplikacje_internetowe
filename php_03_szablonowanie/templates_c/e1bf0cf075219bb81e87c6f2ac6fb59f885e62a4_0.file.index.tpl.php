<?php
/* Smarty version 4.5.4, created on 2024-11-08 16:00:40
  from 'C:\xampp\htdocs\transitive\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_672e279885e409_43262984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1bf0cf075219bb81e87c6f2ac6fb59f885e62a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\transitive\\index.tpl',
      1 => 1731078037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:banner.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_672e279885e409_43262984 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<link rel="stylesheet" href="assets/css/main.css" />
<html>
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Content Section One -->
    <section id="one" class="wrapper style2">
        <div class="inner">
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/pic01.jpg" alt="" />
                    </div>
                    <div class="content">
                       

                        <!-- Mortgage Calculator Form -->
                        <h3>Mortgage Calculator</h3>
                        <form id="mortgageForm">
                            <div>
                                <label for="loanAmount">Loan Amount (PLN):</label>
                                <input type="number" id="loanAmount" name="loanAmount" required />
                            </div>
                            <div>
                                <label for="interestRate">Interest Rate (%):</label>
                                <input type="number" id="interestRate" name="interestRate" step="0.01" required />
                            </div>
                            <div>
                                <label for="loanTerm">Loan Term (years):</label>
                                <input type="number" id="loanTerm" name="loanTerm" required />
                            </div>
                            
                            <div>
                                <button type="button" onclick="calculateMortgage()">Calculate</button>
                            </div>
                        </form>

                        <div id="result" style="display:none;">
                            <h4>Monthly Payment: <span id="monthlyPayment"></span> PLN</h4>
                            <h4>Total Payment: <span id="totalPayment"></span> PLN</h4>
                            <h4>Total Interest: <span id="totalInterest"></span> PLN</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>
        function calculateMortgage() {
            // Get user input
            var loanAmount = parseFloat(document.getElementById('loanAmount').value);
            var interestRate = parseFloat(document.getElementById('interestRate').value) / 100 / 12;
            var loanTerm = parseInt(document.getElementById('loanTerm').value) * 12; // months

            // Mortgage calculation
            var x = Math.pow(1 + interestRate, loanTerm);
            var monthlyPayment = loanAmount * interestRate * x / (x - 1);
            var totalPayment = monthlyPayment * loanTerm;
            var totalInterest = totalPayment - loanAmount;

            // Display results
            document.getElementById('monthlyPayment').textContent = monthlyPayment.toFixed(2);
            document.getElementById('totalPayment').textContent = totalPayment.toFixed(2);
            document.getElementById('totalInterest').textContent = totalInterest.toFixed(2);

            document.getElementById('result').style.display = 'block';
        }
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
