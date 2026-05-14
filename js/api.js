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

/**
 * Load the TEMP 2D/3D bin scraped from lottopcso.com.
 * This data is SEPARATE from production — it provides early results
 * for 2D and 3D daily draws before PCSO official publishes them.
 * 
 * Returns entries in the SAME format as production data, with dates
 * normalized from M/D/YYYY to YYYY-MM-DD.
 */
export async function loadTempDigitData() {
    try {
        const response = await fetch('api_temp.php');
        if (!response.ok) return [];

        let tempData = await response.json();

        // Normalize date format from "M/D/YYYY" to "YYYY-MM-DD" to match production
        tempData = tempData.map(item => {
            if (!item.date) return item;
            
            // If already in YYYY-MM-DD format, leave it
            if (/^\d{4}-\d{2}-\d{2}$/.test(item.date)) return item;

            // Convert M/D/YYYY → YYYY-MM-DD
            const parts = item.date.split('/');
            if (parts.length === 3) {
                const month = parts[0].padStart(2, '0');
                const day = parts[1].padStart(2, '0');
                const year = parts[2].length === 2 ? '20' + parts[2] : parts[2];
                return { ...item, date: `${year}-${month}-${day}` };
            }

            return item;
        });

        return tempData;

    } catch (err) {
        console.warn("Temp digit data not available:", err.message);
        return [];
    }
}

export function getCachedData() {
    return allDataCache || [];
}
