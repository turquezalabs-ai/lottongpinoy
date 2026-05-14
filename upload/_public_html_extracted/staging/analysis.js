// js/api.js
import { API_URL } from './config.js';
import { parseDateSafe } from './utils.js';

let allDataCache = null;

export async function loadData(statusEl, mobileStatusEl) {
    try {
        if (statusEl) statusEl.textContent = "Connecting...";
        if (mobileStatusEl) mobileStatusEl.textContent = "Connecting...";

        const response = await fetch(API_URL);
        if (!response.ok) throw new Error("Network error");
        
        let data = await response.json();
        data.sort((a, b) => parseDateSafe(b.date) - parseDateSafe(a.date));
        
        allDataCache = data;

        if (statusEl) statusEl.textContent = "Live";
        if (mobileStatusEl) mobileStatusEl.textContent = "Live";
        
        return data;

    } catch (err) {
        console.error(err);
        if (statusEl) statusEl.textContent = "Error";
        if (mobileStatusEl) mobileStatusEl.textContent = "Error";
        return [];
    }
}

export function getCachedData() {
    return allDataCache || [];
}