var calculateLoadAmount = function()
{
	// Get input values
    const principal = parseFloat($('#investment').val());
    const rate = parseFloat($('#rate').val());
    const time = parseFloat($('#years').val());
    const frequency = 4;//parseInt($('#frequency').val());

	 // Validate inputs
    if (isNaN(principal) || principal <= 0) {
       $('#error_msg').html(`<div class="alert alert-danger" role="alert">Please enter a valid principal amount</div>`);
	   $('#result').html("");
      return;
    }

    if (isNaN(rate) || rate <= 0) {
		$('#error_msg').html(`<div class="alert alert-danger" role="alert">Please enter a valid interest rate</div>`);
		$('#result').html("");
		return;
    }

    if (isNaN(time) || time <= 0) {
	  $('#error_msg').html(`<div class="alert alert-danger" role="alert">Please enter a valid time period</div>`);   
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

	

	// Display results
	$('#result').html(`
		<table>
			<tr>
				<th colspan="2">FD Summary</th>
			</tr>
			<tr>
				<th>Invested Amount </th>
				<th class="text-theme">${Math.round(principal).toLocaleString()}</th>
			</tr>
			<tr>
				<th>Est. Interest </th>
				<th class="text-theme">${Math.round(interest).toLocaleString()}</th>
			</tr>
			<tr>
				<th>Maturity Amount </th>
				<th class="text-theme">${Math.round(maturity).toLocaleString()}</th>
			</tr>
			<tr>
				<th>Maturity Date </th>
				<th class="text-theme">${maturityDateString}</th>
			</tr>
		</table>
	`);
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