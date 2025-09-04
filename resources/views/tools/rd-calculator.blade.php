<div class="fd-calculator-container">
    <!-- Header Section -->
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-calculator"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">RD Calculator</h1>
                <p class="calculator-subtitle">Calculate your Recurring Deposit maturity and interest. Plan your savings smartly with our RD calculator for the banking sector.</p>
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
                        <h3><i class="fas fa-edit"></i> RD Investment Details</h3>
                        <p>Enter your deposit details to calculate maturity and interest</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Monthly Deposit Amount -->
                            <div class="col-lg-12 mb-4">
                                <div class="input-group-custom">
                                    <label for="monthly_deposit">
                                        <i class="fas fa-money-bill-wave"></i>
                                        Monthly Deposit Amount
                                    </label>
                                    <div class="input-wrapper">
                                        <span class="currency-symbol">₹</span>
                                        <input id="monthly_deposit" value="5000" onKeyup="calculateRD()" class="form-control custom-input" type="number" placeholder="Enter monthly deposit amount">
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-monthly-deposit" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>₹100</span>
                                            <span>₹1,00,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Interest Rate -->
                            <div class="col-lg-6 mb-4">
                                <div class="input-group-custom">
                                    <label for="rd_rate">
                                        <i class="fas fa-percentage"></i>
                                        Interest Rate (%)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculateRD()" value="7.0" id="rd_rate" type="number" step="0.1" placeholder="Enter interest rate">
                                        <span class="input-suffix">p.a</span>
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-rd-rate" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>1%</span>
                                            <span>15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Time Period -->
                            <div class="col-lg-6 mb-4">
                                <div class="input-group-custom">
                                    <label for="rd_months">
                                        <i class="fas fa-clock"></i>
                                        Time Period (Months)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculateRD()" value="24" id="rd_months" type="number" step="1" placeholder="Enter time period">
                                        <span class="input-suffix">Months</span>
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-rd-months" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>6</span>
                                            <span>120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Calculate Button -->
                            <div class="col-lg-12">
                                <div class="calculate-section">
                                    <button type="button" onClick="calculateRD();" class="calculate-btn">
                                        <i class="fas fa-calculator"></i>
                                        Calculate Maturity Amount
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Info Section -->
            <div class="col-lg-4 mb-4">
                <div class="info-card">
                    <div class="info-header">
                        <h4><i class="fas fa-info-circle"></i> How it Works</h4>
                    </div>
                    <div class="info-content">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-coins"></i>
                            </div>
                            <div class="info-text">
                                <h5>Monthly Deposit</h5>
                                <p>The amount you deposit every month</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="info-text">
                                <h5>Interest Rate</h5>
                                <p>Annual interest rate offered by the bank</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="info-text">
                                <h5>Tenure</h5>
                                <p>Duration of your recurring deposit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Results Section -->
        <div class="row mt-4">
            <div class="col-lg-12" id="error_msg"></div>
            <div class="col-lg-12" id="result"></div>
        </div>
    </div>

    <!-- Information Section -->
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> About RD Calculator</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="content-block">
                                    <h4><i class="fas fa-calculator"></i> What is RD Calculator?</h4>
                                    <p>The <strong>RD Calculator</strong> (Recurring Deposit Calculator) helps you estimate the maturity amount and interest earned on your recurring deposit. It uses the standard RD formula used by banks in India.</p>
                                </div>
                                <div class="content-block">
                                    <h4><i class="fas fa-cogs"></i> Key Parameters</h4>
                                    <ul class="feature-list">
                                        <li><strong>Monthly Deposit:</strong> The amount deposited every month</li>
                                        <li><strong>Interest Rate:</strong> The annual interest rate provided by the bank</li>
                                        <li><strong>Tenure:</strong> The duration for which the amount is deposited (in months)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-block">
                                    <h4><i class="fas fa-star"></i> Key Features</h4>
                                    <ul class="feature-list">
                                        <li><strong>Accurate Calculation:</strong> Uses the standard RD formula</li>
                                        <li><strong>Real-time Results:</strong> Instant calculation as you type</li>
                                        <li><strong>Mobile Friendly:</strong> Works perfectly on all devices</li>
                                    </ul>
                                </div>
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i> Benefits</h4>
                                    <ul class="feature-list">
                                        <li>Plan your savings effectively</li>
                                        <li>Compare different RD schemes</li>
                                        <li>Understand interest growth</li>
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
@push('page_scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/js/tools/rd-calculator.js"></script>
@endpush
