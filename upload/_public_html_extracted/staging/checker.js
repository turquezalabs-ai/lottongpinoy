// js/utils.js
import { SCHEDULE_ORDER, GAME_RULES } from './config.js';

// Date Parsing
export function parseDateSafe(dateStr) {
    if (!dateStr) return null;
    const parts = String(dateStr).split(/\D/);
    if (parts.length === 3) {
        const [month, day, year] = parts;
        const isoStr = `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`;
        const date = new Date(isoStr);
        if (!isNaN(date.getTime())) return date;
    }
    const date = new Date(dateStr);
    if (!isNaN(date.getTime())) return date;
    return null;
}

// Game Type Checks
export function isDigitGame(gameName) {
    if (!gameName) return false;
    return ['2D', '3D', '4D', '6D'].some(type => gameName.toUpperCase().includes(type));
}

// Game Max Number
export function getMaxNum(game) {
    if (!game) return 58;

    // CRITICAL: Check 2D (31) before checking generic 'D' (9)
    if (game.includes('2D')) return 31;
    if (game.includes('3D')) return 9;
    if (game.includes('4D')) return 9;
    if (game.includes('6D')) return 9;

    // Config fallback
    const ruleKey = Object.keys(GAME_RULES).find(key => game.includes(key));
    if (ruleKey) return GAME_RULES[ruleKey].max;

    return 58;
}

// Schedule Detection
export function getScheduleInfo(gameStr) {
    if (!gameStr) return { label: 'Unknown', order: 99 };
    const str = String(gameStr).toUpperCase().replace(/\s+/g, '');
    for (const [key, order] of Object.entries(SCHEDULE_ORDER)) {
        const cleanKey = key.replace(/\s+/g, '');
        if (str.includes(cleanKey)) return { label: key, order };
    }
    return { label: '9 PM', order: 99 };
}

// Formatting
export function formatCompactNumber(num) {
    if (num >= 1e9) return (num / 1e9).toFixed(1) + 'B';
    if (num >= 1e6) return (num / 1e6).toFixed(1) + 'M';
    if (num >= 1e3) return (num / 1e3).toFixed(0) + 'k';
    return num.toString();
}

export function formatCurrency(num) {
    return "₱ " + (num || 0).toLocaleString('en-US', { minimumFractionDigits: 2 });
}

// Dropdowns
export function populateDateDropdowns(monthIds, yearIds, startYear = 2016) {
    const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const currentYear = new Date().getFullYear();
    const currMonth = new Date().getMonth();
    monthIds.forEach(id => { const el = document.getElementById(id); if(el) { el.innerHTML = months.map((m, i) => `<option value="${i}">${m}</option>`).join(''); el.value = currMonth; }});
    yearIds.forEach(id => { const el = document.getElementById(id); if(el) { let opts = ''; for (let y = currentYear; y >= startYear; y--) opts += `<option value="${y}">${y}</option>`; el.innerHTML = opts; }});
}

export function linkDateDropdowns(fromId, toId) {
    const fromEl = document.getElementById(fromId); const toEl = document.getElementById(toId);
    if (!fromEl || !toEl) return;
    const currentYear = new Date().getFullYear();
    const updateToOptions = () => { const minYear = parseInt(fromEl.value); const currentToVal = toEl.value; let opts = ''; for (let y = currentYear; y >= minYear; y--) opts += `<option value="${y}">${y}</option>`; toEl.innerHTML = opts; if (parseInt(currentToVal) >= minYear) toEl.value = currentToVal; else toEl.value = minYear; };
    updateToOptions(); fromEl.addEventListener('change', updateToOptions);
}