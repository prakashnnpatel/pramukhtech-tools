<div class="fd-calculator-container">
    <!-- Header Section -->
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-calculator"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">FD Calculator</h1>
                <p class="calculator-subtitle">Calculate your Fixed Deposit returns with precision. Plan your investments wisely with our comprehensive FD calculator.</p>
            </div>
        </div>
    </div>

    <!-- Main Calculator Section -->
    <div class="calculator-main">
        <div class="row">
            <!-- Input Form Section -->
            <div class="col-lg-8">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-edit"></i> Investment Details</h3>
                        <p>Enter your investment parameters to calculate returns</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Investment Amount -->
                            <div class="col-lg-12 mb-4">
                                <div class="input-group-custom">
                                    <label for="investment">
                                        <i class="fas fa-money-bill-wave"></i>
                                        Total Investment Amount
                                    </label>
                                    <div class="input-wrapper">
                                        <span class="currency-symbol">₹</span>
                                        <input id="investment" value="100000" onKeyup="calculateLoadAmount()" class="form-control custom-input" type="number" placeholder="Enter investment amount">
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-investment" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>₹1,000</span>
                                            <span>₹10,00,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Interest Rate -->
                            <div class="col-lg-6 mb-4">
                                <div class="input-group-custom">
                                    <label for="rate">
                                        <i class="fas fa-percentage"></i>
                                        Interest Rate (%)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculateLoadAmount()" value="7.5" id="rate" type="number" step="0.1" placeholder="Enter interest rate">
                                        <span class="input-suffix">%</span>
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-rate" class="custom-slider"></div>
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
                                    <label for="years">
                                        <i class="fas fa-clock"></i>
                                        Time Period (Years)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculateLoadAmount()" value="5" id="years" type="number" step="0.1" placeholder="Enter time period">
                                        <span class="input-suffix">Years</span>
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-years" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>1 Year</span>
                                            <span>20 Years</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Calculate Button -->
                            <div class="col-lg-12">
                                <div class="calculate-section">
                                    <button type="button" onClick="calculateLoadAmount();" class="calculate-btn">
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
            <div class="col-lg-4">
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
                                <h5>Principal Amount</h5>
                                <p>The initial amount you invest</p>
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
                                <p>Duration of your investment period</p>
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
                        <h3><i class="fas fa-book-open"></i> About FD Calculator</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="content-block">
                                    <h4><i class="fas fa-calculator"></i> What is FD Calculator?</h4>
                                    <p>The <strong>FD Calculator</strong> (Fixed Deposit Calculator) is a tool designed to calculate the maturity amount and interest earned on a fixed deposit investment. It uses compound interest principles to provide accurate results. </p>
                                    <p>It is a free online tool that allows you to calculate the maturity amount and interest earned on a fixed deposit investment. It is a very useful tool for investors to plan their investments and make informed decisions.</p>
                                </div>
                                <div class="content-block">
                                    <h4><i class="fas fa-cogs"></i> Key Parameters</h4>
                                    <ul class="feature-list">
                                        <li><strong>Principal Amount:</strong> The initial amount deposited</li>
                                        <li><strong>Interest Rate:</strong> The annual interest rate provided by the bank</li>
                                        <li><strong>Tenure:</strong> The duration for which the amount is deposited</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-block">
                                    <h4><i class="fas fa-star"></i> Key Features</h4>
                                    <ul class="feature-list">
                                        <li><strong>Accurate Calculation:</strong> Uses compound interest formula</li>
                                        <li><strong>Real-time Results:</strong> Instant calculation as you type</li>
                                        <li><strong>Visual Charts:</strong> Graphical representation of results</li>
                                        <li><strong>Mobile Friendly:</strong> Works perfectly on all devices</li>
                                    </ul>
                                </div>
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i> Benefits</h4>
                                    <ul class="feature-list">
                                        <li>Plan your investments effectively</li>
                                        <li>Compare different FD schemes</li>
                                        <li>Understand compound interest growth</li>
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
@endpush