import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
var calculateLoadAmount = function(flag='')
{
	// Get input values
    const principal = parseFloat($('#investment').val());
    const rate = parseFloat($('#rate').val());
    const time = parseFloat($('#years').val());
    const frequency = 4;//parseInt($('#frequency').val());

	 // Validate inputs
    if (isNaN(principal) || principal <= 0) {
       $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid principal amount</div>`);
	   $('#result').html("");
      return;
    }

    if (isNaN(rate) || rate <= 0) {
		$('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid interest rate</div>`);
		$('#result').html("");
		return;
    }

    if (isNaN(time) || time <= 0) {
	  $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid time period</div>`);   
	  $('#result').html("");
      return;
    }	

	 $('#error_msg').html("");
	 $('#result').html("");

	// Calculate maturity amount using compound interest formula
    const n = frequency; // Compounding frequency
    const r = rate / 100; // Convert rate to decimal
    const maturity =  principal * Math.pow(1 + r / n, n * time);
	const interest = (maturity - principal);

	// Calculate maturity date
    const start = new Date();
    const maturityDate = new Date(start);
    maturityDate.setFullYear(start.getFullYear() + time); // Add years

	 // Format the maturity date
     const options = { year: 'numeric', month: 'long', day: 'numeric' };
     const maturityDateString = maturityDate.toLocaleDateString(undefined, options);

	// Display results with modern card layout
	$('#result').html(`
    <div class="result-card">
        <div class="result-header">
            <h3><i class="fas fa-chart-pie"></i> FD Summary</h3>
        </div>
        <div class="result-content">
            <div class="summary-grid">                
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="summary-label">Interest Earned</div>
                    <div class="summary-value">₹${Math.round(interest).toLocaleString()}</div>
                    <div class="summary-currency">Returns</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <div class="summary-label">Maturity Amount</div>
                    <div class="summary-value">₹${Math.round(maturity).toLocaleString()}</div>
                    <div class="summary-currency">Total</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="summary-label">Maturity Date</div>
                    <div class="summary-value">${maturityDateString}</div>
                    <div class="summary-currency">${time} Years</div>
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

    // Create enhanced chart
    const ctx = document.getElementById('myDoughnutChart').getContext('2d');
    const myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Principal Amount', 'Interest Earned'],
            datasets: [{
                label: 'Amount',
                data: [Math.round(principal), Math.round(interest)],
                backgroundColor: [
                    'rgba(102, 126, 234, 0.8)',
                    'rgba(40, 167, 69, 0.8)',
                ],
                borderColor: [
                    'rgba(102, 126, 234, 1)',
                    'rgba(40, 167, 69, 1)',
                ],
                borderWidth: 3,
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '60%',
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        usePointStyle: true,
                        font: {
                            size: 12,
                            weight: '600'
                        }
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: 'white',
                    bodyColor: 'white',
                    borderColor: 'rgba(255, 255, 255, 0.2)',
                    borderWidth: 1,
                    cornerRadius: 8,
                    displayColors: true,
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.parsed;
                            return `${label}: ₹${value.toLocaleString()}`;
                        }
                    }
                }
            },
            animation: {
                animateRotate: true,
                animateScale: true
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
      value: 100000,
      min: 1000,
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
      value: 7.5,
      min: 1,
      max: 15,
      step: 0.1,
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
      max: 20,
      step: 0.1,
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
	
	// Initialize calculation on page load
	calculateLoadAmount();
});
window.calculateLoadAmount = calculateLoadAmount;