// js/modules/checker.js
import { getMaxNum } from '../utils.js';

let currentLogic = 'exact';
let selectedNumbers = [];
let currentMaxNum = 58;
let currentMode = 'normal'; // 'normal', 'double', 'triple'

export function initChecker(allData) {
    renderNumberGrid(58);

    // Game Change Listener
    document.getElementById('checkGameSelect')?.addEventListener('change', (e) => {
        const game = e.target.value;
        selectedNumbers = [];
        currentMode = 'normal'; // Reset mode
        currentMaxNum = getMaxNum(game);
        
        updateSelectionModeUI(game); // Show/Hide mode buttons
        updateSelectedUI();
        renderNumberGrid(currentMaxNum);
    });

    // Trigger initial UI setup
    updateSelectionModeUI(document.getElementById('checkGameSelect')?.value);

    document.getElementById('checkBtn')?.addEventListener('click', () => runChecker(allData));
    document.getElementById('clearSelectionBtn')?.addEventListener('click', clearSelection);

    // Logic Buttons (Exact/Partial)
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

// NEW: Handle Selection Mode UI
function updateSelectionModeUI(game) {
    const container = document.getElementById('selectionModeContainer');
    const wrapper = document.getElementById('modeButtons');
    if (!container || !wrapper) return;

    // Default: Hide for Major games
    container.classList.add('hidden');

    if (game === '2D') {
        container.classList.remove('hidden');
        wrapper.innerHTML = `
            <button data-mode="normal" class="mode-btn active bg-yellow-500 text-slate-900 font-bold text-xs py-2 rounded-lg">Normal</button>
            <button data-mode="double" class="mode-btn bg-slate-700 text-slate-300 font-bold text-xs py-2 rounded-lg">Doubled</button>
        `;
    } else if (game === '3D') {
        container.classList.remove('hidden');
        wrapper.innerHTML = `
            <button data-mode="normal" class="mode-btn active bg-yellow-500 text-slate-900 font-bold text-xs py-2 rounded-lg">Normal</button>
            <button data-mode="double" class="mode-btn bg-slate-700 text-slate-300 font-bold text-xs py-2 rounded-lg">Doubled</button>
            <button data-mode="triple" class="mode-btn bg-slate-700 text-slate-300 font-bold text-xs py-2 rounded-lg">Tripled</button>
        `;
    }

    // Add click listeners to new buttons
    wrapper.querySelectorAll('.mode-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            // UI Update
            wrapper.querySelectorAll('.mode-btn').forEach(b => {
                b.classList.remove('bg-yellow-500', 'text-slate-900', 'active');
                b.classList.add('bg-slate-700', 'text-slate-300');
            });
            btn.classList.add('bg-yellow-500', 'text-slate-900', 'active');
            btn.classList.remove('bg-slate-700', 'text-slate-300');

            // Logic Update
            currentMode = btn.dataset.mode;
            selectedNumbers = []; // Clear selection on mode change
            updateSelectedUI();
            renderNumberGrid(currentMaxNum);
        });
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

        // Show badge if count > 1
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
    const game = document.getElementById('checkGameSelect')?.value;

    // --- MODE LOGIC ---

    // 1. NORMAL MODE (Distinct Numbers)
    if (currentMode === 'normal') {
        const idx = selectedNumbers.indexOf(num);
        if (idx > -1) {
            selectedNumbers.splice(idx, 1); // Remove if exists
        } else {
            if (selectedNumbers.length < required) selectedNumbers.push(num);
        }
    }
    
    // 2. DOUBLE MODE
    else if (currentMode === 'double') {
        // 2D Doubled: Click any number, it fills both slots (e.g., 1-1)
        if (game === '2D') {
            selectedNumbers = [num, num]; 
        } 
        // 3D Doubled: First click = Pair, Second click = Single (e.g., 1-1-2)
        else if (game === '3D') {
            // Check if we already have a pair of this number
            const count = selectedNumbers.filter(n => n === num).length;
            
            // If clicking same number, reset
            if (count >= 2) {
                selectedNumbers = [];
            } 
            // If clicking the 'single' number to change it
            else if (selectedNumbers.length === 3 && selectedNumbers[0] !== num && selectedNumbers[2] === num) {
                 // it's the single, remove it
                 selectedNumbers.pop();
            }
            // If we have a pair, add single
            else if (selectedNumbers.length === 2) {
                // Prevent adding same number as pair (user might want triple? No, this is double mode)
                // Allow distinct
                if (selectedNumbers[0] !== num) {
                    selectedNumbers.push(num);
                } else {
                    // Clicked the pair number again, maybe remove pair?
                    selectedNumbers = [];
                }
            }
            // If empty or 1 item, set pair
            else {
                selectedNumbers = [num, num];
            }
        }
    }

    // 3. TRIPLE MODE (3D Only)
    else if (currentMode === 'triple') {
        selectedNumbers = [num, num, num];
    }

    // --- END MODE LOGIC ---

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
}

function getRequiredCount() {
    const game = document.getElementById('checkGameSelect')?.value;
    if (game.includes('6D')) return 6;
    if (game.includes('4D')) return 4;
    if (game.includes('3D')) return 3;
    if (game.includes('2D')) return 2;
    return 6;
}

function runChecker(allData) {
    const game = document.getElementById('checkGameSelect')?.value;
    const required = getRequiredCount();

    if (selectedNumbers.length !== required) return alert(`Please select ${required} numbers.`);

    const results = allData.filter(d => d.game.includes(game));
    let matches = [];

    if (currentLogic === 'exact') matches = findExactMatches(results, selectedNumbers);
    else matches = findPartialMatches(results, selectedNumbers);

    renderResults(matches, selectedNumbers);
    document.getElementById('checkResultsList')?.scrollIntoView({ behavior: 'smooth' });
}

function findExactMatches(data, userNums) {
    const sortedUser = [...userNums].sort();
    return data.filter(d => { 
        let n = String(d.combination).split(/[-\s]+/).filter(n=>n).sort(); 
        return JSON.stringify(n) === JSON.stringify(sortedUser); 
    });
}

function findPartialMatches(data, userNums) {
    return data.filter(d => {
        let drawNums = String(d.combination).split(/[-\s]+/).filter(n => n);
        let matchCount = 0; 
        userNums.forEach(un => { if (drawNums.includes(un)) matchCount++; });
        if (matchCount >= 3) { d.matchCount = matchCount; return true; } 
        return false;
    }).sort((a, b) => b.matchCount - a.matchCount);
}

function renderResults(matches, userNums) {
    const list = document.getElementById('checkResultsList');
    const badge = document.getElementById('checkCountBadge');
    if (badge) badge.textContent = `${matches.length} matches found`;
    if (matches.length === 0) { list.innerHTML = '<p class="text-slate-500 text-xs text-center py-8">No matches found.</p>'; return; }
    
    list.innerHTML = matches.map(m => {
        const drawNums = String(m.combination).split(/[-\s]+/).filter(n => n);
        const isExact = (m.matchCount === undefined || m.matchCount === 6);
        const ballsHtml = drawNums.map(n => {
            const isMatch = userNums.includes(n);
            const color = isMatch ? 'bg-gradient-to-br from-green-400 to-green-600 text-white' : 'bg-slate-700 text-slate-300';
            return `<div class="w-8 h-8 flex items-center justify-center ${color} rounded-full text-xs font-bold shadow">${n}</div>`;
        }).join('');
        const lbl = isExact ? '<span class="px-2 py-0.5 rounded bg-green-500/20 text-green-400 text-[9px] font-bold uppercase">Exact Match</span>' : `<span class="px-2 py-0.5 rounded bg-yellow-500/20 text-yellow-400 text-[9px] font-bold uppercase">${m.matchCount} Matches</span>`;
        return `<div class="p-5 md:px-6 md:py-4 hover:bg-slate-700/30 transition-colors"><div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4"><div class="flex-1"><div class="flex items-center gap-2 mb-2"><span class="text-xs font-bold text-slate-300">${m.date}</span> ${lbl}</div><div class="flex gap-1.5">${ballsHtml}</div></div><div class="text-right"><div class="text-sm font-black text-yellow-400">${m.prize}</div><div class="text-[10px] text-slate-500">${m.winners} Winners</div></div></div></div>`;
    }).join('');
}