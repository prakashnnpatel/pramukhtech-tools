$(document).ready(function ($) {
	defaultCurrDateTime();

	$('#timezone-converter-form').on('submit', function (e) {
		e.preventDefault();
		
		const datetime = $('#datetime').val();
		const fromTimezone = $('#from_timezone').val();
		const toTimezone = $('#to_timezone').val();

		if (!datetime || !fromTimezone || !toTimezone) {
			$('#converted-time').html('Please fill all fields.');
			return;
		}

		// Create a DateTime object with the input datetime and source timezone
		const dt = luxon.DateTime.fromISO(datetime, { zone: fromTimezone });

		// Convert the DateTime object to the target timezone
		const convertedDt = dt.setZone(toTimezone);

		// Format the converted datetime
		const formattedConvertedTime = convertedDt.toLocaleString(luxon.DateTime.DATETIME_FULL);

		$('#converted-time').html(`Converted Time: <span class="text-theme">${formattedConvertedTime}</span> <hr/>`);
	});

	function defaultCurrDateTime() {
		/**** User current datetime selected by default ****/
		// Get the current date and time
		const now = new Date();

		// Format the current date and time as YYYY-MM-DDTHH:MM
		const year = now.getFullYear();
		const month = ("0" + (now.getMonth() + 1)).slice(-2); // Add leading zero for months less than 10
		const day = ("0" + now.getDate()).slice(-2); // Add leading zero for days less than 10
		const hours = ("0" + now.getHours()).slice(-2); // Add leading zero for hours less than 10
		const minutes = ("0" + now.getMinutes()).slice(-2); // Add leading zero for minutes less than 10

		const datetimeValue = `${year}-${month}-${day}T${hours}:${minutes}`;

		// Set the value of the datetime-local input field
		$('#datetime').val(datetimeValue);

		/**** User timezone selected by default ****/
		// Get the user's current timezone using JavaScript
		const userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;

		// Check if the value exists in the dropdown
		if ($('#from_timezone option[value="' + userTimezone + '"]').length) {
			// Set the user's timezone as the selected value
			$('#from_timezone').val(userTimezone);
		} else {
			// Optionally, handle if the timezone doesn't exist
			//console.log('Timezone not found in the dropdown');
		}
	}
});
