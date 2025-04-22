<!DOCTYPE HTML>
<link rel="stylesheet" href="assets/css/main.css" />
<html>
<head>
    {include file="head.tpl"}
</head>
<body>
    {include file="nav.tpl"}
    {include file="banner.tpl"}

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
    {include file="footer.tpl"}

    <script>
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
    </script>
</body>
</html>