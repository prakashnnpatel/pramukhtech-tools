@push('page_css')
<style>
    /* Make Select2 match Bootstrap input height */
.select2-container .select2-selection--single {
    height: calc(2.25rem + 2px) !important; /* matches .form-control height */
    padding: 0.375rem 0.75rem !important;
    line-height: 1.5 !important;
    border: 1px solid #ced4da !important;
    border-radius: 0.25rem !important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 1.5 !important;
    padding-left: 0 !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 100% !important;
}
</style>
@endpush

@php
$currencyData = \App\Models\Currency::where('status', 'Active')->get();
$def_from_currency = !empty($extraParams['0']) ? strtoupper($extraParams['0']) : "USD";
$def_to_currency = !empty($extraParams['1']) ? strtoupper($extraParams['1']) : "INR";

if(!empty($extraParams)) {
	$converter_title = strtoupper($extraParams['0']). ' to '. strtoupper($extraParams['1']);
}
@endphp

<div class="tool-page-container">
    <div class="tool-header mb-4">
        <div class="header-icon"><i class="fas fa-exchange-alt"></i></div>
        <div class="header-title">{{ !empty($converter_title) ? $converter_title . ' ' : '' }} Currency Converter</div>
        <div class="header-desc">Support for 160+ global currencies with real-time exchange rates.</div>
    </div>
    <div class="calculator-card">
        <div class="card-header">
            <h3><i class="fas fa-exchange-alt"></i> Currency Converter</h3>
            <p>Convert between different currencies using real-time exchange rates.</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="amountInput">Amount:</label>
                        <input type="number" class="form-control" id="amountInput" value="1" min="0.01" step="0.01">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="fromCurrency">From</label>
                        <select class="form-control" id="fromCurrency">
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="toCurrency">To</label>
                        <select class="form-control" id="toCurrency">
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="summary-grid">
                        <div class="summary-item">
                            <div class="summary-icon" id="converted_amount_symbol">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="summary-label">Converted Amount</div>
                            <div class="summary-value" id="convertedAmount"></div>
                            <div class="summary-currency" id="converted_amount_currency"></div>
                        </div>                            
                        <div class="summary-item">
                            <div class="summary-icon">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                            <div class="summary-label">Rate</div>
                            <div class="summary-value" id="conversionRate"></div>
                        </div>

                        <div class="summary-item">
                            <label>Quick Links</label>
                            <div class="row">
                                @php
                                    $quickLinkData = \App\Models\Currency::where('status', 'Active')->where('code', '!=', $def_from_currency)->where('code', '!=', $def_to_currency)->inRandomOrder()->take(12)->get();
                                @endphp
                                @foreach($quickLinkData as $key => $currObj)
                                    <div class="col-lg-6">
                                        <a href="{{route('toollist',['currency-converter',$def_from_currency.'-to-'.$currObj->code])}}" class="tool-link" title="Convert {{$def_from_currency}} to {{$currObj->code}}">
                                            {{$def_from_currency}} to {{$currObj->code}}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <button id="swapCurrencies" class="calculate-btn">
                        <i class="fas fa-exchange-alt"></i> Swap Currencies
                    </button>
                </div>
               {{--
                <div class="col-lg-12 mt-3">
                    <div id="lastUpdated" class="text-center text-muted small"></div>
                </div>--}}
            </div>
        </div>
    </div>
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> About Currency Converter</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-star"></i> What is Currency Converter</h4>
                                    <p>Welcome to the ultimate Online Currency Converter - your fast, reliable, and easy-to-use tool for converting currencies from around the world. Whether you're a traveler, investor, online shopper, or finance professional, our tool helps you stay updated with the latest exchange rates for over 160 global currencies - in real time.</p>
                                </div>                                
                            </div>
                            <div class="col-lg-12">                                
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i> Key Features & Benefits:</h4>
                                    <ul class="feature-list">
                                        <li><b>Real-Time Exchange Rates</b> - Get the most up-to-date currency conversion rates.</li>
                                        <li><b>Wide Range of Currencies</b> - Convert USD to INR, EUR to GBP, AED to PHP, JPY to CNY, and much more - all in one place.</li>
                                        <li><b>User-Friendly Interface</b> - Simple and intuitive design for easy currency conversion.</li>
                                        <li><b>Instant Calculations</b> - Get conversion results immediately as you type.</li>
                                        <li><b>Swap Function</b> - Easily switch between source and target currencies.</li>
                                        <li><b>Mobile Responsive</b> - Use on any device, from desktop to smartphone.</li>                                       
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12">                                
                                <div class="content-block">
                                    <h4><i class="fas fa-info-circle"></i> How to Use the Online Currency Converter</h4>
                                    <ol class="feature-list">
                                        <li><b>Step 1:</b> Enter the Amount</li>
                                        <li><b>Step 2:</b> Select Your Currencies</li>
                                        <li><b>Step 3:</b> Get Instant Results</li>                                        
                                    </ol>
                                    <p>You can reverse currencies or change values anytime.</p>
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
<script>
var def_from_currency = '{{$def_from_currency}}';
var def_to_currency = '{{$def_to_currency}}';
var currencyData = @json($currencyData);
</script>
@endpush