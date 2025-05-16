<div class="content">
   <h1 class="font-size-18 font-weight-bold">FD Calculator</h1>
   <p>Use our FD Calculator to estimate your fixed deposit returns. Simply input the deposit amount, interest rate, and tenure to get precise results.</p>
   <div class="card">
      <div class="card-body">
         <div class="row">
            <div class="col-lg-12">
               <div class="form-group">
                  <label for="investment">Total Investment</label>
                  <input id="investment" value="1000" onKeyup="calculateLoadAmount()" class="form-control text-font-bold" type="number" placeholder="Enter total investment">
                  <div id="slider-range-investment" class="mt-3"></div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
                  <label for="rate">Rate of Interest (%)</label>
                  <input class="form-control border text-font-bold" onKeyup="calculateLoadAmount()" value="7.5" id="rate" type="number" placeholder="Enter rate of interest">
                  <div id="slider-range-rate" class="mt-3"></div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
                  <label for="years">Time Period (Yearly)</label>
                  <input class="form-control border text-font-bold" onKeyup="calculateLoadAmount()" value="5" id="years" type="text" placeholder="Enter investment period">
                  <div id="slider-range-years" class="mt-3"></div>
               </div>
            </div>
            <div class="col-lg-12">
                  <div class="form-group">					
                     <button type="button" value="Calculate" name="calculate" onClick="calculateLoadAmount();" class="th-btn w-100">Calculate Maturity Amount Now</button>
                  </div>
             </div>
         </div>
         <div class="row">
            <div class="col-lg-12" id="error_msg"></div>
            <div class="col-lg-12" id="result"></div>
         </div>
         <div class="row mt-4">
            <div class="col-lg-12">
               <p>The <strong>FD Calculator</strong> (Fixed Deposit Calculator) is a tool designed to calculate the maturity amount and interest earned on a fixed deposit investment. The calculator uses parameters such as:</p>
               <ul class="wp-block-list">
                  <li><b>Principal Amount</b>: The initial amount deposited.</li>
                  <li><b>Interest Rate</b>: The annual interest rate provided by the bank or financial institution.</li>
                  <li><b>Tenure</b>: The duration for which the amount is deposited.</li>
               </ul>
               <p>The key functionalities of a well-designed FD calculator include:</p>
               <ol class="wp-block-list">
                  <li><b>Accurate Maturity Calculation</b>: Computes the total amount at maturity based on compounding principles.</li>
                  <li><b>Interest Earned Breakdown</b>: Displays the total interest earned over the tenure.</li>
                  <li><b>Customizable Inputs</b>: Allows users to experiment with different rates, tenures, and compounding frequencies.</li>
               </ol>
               <p><strong>Features</strong></p>
               <ul class="wp-block-list">
                  <li>Provides both maturity amount and interest earned.</li>
                  <li>User-friendly and efficient in computation.</li>
               </ul>               
            </div>
         </div>
      </div>
   </div>
</div>
