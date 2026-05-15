// js/modules/history.js

// 1. Import utilities and config
import { parseDateSafe, populateDateDropdowns, isDigitGame, linkDateDropdowns } from '../utils.js';
import { MAJOR_GAMES, DIGIT_GAMES } from '../config.js';

console.log("✅ History Logic Loaded");

let filteredData = [];
let currentPage = 1;
const rowsPerPage = 15;

export function initResultsFilter(allData) {
    // 1. Populate Dates
    populateDateDropdowns(['fromMonthSelect', 'toMonthSelect'], ['fromYearSelect', 'toYearSelect']);
    
    // 2. Link Dates
    linkDateDropdowns('fromYearSelect', 'toYearSelect');
    
    // 3. Init Logic
    populateGameDropdown('major'); // Default load
    setupListeners(allData);
}

function setupListeners(allData) {
    // Category Radios
    document.querySelectorAll('input[name="catRadio"]').forEach(radio => {
        radio.addEventListener('change', (e) => {
            populateGameDropdown(e.target.value);
            document.getElementById('scheduleContainer')?.classList.add('hidden');
        });
    });

    // Game Select
    document.getElementById('gameSelect')?.addEventListener('change', (e) => {
        const val = e.target.value;
        const sched = document.getElementById('scheduleContainer');
        if (sched) {
            if (val === '3D' || val === '2D') sched.classList.remove('hidden');
            else sched.classList.add('hidden');
        }
    });

    // Search
    document.getElementById('searchBtn')?.addEventListener('click', () => {
        currentPage = 1;
        applyFilterAndRender(allData);
    });

    // Pagination
    document.getElementById('prevBtn')?.addEventListener('click', () => { if (currentPage > 1) { currentPage--; renderTable(); } });
    document.getElementById('nextBtn')?.addEventListener('click', () => { if (currentPage < Math.ceil(filteredData.length / rowsPerPage)) { currentPage++; renderTable(); } });
}

// FIX: Updated to use imported MAJOR_GAMES and DIGIT_GAMES
function populateGameDropdown(category) {
    const sel = document.getElementById('gameSelect');
    if(!sel) return;

    // Select which list to use based on category
    const list = (category === 'major') ? MAJOR_GAMES : DIGIT_GAMES;
    
    let html = ''; 
    list.forEach(g => html += `<option value="${g.code}">${g.name}</option>`);
    sel.innerHTML = html;
}

function applyFilterAndRender(allData) {
    const game = document.getElementById('gameSelect')?.value;
    const fMonth = parseInt(document.getElementById('fromMonthSelect')?.value);
    const fYear = parseInt(document.getElementById('fromYearSelect')?.value);
    const tMonth = parseInt(document.getElementById('toMonthSelect')?.value);
    const tYear = parseInt(document.getElementById('toYearSelect')?.value);

    const start = new Date(fYear, fMonth, 1);
    const end = new Date(tYear, tMonth + 1, 0);
    end.setHours(23, 59, 59, 999);

 filteredData = allData.filter(item => {
        let matchGame = (game === 'all' || item.game.includes(game));
        const itemDate = parseDateSafe(item.date);
        return matchGame && itemDate >= start && itemDate <= end;
    });

    updateStats(filteredData);
    renderTable();
    
    // PRIORITY 3: Scroll to results on mobile
    const tableBody = document.getElementById('tableBody');
    if (tableBody) {
        tableBody.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

function updateStats(data) {
    const draws = data.length;
    const winners = data.reduce((a, c) => a + (parseInt(String(c.winners).replace(/,/g, '')) || 0), 0);
    const prize = data.reduce((a, c) => a + (parseFloat(String(c.prize).replace(/[^0-9.-]+/g, "")) || 0), 0);
    const prizeFormatted = "₱ " + prize.toLocaleString('en-US', {minimumFractionDigits: 2});
    
    const mobile = document.getElementById('statMobileReadout');
    if(mobile) {
        mobile.classList.remove('hidden');
        mobile.innerHTML = `There are <span class="font-bold text-white">${draws.toLocaleString()}</span> <span class="text-blue-400">Draws</span>, <span class="font-bold text-white">${winners.toLocaleString()}</span> <span class="text-blue-400">Winners</span> for a <span class="text-blue-400">Total</span> of <span class="font-bold text-white">${prizeFormatted}</span>`;
    }
}

function renderTable() {
    const tbody = document.getElementById('tableBody');
    if (!tbody) return;

    if (filteredData.length === 0) {
        tbody.innerHTML = '<tr><td colspan="12" class="p-8 text-center text-slate-500">No results found.</td></tr>';
        document.getElementById('resultCountBadge').textContent = "Found 0 draws";
        return;
    }

    document.getElementById('resultCountBadge').textContent = `${filteredData.length} results`;
    document.getElementById('pageInfo').textContent = `Page ${currentPage} / ${Math.ceil(filteredData.length / rowsPerPage)}`;

    const start = (currentPage - 1) * rowsPerPage;
    const slice = filteredData.slice(start, start + rowsPerPage);

    const gameSel = document.getElementById('gameSelect');
    if (gameSel) document.getElementById('headerGameLabel').textContent = gameSel.options[gameSel.selectedIndex].text;

    tbody.innerHTML = slice.map(item => {
        let nums = item.combination.split(/[-\s]+/).filter(n => n);
        if (!isDigitGame(item.game)) nums.sort((a, b) => parseInt(a) - parseInt(b));

        const ballsHtml = nums.map(n => `<div class="w-8 h-8 md:w-7 md:h-7 flex items-center justify-center bg-gradient-to-br from-blue-400 to-blue-600 rounded-full text-white text-xs md:text-sm font-black shadow-lg">${n}</div>`).join('');
        
        let prizeShort = '';
        const prizeNum = parseFloat(String(item.prize).replace(/[^0-9.-]+/g, "")) || 0;
        if (prizeNum >= 1e9) prizeShort = (prizeNum/1e9).toFixed(1) + 'B';
        else if (prizeNum >= 1e6) prizeShort = (prizeNum/1e6).toFixed(1) + 'M';
        else if (prizeNum >= 1e3) prizeShort = (prizeNum/1e3).toFixed(0) + 'k';
        else prizeShort = prizeNum.toFixed(0);

        return `
        <div class="p-5 md:px-6 md:py-4 hover:bg-slate-700/30 transition-colors group">
            <div class="flex flex-col md:grid md:grid-cols-12 md:items-center gap-4">
                <div class="flex items-center justify-between md:contents">
                    <div class="md:col-span-2"><span class="text-sm font-bold text-slate-100">${item.date}</span></div>
                    <div class="flex items-center gap-3 md:hidden">
                        <span class="text-sm font-black text-yellow-400">₱${prizeShort}</span>
                        <span class="text-xs font-bold text-green-400">${item.winners} Wins</span>
                    </div>
                </div>
                <div class="md:col-span-5 flex justify-center py-2 md:py-0"><div class="flex gap-1.5 md:gap-2">${ballsHtml}</div></div>
                <div class="hidden md:contents">
                    <div class="md:col-span-3 text-right pr-4"><span class="text-sm font-black text-yellow-400">${item.prize}</span></div>
                    <div class="md:col-span-2 text-right"><span class="text-sm font-bold text-green-400">${item.winners}</span></div>
                </div>
            </div>
        </div>`;
    }).join('');
}