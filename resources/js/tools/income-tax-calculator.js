var calculateIncomeTax = function() {
    const income = parseFloat($('#annual_income').val());
    const deductions = parseFloat($('#deductions').val());
    const ageGroup = $('#age_group').val();

    // Validate inputs
    if (isNaN(income) || income < 0) {
        $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter a valid annual income</div>`);
        $('#result').html("");
        return;
    }
    if (isNaN(deductions) || deductions < 0) {
        $('#error_msg').html(`<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i> Please enter valid deductions</div>`);
        $('#result').html("");
        return;
    }
    $('#error_msg').html("");
    $('#result').html("");

    // Calculate taxable income
    let taxableIncome = income - deductions;
    if (taxableIncome < 0) taxableIncome = 0;

    // Define slabs for FY 2024-25 
    let slabs = [];        
    //Old Regime
    if (ageGroup === 'normal') {
        slabs = [
            { upto: 250000, rate: 0 },
            { upto: 500000, rate: 0.05 },
            { upto: 1000000, rate: 0.2 },
            { upto: Infinity, rate: 0.3 }
        ];
    } else if (ageGroup === 'senior') {
        slabs = [
            { upto: 300000, rate: 0 },
            { upto: 500000, rate: 0.05 },
            { upto: 1000000, rate: 0.2 },
            { upto: Infinity, rate: 0.3 }
        ];
    } else if (ageGroup === 'super_senior') {
        slabs = [
            { upto: 500000, rate: 0 },
            { upto: 1000000, rate: 0.2 },
            { upto: Infinity, rate: 0.3 }
        ];
    } else {
        //New Regime
        slabs = [
            { upto: 400000, rate: 0 },
            { upto: 800000, rate: 0.05 },
            { upto: 1200000, rate: 0.1 },
            { upto: 1600000, rate: 0.15 },
            { upto: 2000000, rate: 0.2 },
            { upto: 2400000, rate: 0.25 },
            { upto: Infinity, rate: 0.3 }
        ];
    }

    let tax = 0;
    let lastUpto = 0;
    for (let i = 0; i < slabs.length; i++) {
        if (taxableIncome > lastUpto) {
            //console.log(lastUpto);
            let slabAmount = Math.min(slabs[i].upto, taxableIncome) - lastUpto;
            tax += slabAmount * slabs[i].rate;
            lastUpto = slabs[i].upto;
        } else {
            break;
        }
    }

    // Rebate under section 87A for income up to 5 lakh
    if (taxableIncome <= 500000) {
        tax = 0;
    }

    // Add 4% cess
    let cess = tax * 0.04;
    let totalTax = tax + cess;

    // Display results
    $('#result').html(`
    <div class="result-card">
        <div class="result-header">
            <h3><i class="fas fa-chart-pie"></i> Tax Summary</h3>
        </div>
        <div class="result-content">
            <div class="summary-grid" style="grid-template-columns: repeat(4, 1fr); gap: 15px;">
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <div class="summary-label">Taxable Income</div>
                    <div class="summary-value">₹${Math.round(taxableIncome).toLocaleString()}</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-percent"></i>
                    </div>
                    <div class="summary-label">Income Tax</div>
                    <div class="summary-value">₹${Math.round(tax).toLocaleString()}</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="summary-label">Cess (4%)</div>
                    <div class="summary-value">₹${Math.round(cess).toLocaleString()}</div>
                </div>
                <div class="summary-item">
                    <div class="summary-icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="summary-label">Total Tax Payable</div>
                    <div class="summary-value">₹${Math.round(totalTax).toLocaleString()}</div>
                </div>
            </div>
            <div class="chart-container">
                <div class="chart-title">Tax Breakdown</div>
                <div style="width: 100%; max-width: 400px; margin: 0 auto;">
                    <canvas id="invTaxPieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    `);

    // Draw Pie Chart (Principal vs Interest)
     const ctx = document.getElementById('invTaxPieChart').getContext('2d');
    const myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Income Tax', 'Cess','Total Tax Payable'],
            datasets: [{
                label: 'Amount',
                data: [Math.round(tax), Math.round(cess), Math.round(totalTax)],
                backgroundColor: [
                    'rgba(102, 126, 234, 0.8)',                    
                    'rgba(7, 78, 190, 0.8)',
                    'rgba(40, 167, 69, 0.8)',
                ],
                borderColor: [
                    'rgba(102, 126, 234, 1)',                    
                    'rgba(7, 78, 190, 0.8)',
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

$(function() {
    $("#slider-range-annual-income").slider({
        range: "min",
        value: 800000,
        min: 250000,
        max: 5000000,
        step: 1000,
        slide: function(event, ui) {
            $("#annual_income").val(ui.value);
            calculateIncomeTax();
        }
    });
    $("#annual_income").on("keyup", function() {
        $("#slider-range-annual-income").slider("value", $(this).val());
    });
    $("#slider-range-deductions").slider({
        range: "min",
        value: 150000,
        min: 0,
        max: 200000,
        step: 1000,
        slide: function(event, ui) {
            $("#deductions").val(ui.value);
            calculateIncomeTax();
        }
    });
    $("#deductions").on("keyup", function() {
        $("#slider-range-deductions").slider("value", $(this).val());
    });
    $("#annual_income").val($("#slider-range-annual-income").slider("value"));
    $("#deductions").val($("#slider-range-deductions").slider("value"));
    calculateIncomeTax();
});
window.calculateIncomeTax = calculateIncomeTax;
