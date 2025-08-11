@php
$timezones = timezone_identifiers_list(); // Get all timezone identifiers
$now = new DateTime('now', new DateTimeZone('UTC')); // Current UTC time
//Default
$customArr = [
	"UTC" => "UTC",
	"IST" => "Asia/Kolkata",
	"EST" => "America/New_York",
	"CST" => "America/Chicago",
	"PST" => "America/Los_Angeles",
	"PDT" => "America/Los_Angeles",
	"GMT" => "Europe/London",
	"BST" => "Europe/London",
	"EDT" => "America/New_York",
	"JST" => "Asia/Tokyo",
	"AEST" => "Australia/Sydney",
	"CET" => "Europe/Berlin",
	"GST" => "Asia/Dubai",
	"SGT" => "Asia/Singapore",
	"HKT" => "Asia/Hong_Kong",
	"ICT" => "Asia/Bangkok",
	"ECT" => "Europe/Paris",
	"MSK" => "Europe/Moscow",
	"NZST" => "Pacific/Auckland",
];
$fromtz = !empty($extraParams['0']) ? $customArr[$extraParams['0']] : "Asia/Kolkata";
$totz = !empty($extraParams['1']) ? $customArr[$extraParams['1']] : "America/New_York";

if(!empty($extraParams)) {
	$timezone_title = $fromtz. ' to '. $totz;
}
@endphp
<div class="tool-page-container">
    <div class="tool-header mb-4">
        <div class="header-icon"><i class="fas fa-globe"></i></div>
        <div class="header-title">{{$timezone_title??''}} Timezone Converter</div>
        <div class="header-desc">The {{$timezone_title??''}} timezone converter tool is powerful & accurate time management, the tool converts the datetime from one timezone to another time zone, which is designed to simplify time management across different regions.</div>
    </div>
    <div class="tool-card">
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
                                $offsetString = sprintf('%+03d:%02d', $hours, $minutes);
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
                                $offsetString = sprintf('%+03d:%02d', $hours, $minutes);
                            @endphp
                            <option value="{{$timezone}}" @if($timezone == $totz) selected @endif>
                                {{$timezone}} (UTC {{$offsetString}})
                            </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 text-right">
                    <div class="form-group d-flex flex-wrap gap-2 justify-content-end">
                        <button type="submit" class="th-btn mb-2">Convert Now</button>
                        <button type="button" class="th-btn mb-2" style="background: #E2E8FA;color: #000;" id="swapTimezones">Swap Timezones</button>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="tool-card text-center p-3 mb-3">
                        <h5>From Timezone</h5>
                        <p id="fromTimeDisplay" class="h4 text-primary">-</p>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="tool-card text-center p-3 mb-3">
                        <h5>To Timezone</h5>
                        <p id="toTimeDisplay" class="h4 text-success">-</p>
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="tool-table-responsive">
                        <table class="font-weight-bold w-100" id="timezone_table">
                            <thead>
                                <tr>
                                    <th colspan="5">
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
                                        <a href="{{route('toollist', ['timezone', 'UTC-to-IST'])}}">UTC to IST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone', 'UTC-to-EST'])}}">UTC to EST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone', 'UTC-to-CST'])}}">UTC to CST</a>
                                    </td>
                                    <td><a href="{{route('toollist', ['timezone', 'UTC-to-PST'])}}">UTC to PST</a></td>
                                    <td><a href="{{route('toollist', ['timezone','EST-to-ECT'])}}">EST to ECT</a></td>
                                </tr>
                                <tr class="text-center fw-bold">
                                    <td>
                                        <a href="{{route('toollist', ['timezone', 'IST-to-EST'])}}">IST to EST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone', 'IST-to-UTC'])}}">IST to UTC</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone', 'IST-to-PDT'])}}">IST to PDT</a>
                                    </td>
                                    <td><a href="{{route('toollist', ['timezone', 'EST-to-GMT'])}}">EST to GMT</a></td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','EST-to-ICT'])}}">EST to ICT </a>
                                    </td>
                                </tr>
                                <tr class="text-center fw-bold">
                                    <td>
                                        <a href="{{route('toollist', ['timezone', 'GMT-to-PST'])}}">GMT to PST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','EST-to-IST'])}}">EST to IST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','BST-to-EDT'])}}">BST to EDT</a>
                                    </td>
                                    <td><a href="{{route('toollist', ['timezone','IST-to-GMT'])}}">IST to GMT</a></td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','EST-to-MSK'])}}">EST to MSK</a>
                                    </td>
                                </tr>
                                <tr class="text-center fw-bold">
                                    <td>
                                        <a href="{{route('toollist', ['timezone','BST-to-CST'])}}">BST to CST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','CST-to-BST'])}}">CST to BST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','UTC-to-PDT'])}}">UTC to PDT</a>
                                    </td>
                                    <td><a href="{{route('toollist', ['timezone','JST-to-EST'])}}">JST to EST</a></td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','EST-to-HKT'])}}">EST to HKT</a>
                                    </td>
                                </tr>
                                <tr class="text-center fw-bold">
                                    <td>
                                        <a href="{{route('toollist', ['timezone','EST-to-PST'])}}">EST to PST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','CST-to-EST'])}}">CST to EST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','PDT-to-CST'])}}">PDT to CST</a>
                                    </td>
                                    <td><a href="{{route('toollist', ['timezone','AEST-to-IST'])}}">AEST to IST</a></td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','EST-to-SGT'])}}">EST to SGT</a>
                                    </td>
                                </tr>
                                <tr class="text-center fw-bold">
                                    <td>
                                        <a href="{{route('toollist', ['timezone','EST-to-JST'])}}">EST to JST</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','EST-to-CET'])}}">EST to CET</a>
                                    </td>
                                    <td>
                                        <a href="{{route('toollist', ['timezone','EST-to-GST'])}}">EST to GST </a>
                                    </td>
                                    <td><a href="{{route('toollist', ['timezone','EST-to-AEST'])}}">EST to AEST</a></td>
                                    <td><a href="{{route('toollist', ['timezone','EST-to-NZST'])}}">EST to NZST</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="tool-section">
                        <h3 class="font-size-18 font-weight-bold mb-20">About this World Clock / Converter</h3>
                        <p>The timezone converter tool is powerful &amp; accurate time management, the tool converts the datetime from one timezone to another time zone, which is designed to simplify time management across different regions. It’s one of the top productivity tools for frequent travelers, remote workers, and anyone scheduling online meetings or staying connected with friends and family abroad. Whether you’re navigating flight schedules or coordinating across time zones, this tool makes it easy and efficient.</p>
                        <h3 class="font-size-18 font-weight-bold mb-20">Timezone Converter – Time Difference Calculator</h3>
                        <p>Provides <a href="https://en.wikipedia.org/wiki/List_of_time_zones_by_country" target="_blank" rel="noopener" title="timezone conversions">timezone conversions</a> taking into account Daylight Saving Time (DST), and local time zone and accepts present, past, or future dates.</p>
                        <h3 class="font-size-18 font-weight-bold mb-20">Powerful benefits</h3>
                        <ul style="line-height: 35px;">
                            <li>Say Goodbye to Confusing Time Differences with Our Easy Converter.</li>
                            <li>Saves time by providing instant and accurate timezone conversions.</li>
                            <li>Enables better planning for international meetings or events.</li>
                            <li>Makes it easy to coordinate schedules with teams, clients, or partners located in different parts of the world.</li>
                            <li>Simple, intuitive design ensures quick and effortless use for all users.</li>
                            <li>No cost to use and available online anytime, anywhere.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@push('page_scripts')
<script type='text/javascript' src="https://cdn.jsdelivr.net/npm/luxon@3.0.1/build/global/luxon.min.js" id="luxon-min-js"></script>
@endpush
