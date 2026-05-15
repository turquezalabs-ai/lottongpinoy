// js/modules/alaga.js

const STORAGE_KEY = 'myAlagaList';

export function initAlaga(allData) {
    console.log("Initializing Alaga...");
    renderAlagaList(allData);
    setupForm(allData);
}

function setupForm(allData) {
    const saveBtn = document.getElementById('saveAlagaBtn');
    
    saveBtn?.addEventListener('click', () => {
        const inputs = document.querySelectorAll('.alaga-input');
        const numbers = [];
        let valid = true;

        inputs.forEach(input => {
            const val = parseInt(input.value);
            if (val >= 1 && val <= 58) {
                numbers.push(val);
            } else {
                valid = false;
            }
        });

        if (!valid || numbers.length !== 6) {
            alert("Please enter valid numbers (1-58) for all 6 fields.");
            return;
        }

        // Save
        const list = getAlagaList();
        list.push({
            id: Date.now(),
            numbers: numbers,
            createdAt: new Date().toISOString()
        });
        localStorage.setItem(STORAGE_KEY, JSON.stringify(list));

        // Clear form
        inputs.forEach(input => input.value = '');

        // Refresh UI
        renderAlagaList(allData);
    });
}

export function renderAlagaList(allData) {
    const container = document.getElementById('alagaListContainer');
    if (!container) return;

    const list = getAlagaList();
    
    if (list.length === 0) {
        container.innerHTML = '<p class="text-slate-500 text-sm text-center py-8">No numbers saved yet. Add your "Alaga" above!</p>';
        return;
    }

    // Get latest result for checking
    let winningNums = [];
    if (allData && allData.length > 0) {
        const latest58 = allData.find(d => d.game.includes("6/58"));
        if (latest58) {
            winningNums = latest58.combination.split(/[-\s]+/).map(Number);
        }
    }

    container.innerHTML = list.map(entry => {
        // Calculate matches
        let matchCount = 0;
        entry.numbers.forEach(n => {
            if (winningNums.includes(Number(n))) matchCount++;
        });

        // Status Logic
        let statusHtml = '';
        if (matchCount === 6) {
            statusHtml = `<span class="text-xs font-bold text-yellow-400 animate-pulse">🎉 JACKPOT!</span>`;
        } else if (matchCount >= 3) {
            statusHtml = `<span class="text-xs font-bold text-green-400">✅ ${matchCount} Matches!</span>`;
        } else if (matchCount > 0) {
            statusHtml = `<span class="text-xs font-bold text-blue-400">${matchCount} Match</span>`;
        } else {
            statusHtml = `<span class="text-xs font-bold text-slate-500">No Match</span>`;
        }

        const numBalls = entry.numbers.map(n => 
            `<div class="w-8 h-8 rounded-full bg-gradient-to-br from-pink-400 to-pink-600 text-white text-xs font-bold flex items-center justify-center shadow-lg">${n}</div>`
        ).join('');

        return `
            <div class="bg-slate-800 rounded-xl border border-slate-700 p-4 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div>
                    <div class="flex gap-1 mb-2">${numBalls}</div>
                    <div class="text-[10px] text-slate-500 uppercase">Saved ${new Date(entry.createdAt).toLocaleDateString()}</div>
                </div>
                
                <div class="flex items-center gap-4 w-full md:w-auto justify-between md:justify-end">
                    ${statusHtml}
                    <button onclick="window.deleteAlaga(${entry.id})" class="text-red-400 hover:text-red-300 text-xs font-bold ml-2">Delete</button>
                </div>
            </div>
        `;
    }).join('');
}

function getAlagaList() {
    const data = localStorage.getItem(STORAGE_KEY);
    return data ? JSON.parse(data) : [];
}

// Global Delete Function (Quick access from HTML)
window.deleteAlaga = function(id) {
    let list = getAlagaList();
    list = list.filter(item => item.id !== id);
    localStorage.setItem(STORAGE_KEY, JSON.stringify(list));
    
    // Refresh list using global data
    if (window.allData) renderAlagaList(window.allData);
};