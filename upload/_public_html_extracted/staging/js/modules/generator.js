// js/modules/generator.js

import { getMaxNum, isDigitGame } from '../utils.js';

console.log("✅ Generator Logic Loaded");

let genHistory = [];

export function initGenerator(allData) {
    console.log("✅ Generator Init Running");
    
    const genBtn = document.getElementById('generateBtn');
    if (genBtn) {
        genBtn.addEventListener('click', () => runGenerator(allData));
    }

    const printBtn = document.getElementById('printBtn');
    if (printBtn) {
        printBtn.addEventListener('click', () => window.print());
    }

    const shareBtn = document.getElementById('shareBtn');
    if (shareBtn) {
        shareBtn.addEventListener('click', shareImage);
    }

    const saved = localStorage.getItem('genHistory');
    if (saved) genHistory = JSON.parse(saved);
    renderHistory();

    // Method Radio Buttons
    document.querySelectorAll('input[name="genMethod"]').forEach(radio => {
        radio.addEventListener('change', (e) => {
            const container = document.getElementById('systemPicksContainer');
            if (e.target.value === 'system') container?.classList.remove('hidden');
            else container?.classList.add('hidden');
        });
    });

    // Game Change Logic
    const gameSelect = document.getElementById('genGameSelect');
    gameSelect?.addEventListener('change', (e) => {
        const game = e.target.value;
        const isDigit = isDigitGame(game);
        const systemWrapper = document.getElementById('systemMethodWrapper');
        const normalRadio = document.querySelector('input[name="genMethod"][value="normal"]');

        if (isDigit) {
            if (systemWrapper) systemWrapper.classList.add('hidden');
            if (normalRadio) normalRadio.checked = true;
        } else {
            if (systemWrapper) systemWrapper.classList.remove('hidden');
        }
    });

    document.getElementById('clearGenHistory')?.addEventListener('click', clearHistory);
    document.getElementById('exportTxtBtn')?.addEventListener('click', exportTxt);
    // Print button listener is already attached above, removed duplicate here
}

function runGenerator(allData) {
    const game = document.getElementById('genGameSelect')?.value;
    const method = document.querySelector('input[name="genMethod"]:checked')?.value;
    const systemPicks = parseInt(document.getElementById('systemPicksSelect')?.value || 7);
    const strategy = document.getElementById('genStrategySelect')?.value;

    let count = 6;
    const isDigit = isDigitGame(game);

    if (isDigit) count = parseInt(game.charAt(0));
    else if (method === 'system') count = systemPicks;

    const maxNum = getMaxNum(game);
    const result = generateSmartSet(allData, game, maxNum, count, strategy);

    renderOutput(result, game);
    addToHistory(game, result, strategy);
    
    // Scroll to output
    const outputEl = document.getElementById('genOutput');
    if (outputEl) {
        outputEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
}

function generateSmartSet(allData, game, maxNum, count, strategy) {
    const freq = {};
    for (let i = 0; i <= maxNum; i++) freq[i] = 0;

    const relevant = allData.filter(d => d.game.includes(game));
    const now = new Date();
    const sixMonthsAgo = new Date().setMonth(now.getMonth() - 6);

    relevant.forEach(d => {
        const dDate = new Date(d.date);
        if (dDate > sixMonthsAgo) {
            String(d.combination).split(/[-\s]+/).forEach(n => {
                const num = parseInt(n);
                if (freq[num] !== undefined) freq[num]++;
            });
        }
    });

    let sorted = Object.entries(freq).sort((a, b) => b[1] - a[1]);
    let pool = [];
    const hotCount = Math.floor(maxNum * 0.25);
    const hotNumbers = sorted.slice(0, hotCount).map(([n]) => parseInt(n));
    const coldNumbers = sorted.slice(hotCount).map(([n]) => parseInt(n));

    while (pool.length < count) {
        let pick;
        if (strategy === 'hot' && hotNumbers.length > 0) pick = hotNumbers.splice(Math.floor(Math.random() * hotNumbers.length), 1)[0];
        else if (strategy === 'cold' && coldNumbers.length > 0) pick = coldNumbers.splice(Math.floor(Math.random() * coldNumbers.length), 1)[0];
        else if (strategy === 'mix') {
            if (pool.length % 2 === 0 && hotNumbers.length > 0) pick = hotNumbers.splice(Math.floor(Math.random() * hotNumbers.length), 1)[0];
            else if (coldNumbers.length > 0) pick = coldNumbers.splice(Math.floor(Math.random() * coldNumbers.length), 1)[0];
        }
        else pick = Math.floor(Math.random() * (maxNum + 1));

        if (pick !== undefined && !pool.includes(pick)) pool.push(pick);
    }
    return pool.sort((a, b) => a - b);
}

function renderOutput(numbers, game) {
    const container = document.getElementById('genOutput');
    const label = document.getElementById('genGameLabel');
    
    // UPDATED: Target the wrapper div
    const actionBtns = document.getElementById('genActionBtns');
    const copyBtn = document.getElementById('copyBtn');

    if (label) label.textContent = document.getElementById('genGameSelect').options[document.getElementById('genGameSelect').selectedIndex].text;

    container.innerHTML = numbers.map(n => `
        <div class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-gradient-to-br from-green-400 to-green-600 rounded-full text-white text-lg md:text-xl font-black shadow-lg">${n}</div>
    `).join('');

    // UPDATED: Show the wrapper div
    if (actionBtns) {
        actionBtns.classList.remove('hidden');
    }

    if (copyBtn) {
        copyBtn.onclick = () => {
            navigator.clipboard.writeText(numbers.join('-'));
            copyBtn.textContent = "Copied!";
            setTimeout(() => copyBtn.textContent = "Copy Numbers", 1500);
        };
    }
}

// ==========================================
// SHARE IMAGE FUNCTION
// ==========================================
async function shareImage() {
    const output = document.getElementById('genCard');
    const btn = document.getElementById('shareBtn');
    
    if (!output) { alert("Output not found."); return; }
    if (typeof html2canvas === 'undefined') { alert("Sharing library not loaded. Please refresh."); return; }

    const originalText = btn.innerHTML;
    btn.innerHTML = "Processing...";
    btn.disabled = true;

    try {
        const canvas = await html2canvas(output, {
            backgroundColor: '#1e293b',
            scale: 2,
            useCORS: true,
            logging: false
        });

        const image = canvas.toDataURL('image/png');
        const link = document.createElement('a');
        link.download = 'Lottong-Pinoy-Numbers.png';
        link.href = image;
        link.click();

    } catch (error) {
        console.error("Sharing failed:", error);
        alert("Could not generate image.");
    }

    btn.innerHTML = originalText;
    btn.disabled = false;
}

// Helpers
function addToHistory(game, nums, strat) {
    genHistory.unshift({ game, nums, date: new Date().toLocaleString(), strategy: strat });
    if (genHistory.length > 12) genHistory.pop();
    localStorage.setItem('genHistory', JSON.stringify(genHistory));
    renderHistory();
}

function deleteHistoryItem(index) {
    genHistory.splice(index, 1);
    localStorage.setItem('genHistory', JSON.stringify(genHistory));
    renderHistory();
}
window.deleteHistoryItem = deleteHistoryItem;

function renderHistory() {
    const list = document.getElementById('genHistoryList');
    if (!list) return;

    if (genHistory.length === 0) {
        list.innerHTML = '<p class="text-slate-500 text-xs text-center py-4 col-span-full">🚀 No numbers yet? Generate your first lucky set above!</p>';
        return;
    }

    list.innerHTML = genHistory.map((entry, idx) => {
        let style = entry.strategy === 'hot' ? 'bg-red-500/20 text-red-400 border-red-500/30' :
            entry.strategy === 'cold' ? 'bg-cyan-500/20 text-cyan-400 border-cyan-500/30' :
                entry.strategy === 'mix' ? 'bg-purple-500/20 text-purple-400 border-purple-500/30' : 'bg-slate-500/20 text-slate-400 border-slate-500/30';
        let icon = entry.strategy === 'hot' ? '🔥' : entry.strategy === 'cold' ? '❄️' : entry.strategy === 'mix' ? '⚖️' : '🎲';

        return `
        <div class="bg-slate-900/50 border border-slate-700 rounded-xl p-4 relative group">
            <button onclick="deleteHistoryItem(${idx})" class="absolute top-2 right-2 text-slate-600 hover:text-red-400 text-sm font-bold opacity-0 group-hover:opacity-100">&times;</button>
            <div class="mb-2 flex justify-between items-center">
                <span class="text-sm font-bold text-white">${entry.game}</span>
                <span class="text-[9px] font-bold px-2 py-0.5 rounded border ${style} uppercase flex items-center gap-1"><span>${icon}</span> ${entry.strategy}</span>
            </div>
            <div class="text-[10px] text-slate-500 mb-2">${entry.date}</div>
            <div class="flex flex-wrap gap-1">${entry.nums.map(n => `<span class="bg-slate-800 border border-slate-700 rounded-full text-blue-400 text-xs font-bold w-7 h-7 flex items-center justify-center">${n}</span>`).join('')}</div>
        </div>`;
    }).join('');
}

function clearHistory() { if (confirm("Clear all?")) { genHistory = []; localStorage.removeItem('genHistory'); renderHistory(); } }
function exportTxt() { if (genHistory.length === 0) return alert("No data."); let t = "LUCKY NUMBERS\n\n"; genHistory.forEach(e => t += `[${e.date}] ${e.game} (${e.strategy}): ${e.nums.join('-')}\n`); const b = new Blob([t], { type: 'text/plain' }); const a = document.createElement('a'); a.href = URL.createObjectURL(b); a.download = 'lucky_numbers.txt'; a.click(); }
function printHistory() { document.getElementById('printHeader')?.classList.remove('hidden'); document.getElementById('printTimestamp').textContent = new Date().toLocaleString(); window.print(); document.getElementById('printHeader')?.classList.add('hidden'); }