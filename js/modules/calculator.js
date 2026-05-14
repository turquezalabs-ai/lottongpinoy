// js/modules/calculator.js

export function initCalculator() {
    const btn = document.getElementById('calculateBtn');
    if (btn) {
        btn.addEventListener('click', runCalculation);
    }
}

function runCalculation() {
    const prizeInput = document.getElementById('calcPrize').value;
    const winnersInput = document.getElementById('calcWinners').value;

    // 1. Clean Prize Input (remove commas)
    const prizeClean = prizeInput.replace(/[^0-9.-]/g, '');
    const prize = parseFloat(prizeClean) || 0;
    const winners = parseInt(winnersInput) || 1;

    if (prize <= 0) {
        alert("Please enter a valid prize amount.");
        return;
    }

    // 2. Calculate Tax (20% if prize > 10,000)
    let tax = 0;
    if (prize > 10000) {
        tax = prize * 0.20;
    }

    const netPrize = prize - tax;
    const share = netPrize / winners;

    // 3. Update UI
    document.getElementById('calcGross').textContent = '₱ ' + formatNumber(prize);
    document.getElementById('calcTax').textContent = '- ₱ ' + formatNumber(tax);
    document.getElementById('calcResult').textContent = '₱ ' + formatNumber(share);
}

function formatNumber(num) {
    return num.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
}

// Helper to auto-format input with commas
window.formatCurrency = (input) => {
    // Remove non-digits
    let value = input.value.replace(/\D/g, '');
    if (value) {
        value = parseInt(value).toLocaleString('en-US');
    }
    input.value = value;
}