@php
$timezones = timezone_identifiers_list(); // Get all timezone identifiers
$now = new DateTime('now', new DateTimeZone('UTC')); // Current UTC time
//Default
$fromtz = !empty($_GET['fromtz']) ? $_GET['fromtz'] : "Asia/Kolkata";
$totz = !empty($_GET['totz']) ? $_GET['totz'] : "America/New_York";
@endphp
<h1 class="font-size-18 font-weight-bold">Timezone Converter</h1>
<p>The timezone converter tool is powerful & accurate time management, the tool converts the datetime from one timezone to another time zone, which is designed to simplify time management across different regions.</p>
<div class="card">
  <div class="card-body">
	 <form id="timezone-converter-form">
		<div class="row appoitment-form">
		   <div class="col-lg-12">
			  <div class="form-group">
				 <label for="datetime">Date & Time</label>
				 <input type="datetime-local" id="datetime" name="datetime" class="form-control" required>
			  </div>
		   </div>
		   <div class="col-lg-6">
			  <div class="form-group">
				 <label for="from_timezone">From Timezone</label>
				 <select id="from_timezone" name="from_timezone" class="form-control" required>
				 @foreach($timezones as $timezone)
					@php
						$offset = timezone_offset_get(new DateTimeZone($timezone), $now);
						$hours = floor($offset / 3600);
						$minutes = abs(($offset % 3600) / 60);
						$offsetString = sprintf('%+03d:%02d', $hours, $minutes); // Format offset as "+hh:mm" or "-hh:mm"
					@endphp
					<option value="{{$timezone}}" @if($timezone == $fromtz) selected @endif>
						{{$timezone}} (UTC {{$offsetString}})									
					</option>
				 @endforeach
				 </select>
			  </div>
		   </div>
		   <div class="col-lg-6">
			  <div class="form-group">
				 <label for="to_timezone">To Timezone</label>
				 <select id="to_timezone" name="to_timezone" class="form-control" required>
				 @foreach($timezones as $timezone)
				 @php
					$offset = timezone_offset_get(new DateTimeZone($timezone), $now);
					$hours = floor($offset / 3600);
					$minutes = abs(($offset % 3600) / 60);
					$offsetString = sprintf('%+03d:%02d', $hours, $minutes); // Format offset as "+hh:mm" or "-hh:mm"
				 @endphp
				 <option value="{{$timezone}}" @if($timezone == $totz) selected @endif>
					{{$timezone}} (UTC {{$offsetString}})
				 </option>
				 @endforeach								
				 </select>
			  </div>
		   </div>
		   <div class="col-lg-12 text-right">
			  <div class="form-group">					
				<button type="submit" class="th-btn">Convert Now</button>
				<button type="button" class="th-btn" style="background: #E2E8FA;color: #000;" id="swapTimezones">Swap Timezones</button>
			  </div>
		   </div>
			<div class="col-md-6 mt-2">
				<div class="card text-center p-3 mb-3">
				  <h5>From Timezone</h5>
				  <p id="fromTimeDisplay" class="h4 text-primary">-</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card text-center p-3 mb-3">
				  <h5>To Timezone</h5>
				  <p id="toTimeDisplay" class="h4 text-success">-</p>
				</div>
			</div>

		   <div class="col-lg-12 mt-4">
			  <table class="font-weight-bold" id="timezone_table">
				<thead>
					<tr>
					   <th colspan="4">
						   <div class="row">
							<div class="col-lg-6"><h4 class="font-size-18 font-weight-bold">Popular Timezone Converters</h4></div>
							<div class="col-lg-6"><input type="text" id="timezone-search" class="form-control" placeholder="Search timezone converters..."></div>
						   </div>
					   </th>
					</tr>
				</thead>
				 <tbody>					
					<tr class="text-center">
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=UTC&totz=Asia/Kolkata">UTC to IST</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=UTC&totz=America/New_York">UTC to EST</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=UTC&totz=America/Chicago">UTC to CST</a>
					   </td>
					   <td><a href="{{route('toollist', 'timezone')}}?fromtz=UTC&totz=America/Los_Angeles">UTC to PST</a></td>
					</tr>
					<tr class="text-center fw-bold">
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=Asia/Kolkata&totz=America/New_York">IST to EST</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=Asia/Kolkata&totz=UTC">IST to UTC</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=Asia/Kolkata&totz=America/Los_Angeles">IST to PDT</a>
					   </td>
					   <td><a href="{{route('toollist', 'timezone')}}?fromtz=America/New_York&totz=Europe/London">EST to GMT</a></td>
					</tr>
					<tr class="text-center fw-bold">
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=Europe/London&totz=America/Los_Angeles">GMT to PST</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=America/New_York&totz=Asia/Kolkata">EST to IST</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=Europe/London&totz=America/New_York">BST to EDT</a>
					   </td>
					   <td><a href="{{route('toollist', 'timezone')}}?fromtz=Asia/Kolkata&totz=Europe/London">IST to GMT</a></td>
					</tr>
					<tr class="text-center fw-bold">
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=Europe/London&totz=America/Chicago">BST to CST</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=America/Chicago&totz=Europe/London">CST to BST</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=UTC&totz=America/Los_Angeles">UTC to PDT</a>
					   </td>
					   <td><a href="{{route('toollist', 'timezone')}}?fromtz=Asia/Tokyo&totz=America/New_York">JST to EST</a></td>
					</tr>
					<tr class="text-center fw-bold">
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=America/New_York&totz=America/Los_Angeles">EST to PST</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=America/Chicago&totz=America/New_York">CST to EST</a>
					   </td>
					   <td>
						  <a href="{{route('toollist', 'timezone')}}?fromtz=America/Los_Angeles&totz=America/Chicago">PDT to CST</a>
					   </td>
					   <td><a href="{{route('toollist', 'timezone')}}?fromtz=Australia/Sydney&totz=Asia/Kolkata">AEST to IST</a></td>
					</tr>
				 </tbody>
			  </table>
		   </div>
		</div>
		<div class="row">
		   <div class="col-lg-12">
			  <h3 class="font-size-18 font-weight-bold mb-20">About this World Clock / Converter</h3>
			  <p>The timezone converter tool is powerful &amp; accurate time management, the tool converts the datetime from one timezone to another time zone, which is designed to simplify time management across different regions. It’s one of the top productivity tools for frequent travelers, remote workers, and anyone scheduling online meetings or staying connected with friends and family abroad. Whether you’re navigating flight schedules or coordinating across time zones, this tool makes it easy and efficient.</p>
			  <h3 class="font-size-18 font-weight-bold mb-20">Timezone Converter – Time Difference Calculator</h3>
			  <p>Provides <a href="https://en.wikipedia.org/wiki/List_of_time_zones_by_country" target="_blank" rel="noopener" title="timezone conversions">timezone conversions</a> taking into account Daylight Saving Time (DST), and local time zone and accepts present, past, or future dates.</p>
			  <h3 class="font-size-18 font-weight-bold mb-20">Powerful benefits</h3>
			  <ul class="wp-block-list">
				 <li>Say Goodbye to Confusing Time Differences with Our Easy Converter.</li>
				 <li>Saves time by providing instant and accurate timezone conversions.</li>
				 <li>Enables better planning for international meetings or events.</li>
				 <li>Makes it easy to coordinate schedules with teams, clients, or partners located in different parts of the world.</li>
				 <li>Simple, intuitive design ensures quick and effortless use for all users.</li>
				 <li>No cost to use and available online anytime, anywhere.</li>
			  </ul>
		   </div>
		</div>
	 </form>
  </div>
</div>
@push('page_scripts')
<script type='text/javascript' src="https://cdn.jsdelivr.net/npm/luxon@3.0.1/build/global/luxon.min.js" id="luxon-min-js"></script>
@endpush
