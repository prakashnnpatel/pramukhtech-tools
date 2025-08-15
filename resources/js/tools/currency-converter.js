var currencyConverter = function() {
    // DOM elements
    const $amountInput = $('#amountInput');
    const $fromCurrency = $('#fromCurrency');
    const $toCurrency = $('#toCurrency');
    const $convertedAmount = $('#convertedAmount');
    const $swapCurrencies = $('#swapCurrencies');
    const $conversionRate = $('#conversionRate');
    //const $lastUpdated = $('#lastUpdated');

    // Currency data from database
    const currencies = {};
    const exchangeRates = {};
    
    // Process currency data from PHP
    if (typeof currencyData !== 'undefined' && currencyData.length > 0) {
        currencyData.forEach(currency => {
            // Create a formatted currency object
            currencies[currency.code] = {
                name: currency.name,
                symbol: currency.symbol
            };
            
            // Set exchange rates
            exchangeRates[currency.code] = parseFloat(currency.rate);
        });
    } else {
        // Fallback data in case database data is not available
        Object.assign(currencies, {
            USD: { name: 'US Dollar', symbol: '$' },
            EUR: { name: 'Euro', symbol: '€' },
            GBP: { name: 'British Pound', symbol: '£' },
            JPY: { name: 'Japanese Yen', symbol: '¥' },
            INR: { name: 'Indian Rupee', symbol: '₹' }
        });
        
        Object.assign(exchangeRates, {
            USD: 1.0,
            EUR: 0.85,
            GBP: 0.75,
            JPY: 110.42,
            INR: 74.5
        });
    }

    // Last updated timestamp from database
    /*let lastUpdatedTime;
    
    // Get the most recent updated_at timestamp from currency data
    if (typeof currencyData !== 'undefined' && currencyData.length > 0) {
        // Find the most recent updated_at timestamp
        lastUpdatedTime = new Date(currencyData[0].updated_at);
        
        currencyData.forEach(currency => {
            const currencyDate = new Date(currency.updated_at);
            if (currencyDate > lastUpdatedTime) {
                lastUpdatedTime = currencyDate;
            }
        });
    } else {
        // Fallback to current date if no data available
        lastUpdatedTime = new Date();
    }*/

    // Initialize currency dropdowns
    function initializeCurrencyDropdowns() {
        // Sort currencies by name
        const sortedCurrencies = Object.keys(currencies).sort((a, b) => {
            return currencies[a].name.localeCompare(currencies[b].name);
        });

        // Populate dropdowns
        sortedCurrencies.forEach(currency => {
            const option = `<option value="${currency}">${currency} - ${currencies[currency].name}</option>`;
            $fromCurrency.append(option);
            $toCurrency.append(option);
        });

        // Set default values
        $fromCurrency.val('USD');
        $toCurrency.val('INR');
        
        // Initialize Select2 on currency dropdowns
        $fromCurrency.select2({
            width: '100%',
            dropdownParent: $fromCurrency.parent()
        });
        
        $toCurrency.select2({
            width: '100%',
            dropdownParent: $toCurrency.parent()
        });
    }

    // Convert currency
    function convertCurrency() {
        const amount = parseFloat($amountInput.val());
        const fromCurrency = $fromCurrency.val();
        const toCurrency = $toCurrency.val();

        if (isNaN(amount) || amount <= 0) {
            $convertedAmount.html('Please enter a valid amount');
            $conversionRate.html('');
            return;
        }

        // Get exchange rates relative to base currency
        const fromRate = exchangeRates[fromCurrency];
        const toRate = exchangeRates[toCurrency];

        // Calculate conversion
        const convertedValue = (amount / fromRate) * toRate;
        const rate = toRate / fromRate;
        
        // Create a temporary div to decode HTML entities in the symbol
        const decodeSymbol = function(htmlSymbol) {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = htmlSymbol;
            return tempDiv.textContent || tempDiv.innerText || htmlSymbol;
        };
        
        // Get decoded symbol
        const symbol = decodeSymbol(currencies[toCurrency].symbol);

        // Display results
        $("#converted_amount_symbol").html(`${symbol}`);
        $("#converted_amount_currency").html(`${toCurrency}`);
        $convertedAmount.html(`${symbol}${convertedValue.toFixed(2)}`);
        $conversionRate.html(`<strong>1 ${fromCurrency} = ${rate.toFixed(4)} ${toCurrency}</strong>`);
        //$lastUpdated.text(`Exchange rates last updated: ${lastUpdatedTime.toLocaleString()}`);
    }

    // Fetch exchange rates (using data from database)
    function fetchExchangeRates() {
        // Currency data is already loaded from the database via the blade template
        // Just trigger the conversion with the loaded data
        setTimeout(() => {
            convertCurrency();
        }, 500);
    }

    // Swap currencies
    function swapCurrencies() {
        const fromValue = $fromCurrency.val();
        const toValue = $toCurrency.val();

        $fromCurrency.val(toValue).trigger('change');
        $toCurrency.val(fromValue).trigger('change');

        convertCurrency();
    }

    // Event listeners
    function setupEventListeners() {
        $amountInput.on('input', convertCurrency);
        $fromCurrency.on('change', convertCurrency);
        $toCurrency.on('change', convertCurrency);
        $swapCurrencies.on('click', swapCurrencies);
    }

    // Initialize
    function initialize() {
        initializeCurrencyDropdowns();
        setupEventListeners();
        fetchExchangeRates();
    }

    // Run initialization
    initialize();
};

$(function() {
    currencyConverter();
});

window.currencyConverter = currencyConverter;