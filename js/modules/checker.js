// js/modules/checker.js
import { getMaxNum } from '../utils.js';

let currentLogic = 'exact';
let selectedNumbers = [];
let currentMaxNum = 58;
let currentMatches = []; 

export function initChecker(allData) {
    renderNumberGrid(58);

    // Sort Listener
    document.getElementById('resultSortSelect')?.addEventListener('change', () => {
        if (currentMatches.length > 0) sortAndRenderResults();
    });

    document.getElementById('checkGameSelect')?.addEventListener('change', (e) => {
        const game = e.target.value;
        selectedNumbers = [];
        currentMaxNum = getMaxNum(game);
        updateSelectedUI();
        renderNumberGrid(currentMaxNum);
    });

    document.getElementById('checkBtn')?.addEventListener('click', () => runChecker(allData));
    document.getElementById('clearSelectionBtn')?.addEventListener('click', clearSelection);

    const exactBtn = document.getElementById('logicExact');
    const partialBtn = document.getElementById('logicPartial');

    exactBtn?.addEventListener('click', () => {
        currentLogic = 'exact';
        exactBtn.classList.add('bg-yellow-500', 'text-slate-900');
        exactBtn.classList.remove('text-slate-400');
        partialBtn.classList.remove('bg-yellow-500', 'text-slate-900');
        partialBtn.classList.add('text-slate-400');
    });

    partialBtn?.addEventListener('click', () => {
        currentLogic = 'partial';
        partialBtn.classList.add('bg-yellow-500', 'text-slate-900');
        partialBtn.classList.remove('text-slate-400');
        exactBtn.classList.remove('bg-yellow-500', 'text-slate-900');
        exactBtn.classList.add('text-slate-400');
    });
}

function renderNumberGrid(maxNum) {
    const grid = document.getElementById('numberGrid');
    if (!grid) return;

    let html = '';
    const start = (maxNum === 9) ? 0 : 1;

    for (let i = start; i <= maxNum; i++) {
        let val = (maxNum === 9) ? String(i) : (i < 10 ? '0' + i : String(i));
        const count = selectedNumbers.filter(n => n === val).length;
        
        let classes = 'bg-slate-700 text-slate-300 hover:bg-slate-600';
        if (count > 0) classes = 'bg-yellow-500 text-slate-900 scale-105 ring-2 ring-yellow-300';

        const badgeHtml = (count > 1) 
            ? `<span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-md">${count}</span>` 
            : '';

        html += `
            <button onclick="window.toggleNumber('${val}')" class="number-ball relative w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold transition-all transform ${classes}">
                ${val}
                ${badgeHtml}
            </button>`;
    }
    grid.innerHTML = html;
}

window.toggleNumber = function(num) {
    const required = getRequiredCount();
    const currentCount = selectedNumbers.filter(n => n === num).length;

    if (currentCount === 0) {
        if (selectedNumbers.length < required) selectedNumbers.push(num);
    } else if (currentCount < required) {
        if (selectedNumbers.length < required) selectedNumbers.push(num);
        else selectedNumbers = selectedNumbers.filter(n => n !== num);
    } else {
        selectedNumbers = selectedNumbers.filter(n => n !== num);
    }

    renderNumberGrid(currentMaxNum);
    updateSelectedUI();
};

function clearSelection() { 
    selectedNumbers = []; 
    renderNumberGrid(currentMaxNum); 
    updateSelectedUI(); 
}

function updateSelectedUI() { 
    const el = document.getElementById('selectedCount'); 
    if(el) el.textContent = selectedNumbers.length; 

    const displayEl = document.getElementById('selectedNumbersDisplay');
    if (displayEl) {
        if (selectedNumbers.length === 0) {
            displayEl.textContent = "--";
            displayEl.classList.remove('text-green-400');
            displayEl.classList.add('text-yellow-400');
        } else {
            displayEl.textContent = selectedNumbers.join(' - ');
            
            const required = getRequiredCount();
            if (selectedNumbers.length === required) {
                displayEl.classList.remove('text-yellow-400');
                displayEl.classList.add('text-green-400');
            } else {
                displayEl.classList.remove('text-green-400');
                displayEl.classList.add('text-yellow-400');
            }
        }
    }
}

function getRequiredCount() {
    const game = document.getElementById('checkGameSelect')?.value;
    if (game.includes('6D')) return 6;
    if (game.includes('4D')) return 4;
    if (game.includes('3D')) return 3;
    if (game.includes('2D')) return 2;
    return 6;
}

// --- CUSTOM MODAL FUNCTION ---
function showAlertModal(message) {
    // 1. Remove existing modal if present
    const existing = document.getElementById('customAlertModal');
    if (existing) existing.remove();

    // 2. Create Modal HTML
    const modalHtml = `
    <div id="customAlertModal" onclick="this.remove()" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); backdrop-filter: blur(4px); display: flex; align-items: center; justify-content: center; z-index: 9999; cursor: pointer;">
        <div onclick="event.stopPropagation()" style="background: #0f172a; padding: 2rem; border-radius: 1rem; border: 1px solid #334155; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5); transform: scale(0.9); animation: popIn 0.2s ease-out forwards;">
            <div style="width: 50px; height: 50px; background: rgba(59, 130, 246, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-white mb-2">Notice</h3>
            <p class="text-slate-400 text-sm">${message}</p>
            <button onclick="document.getElementById('customAlertModal').remove()" class="mt-6 w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-lg transition-colors text-sm">
                Got it
            </button>
        </div>
    </div>`;

    // 3. Inject to body
    document.body.insertAdjacentHTML('beforeend', modalHtml);

    // 4. Add simple animation keyframes if not exists
    if (!document.getElementById('customModalStyles')) {
        const style = document.createElement('style');
        style.id = 'customModalStyles';
        style.innerHTML = `@keyframes popIn { to { transform: scale(1); opacity: 1; } }`;
        document.head.appendChild(style);
    }
}

function runChecker(allData) {
    const game = document.getElementById('checkGameSelect')?.value;
    const required = getRequiredCount();

    if (selectedNumbers.length !== required) return showAlertModal(`Please select ${required} numbers.`);

    const results = allData.filter(d => d.game.includes(game));
    
    // 1. Find Matches
    if (currentLogic === 'exact') currentMatches = findExactMatches(results, selectedNumbers);
    else currentMatches = findPartialMatches(results, selectedNumbers, game);

    // 2. Decision Logic
    if (currentMatches.length === 0) {
        // Use custom modal instead of alert()
        showAlertModal("No match found");
        
        // Clear UI list
        const list = document.getElementById('checkResultsList');
        if(list) list.innerHTML = '';
        const badge = document.getElementById('checkCountBadge');
        if(badge) badge.textContent = '0 found';
        
        return; // EXIT - DO NOT SCROLL
    }

    // 3. CASE: MATCHES FOUND -> Render and Scroll
    sortAndRenderResults();
    document.getElementById('checkResultsList')?.scrollIntoView({ behavior: 'smooth' });
}

function sortAndRenderResults() {
    const sortValue = document.getElementById('resultSortSelect')?.value || 'date';

    currentMatches.sort((a, b) => {
        if (sortValue === 'date') return new Date(b.date) - new Date(a.date);
        if (sortValue === 'prize') return parsePrize(b.prize) - parsePrize(a.prize);
        if (sortValue === 'winners') return parseInt(b.winners) - parseInt(a.winners);
        if (sortValue === 'matches') return (b.matchCount || 0) - (a.matchCount || 0);
        return 0;
    });

    renderResults(currentMatches, selectedNumbers);
}

function parsePrize(str) {
    if (!str) return 0;
    return parseFloat(String(str).replace(/[^0-9.-]+/g, "")) || 0;
}

function findExactMatches(data, userNums) {
    const game = document.getElementById('checkGameSelect')?.value;
    const isDigit = ['2D', '3D', '4D', '6D'].some(t => game.includes(t));

    let target = [...userNums];
    if (!isDigit) target.sort();

    return data.filter(d => { 
        let n = String(d.combination).split(/[-\s]+/).filter(n=>n);
        if (!isDigit) n.sort();
        return JSON.stringify(n) === JSON.stringify(target); 
    });
}

function findPartialMatches(data, userNums, game) {
    const isDigit = ['2D', '3D', '4D', '6D'].some(t => game.includes(t));

    return data.filter(d => {
        const drawNums = String(d.combination).split(/[-\s]+/).filter(n => n);
        
        // DIGIT GAMES: Positional Consecutive Streak
        if (isDigit) {
            let maxStreak = 0;
            let currentStreak = 0;
            
            for (let i = 0; i < drawNums.length; i++) {
                if (userNums[i] && drawNums[i] === userNums[i]) {
                    currentStreak++;
                    if (currentStreak > maxStreak) maxStreak = currentStreak;
                } else {
                    currentStreak = 0;
                }
            }

            if (maxStreak >= 2) { 
                d.matchCount = maxStreak; 
                return true; 
            }
            return false;
        } 
        
        // MAJOR GAMES: Standard Match Count
        else {
            let matchCount = 0; 
            userNums.forEach(un => { if (drawNums.includes(un)) matchCount++; });
            if (matchCount >= 3) { d.matchCount = matchCount; return true; } 
            return false;
        }
    });
}

function renderResults(matches, userNums) {
    const list = document.getElementById('checkResultsList');
    const badge = document.getElementById('checkCountBadge');
    const game = document.getElementById('checkGameSelect')?.value;
    const isDigit = ['2D', '3D', '4D', '6D'].some(t => game.includes(t));

    if (badge) badge.textContent = `${matches.length} found`;
    if (matches.length === 0) { list.innerHTML = '<p class="text-slate-500 text-xs text-center py-8">No matches found.</p>'; return; }
    
    list.innerHTML = matches.map(m => {
        const drawNums = String(m.combination).split(/[-\s]+/).filter(n => n);
        const isExact = (m.matchCount === undefined);
        
        const ballsHtml = drawNums.map((n, idx) => {
            let isMatch = false;
            if (isDigit) isMatch = (userNums[idx] === n);
            else isMatch = userNums.includes(n);

            const color = isMatch ? 'bg-gradient-to-br from-green-400 to-green-600 text-white' : 'bg-slate-700 text-slate-300';
            return `<div class="w-8 h-8 flex items-center justify-center ${color} rounded-full text-xs font-bold shadow">${n}</div>`;
        }).join('');

        const lbl = isExact 
            ? '<span class="px-2 py-0.5 rounded bg-green-500/20 text-green-400 text-[9px] font-bold uppercase">Exact Match</span>' 
            : (isDigit 
                ? `<span class="px-2 py-0.5 rounded bg-yellow-500/20 text-yellow-400 text-[9px] font-bold uppercase">Streak: ${m.matchCount}</span>` 
                : `<span class="px-2 py-0.5 rounded bg-yellow-500/20 text-yellow-400 text-[9px] font-bold uppercase">${m.matchCount} Matches</span>`);

        return `<div class="p-5 md:px-6 md:py-4 hover:bg-slate-700/30 transition-colors">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-xs font-bold text-slate-300">${m.date}</span> ${lbl}
                    </div>
                    <div class="flex gap-1.5">${ballsHtml}</div>
                </div>
                <div class="text-right">
                    <div class="text-sm font-black text-yellow-400">${m.prize}</div>
                    <div class="text-[10px] text-slate-500">${m.winners} Winners</div>
                </div>
            </div>
        </div>`;
    }).join('');
}