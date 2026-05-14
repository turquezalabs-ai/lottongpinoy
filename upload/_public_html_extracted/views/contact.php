<style>
    /* Specific style for the screenshot balls */
    .screenshot-ball {
        width: 70px !important;
        height: 70px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 9999px !important;
        color: white !important;
        font-size: 28px !important;
        font-weight: 900 !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1) !important;
        background: linear-gradient(to bottom right, #4ade80, #16a34a) !important;
    }
</style>

<section id="section-generator" class="section-page hidden">
    <div class="flex flex-col lg:flex-row gap-6">
        
        <!-- SIDEBAR -->
        <aside class="w-full lg:w-[320px] shrink-0">
            <div class="lg:sticky lg:top-6 bg-slate-800 rounded-2xl p-6 border border-slate-700 shadow-2xl">
                
                <div class="mb-6">
                    <h2 class="text-lg font-black text-white mb-1">Struggling to pick numbers?</h2>
                    <p class="text-xs text-slate-400">Use our Smart Generator to find statistically balanced combinations.</p>
                </div>

                <div class="space-y-6">
                    <!-- Method -->
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Method</label>
                        <div class="flex flex-wrap gap-4 items-center">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input type="radio" name="genMethod" value="normal" checked class="w-4 h-4 accent-green-500 cursor-pointer">
                                <span class="text-sm text-slate-300 group-hover:text-white">Normal</span>
                            </label>
                            <div id="systemMethodWrapper">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="radio" name="genMethod" value="system" class="w-4 h-4 accent-green-500 cursor-pointer">
                                    <span class="text-sm text-slate-300 group-hover:text-white">System</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="systemPicksContainer" class="hidden mb-6 animate-fade-in">
                        <label class="block text-xs text-slate-400 mb-2 uppercase tracking-wide">Picks</label>
                        <select id="systemPicksSelect" class="select w-full">
                            <option value="7">System 7</option>
                            <option value="8">System 8</option>
                            <option value="9">System 9</option>
                            <option value="10">System 10</option>
                        </select>
                        <p class="text-[10px] text-slate-500 mt-2 ml-1">
                            💡 <span class="text-slate-400">System Play:</span> Pick more than 6 numbers to generate multiple combinations.
                        </p>
                    </div>
                    
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Select Game</label>
                        <select id="genGameSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
                            <option value="6/58">Ultra Lotto 6/58</option>
                            <option value="6/55">Grand Lotto 6/55</option>
                            <option value="6/49">Super Lotto 6/49</option>
                            <option value="6/45">Mega Lotto 6/45</option>
                            <option value="6/42">Lotto 6/42</option>
                            <option value="6D">6D Lotto</option>
                            <option value="4D">4D Lotto</option>
                            <option value="3D">3D Lotto</option>
                            <option value="2D">2D Lotto</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Strategy</label>
                        <select id="genStrategySelect" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
                            <option value="hot">🔥 Hot Numbers (Frequent)</option>
                            <option value="cold">❄️ Cold Numbers (Overdue)</option>
                            <option value="mix">⚖️ Mixed (Balanced)</option>
                            <option value="random">🎲 Random (Luck)</option>
                        </select>
                    </div>

                    <button id="generateBtn" class="w-full bg-green-600 hover:bg-green-500 text-white font-black py-4 rounded-xl shadow-lg uppercase tracking-widest text-xs">Generate Lucky Set</button>
                </div>
            </div>
        </aside>

        <!-- MAIN -->
        <main class="flex-1 min-w-0 space-y-6">
            <div id="genCard" class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 text-center">
                    <p class="text-xs text-slate-400 uppercase tracking-wider">Predicted Sequence for</p>
                    <h3 id="genGameLabel" class="text-xl md:text-2xl font-black text-green-400 mt-1">GAME NAME</h3>
                </div>
                <div class="p-6 min-h-[150px] flex flex-col items-center justify-center gap-4">
                    <div id="genOutput" class="flex gap-2 flex-wrap justify-center">
                        <p class="text-slate-500 text-sm">Click "Generate" to start.</p>
                    </div>
                    
                    <div id="genActionBtns" class="hidden flex flex-wrap justify-center gap-3 mt-4">
                        <button id="copyBtn" class="bg-slate-700 hover:bg-slate-600 text-slate-200 font-bold px-6 py-3 rounded-2xl transition-all uppercase text-sm">
                            <i class="fa-regular fa-copy mr-2"></i>Copy
                        </button>
                        <button id="shareBtn" class="bg-blue-600 hover:bg-blue-500 text-white font-bold px-6 py-3 rounded-2xl transition-all uppercase text-sm active:scale-95">
                            <i class="fa-solid fa-share-nodes mr-2"></i>Share
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-white">Recent Generations</h3>
                    <button id="clearGenHistory" class="text-xs text-red-400 hover:text-red-300 px-3 py-1 rounded border border-slate-700">Clear All</button>
                </div>
                <div id="printArea" class="p-4">
                    <div id="printHeader" class="hidden text-center border-b border-slate-700 pb-4 mb-4">
                        <h1 class="text-xl font-bold text-white">Lucky Numbers Collection</h1>
                        <p class="text-xs text-slate-500 mt-1">Generated on: <span id="printTimestamp"></span></p>
                    </div>
                    <div id="genHistoryList" class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                        <p class="text-slate-500 text-xs text-center py-4 col-span-full">No generated numbers saved yet.</p>
                    </div>
                </div>
                <div class="px-6 py-4 border-t border-slate-700 flex flex-wrap gap-3 justify-center">
                    <button id="exportTxtBtn" class="text-xs font-bold text-slate-300 hover:text-white px-4 py-2 rounded-lg bg-slate-700 hover:bg-slate-600 transition-all">Save</button>
                    <button id="printBtn" class="text-xs font-bold text-slate-300 hover:text-white px-4 py-2 rounded-lg bg-slate-700 hover:bg-slate-600 transition-all">Print</button>
                </div>
            </div>
        </main>
    </div>
</section>

<style>
    /* THE BULLETPROOF CENTER: Using Table-Cell for Snapshot Stability */
    .screenshot-ball-wrap {
        display: inline-block !important;
        margin: 0 6px !important;
        vertical-align: middle !important;
    }

    .screenshot-ball {
        width: 74px !important;
        height: 74px !important;
        background: linear-gradient(to bottom right, #4ade80, #16a34a) !important;
        border-radius: 50% !important;
        display: table !important; /* KEY: Act like a table */
        table-layout: fixed !important;
        border-collapse: collapse !important;
        padding: 0 !important;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3) !important;
    }

    .screenshot-ball span {
        display: table-cell !important;
        vertical-align: middle !important; /* PERFECT VERTICAL ALIGNMENT */
        text-align: center !important;    /* PERFECT HORIZONTAL ALIGNMENT */
        color: white !important;
        font-size: 32px !important;
        font-weight: 900 !important;
        line-height: 1 !important;        /* Removes baseline leading space */
        padding: 0 !important;
        margin: 0 !important;
    }
</style>

<section id="section-generator" class="section-page hidden">
    <div class="flex flex-col lg:flex-row gap-6">
        <aside class="w-full lg:w-[320px] shrink-0">
            <div class="lg:sticky lg:top-6 bg-slate-800 rounded-2xl p-6 border border-slate-700 shadow-2xl">
                <div class="mb-6">
                    <h2 class="text-lg font-black text-white mb-1">Struggling to pick numbers?</h2>
                    <p class="text-xs text-slate-400">Use our Smart Generator for statistically balanced combinations.</p>
                </div>
                <div class="space-y-6">
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Method</label>
                        <div class="flex flex-wrap gap-4 items-center">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input type="radio" name="genMethod" value="normal" checked class="w-4 h-4 accent-green-500 cursor-pointer">
                                <span class="text-sm text-slate-300 group-hover:text-white">Normal</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input type="radio" name="genMethod" value="system" class="w-4 h-4 accent-green-500 cursor-pointer">
                                <span class="text-sm text-slate-300 group-hover:text-white">System</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Select Game</label>
                        <select id="genGameSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
                            <option value="6/58">Ultra Lotto 6/58</option>
                            <option value="6/55">Grand Lotto 6/55</option>
                            <option value="6/49">Super Lotto 6/49</option>
                            <option value="6/45">Mega Lotto 6/45</option>
                            <option value="6/42">Lotto 6/42</option>
                        </select>
                    </div>
                    <button id="generateBtn" class="w-full bg-green-600 hover:bg-green-500 text-white font-black py-4 rounded-xl shadow-lg uppercase tracking-widest text-xs">Generate Lucky Set</button>
                </div>
            </div>
        </aside>

        <main class="flex-1 min-w-0 space-y-6">
            <div id="genCard" class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 text-center">
                    <p class="text-xs text-slate-400 uppercase tracking-wider">Predicted Sequence for</p>
                    <h3 id="genGameLabel" class="text-xl md:text-2xl font-black text-green-400 mt-1">GAME NAME</h3>
                </div>
                <div class="p-6 min-h-[150px] flex flex-col items-center justify-center gap-4">
                    <div id="genOutput" class="flex gap-2 flex-wrap justify-center">
                        <p class="text-slate-500 text-sm">Click "Generate" to start.</p>
                    </div>
                    <div id="genActionBtns" class="hidden flex flex-wrap justify-center gap-3 mt-4">
                        <button id="copyBtn" class="bg-slate-700 hover:bg-slate-600 text-slate-200 font-bold px-6 py-3 rounded-2xl transition-all uppercase text-sm">Copy</button>
                        <button id="shareBtn" class="bg-blue-600 hover:bg-blue-500 text-white font-bold px-6 py-3 rounded-2xl transition-all uppercase text-sm active:scale-95">Share Result</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>

<div id="screenshotWrapper" style="position: absolute; left: -9999px; top: 0; pointer-events: none; opacity: 0;">
    <div id="captureTarget" class="bg-slate-950 flex flex-col items-center justify-between p-16" style="width: 800px; height: 800px; border: 1px solid #1e293b;">
        
        <div class="text-center mt-6">
            <img id="screenshotLogo" 
                 src="img/icon-192x192.png" 
                 alt="Logo" 
                 crossorigin="anonymous"
                 style="height: 150px; width: 150px; margin: 0 auto; display: block !important; border-radius: 24px;">
            
            <h1 class="text-6xl font-[900] text-white tracking-tighter mt-6">
                Lottong <span class="text-blue-500">Pinoy</span>
            </h1>
        </div>

        <div class="text-center w-full">
            <p class="text-slate-500 uppercase tracking-[0.4em] text-sm font-bold mb-10">Generated Predicted Sequence</p>
            <div id="screenshotOutput" class="flex justify-center items-center gap-1 flex-wrap px-12"></div>
            <h2 id="screenshotGameLabel" class="text-3xl font-[900] text-green-400 mt-12 uppercase tracking-widest"></h2>
        </div>

        <div class="mb-6 w-full text-center">
            <div class="h-[1px] w-48 bg-slate-800 mx-auto mb-6"></div>
            <p class="text-2xl font-bold text-slate-600 tracking-[0.15em]">lottong-pinoy.com</p>
        </div>
    </div>
</div>

<style>
    /* 1. WRAPPER */
    .screenshot-ball-wrap {
        display: inline-block !important;
        margin: 0 6px !important;
    }

    /* 2. THE BALL (The Primitive Math Fix) */
    .screenshot-ball {
        width: 74px !important;
        height: 74px !important;
        background: linear-gradient(to bottom right, #4ade80, #16a34a) !important;
        border-radius: 50% !important;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3) !important;
        
        /* Force standard block rendering */
        display: block !important; 
        
        /* Border-box means padding doesn't increase the total 74px size */
        box-sizing: border-box !important; 
        
        /* HARD MATH: 74px total - 32px font = 42px left. 
           Divide by 2 = 21px. We use 20px because numbers sit slightly lower visually. 
           This physically forces the text down from the top edge. */
        padding-bottom: 30px !important; 
        
        /* Bulletproof horizontal center */
        text-align: center !important; 
    }

    /* 3. THE NUMBER */
    .screenshot-ball span {
        display: inline !important; /* Just standard text */
        color: white !important;
        font-size: 32px !important;
        font-weight: 900 !important;
        line-height: 1 !important; 
        margin: 0 !important;
        padding: 0 !important;
        font-family: 'Inter', sans-serif !important;
    }
</style>
<div id="screenshotWrapper" style="position: fixed; left: -9999px; top: 0; pointer-events: none;">
    <div id="captureTarget" class="bg-slate-950 flex flex-col items-center justify-between p-16" style="width: 800px; height: 800px; border: 1px solid #1e293b;">
        
        <div class="text-center mt-6">
            <img id="screenshotLogo" 
                 src="https://lottong-pinoy.com/img/icon-192x192.png" 
                 alt="Logo" 
                 style="height: 150px; width: 150px; margin: 0 auto; display: block !important; border-radius: 24px;">
            
            <h1 class="text-6xl font-[900] text-white tracking-tighter uppercase mt-6">
                Lottong <span class="text-blue-500">Pinoy</span>
            </h1>
        </div>

        <div class="text-center w-full">
            <p class="text-slate-500 uppercase tracking-[0.4em] text-sm font-bold mb-10">Predicted Sequence</p>
            <div id="screenshotOutput" class="flex justify-center items-center gap-1 flex-wrap px-12"></div>
            <h2 id="screenshotGameLabel" class="text-3xl font-[900] text-green-400 mt-12 uppercase tracking-widest"></h2>
        </div>

        <div class="mb-6 w-full text-center">
            <div class="h-[1px] w-48 bg-slate-800 mx-auto mb-6"></div>
            <p class="text-2xl font-bold text-slate-600 tracking-[0.15em]">www.lottong-pinoy.com</p>
        </div>
    </div>
</div>

<script>
    // ULTIMATE IMAGE CONVERTER
    async function convertImageToData(imgElement) {
        if (!imgElement || !imgElement.src) return null;
        const fullUrl = imgElement.src; 

        try {
            const response = await fetch(fullUrl + (fullUrl.includes('?') ? '&' : '?') + 't=' + new Date().getTime());
            const blob = await response.blob();
            return new Promise((resolve) => {
                const reader = new FileReader();
                reader.onloadend = () => resolve(reader.result);
                reader.readAsDataURL(blob);
            });
        } catch (e) {
            console.warn("Fetch failed, using canvas fallback for:", fullUrl);
            return new Promise((resolve) => {
                const canvas = document.createElement('canvas');
                canvas.width = imgElement.naturalWidth || 120;
                canvas.height = imgElement.naturalHeight || 120;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(imgElement, 0, 0, canvas.width, canvas.height);
                resolve(canvas.toDataURL('image/png'));
            });
        }
    }

    async function generateScreenshot(e) {
        if(window.isGenerating) return;
        window.isGenerating = true;

        const wrapper = document.getElementById('screenshotWrapper');
        const target = document.getElementById('captureTarget');
        const logoImg = document.getElementById('screenshotLogo');
        const qrImg = document.getElementById('screenshotQR');
        const sourceOutput = document.getElementById('genOutput');
        const sourceLabel = document.getElementById('genGameLabel');
        const screenshotOutput = document.getElementById('screenshotOutput');
        const screenshotLabel = document.getElementById('screenshotGameLabel');

        if (!sourceOutput || sourceOutput.innerText.includes("Click")) {
            alert("Generate numbers first!");
            window.isGenerating = false;
            return;
        }

        // Sync Numbers
        screenshotLabel.textContent = sourceLabel.textContent;
        screenshotOutput.innerHTML = '';
        Array.from(sourceOutput.children).forEach(ball => {
            const num = ball.innerText.trim();
            if(!num || isNaN(num)) return;
            const wrap = document.createElement('div');
            wrap.className = 'screenshot-ball-wrap';
            wrap.innerHTML = `<div class="screenshot-ball"><span>${num}</span></div>`;
            screenshotOutput.appendChild(wrap);
        });

        wrapper.style.left = '0';
        wrapper.style.opacity = '1';

        try {
            // Convert Images
            if (logoImg) {
                const logoData = await convertImageToData(logoImg);
                if (logoData) logoImg.src = logoData;
                if (logoImg.decode) await logoImg.decode().catch(()=>{});
            }

            if (qrImg) {
                const qrData = await convertImageToData(qrImg);
                if (qrData) qrImg.src = qrData;
                if (qrImg.decode) await qrImg.decode().catch(()=>{});
            }

            await new Promise(r => setTimeout(r, 600));

            // Generate Image
            const canvas = await html2canvas(target, {
                width: 800,
                height: 800,
                scale: 2,
                useCORS: true,
                allowTaint: false,
                backgroundColor: '#020617'
            });

            // --- THE NEW MOBILE SHARE LOGIC ---
            const fileName = `LottongPinoy-${sourceLabel.textContent.replace(/\s+/g, '-')}.png`;
            
            // Convert canvas to a File object
            const blob = await new Promise(resolve => canvas.toBlob(resolve, 'image/png'));
            const file = new File([blob], fileName, { type: 'image/png' });

            // Check if device supports sharing files (Mobile devices)
            if (navigator.share && navigator.canShare && navigator.canShare({ files: [file] })) {
                try {
                    await navigator.share({
                        title: 'My Lucky Numbers',
                        text: `Check out my predicted sequence for ${sourceLabel.textContent} generated via Lottong Pinoy!`,
                        files: [file]
                    });
                } catch (shareError) {
                    // If user cancels the share menu, it throws an AbortError. We ignore that.
                    if (shareError.name !== 'AbortError') {
                        console.error("Share failed, falling back to download...", shareError);
                        fallbackDownload(canvas, fileName);
                    }
                }
            } else {
                // Fallback for Desktop or unsupported browsers
                fallbackDownload(canvas, fileName);
            }

        } catch (error) {
            console.error("Screenshot Error:", error);
        } finally {
            wrapper.style.left = '-9999px';
            window.isGenerating = false;
        }
    }

    // Helper for downloading
    function fallbackDownload(canvas, fileName) {
        const link = document.createElement('a');
        link.download = fileName;
        link.href = canvas.toDataURL("image/png");
        link.click();
    }

    // Bind Button
    const shareBtn = document.getElementById('shareBtn');
    if (shareBtn) {
        const newBtn = shareBtn.cloneNode(true);
        shareBtn.parentNode.replaceChild(newBtn, shareBtn);
        newBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopImmediatePropagation();
            generateScreenshot(e);
        });
    }

    // Unhide buttons when Generate is clicked
    const mainGenBtn = document.getElementById('generateBtn');
    if (mainGenBtn) {
        mainGenBtn.addEventListener('click', () => {
            setTimeout(() => {
                const btns = document.getElementById('genActionBtns');
                if(btns) btns.classList.remove('hidden');
            }, 100);
        });
    }
</script>