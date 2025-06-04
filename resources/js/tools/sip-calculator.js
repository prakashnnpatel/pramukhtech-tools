var calculateLoadAmount = function()
{
	 // Retrieve input values
	const P = parseFloat($('#investment').val());
	const annualRate = parseFloat($('#rate').val());
	const years = parseFloat($('#years').val());

	 if (isNaN(P) || isNaN(annualRate) || isNaN(years) || P <= 0 || annualRate <= 0 || years <= 0) {
         $('#error_msg').html(`<div class="alert alert-danger" role="alert">Please enter valid values for all fields.</div>`);
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

	// Display results
	$('#result').html(`
		<div class="row">
			<div class="col-lg-6">
				<table>
					<tr>
						<th colspan="2">SIP Summary</th>
					</tr>
					<tr>
						<th>Invested Amount </th>
						<th class="text-theme">${Math.round(totalInstment).toLocaleString()}</th>
					</tr>
					<tr>
						<th>Est. Returns </th>
						<th class="text-theme">${Math.round(totalReturn).toLocaleString()}</th>
					</tr>			
					<tr>
						<th>Total Amount </th>
						<th class="text-theme">${Math.round(FV).toLocaleString()}</th>
					</tr>			
				</table>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-5">
			<div style="width:300px;">
				<canvas id="myDoughnutChart"></canvas>
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