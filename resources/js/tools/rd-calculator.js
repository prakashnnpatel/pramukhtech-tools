var calculateRD = function() {
    // Get input values
    const monthlyDeposit = parseFloat($('#monthly_deposit').val());
    const rate = parseFloat($('#rd_rate').val());
    const months = parseInt($('#rd_months').val());
    const frequency = 4; // Quarterly compounding (standard in India)

    // Validate inputs
    if (isNaN(monthlyDeposit) || monthlyDeposit <= 0) {
        $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid monthly deposit amount</div>`);
        $('#result').html("");
        return;
    }
    if (isNaN(rate) || rate <= 0) {
        $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid interest rate</div>`);
        $('#result').html("");
        return;
    }
    if (isNaN(months) || months <= 0) {
        $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid time period (months)</div>`);
        $('#result').html("");
        return;
    }

    $('#error_msg').html("");
    $('#result').html("");

    // RD maturity calculation (quarterly compounding)
    // Formula: M = P * n + P * n(n+1)/2 * r/(400)
    // Where P = monthly deposit, n = number of months, r = annual interest rate
    const P = monthlyDeposit; // Monthly installment
    const n = 4;         // Total months
    const r = rate / 100; ;    // Annual interest rate (e.g. 7.5 for 7.5%)

    let maturity = 0;

    // Loop through each monthly deposit
    for (let i = 1; i <= months; i++) {
        // Time left for this deposit (in years)
        const t = (months - i + 1) / 12;

        // Compound interest formula for this deposit
        const amount = P * Math.pow(1 + r / n, n * t);

        maturity += amount;
    }

    const invested = P * months;
    const interest = maturity - invested;

    // Calculate maturity date
    const start = new Date();
    const maturityDate = new Date(start);
    maturityDate.setMonth(start.getMonth() + n);
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    const maturityDateString = maturityDate.toLocaleDateString(undefined, options);

    // Display results with pie chart
    $('#result').html(`
    <div class="result-card">
        <div class="result-header">
            <h3><i class="fas fa-chart-pie"></i> RD Summary</h3>
        </div>
        <div class="result-content">            
            <div class="summary-grid" style="grid-template-columns: repeat(4, 1fr); gap: 15px;">
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
                    <div class="summary-label">Total Deposit</div>
                    <div class="summary-value">₹${(P * n).toLocaleString()}</div>
                    <div class="summary-currency">Principal</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-rupee-sign"></i>
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
                    <div class="summary-currency">Date</div>
                </div>
            </div>   
            <div class="chart-container">
                <div class="chart-title">Investment Breakdown</div>
                <div style="width: 100%; max-width: 400px; margin: 0 auto;">
                    <canvas id="rdPieChart"></canvas>
                </div>
            </div>    
        </div>
    </div>
    `);

    // Draw Pie Chart (Principal vs Interest)
     const ctx = document.getElementById('rdPieChart').getContext('2d');
    const myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Total Deposit', 'Interest Earned'],
            datasets: [{
                label: 'Amount',
                data: [P * n, interest],
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
};

// Slider initialization for RD Calculator (like in FD Calculator)
$(function() {
    // Monthly Deposit Slider
    $("#slider-range-monthly-deposit").slider({
        range: "min",
        min: 100,
        max: 100000,
        value: parseInt($('#monthly_deposit').val()),
        slide: function(event, ui) {
            $('#monthly_deposit').val(ui.value);
            calculateRD();
        }
    });
    $('#monthly_deposit').on('input', function() {
        $("#slider-range-monthly-deposit").slider('value', this.value);
    });

    // Interest Rate Slider
    $("#slider-range-rd-rate").slider({
        range: "min",
        min: 1,
        max: 15,
        step: 0.1,
        value: parseFloat($('#rd_rate').val()),
        slide: function(event, ui) {
            $('#rd_rate').val(ui.value);
            calculateRD();
        }
    });
    $('#rd_rate').on('input', function() {
        $("#slider-range-rd-rate").slider('value', this.value);
    });

    // Time Period (Months) Slider
    $("#slider-range-rd-months").slider({
        range: "min",
        min: 6,
        max: 120,
        value: parseInt($('#rd_months').val()),
        slide: function(event, ui) {
            $('#rd_months').val(ui.value);
            calculateRD();
        }
    });
    $('#rd_months').on('input', function() {
        $("#slider-range-rd-months").slider('value', this.value);
    });
});
window.calculateRD = calculateRD;