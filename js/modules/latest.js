// js/modules/latest.js

import { createCard, createGroupedCard } from './cards.js';
import { getHotTrendingInsight, getColdOverdueInsight, getSukiPairsInsight, getDayBiasInsight } from './insights.js';
// REMOVED ?v=u2 from this line:
import { parseDateSafe } from '../utils.js'; 

console.log("✅ Latest Logic Loaded");

/**
 * Merge temp 2D/3D data (from lottopcso.com early scrape) into production data.
 * Temp entries replace production entries for the SAME game+date combo ONLY IF
 * the temp entry is NEWER or the same date. Production data is never mutated.
 * 
 * @param {Array} prodData - Production data from api.php
 * @param {Array} tempData - Temp 2D/3D data from results_temp_2d_3d.json
 * @returns {Array} Merged data (prod + temp overlays)
 */
function mergeTempDigitData(prodData, tempData) {
    if (!tempData || tempData.length === 0) return prodData;

    const merged = [...prodData];

    tempData.forEach(temp => {
        if (!temp.game || !temp.date) return;

        // Find matching production entry (same game + date)
        const idx = merged.findIndex(p => p.game === temp.game && p.date === temp.date);
        if (idx !== -1) {
            // Replace production entry with temp (same date, possibly earlier result)
            merged[idx] = temp;
        } else {
            // No production entry for this game+date yet — add it
            merged.push(temp);
        }
    });

    // Re-sort by date descending
    merged.sort((a, b) => parseDateSafe(b.date) - parseDateSafe(a.date));

    return merged;
}

export async function renderLatestCards(allData, majorContainer, digitContainer, timestampEl) {
    if (!allData || allData.length === 0) return;

    // ==========================================
    // FETCH TEMP 2D/3D DATA AND MERGE
    // (early results from lottopcso.com)
    // ==========================================
    try {
        const { loadTempDigitData } = await import('../api.js');
        const tempData = await loadTempDigitData();
        if (tempData.length > 0) {
            allData = mergeTempDigitData(allData, tempData);
            console.log(`🔄 Merged ${tempData.length} temp 2D/3D entries`);
        }
    } catch (e) {
        console.warn("Temp data merge skipped:", e.message);
    }

    // 1. MAJOR GAMES
    const majorGames = ['6/58', '6/55', '6/49', '6/45', '6/42'];
    const latestMajor = [];
    majorGames.forEach(code => {
        const found = allData.find(d => d.game.includes(code));
        if (found) latestMajor.push(found);
    });

    // 2. DIGIT GAMES
    const latestDigit = [];
    const processedCodes = [];

    const processGroup = (code) => {
        if (processedCodes.includes(code)) return;
        const groupResults = allData.filter(d => d.game.includes(code));
        if (groupResults.length > 0) {
            groupResults.sort((a, b) => parseDateSafe(b.date) - parseDateSafe(a.date));
            const latestDate = groupResults[0].date;
            const todayDraws = groupResults.filter(d => d.date === latestDate);
            latestDigit.push({
                type: 'group',
                gameCode: code,
                gameName: code === '3D' ? '3D Lotto' : '2D Lotto',
                date: latestDate,
                draws: todayDraws
            });
            processedCodes.push(code);
        }
    };

    processGroup('2D');
    processGroup('3D');

    let found = allData.find(d => d.game.includes('4D'));
    if (found) latestDigit.push({ type: 'single', data: found });

    found = allData.find(d => d.game.includes('6D'));
    if (found) latestDigit.push({ type: 'single', data: found });

    // 3. RENDER
    if (majorContainer) majorContainer.innerHTML = latestMajor.map(d => createCard(d)).join('');
    
    if (digitContainer) {
        digitContainer.innerHTML = latestDigit.map(item => {
            if (item.type === 'group') return createGroupedCard(item);
            return createCard(item.data);
        }).join('');
    }
}

export function renderHomeInsights(allData, gameType = "6/58") {
    if (!allData || allData.length === 0) return;

    const gameData = allData.filter(d => d.game.includes(gameType));
    if (gameData.length === 0) {
        const textEl = document.getElementById('dailyAnalysisText');
        if(textEl) textEl.innerHTML = "No data available.";
        return;
    }

    const now = new Date();
    const thirtyDaysAgo = new Date().setDate(now.getDate() - 30);
    
    let recentData = gameData.filter(d => parseDateSafe(d.date) >= thirtyDaysAgo);
    let isUsingFallback = false;

    if (recentData.length < 50) {
        recentData = gameData;
        isUsingFallback = true;
    }

    const freq = {};
    recentData.forEach(d => {
        String(d.combination).split(/[-\s]+/).forEach(n => {
            const num = parseInt(n);
            if (!isNaN(num)) freq[num] || (freq[num] = 0);
            freq[num]++;
        });
    });

    const sorted = Object.entries(freq).sort((a, b) => b[1] - a[1]);

    const hotContainer = document.getElementById('homeHotNumbers');
    if (hotContainer) {
        const topHot = sorted.slice(0, 5);
        hotContainer.innerHTML = topHot.map(([num, count]) => `
            <div class="flex flex-col items-center gap-1">
                <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-br from-red-400 to-red-600 rounded-full text-white font-bold shadow-lg">${num}</div>
                <span class="text-[10px] text-slate-400">${count}x</span>
            </div>
        `).join('');
    }

    const coldContainer = document.getElementById('homeColdNumbers');
    if (coldContainer) {
        const topCold = sorted.slice(-5).reverse();
        coldContainer.innerHTML = topCold.map(([num, count]) => `
            <div class="flex flex-col items-center gap-1">
                <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-br from-cyan-400 to-blue-600 rounded-full text-white font-bold shadow-lg">${num}</div>
                <span class="text-[10px] text-slate-400">${count}x</span>
            </div>
        `).join('');
    }
    
    // ... (Rest of insight logic remains the same)
    const hotDesc = document.getElementById('homeHotDesc');
    const coldDesc = document.getElementById('homeColdDesc');
    if (isUsingFallback) {
        if(hotDesc) hotDesc.textContent = "Most frequent (All Time)";
        if(coldDesc) coldDesc.textContent = "Overdue (All Time)";
    } else {
        if(hotDesc) hotDesc.textContent = "Most frequent (Last 30 Days)";
        if(coldDesc) coldDesc.textContent = "Haven't appeared in 30 days";
    }
    
    const insights = [
        getHotTrendingInsight(recentData),
        getColdOverdueInsight(recentData),
        getSukiPairsInsight(recentData),
        getDayBiasInsight(recentData)
    ].filter(i => i !== null);

    let selectedInsight = insights[Math.floor(Math.random() * insights.length)];
    const textEl = document.getElementById('dailyAnalysisText');
    if (textEl && selectedInsight) {
        textEl.innerHTML = `
            <div class="flex flex-col items-center justify-center gap-1">
                <div class="flex items-center gap-2 mb-1">
                    <span class="text-xl">${selectedInsight.icon}</span>
                    <span class="text-xs font-bold text-white uppercase tracking-wide">${selectedInsight.label}</span>
                </div>
                <p class="text-sm text-slate-300">${selectedInsight.text}</p>
            </div>`;
    }
}
