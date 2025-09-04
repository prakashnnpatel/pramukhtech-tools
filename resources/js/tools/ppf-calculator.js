var calculatePPF = function() {
    const yearlyDeposit = parseFloat($('#ppf_investment').val());
    const rate = parseFloat($('#ppf_rate').val());
    const years = parseInt($('#ppf_years').val());
    
    if (isNaN(yearlyDeposit) || yearlyDeposit <= 0) {
        $('#ppf_error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid yearly deposit amount</div>`);
        $('#ppf_result').html("");
        return;
    }
    if (isNaN(rate) || rate <= 0) {
        $('#ppf_error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid interest rate</div>`);
        $('#ppf_result').html("");
        return;
    }
    if (isNaN(years) || years <= 0) {
        $('#ppf_error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid time period</div>`);
        $('#ppf_result').html("");
        return;
    }
    $('#ppf_error_msg').html("");
    $('#ppf_result').html("");
    // Calculate PPF maturity using annual compounding
    let maturity = 0;
    let totalDeposit = 0;
    let yearlyBalances = [];
    for (let i = 1; i <= years; i++) {
        maturity = (maturity + yearlyDeposit) * (1 + rate / 100);
        totalDeposit += yearlyDeposit;
        yearlyBalances.push(maturity);
    }
    const interest = maturity - totalDeposit;
    // Maturity date
    const start = new Date();
    const maturityDate = new Date(start);
    maturityDate.setFullYear(start.getFullYear() + years);
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    const maturityDateString = maturityDate.toLocaleDateString(undefined, options);
    // Display results
    $('#ppf_result').html(`
    <div class="result-card">
        <div class="result-header">
            <h3><i class="fas fa-chart-pie"></i> PPF Summary</h3>
        </div>
        <div class="result-content">
            <div class="summary-grid">
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="summary-label">Interest Earned</div>
                    <div class="summary-value">₹${Math.round(interest).toLocaleString()}</div>
                    <div class="summary-currency">Returns</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <div class="summary-label">Maturity Amount</div>
                    <div class="summary-value">₹${Math.round(maturity).toLocaleString()}</div>
                    <div class="summary-currency">Total</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="summary-label">Maturity Date</div>
                    <div class="summary-value">${maturityDateString}</div>
                    <div class="summary-currency">${years} Years</div>
                </div>
            </div>
            <div class="chart-container">
                <div class="chart-title">Investment Breakdown</div>
                <div style="width: 100%; max-width: 400px; margin: 0 auto;">
                    <canvas id="ppfDoughnutChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    `);
    // Chart
    const ctx = document.getElementById('ppfDoughnutChart').getContext('2d');
    const ppfDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Total Deposit', 'Interest Earned'],
            datasets: [{
                label: 'Amount',
                data: [Math.round(totalDeposit), Math.round(interest)],
                backgroundColor: [
                    'rgba(102, 126, 234, 0.8)',
                    'rgba(40, 167, 69, 0.8)',
                ],
                borderColor: [
                    'rgba(102, 126, 234, 1)',
                    'rgba(40, 167, 69, 1)',
                ],
                borderWidth: 3,
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '60%',
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        usePointStyle: true,
                        font: {
                            size: 12,
                            weight: '600'
                        }
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: 'white',
                    bodyColor: 'white',
                    borderColor: 'rgba(255, 255, 255, 0.2)',
                    borderWidth: 1,
                    cornerRadius: 8,
                    displayColors: true,
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.parsed;
                            return `${label}: ₹${value.toLocaleString()}`;
                        }
                    }
                }
            },
            animation: {
                animateRotate: true,
                animateScale: true
            }
        }
    });
}
$(function() {
    $("#slider-range-ppf-investment").slider({
        range: "min",
        value: 150000,
        min: 500,
        max: 150000,
        slide: function(event, ui) {
            $("#ppf_investment").val(ui.value);
            calculatePPF();
        }
    });
    $("#ppf_investment").on("keyup", function() {
        $("#slider-range-ppf-investment").slider("value", $(this).val());
    });
    $("#slider-range-ppf-rate").slider({
        range: "min",
        value: 7.1,
        min: 6,
        max: 8,
        step: 0.1,
        slide: function(event, ui) {
            $("#ppf_rate").val(ui.value);
            calculatePPF();
        }
    });
    $("#ppf_rate").on("keyup", function() {
        $("#slider-range-ppf-rate").slider("value", $(this).val());
    });
    $("#slider-range-ppf-years").slider({
        range: "min",
        value: 15,
        min: 1,
        max: 15,
        step: 1,
        slide: function(event, ui) {
            $("#ppf_years").val(ui.value);
            calculatePPF();
        }
    });
    $("#ppf_years").on("keyup", function() {
        $("#slider-range-ppf-years").slider("value", $(this).val());
    });
    $("#ppf_investment").val($("#slider-range-ppf-investment").slider("value"));
    $("#ppf_rate").val($("#slider-range-ppf-rate").slider("value"));
    $("#ppf_years").val($("#slider-range-ppf-years").slider("value"));
    calculatePPF();
});
window.calculatePPF = calculatePPF;
