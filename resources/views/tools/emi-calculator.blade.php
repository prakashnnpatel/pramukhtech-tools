<div class="fd-calculator-container">
    <!-- Header Section -->
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-calculator"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">Free EMI Calculator for Loans</h1>
                <p class="calculator-subtitle">Instant & Free EMI Calculator – Plan Your Loan Smartly!</p>
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
                        <h3><i class="fas fa-edit"></i> EMI Calculator for Loans</h3>
                        <p>Enter your investment parameters to calculate returns</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Investment Amount -->
                            <div class="col-lg-6 mb-4">
                                <div class="input-group-custom">
                                    <label for="investment">
                                        <i class="fas fa-money-bill-wave"></i>
                                        Loan Amount
                                    </label>
                                    <div class="input-wrapper">
                                        <span class="currency-symbol">₹</span>
                                        <input id="loan_amount" value="1000" onKeyup="calculateLoadAmount()" class="form-control custom-input" type="number" placeholder="Loan Amount">
                                    </div>
                                    <div class="slider-container">										
                                        <div id="slider_range_loan_amount" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>100</span>
                                            <span> 1,00,00,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Interest Rate -->
                            <div class="col-lg-6 mb-4">
                                <div class="input-group-custom">
                                    <label for="rate">
                                        <i class="fas fa-percentage"></i>
                                        Rate of Interest (%)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculateLoadAmount()" value="12" id="annual_interest_rate" type="number" placeholder="Enter annual interest rate"">
                                        <span class="input-suffix">%</span>
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider_range_annual_interest_rate" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>1%</span>
                                            <span>45%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Time Period -->
                            <div class="col-lg-12 mb-4">
                                <div class="input-group-custom">
									<div class="row">
										<div class="col-lg-4">
											<label for="years">
												<i class="fas fa-clock"></i>
												Loan Tenure
											</label>
										</div>
										<div class="col-lg-8" style="text-align: right;">
											<div class="form-check form-check-inline" style="margin-right: inherit !important;">
											<input class="form-check-input" onChange="calculateLoadAmount();" type="radio" name="tenuretype" id="tenureyearly" value="Y" checked>
											<label class="form-check-label" for="tenureyearly">Yearly</label>
											</div>
											<div class="form-check form-check-inline" style="margin-right: inherit !important;">
											<input class="form-check-input" onChange="calculateLoadAmount();" type="radio" name="tenuretype" id="tenuremonthly" value="M">
											<label class="form-check-label" for="tenuremonthly">Monthly</label>
											</div>
										</div>
									</div>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculateLoadAmount()" value="5" id="loan_term" type="number" placeholder="Enter investment period">                                        
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider_range_loan_term" class="custom-slider"></div>                                       
                                    </div>
                                </div>
                            </div>

                            <!-- Calculate Button -->
                            <div class="col-lg-12">
                                <div class="calculate-section">
                                    <button type="button" onClick="calculateLoadAmount('btn');" class="calculate-btn">
                                        <i class="fas fa-calculator"></i>
                                        Calculate Your EMI Now
                                    </button>
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

                <!-- Information Section -->
                <div class="info-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="info-content-card">
                                <div class="content-header">
                                    <h3><i class="fas fa-book-open"></i> About EMI Calculator</h3>
                                </div>
                                <div class="content-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="content-block">
                                                <h4><i class="fas fa-star"></i> What is EMI (Equated Monthly Installment)? - A Complete Guide</h4>
                                                <p>Free EMI Calculator - The EMI (<a href="{{route('toollist', 'emi-calculator')}}" title="EMI">Equated Monthly Installment)</a> is the fixed amount you pay every month to a bank or financial institution to repay a loan in full. This monthly payment includes both the <b>interest on the loan</b> and a portion of the <b>principal amount</b>. The total loan amount, along with the interest, is divided equally over the loan tenure, typically measured in months.</p>
                                            </div>
                                            <div class="content-block">
                                                <h4><i class="fas fa-calculator"></i> How Does EMI Calculator Work?</h4>
                                                <p>EMI payments are made monthly over the loan tenure. During the initial months, the interest portion of the EMI is higher, while the principal repayment is lower. As you continue making payments, the proportion of interest decreases, and the contribution towards the <b>principal amount</b> increases.</p>
                                            </div>
                                            <div class="content-block">
                                                <h4><i class="fas fa-cogs"></i> Why Understanding EMI is Important?</h4>
                                                <p>Knowing how EMIs work helps you plan your finances effectively. It ensures you are prepared for consistent monthly payments and helps you assess the affordability of a loan based on your income and expenses.</p>
                                                <p>Use an <a href="https://en.wikipedia.org/wiki/Equated_monthly_installment" target="_blank" rel="noopener" title="EMI ">EMI </a>calculator to determine your monthly payment and better understand how interest rates and loan tenure affect your total loan repayment.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">                                
                                            <div class="content-block">
                                                <h4><i class="fas fa-lightbulb"></i> Key Features of EMI Calculator:</h4>
                                                <ul class="feature-list">
                                                    <li><b>Fixed Monthly Payment:</b> The EMI amount remains consistent throughout the loan tenure.</li>
                                                    <li><b>Interest and Principal Breakdown:</b> Although the EMI is constant, the ratio of interest to principal changes over time.</li>
                                                    <li><b>Loan Tenure:</b> The number of months over which the loan is repaid determines the EMI amount.</li>
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
@endpush