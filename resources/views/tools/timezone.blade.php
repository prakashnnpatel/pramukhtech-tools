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
	$timezone_title = $extraParams['0']. ' to '. $extraParams['1'];
}
@endphp
<div class="tool-page-container">
    <div class="tool-header mb-4">
        <div class="header-icon"><i class="fas fa-globe"></i></div>
        <div class="header-title">{{$timezone_title??''}} Timezone Converter</div>
        <div class="header-desc">The {{$timezone_title??''}} timezone converter tool is powerful & accurate time management, the tool converts the datetime from one timezone to another time zone, which is designed to simplify time management across different regions.</div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('suggestionlist', ['slidertype' => 'H'])
        </div>
    </div>

    <div class="calculator-main">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="far fa-clock"></i> Timezone Converter</h3>
                    </div>
                    <div class="card-body">
                        <form action="javascript:void(0);" id="timezone-converter-form">
                            <div class="row">
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

                                <!-- Calculate Button -->
                                <div class="col-lg-12">
                                    <div class="calculate-section">
                                        <button type="button" class="calculate-btn mb-2">
                                            <i class="fas fa-hourglass-half"></i> Convert Now
                                        </button>
                                        <button type="button" class="calculate-btn" id="swapTimezones">
                                            <i class="fas fa-repeat"></i> Swap Timezones
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="info-card">
                    <div class="info-header">
                        <h4><i class="fas fa-globe"></i> Quick Timezone Links</h4>
                    </div>
                    <div class="card-body p-3">
                        <!-- Search -->
                        <div class="mb-3">
                            <input type="text" id="timezone-search" class="form-control form-control-sm" placeholder="Search timezone...">
                        </div>

                        <!-- Scrollable List -->
                        <div style="max-height: 240px; overflow-y: auto;">
                            <ul class="list-group list-group-flush" id="timezoneList">
                                @foreach([
                                    'UTC-to-IST', 'UTC-to-EST', 'UTC-to-CST', 'UTC-to-PST', 'EST-to-ECT', 'IST-to-EST', 'IST-to-UTC', 'IST-to-PDT',
                                    'EST-to-GMT', 'EST-to-ICT', 'GMT-to-PST', 'EST-to-IST', 'BST-to-EDT', 'IST-to-GMT', 'EST-to-MSK', 'BST-to-CST',
                                    'CST-to-BST', 'UTC-to-PDT', 'JST-to-EST', 'EST-to-HKT', 'EST-to-PST', 'CST-to-EST', 'PDT-to-CST', 'AEST-to-IST',
                                    'EST-to-SGT', 'EST-to-JST', 'EST-to-CET', 'EST-to-GST', 'EST-to-AEST', 'EST-to-NZST'
                                ] as $tz)
                                <li class="list-group-item">
                                    <a href="{{ route('toollist', ['timezone', $tz]) }}" class="tool-link" title="Convert {{ str_replace('-', ' ', $tz) }}">
                                        <i class="fas fa-clock me-2"></i> {{ str_replace('-', ' → ', $tz) }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">            
            <div class="col-lg-12">
                <div class="result-card">
                    <div class="result-header">
                        <h3><i class="far fa-calendar-check"></i> Result </h3>
                    </div>
                    <div class="result-content">
                        <div class="summary-grid">
                            <div class="summary-item">
                                <div class="summary-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="summary-label">From Timezone</div>
                                <div class="summary-value" id="fromTimeDisplay"></div>                                
                            </div>                            
                            <div class="summary-item">
                                <div class="summary-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="summary-label">To Timezone</div>
                                <div class="summary-value" id="toTimeDisplay"></div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <!-- Information Section -->
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> About World Clock / Converter</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-hourglass-start"></i> What is timezone converter?</h4>
                                    <p>The <strong>timezone converter</strong> tool is powerful &amp; accurate time management, the tool converts the datetime from one timezone to another time zone, which is designed to simplify time management across different regions. It’s one of the top productivity tools for frequent travelers, remote workers, and anyone scheduling online meetings or staying connected with friends and family abroad. Whether you’re navigating flight schedules or coordinating across time zones, this tool makes it easy and efficient.</p>
                                    <h4><i class="fas fa-user-clock"></i> Timezone Converter – Time Difference Calculator</h4>                                    
                                    <p>Provides <a href="https://en.wikipedia.org/wiki/List_of_time_zones_by_country" target="_blank" rel="noopener" title="timezone conversions">timezone conversions</a> taking into account Daylight Saving Time (DST), and local time zone and accepts present, past, or future dates.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i> Powerful Benefits</h4>
                                    <ul class="feature-list">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('page_scripts')
<script type='text/javascript' src="https://cdn.jsdelivr.net/npm/luxon@3.0.1/build/global/luxon.min.js" id="luxon-min-js"></script>
@endpush
