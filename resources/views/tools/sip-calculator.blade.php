<div class="fd-calculator-container">
    <!-- Header Section -->
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-calculator"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">SIP Calculator</h1>
                <p class="calculator-subtitle">A SIP calculator is a simple tool that allows individuals to get an idea of the returns on their mutual fund investments made through SIP.</p>
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
                        <h3><i class="fas fa-edit"></i> Systematic Investment Plan Calculator</h3>
                        <p>Enter your investment parameters to calculate returns</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Investment Amount -->
                            <div class="col-lg-12 mb-4">
                                <div class="input-group-custom">
                                    <label for="investment">
                                        <i class="fas fa-money-bill-wave"></i>
                                        Monthly Investment
                                    </label>
                                    <div class="input-wrapper">
                                        <span class="currency-symbol">₹</span>
                                        <input id="investment" value="1000" onKeyup="calculateLoadAmount()" class="form-control custom-input" type="number" placeholder="Enter monthly investment">
										
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-investment" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>₹100</span>
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
                                        Expected Return Rate (%)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculateLoadAmount()" value="12" id="rate" type="number" placeholder="Enter annual interest rate"">
                                        <span class="input-suffix">%</span>
                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-rate" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>1%</span>
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Time Period -->
                            <div class="col-lg-6 mb-4">
                                <div class="input-group-custom">
                                    <label for="years">
                                        <i class="fas fa-clock"></i>
                                        Time Period (Yearly)
                                    </label>
                                    <div class="input-wrapper">
                                        <input class="form-control custom-input" onKeyup="calculateLoadAmount()" value="5" id="years" type="number" placeholder="Enter investment period">
                                        <span class="input-suffix">Years</span>

                                    </div>
                                    <div class="slider-container">
                                        <div id="slider-range-years" class="custom-slider"></div>
                                        <div class="slider-labels">
                                            <span>1 Year</span>
                                            <span>40 Years</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Calculate Button -->
                            <div class="col-lg-12">
                                <div class="calculate-section">
                                    <button type="button" onClick="calculateLoadAmount();" class="calculate-btn">
                                        <i class="fas fa-calculator"></i>
                                        Calculate Your SIP Now
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
                                <h5>Monthly Investment</h5>
                                <p>The initial amount you sip</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="info-text">
                                <h5>Expected Return</h5>
                                <p>Interest rate offered by the market</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="info-text">
                                <h5>Tenure</h5>
                                <p>Duration of your sip period</p>
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
                        <h3><i class="fas fa-book-open"></i> About SIP Calculator</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
								<div class="content-block">
                                    <h4><i class="fas fa-star"></i> SIP Calculator - Systematic Investment Plan Calculator</h4>
                                    <p>The <a href="{{route('toollist', 'sip-calculator')}}" title="SIP Calculator">SIP Calculator</a> can help you determine the estimated value of the returns. Prospective investors can think that SIPs and <a href="https://www.mutualfundssahihai.com/" target="_blank" rel="noopener" title="mutual funds">mutual funds</a> are the same. However, SIPs are merely a method of investing in mutual funds, the other method being a lump sum. A Systematic Investment Plan or SIP is a process of investing a fixed sum of money in mutual funds at regular intervals. SIPs usually allow you to invest weekly, quarterly, or monthly.</p>
                                </div>
                                <div class="content-block">
                                    <h4><i class="fas fa-calculator"></i> What is a SIP Calculator?</h4>
                                    <p>A SIP calculator is a simple tool that allows individuals to get an idea of the returns on their mutual fund investments made through SIP. SIP investments in mutual funds have become one of the most popular investment options for millennials lately.</p>
									<p>These mutual fund sip calculators are designed to give potential investors an estimate on their mutual fund investments. However, the actual returns offered by a mutual fund scheme varies depending on various factors. The SIP calculator does not provide clarification for the exit load and expense ratio (if any).</p>
									<p>This calculator will calculate the wealth gain and expected returns for your monthly SIP investment. Indeed, you get a rough estimate on the maturity amount for any of your monthly SIP, based on a projected annual return rate.</p>
                                </div>
                                <div class="content-block">
                                    <h4><i class="fas fa-cogs"></i> How can a SIP return calculator help you?</h4>
                                    <p>SIPs are a more lucrative mode of investing funds compared to a lump sum amount according to several mutual fund experts. It helps you become financially disciplined and create a habit of savings that can benefit you in the future.</p>
		   							<p>A SIP calculator online is a beneficial tool, which shows the estimated returns you will earn after the investment tenure.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">                                
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i> Key benefits of SIP calculators include</h4>
                                    <ul class="feature-list">
                                        <li>Assists you to determine the amount you want to invest in.</li>
										<li>Tells you the total amount you have invested.</li>
										<li>Gives an estimated value of the returns.</li>
										<li>It is a free online tool that allows you to calculate the maturity amount and interest earned on a SIP investment.</li>
										<li>It is a very useful tool for investors to plan their investments and make informed decisions.</li>
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