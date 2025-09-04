<div class="fd-calculator-container">
    <!-- Header Section -->
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-calculator"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">Income Tax Calculator</h1>
                <p class="calculator-subtitle">Calculate your Indian Income Tax liability for the financial year. Plan your taxes efficiently with our comprehensive calculator.</p>
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
                        <h3><i class="fas fa-edit"></i> Income Details</h3>
                        <p>Enter your income and deductions to calculate tax</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Annual Income -->
                            <div class="col-lg-12 mb-4">
                                <div class="input-group-custom">
                                    <label for="annual_income">
                                        <i class="fas fa-money-bill-wave"></i>
                                        Annual Income
                                    </label>
                                    <div class="input-wrapper">
                                        <span class="currency-symbol">₹</span>
                                        <input id="annual_income" value="800000" onKeyup="calculateIncomeTax()" class="form-control custom-input" type="number" placeholder="Enter annual income">
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-annual-income" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>₹2,50,000</span>
                                            <span>₹50,00,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Deductions -->
                            <div class="col-lg-6 mb-4">
                                <div class="input-group-custom">
                                    <label for="deductions">
                                        <i class="fas fa-minus-circle"></i>
                                        Deductions (80C, 80D, etc.)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculateIncomeTax()" value="150000" id="deductions" type="number" placeholder="Enter deductions">
                                        <span class="input-suffix">₹</span>
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-deductions" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>₹0</span>
                                            <span>₹2,00,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Age Group -->
                            <div class="col-lg-6 mb-3">
                                <div class="input-group-custom">
                                    <label for="age_group">
                                        <i class="fas fa-user"></i>Age Group
                                    </label>
                                    <select id="age_group" class="custom-input form-control" style="padding-top: 6px;" onchange="calculateIncomeTax()">
                                        <option value="normal">Below 60 Years</option>
                                        <option value="senior">60 to 80 Years</option>
                                        <option value="super_senior">Above 80 Years</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Calculate Button -->
                            <div class="col-lg-12">
                                <div class="calculate-section">
                                    <button type="button" onClick="calculateIncomeTax();" class="calculate-btn">
                                        <i class="fas fa-calculator"></i>
                                        Calculate Tax
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
                                <i class="fas fa-rupee-sign"></i>
                            </div>
                            <div class="info-text">
                                <h5>Annual Income</h5>
                                <p>Your total income for the year</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-minus"></i>
                            </div>
                            <div class="info-text">
                                <h5>Deductions</h5>
                                <p>Eligible deductions under various sections</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="info-text">
                                <h5>Age Group</h5>
                                <p>Tax slabs vary by age</p>
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
                        <h3><i class="fas fa-book-open"></i> About Income Tax Calculator</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="content-block">
                                    <h4><i class="fas fa-calculator"></i> What is Income Tax Calculator?</h4>
                                    <p>The <strong>Income Tax Calculator</strong> is a tool designed to estimate your tax liability as per the latest Indian tax slabs. It considers your income, deductions, and age group to provide an accurate tax calculation.</p>
                                </div>
                                <div class="content-block">
                                    <h4><i class="fas fa-cogs"></i> Key Parameters</h4>
                                    <ul class="feature-list">
                                        <li><strong>Annual Income:</strong> Your total income for the year</li>
                                        <li><strong>Deductions:</strong> Eligible deductions under various sections</li>
                                        <li><strong>Age Group:</strong> Tax slabs differ by age</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-block">
                                    <h4><i class="fas fa-star"></i> Key Features</h4>
                                    <ul class="feature-list">
                                        <li><strong>Accurate Calculation:</strong> Follows latest Indian tax slabs</li>
                                        <li><strong>Real-time Results:</strong> Instant calculation as you type</li>
                                        <li><strong>Mobile Friendly:</strong> Works perfectly on all devices</li>
                                    </ul>
                                </div>
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i> Benefits</h4>
                                    <ul class="feature-list">
                                        <li>Plan your taxes efficiently</li>
                                        <li>Understand your tax liability</li>
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
