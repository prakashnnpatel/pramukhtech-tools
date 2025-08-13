$(document).ready(function ($) {
	defaultCurrDateTime();

	$('#from_timezone, #to_timezone').select2({
		width: '100%',
		templateResult: formatTimezone,
		placeholder: "Select a timezone",
	});
	function formatTimezone(timezone) {
		if (!timezone.id) return timezone.text;
		return timezone.text.replace("UTC", "UTC");
	}

	$('#timezone-converter-form').on('submit', function (e) {
		e.preventDefault();
		
		const datetime = $('#datetime').val();
		const fromTimezone = $('#from_timezone').val();
		const toTimezone = $('#to_timezone').val();

		if (!datetime || !fromTimezone || !toTimezone) {
			return;
		}

		// Create a DateTime object with the input datetime and source timezone
		const dt = luxon.DateTime.fromISO(datetime, { zone: fromTimezone });
		$('#fromTimeDisplay').text(dt.toLocaleString(luxon.DateTime.DATETIME_FULL));

		// Convert the DateTime object to the target timezone
		const convertedDt = dt.setZone(toTimezone);
		$('#toTimeDisplay').text(convertedDt.toLocaleString(luxon.DateTime.DATETIME_FULL));
	});
	//Default call
	$('#timezone-converter-form').trigger('submit');

	/* Search on table td*/
	$('#timezone-search').on('keyup', function() {
		let filter = this.value.toLowerCase();
		document.querySelectorAll('#timezoneList li').forEach(li => {
			let text = li.textContent.toLowerCase();
			li.style.display = text.includes(filter) ? '' : 'none';
		});
	});

	$('#swapTimezones').click(function () {
		const from = $('#from_timezone').val();
		const to = $('#to_timezone').val();
		
		// Swap the values
		$('#from_timezone').val(to).trigger('change');  // trigger change to update Select2 display
		$('#to_timezone').val(from).trigger('change');

		// Then submit the form
		$('#timezone-converter-form').trigger('submit');
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
