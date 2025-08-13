var calculateLoadAmount = function()
{
	var tenuretype = "Y";

	if($("input[name='tenuretype']:checked").val() == "Y") {
		tenuretype = "Y";		
	}
	else if($("input[name='tenuretype']:checked").val() == "M") {
		tenuretype = "M";		
	}
	
	 // Get user inputs
	var loanAmount = parseFloat($('#loan_amount').val());
	var annualInterestRate = parseFloat($('#annual_interest_rate').val());
	var loanTerm = parseInt($('#loan_term').val());
	
	 // Validate inputs
    if (isNaN(loanAmount) || loanAmount <= 0) {
       $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid loan amount</div>`);
	   $('#result').html("");
      return;
    }

    if (isNaN(annualInterestRate) || annualInterestRate <= 0) {
		$('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid interest rate</div>`);
		$('#result').html("");
		return;
    }

    if (isNaN(loanTerm) || loanTerm <= 0) {
	  $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid loan tenure</div>`);   
	  $('#result').html("");
      return;
    }

	$('#error_msg').html("");
	$('#result').html("");
	 // Calculate monthly interest rate
	 var monthlyInterestRate = annualInterestRate / 12 / 100;

	 // Total number of payments (months)
	 if(tenuretype == "Y") {
		var numberOfPayments = loanTerm * 12;
	 }
	 else {
		var numberOfPayments = loanTerm;
	 }

	 // Monthly payment formula
     var monthlyPayment = loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments) / (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);

	// Total payment and total interest
	var totalPayment = monthlyPayment * numberOfPayments;
	var totalInterest = totalPayment - loanAmount;

	 // Display results with modern card layout
	$('#result').html(`
    <div class="result-card">
        <div class="result-header">
            <h3><i class="fas fa-chart-pie"></i> Loan Summary</h3>
        </div>
        <div class="result-content">
            <div class="summary-grid">				
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="summary-label">Loan Amount</div>
                    <div class="summary-value">₹${Math.round(loanAmount).toLocaleString()}</div>
                    <div class="summary-currency">Principal</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="summary-label">Total Interest</div>
                    <div class="summary-value">₹${Math.round(totalInterest).toLocaleString()}</div>
                    <div class="summary-currency">Returns</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <div class="summary-label">Total Payment</div>
                    <div class="summary-value">₹${Math.round(totalPayment).toLocaleString()}</div>
                    <div class="summary-currency">Total</div>
                </div>
				<div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="summary-label">Monthly EMI</div>
                    <div class="summary-value">₹${Math.round(monthlyPayment).toLocaleString()}</div>
                    <div class="summary-currency">Total</div>
                </div>
            </div>
            
            <div class="chart-container">
                <div class="chart-title">Investment Breakdown</div>
                <div style="width: 100%; max-width: 400px; margin: 0 auto;">
                    <canvas id="myDoughnutChart"></canvas>
                </div>
            </div>
        </div>
    </div>
	`);

	const ctx = document.getElementById('myDoughnutChart').getContext('2d');
    const myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Loan Amount', 'Total Interest'],
            datasets: [{
                label: 'Amount',
                data: [Math.round(loanAmount), Math.round(totalInterest)],
                backgroundColor: [
                    'rgba(223, 12, 58, 0.7)',
                    '#684DF4',
                    
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            cutout: '30%', // adjust for thinner/thicker doughnut
            plugins: {
                legend: {
                    position: 'bottom'
                },
                title: {
                    display: true,
                    text: 'EMI Summary'
                }
            }
        }
    });
}

$(function() {	  
    $("#slider_range_loan_amount").slider({
      range: "min",
      value: 100000,
      min: 10000,
      max: 10000000,
      slide: function( event, ui ) {
        $( "#loan_amount").val(ui.value);
		calculateLoadAmount();
      }
    });
	$("#loan_amount").on("keyup", function() {
      $("#slider_range_loan_amount").slider( "value", $(this).val() );
    });
	$("#slider_range_annual_interest_rate").slider({
      range: "min",
      value: 9,
      min: 1,
      max: 45,
      slide: function( event, ui ) {
        $("#annual_interest_rate").val(ui.value);
		calculateLoadAmount();
      }
    });
	$("#annual_interest_rate").on("keyup", function() {
      $("#slider_range_annual_interest_rate").slider( "value", $(this).val() );
    });
	$("#slider_range_loan_term").slider({
      range: "min",
      value: 5,
      min: 1,
      max: 400,
      slide: function( event, ui ) {
        $("#loan_term").val(ui.value);
		calculateLoadAmount();
      }
    });
	$("#loan_term").on("keyup", function() {
      $("#slider_range_loan_term").slider( "value", $(this).val() );
    });
	$("#loan_amount").val($("#slider_range_loan_amount").slider("value"));
    $("#annual_interest_rate").val($("#slider_range_annual_interest_rate").slider("value"));
	$("#loan_term").val($("#slider_range_loan_term").slider("value"));	
	
});
window.calculateLoadAmount = calculateLoadAmount;