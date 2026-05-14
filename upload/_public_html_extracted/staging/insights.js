// js/modules/cards.js

import { parseDateSafe, isDigitGame, getScheduleInfo, formatCompactNumber } from '../utils.js';
import { getRandomInsightText } from './insights.js';
import { GAME_RULES } from '../config.js'; 

// Helper: Smart Positioning for Tooltips (Mobile Friendly)
window.smartPosition = (e) => {
    const trigger = e.currentTarget;
    // If we already moved it to the body, don't try to grab it again
    let tooltip = trigger._activeTooltip || trigger.querySelector('.tooltip-box');
    
    if (!tooltip) return;

    // 1. Move the tooltip to the <body> to escape the card's overflow and transform!
    document.body.appendChild(tooltip);
    
    // Store a reference so we can find it later when closing
    trigger._activeTooltip = tooltip;

    // 2. Force display block to calculate dimensions
    tooltip.style.visibility = 'hidden';
    tooltip.style.display = 'block';
    tooltip.style.position = 'fixed'; 
    tooltip.style.left = '0px'; 
    tooltip.style.top = '0px'; 
    tooltip.style.bottom = 'auto'; 
    tooltip.style.transform = 'none';

    const triggerRect = trigger.getBoundingClientRect();
    const tooltipRect = tooltip.getBoundingClientRect();
    const padding = 10;
    const arrowSize = 8;

    // 3. Calculate Horizontal Position (Centered)
    let left = triggerRect.left + (triggerRect.width / 2) - (tooltipRect.width / 2);
    
    // Boundary Check: Left Edge
    if (left < padding) left = padding;
    // Boundary Check: Right Edge
    if (left + tooltipRect.width > window.innerWidth - padding) {
        left = window.innerWidth - tooltipRect.width - padding;
    }

    // 4. Calculate Vertical Position (Default Below)
    let top = triggerRect.bottom + arrowSize + 5;
    
    // Boundary Check: Bottom Edge (If no space below, flip to top)
    if (top + tooltipRect.height > window.innerHeight - padding) {
        top = triggerRect.top - tooltipRect.height - arrowSize - 5;
        tooltip.classList.add('tooltip--above'); 
    } else {
        tooltip.classList.remove('tooltip--above');
    }

    if (top < padding) top = padding;

    // 5. Apply Final Styles
    tooltip.style.left = `${left}px`;
    tooltip.style.top = `${top}px`;
    tooltip.style.visibility = 'visible';
    tooltip.style.opacity = '1';
    
    // Add a high z-index to ensure it sits above everything on the body
    tooltip.style.zIndex = '9999';
};

window.resetPosition = (e) => {
    const trigger = e.currentTarget;
    // Find the tooltip we moved to the body
    const tooltip = trigger._activeTooltip;
    
    if (tooltip) {
        // Clear styles so CSS can take over again when it goes back inside
        tooltip.style.display = '';
        tooltip.style.position = '';
        tooltip.style.left = '';
        tooltip.style.top = '';
        tooltip.style.bottom = ''; 
        tooltip.style.transform = ''; 
        tooltip.style.visibility = '';
        tooltip.style.opacity = ''; 
        tooltip.style.zIndex = '';
        tooltip.classList.remove('tooltip--above');
        
        // Move it back inside the wrapper so it's ready for next time
        trigger.appendChild(tooltip);
        trigger._activeTooltip = null;
    }
};

export function createCard(item) {
    // 1. FIX SORTING: Removed .sort()
    let nums = item.combination.split(/[-\s]+/).filter(n => n);

    const dateObj = parseDateSafe(item.date);
    const formattedDate = dateObj.toLocaleDateString('en-US', { weekday: 'short', month: 'short', day: '2-digit' }).replace(',', ' •');

    // 2. FIX PRIZE: Check config for fixed prize, otherwise use API value
    const rules = GAME_RULES[item.game];
    let prizeNum;
    
    if (rules && rules.fixedPrize) {
        prizeNum = rules.fixedPrize;
    } else {
        prizeNum = parseFloat(String(item.prize).replace(/[^0-9.-]+/g, "")) || 0;
    }

    // 3. FIX FORMAT: Use toLocaleString for 2D/3D
    let prizeDisplay;
    if (rules && rules.fixedPrize) {
        prizeDisplay = prizeNum.toLocaleString('en-US'); 
    } else {
        prizeDisplay = formatCompactNumber(prizeNum);
    }

    // 4. DYNAMIC TITLE LOGIC (Updated)
    let gameTitleHtml = '';
    if (item.game.includes('4D')) {
        gameTitleHtml = '<span class="text-blue-400">4D</span> Lotto';
    } else if (item.game.includes('6D')) {
        gameTitleHtml = '<span class="text-blue-400">6D</span> Lotto';
    } else {
        // Default for Major Games (e.g. 6/58)
        gameTitleHtml = item.game.replace(/(\d+\/\d+)/, '<span class="text-blue-400">$1</span>');
    }

    const maxNum = Math.max(...nums.map(Number));

    const ballsHtml = nums.map(n => {
        const isHot = (parseInt(n) === maxNum);
        
        if (isHot) {
            const tipText = getRandomInsightText(item.game);
            return `
            <div class="tooltip-wrapper" onmouseenter="window.smartPosition(event)" onmouseleave="window.resetPosition(event)">
                <div class="lotto-ball lotto-ball--hot">${n}</div>
                <div class="tooltip-box">
                    <div class="tooltip-content">
                        <span class="text-xl">💡</span>
                        <div>
                            <h4 class="text-blue-400 font-bold text-[10px] uppercase tracking-tight">Today's Pattern Tip</h4>
                            <p class="text-slate-300 text-[11px] leading-relaxed mt-1">${tipText}</p>
                        </div>
                    </div>
                    <div class="tooltip-arrow"></div>
                </div>
            </div>`;
        } else {
            return `<div class="lotto-ball">${n}</div>`;
        }
    }).join('');

    return `
    <div class="lotto-card">
      <div class="lotto-card__header">
        <div>
          <h3 class="text-lg font-black tracking-tight text-white">${gameTitleHtml}</h3>
          <span class="mt-1 inline-block text-[10px] font-bold tracking-widest text-blue-400 uppercase">${formattedDate}</span>
        </div>
        <div class="text-right">
          <span class="text-sm font-black tracking-tight text-yellow-500 italic">₱${prizeDisplay}</span>
          <p class="text-[9px] font-bold text-slate-500 uppercase">${item.winners} Winner(s)</p>
        </div>
      </div>
      <div class="lotto-card__body">
        ${ballsHtml}
      </div>
    </div>
    `;
}

export function createGroupedCard(group) {
    const dateObj = parseDateSafe(group.date);
    const formattedDate = dateObj.toLocaleDateString('en-US', { weekday: 'short', month: 'short', day: '2-digit' }).replace(',', ' •');
    
    const drawsWithMeta = group.draws.map(d => {
        return { ...d, schedule: getScheduleInfo(d.game) };
    });
    drawsWithMeta.sort((a, b) => a.schedule.order - b.schedule.order);

    // FIX PRIZE for Grouped Card
    const rules = GAME_RULES[group.gameCode];
    let prizeNum;
    
    if (rules && rules.fixedPrize) {
        prizeNum = rules.fixedPrize;
    } else {
        prizeNum = parseFloat(String(group.draws[0].prize).replace(/[^0-9.-]+/g, "")) || 0;
    }

    let prizeDisplay;
    if (rules && rules.fixedPrize) {
        prizeDisplay = prizeNum.toLocaleString('en-US');
    } else {
        prizeDisplay = formatCompactNumber(prizeNum);
    }

    // DYNAMIC LABEL LOGIC (Updated)
    let gameLabelHtml = '';
    if (group.gameCode === '2D') {
        gameLabelHtml = '<span class="text-blue-400">2D</span> EZ2 Lotto';
    } else if (group.gameCode === '3D') {
        gameLabelHtml = '<span class="text-blue-400">3D</span> Swertres Lotto';
    } else {
        gameLabelHtml = `<span class="text-blue-400">${group.gameCode}</span> Lotto`;
    }

    const rowsHtml = drawsWithMeta.map(d => {
        let nums = d.combination.split(/[-\s]+/).filter(n => n);
        const maxNum = Math.max(...nums.map(Number));
        
        const ballsHtml = nums.map(n => {
            const isHot = (parseInt(n) === maxNum);
            if (isHot) {
                const tipText = getRandomInsightText(d.game);
                return `
                <div class="tooltip-wrapper" onmouseenter="window.smartPosition(event)" onmouseleave="window.resetPosition(event)">
                    <div class="lotto-ball lotto-ball--hot">${n}</div>
                    <div class="tooltip-box">
                        <div class="tooltip-content">
                            <span class="text-xl">💡</span>
                            <div>
                                <h4 class="text-blue-400 font-bold text-[10px] uppercase tracking-tight">Today's Pattern Tip</h4>
                                <p class="text-slate-300 text-[11px] leading-relaxed mt-1">${tipText}</p>
                            </div>
                        </div>
                        <div class="tooltip-arrow"></div>
                    </div>
                </div>`;
            } else {
                return `<div class="lotto-ball">${n}</div>`;
            }
        }).join('');

        const timeLabel = d.schedule.label;

        return `
            <div class="grouped-card-row">
                <div class="grouped-card-time">${timeLabel}</div>
                <div class="grouped-card-balls">${ballsHtml}</div>
                <div class="grouped-card-winners">
                    <span class="font-bold text-green-400">${d.winners}</span>
                    <span class="text-xs text-slate-500 uppercase">Winners</span>
                </div>
            </div>
        `;
    }).join('');

    return `
    <div class="lotto-card lotto-card--digit">
      <div class="lotto-card__header">
        <div class="flex flex-col">
          <h3 class="text-lg font-black tracking-tight text-white">${gameLabelHtml}</h3>
          <span class="mt-1 text-xs font-bold tracking-widest text-blue-400 uppercase">${formattedDate}</span>
        </div>
        <div class="flex flex-col text-right">
          <span class="text-lg font-black tracking-tight text-yellow-500">₱${prizeDisplay}</span>
          <p class="text-xs font-bold tracking-tighter text-slate-500 uppercase">Prize</p>
        </div>
      </div>
      <div> 
        ${rowsHtml}
      </div>
    </div>
    `;
}