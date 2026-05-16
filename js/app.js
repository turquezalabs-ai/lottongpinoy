// js/app.js

// 1. Import API
import { loadData } from './api.js';

// 2. Import Modules
import { renderLatestCards, renderHomeInsights } from './modules/latest.js';
import { initResultsFilter } from './modules/history.js';
import { initGenerator } from './modules/generator.js';
import { initChecker } from './modules/checker.js?v=7';
import { initAnalysis } from './modules/analysis.js';
import { ARTICLES } from './articles.js';
import { initAlaga } from './modules/alaga.js';
import { initCalculator } from './modules/calculator.js';

// Global State
window.allData = [];

// Lazy-load html2canvas only when needed (saves ~38KB initial load)
window.loadHtml2Canvas = async function() {
    if (window.html2canvas) return window.html2canvas;
    const script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js';
    return new Promise((resolve, reject) => {
        script.onload = () => resolve(window.html2canvas);
        script.onerror = reject;
        document.head.appendChild(script);
    });
};

document.addEventListener('DOMContentLoaded', async () => {
    // A. Start Navigation
    initNavigation();

    // B. Load Data
    const statusTextEl = document.getElementById('statusText');
    const statusTextMobileEl = document.getElementById('statusTextMobile');
    window.allData = await loadData(statusTextEl, statusTextMobileEl);

    // C. Init Components
    if (window.allData.length > 0) {
        renderLatestCards(
            window.allData, 
            document.getElementById('latestGridMajor'), 
            document.getElementById('latestGridDigit'), 
            document.getElementById('updateTimestamp')
        );
        
        renderHomeInsights(window.allData, "6/58");
        
        const trendSelect = document.getElementById('trendGameSelect');
        if (trendSelect) {
            trendSelect.addEventListener('change', (e) => renderHomeInsights(window.allData, e.target.value));
        }

        initResultsFilter(window.allData);
        initGenerator(window.allData);
        initChecker(window.allData);
        initAnalysis(window.allData);
        initAlaga(window.allData);
        initCalculator();
    } else {
        initResultsFilter([]);
        initGenerator([]);
        initChecker([]);
        initAnalysis([]);
    }

    // D. Footer Year
    const yearEl = document.getElementById('currentYear');
    if (yearEl) yearEl.textContent = new Date().getFullYear();
});

/**
 * NAVIGATION ENGINE
 */
function initNavigation() {
    const tabs = document.querySelectorAll('.nav-tab');
    const mainNav = document.getElementById('mainNav');
    const menuBtn = document.getElementById('menuBtn');

    // 1. Mobile Menu Toggle
    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            const isExpanded = mainNav.classList.toggle('hidden');
            menuBtn.setAttribute('aria-expanded', !isExpanded);
        });
    }

    // 2. Main Tab Click Logic
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            
            document.querySelectorAll('.section-page').forEach(sec => sec.classList.add('hidden'));
            
            const targetId = `section-${tab.dataset.tab}`;
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                targetSection.classList.remove('hidden');
            }

            if (window.innerWidth < 1024 && mainNav) mainNav.classList.add('hidden');
        });
    });

        // 3. Footer Links Logic (Updated to support Hidden Pages)
    document.querySelectorAll('.footer-link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetTabName = link.dataset.tab;
            
            // 1. Try to find the main Nav Tab
            const targetTab = document.querySelector(`.nav-tab[data-tab="${targetTabName}"]`);
            
            if (targetTab) {
                // If tab exists, click it (Normal Navigation)
                targetTab.click();
            } else {
                // 2. If no tab exists (Hidden Page), show section directly
                const targetSection = document.getElementById(`section-${targetTabName}`);
                if (targetSection) {
                    document.querySelectorAll('.section-page').forEach(sec => sec.classList.add('hidden'));
                    targetSection.classList.remove('hidden');
                    
                    // Remove active state from main tabs since we are on a hidden page
                    document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('active'));
                }
            }
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });

    // 4. Blog & Article Logic
    document.querySelectorAll('.article-link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            loadArticle(link.dataset.article);
        });
    });

    // 5. HOME PAGE BUTTON LOGIC
    const homeGenBtn = document.getElementById('homeGenerateBtn');
    if (homeGenBtn) {
        homeGenBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const genTab = document.querySelector('.nav-tab[data-tab="generator"]');
            if (genTab) {
                genTab.click();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });
    }

    // 6. GLOBAL NAVIGATION BRIDGE
    window.goToGenerator = function () {
        const genTab = document.querySelector('.nav-tab[data-tab="generator"]');
        if (genTab) {
            genTab.click();
        } else {
            document.querySelectorAll('.section-page').forEach(sec => sec.classList.add('hidden'));
            const genSection = document.getElementById('section-generator');
            if (genSection) genSection.classList.remove('hidden');
        }
    };

    // 7. ARTICLE LOADER
    window.loadArticle = function (id) {
        const article = ARTICLES[id];
        if (!article) return;
        const container = document.getElementById('articleContent');
        if (container) container.innerHTML = article.content;
        document.querySelectorAll('.section-page').forEach(sec => sec.classList.add('hidden'));
        document.getElementById('section-article').classList.remove('hidden');
        window.scrollTo({ top: 0, behavior: 'smooth' });
        window.location.hash = `article=${id}`;
    };

        // 8. Hash Navigation (Updated to support hidden pages)
    window.addEventListener('hashchange', () => {
        const hash = window.location.hash.replace('#', '');
        if (!hash) return;

        // 1. Try to find a Nav Tab for this hash
        const targetTab = document.querySelector(`.nav-tab[data-tab="${hash}"]`);
        
        if (targetTab) {
            targetTab.click();
        } else {
            // 2. If no Tab exists, try to show the section directly (For Hidden Pages)
            const targetSection = document.getElementById(`section-${hash}`);
            if (targetSection) {
                document.querySelectorAll('.section-page').forEach(sec => sec.classList.add('hidden'));
                targetSection.classList.remove('hidden');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }
    });

    // Trigger on load
    if (window.location.hash) {
        window.dispatchEvent(new Event('hashchange'));
    }
}