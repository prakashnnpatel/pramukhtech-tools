<div class="fd-calculator-container">
    <!-- Header Section -->
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-calculator"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">PPF Calculator</h1>
                <p class="calculator-subtitle">Calculate your Public Provident Fund returns. Plan your long-term savings with our PPF calculator.</p>
            </div>
        </div>
    </div>
    <!-- Main Calculator Section -->
    <div class="calculator-main">
        <div class="row">
            <!-- Input Form Section -->
            <div class="col-lg-8 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-edit"></i> PPF Investment Details</h3>
                        <p>Enter your PPF parameters to calculate returns</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Yearly Investment Amount -->
                            <div class="col-lg-12 mb-4">
                                <div class="input-group-custom">
                                    <label for="ppf_investment">
                                        <i class="fas fa-money-bill-wave"></i>
                                        Yearly Investment Amount
                                    </label>
                                    <div class="input-wrapper">
                                        <span class="currency-symbol">₹</span>
                                        <input id="ppf_investment" value="150000" onKeyup="calculatePPF()" class="form-control custom-input" type="number" placeholder="Enter yearly investment amount">
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-ppf-investment" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>₹500</span>
                                            <span>₹1,50,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Interest Rate -->
                            <div class="col-lg-6 mb-4">
                                <div class="input-group-custom">
                                    <label for="ppf_rate">
                                        <i class="fas fa-percentage"></i>
                                        Interest Rate (%)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculatePPF()" value="7.1" id="ppf_rate" type="number" step="0.1" placeholder="Enter interest rate">
                                        <span class="input-suffix">%</span>
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-ppf-rate" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>6%</span>
                                            <span>8%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Time Period -->
                            <div class="col-lg-6 mb-4">
                                <div class="input-group-custom">
                                    <label for="ppf_years">
                                        <i class="fas fa-clock"></i>
                                        Time Period (Years)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculatePPF()" value="15" id="ppf_years" type="number" step="1" placeholder="Enter time period">
                                        <span class="input-suffix">Years</span>
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-ppf-years" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>1 Year</span>
                                            <span>15 Years</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Calculate Button -->
                            <div class="col-lg-12">
                                <div class="calculate-section">
                                    <button type="button" onClick="calculatePPF('btn');" class="calculate-btn">
                                        <i class="fas fa-calculator"></i>
                                        Calculate Maturity Amount
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Results Section -->
                <div class="row mt-4">
                    <div class="col-lg-12" id="ppf_error_msg"></div>
                    <div class="col-lg-12" id="ppf_result"></div>
                </div>

                 <!-- Information Section -->
                <div class="info-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="info-content-card">
                                <div class="content-header">
                                    <h3><i class="fas fa-book-open"></i> About PPF Calculator</h3>
                                </div>
                                <div class="content-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="content-block">
                                                <h4><i class="fas fa-calculator"></i> What is PPF Calculator?</h4>
                                                <p>The <strong>PPF Calculator</strong> helps you estimate the maturity amount and interest earned on your Public Provident Fund investment. It uses the annual compounding formula for PPF.</p>
                                            </div>
                                            <div class="content-block">
                                                <h4><i class="fas fa-cogs"></i> Key Parameters</h4>
                                                <ul class="feature-list">
                                                    <li><strong>Yearly Deposit:</strong> Amount deposited every year</li>
                                                    <li><strong>Interest Rate:</strong> Annual rate set by government</li>
                                                    <li><strong>Tenure:</strong> Number of years (usually 15)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content-block">
                                                <h4><i class="fas fa-star"></i> Key Features</h4>
                                                <ul class="feature-list">
                                                    <li><strong>Accurate Calculation:</strong> Uses annual compounding formula</li>
                                                    <li><strong>Real-time Results:</strong> Instant calculation as you type</li>
                                                    <li><strong>Visual Charts:</strong> Graphical representation of results</li>
                                                    <li><strong>Mobile Friendly:</strong> Works perfectly on all devices</li>
                                                </ul>
                                            </div>
                                            <div class="content-block">
                                                <h4><i class="fas fa-lightbulb"></i> Benefits</h4>
                                                <ul class="feature-list">
                                                    <li>Plan your long-term savings</li>
                                                    <li>Understand PPF growth</li>
                                                    <li>Make informed financial decisions</li>
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
            <!-- Quick Info Section -->
            <div class="col-lg-4 mb-4">
                @include('suggestionlist')
            </div>
        </div>
    </div>
</div>
@push('page_scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/resources/js/tools/ppf-calculator.js"></script>
@endpush
