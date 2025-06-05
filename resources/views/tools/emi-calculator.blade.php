<h1 class="font-size-18 font-weight-bold">Free EMI Calculator for Loans</h1>
<p>Instant & Free EMI Calculator – Plan Your Loan Smartly!</p>
<div class="card">
  <div class="card-body">
	 <div class="row">
		<div class="col-lg-6">
		   <div class="form-group">
			  <label for="loan_amount">Loan Amount</label>
			  <input id="loan_amount" value="100000" onKeyup="calculateLoadAmount()" class="form-control text-font-bold" type="text" placeholder="Loan Amount">
			  <div id="slider_range_loan_amount" class="mt-3"></div>
		   </div>
		</div>
		<div class="col-lg-6">
		   <div class="form-group">
			  <label for="annual_interest_rate">Rate of Interest (%)</label>
			  <input class="form-control border text-font-bold" onKeyup="calculateLoadAmount()" value="9" id="annual_interest_rate" type="text" placeholder="Rate of interest">
			  <div id="slider_range_annual_interest_rate" class="mt-3"></div>
		   </div>
		</div>
		<div class="col-lg-12">
		   <div class="form-group">
			  <div class="row">
				 <div class="col-lg-4">
					<label for="tenureyearly">Loan Tenure</label>
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
			  <input class="form-control border text-font-bold" onKeyup="calculateLoadAmount()" value="5" id="loan_term" type="text" placeholder="Loan tenure">
			  <div id="slider_range_loan_term" class="mt-3"></div>
		   </div>
		</div>
		<div class="col-lg-12">
		   <div class="form-group text-right">					
			  <button type="button" value="Calculate" name="calculate" onClick="calculateLoadAmount();" class="th-btn">Calculate Your EMI Now</button>
		   </div>
		</div>
	 </div>
	 <div class="row">
		<div class="col-lg-12" id="error_msg"></div>
		<div class="col-lg-12" id="result"></div>
	 </div>
	 <div class="row mt-4">
		<div class="col-lg-12">
		   <h3 class="font-size-18 font-weight-bold mb-20">What is EMI (Equated Monthly Installment)? <span class="text-theme"><br>A Complete Guide</span></h3>
		   <p>Free EMI Calculator - The EMI (<a href="{{route('toollist', 'emi-calculator')}}" title="EMI">Equated Monthly Installment)</a> is the fixed amount you pay every month to a bank or financial institution to repay a loan in full. This monthly payment includes both the <b>interest on the loan</b> and a portion of the <b>principal amount</b>. The total loan amount, along with the interest, is divided equally over the loan tenure, typically measured in months.</p>
		   <h3 class="font-size-18 font-weight-bold mb-20">How Does EMI Calculator Work?</h3>
		   <p>EMI payments are made monthly over the loan tenure. During the initial months, the interest portion of the EMI is higher, while the principal repayment is lower. As you continue making payments, the proportion of interest decreases, and the contribution towards the <b>principal amount</b> increases.</p>
		   <h3 class="font-size-18 font-weight-bold mb-20">Key Features of EMI Calculator:</h3>
		   <ul class="wp-block-list">
			  <li><b>Fixed Monthly Payment:</b> The EMI amount remains consistent throughout the loan tenure.</li>
			  <li><b>Interest and Principal Breakdown:</b> Although the EMI is constant, the ratio of interest to principal changes over time.</li>
			  <li><b>Loan Tenure:</b> The number of months over which the loan is repaid determines the EMI amount.</li>
		   </ul>
		   <h3 class="font-size-18 font-weight-bold mb-20">Why Understanding EMI is Important?</h3>
		   <p>Knowing how EMIs work helps you plan your finances effectively. It ensures you are prepared for consistent monthly payments and helps you assess the affordability of a loan based on your income and expenses.</p>
		   <p>Use an <a href="https://en.wikipedia.org/wiki/Equated_monthly_installment" target="_blank" rel="noopener" title="EMI ">EMI </a>calculator to determine your monthly payment and better understand how interest rates and loan tenure affect your total loan repayment.</p>
		   <p></p>
		</div>
	 </div>
  </div>
</div>
@push('page_scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush
