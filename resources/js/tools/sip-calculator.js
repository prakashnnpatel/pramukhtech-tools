var calculateLoadAmount = function(flag='')
{
	 // Retrieve input values
	const P = parseFloat($('#investment').val());
	const annualRate = parseFloat($('#rate').val());
	const years = parseFloat($('#years').val());


      // Validate inputs
    if (isNaN(P) || P <= 0) {
       $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid principal amount</div>`);
	   $('#result').html("");
      return;
    }

    if (isNaN(annualRate) || annualRate <= 0) {
		$('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid return rate</div>`);
		$('#result').html("");
		return;
    }

    if (isNaN(years) || years <= 0) {
	  $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid time period</div>`);   
	  $('#result').html("");
      return;
    }	

	 $('#error_msg').html("");
	 $('#result').html("");

	 // Convert annual interest rate to monthly rate
	const r = annualRate / 12 / 100;

	// Calculate total months
	const n = years * 12;

	//Calculate total investement
	const totalInstment = P * n;

	// Calculate SIP Future Value
	const FV = P * ((Math.pow(1 + r, n) - 1) / r) * (1 + r);

	const totalReturn = (FV - totalInstment);

    // Display results with modern card layout
	$('#result').html(`
    <div class="result-card">
        <div class="result-header">
            <h3><i class="fas fa-chart-pie"></i> SIP Summary</h3>
        </div>
        <div class="result-content">
            <div class="summary-grid">
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="summary-label">Invested Amount</div>
                    <div class="summary-value">₹${Math.round(totalInstment).toLocaleString()}</div>
                    <div class="summary-currency">Principal</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="summary-label">Est. Returns</div>
                    <div class="summary-value">₹${Math.round(totalReturn).toLocaleString()}</div>
                    <div class="summary-currency">Returns</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <div class="summary-label">Total Amount</div>
                    <div class="summary-value">₹${Math.round(FV).toLocaleString()}</div>
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
            labels: ['Invested Amount', 'Est. Returns'],
            datasets: [{
                label: 'Amount',
                data: [Math.round(totalInstment), Math.round(totalReturn)],
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
                    text: 'SIP Summary'
                }
            }
        }
    });

    if(flag === 'btn') {
        $('html, body').stop().animate(
            { scrollTop: $("#result").offset().top - 100 },
            {
                duration: 100,
                easing: 'swing'
            }
        );
    }
}

  $(function() {	  
    $("#slider-range-investment").slider({
      range: "min",
      value: 1000,
      min: 100,
      max: 1000000,
      slide: function( event, ui ) {
        $( "#investment").val(ui.value);
		calculateLoadAmount();
      }
    });
	$("#investment").on("keyup", function() {
      $("#slider-range-investment").slider( "value", $(this).val() );
    });
	$("#slider-range-rate").slider({
      range: "min",
      value: 12,
      min: 1,
      max: 75,
      slide: function( event, ui ) {
        $("#rate").val(ui.value);
		calculateLoadAmount();
      }
    });
	$("#rate").on("keyup", function() {
      $("#slider-range-rate").slider( "value", $(this).val() );
    });
	$("#slider-range-years").slider({
      range: "min",
      value: 5,
      min: 1,
      max: 40,
      slide: function( event, ui ) {
        $("#years").val(ui.value);
		calculateLoadAmount();
      }
    });
	$("#years").on("keyup", function() {
      $("#slider-range-years").slider( "value", $(this).val() );
    });
	$("#investment").val($("#slider-range-investment").slider("value"));
    $("#rate").val($("#slider-range-rate").slider("value"));
	$("#years").val($("#slider-range-years").slider("value"));	
	
});

window.calculateLoadAmount = calculateLoadAmount;