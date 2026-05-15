<style>
    /* UI Balls (Visible on page) */
    .gen-ball {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: white;
        font-weight: 800;
        background: linear-gradient(to bottom right, #4ade80, #16a34a);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    /* Animations */
    .animate-fade-in {
        animation: fadeIn 0.3s ease-in;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* --- SCREENSHOT CAPTURE STYLES --- */
    #screenshotTimestamp {
        display: block !important;
        min-height: 1.5em;
        visibility: visible !important;
    }

    /* Added slightly more space between the bigger balls */
    .screenshot-ball-wrap {
        margin: 0 8px;
    }

    /* SUPERSIZED for 800x800 */
    .screenshot-ball {
        width: 96px !important;
        height: 96px !important;
        background: linear-gradient(to bottom right, #3b82f6, #2563eb) !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4) !important;
        box-sizing: border-box !important;

        /* Typography for the numbers inside the ball */
        color: white !important;
        font-size: 46px !important;
        font-weight: 900 !important;
        line-height: 1.2 !important;
    }
</style>

<section id="section-generator" class="section-page hidden">
    <div class="text-center my-10 md:my-20">
        <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
            Smart Sequence<span class="text-blue-400"> Generator.</span>
        </h2>
        <p class="text-slate-400 text-md md:text-lg mx-auto mt-4 font-medium">
            Use our independent algorithm to generate sequences based on statistical probability.
        </p>
    </div>

    <!-- GENERATOR INTRODUCTION CONTENT -->
    <div class="max-w-4xl mx-auto mb-10 space-y-6 px-4">
        <div class="bg-slate-800/60 rounded-2xl border border-slate-700 p-6 md:p-8">
            <h3 class="text-xl md:text-2xl font-black text-white mb-4">How the Lucky Number Generator Works</h3>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-4">
                The Lottong Pinoy Smart Generator uses historical draw data from PCSO games to produce number combinations based on statistical analysis. Unlike simple random number generators, our tool offers four distinct strategies — Hot, Cold, Mixed, and Random — each drawing from a different analytical approach. Hot numbers are those that have appeared most frequently in past draws, while Cold numbers are those that have been drawn the least often and may be statistically "overdue." The Mixed strategy blends both approaches for a balanced selection, and Random gives you a pure luck-of-the-draw combination with no statistical weighting.
            </p>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed">
                For players who want even more combinations, our System Play option lets you pick 7 to 10 numbers, which the generator then arranges into all possible 6-number combinations — just like PCSO System Play at authorized outlets. This significantly increases your coverage of the number field, though it also increases your total ticket cost. Every generated combination is saved locally so you can review, compare, and track your selections over time.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">🔥 Hot Strategy</h4>
                <p class="text-slate-400 text-xs leading-relaxed">This strategy prioritizes numbers that have been drawn most frequently in recent history. The theory behind playing hot numbers is that some numbers may appear more often due to statistical variance. While this does not guarantee future wins, many Filipino lotto players prefer to "ride the trend" by selecting numbers that have shown up consistently in past draws. Our algorithm ranks numbers by their historical frequency and selects the top performers for your combination.</p>
            </div>
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">❄️ Cold Strategy</h4>
                <p class="text-slate-400 text-xs leading-relaxed">The Cold strategy focuses on numbers that have appeared least frequently in historical draws. Some players believe that numbers which have not been drawn for a long time are "due" to appear — a concept known as the gambler's fallacy. While every draw is mathematically independent and past results do not affect future outcomes, the Cold strategy appeals to players who prefer to bet against the trend, hoping that underrepresented numbers will eventually catch up to their expected frequency.</p>
            </div>
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">⚖️ Mixed Strategy</h4>
                <p class="text-slate-400 text-xs leading-relaxed">The Mixed strategy offers the best of both worlds by alternating between hot and cold numbers in a single combination. This balanced approach ensures your selection includes both trending numbers and statistically overdue ones. Many experienced players prefer this method because it provides broader coverage across the number field rather than concentrating entirely on one extreme of the frequency spectrum. The generator alternates selections from the hot and cold pools to create a well-rounded set.</p>
            </div>
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">🎲 Random Strategy</h4>
                <p class="text-slate-400 text-xs leading-relaxed">For players who believe that luck is the only true factor in lottery games, the Random strategy generates a completely unweighted selection. Every number in the game's range has an equal probability of being chosen, with no consideration given to historical frequency data. This is the purest form of number generation and mirrors the way actual PCSO draws work — each number has an identical and independent chance of being selected in every single draw.</p>
            </div>
        </div>

        <div class="bg-green-500/10 border border-green-500/20 rounded-xl p-5">
            <h4 class="text-sm font-bold text-green-400 mb-2">Understanding System Play</h4>
            <p class="text-slate-300 text-xs leading-relaxed mb-3">
                System Play is a PCSO feature that allows you to select more than 6 numbers, generating all possible 6-number combinations from your selection. For example, System 7 lets you choose 7 numbers, which creates 7 different combinations. System 8 creates 28 combinations, System 9 creates 84, and System 10 creates 210 combinations. While System Play increases your chances of winning by covering more number groupings, it also multiplies your ticket cost accordingly — each combination costs ₱20.00.
            </p>
            <p class="text-slate-400 text-xs leading-relaxed">
                <strong class="text-slate-300">Important Reminder:</strong> Our generator is an independent analytical tool and is not affiliated with PCSO. Generated numbers are based on historical statistics and do not guarantee winning results. Lottery draws are random events. Please play responsibly and set a budget you can afford.
            </p>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-6">
        <aside class="w-full lg:w-[320px] shrink-0">
            <div class="lg:sticky lg:top-6 bg-slate-800 rounded-2xl p-6 border border-slate-700 shadow-2xl">

                <div class="mb-6">
                    <h2 class="text-lg font-black text-white mb-1">Struggling to pick numbers?</h2>
                    <p class="text-xs text-slate-400">Use our Smart Generator to find statistically balanced combinations.</p>
                </div>

                <div class="space-y-6">
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Method</label>
                        <div class="flex flex-wrap gap-4 items-center">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input type="radio" name="genMethod" value="normal" checked autocomplete="off" class="w-4 h-4 accent-green-500 cursor-pointer">
                                <span class="text-sm text-slate-300 group-hover:text-white">Normal</span>
                            </label>
                            <div id="systemMethodWrapper">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="radio" name="genMethod" value="system" autocomplete="off" class="w-4 h-4 accent-green-500 cursor-pointer">
                                    <span class="text-sm text-slate-300 group-hover:text-white">System</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="systemPicksContainer" class="hidden mb-6 animate-fade-in">
                        <label class="block text-xs text-slate-400 mb-2 uppercase tracking-wide">Picks</label>
                        <select id="systemPicksSelect" class="select w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
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

        <main class="flex-1 min-w-0 space-y-6">
            <div id="genCard" class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 text-center">
                    <!-- CHANGED TEXT HERE -->
                    <p class="text-xs text-slate-400 uppercase tracking-wider">Data-Driven Combinations for</p>
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

<div id="screenshotWrapper" style="position: absolute; top: -9999px; left: -9999px; z-index: -9999;">
    <div id="captureTarget" class="bg-slate-950 flex flex-col items-center justify-between p-8" style="width: 800px; height: 800px; border: 1px solid #1e293b; box-sizing: border-box;">
        <div class="w-full flex justify-between items-start">
            <img id="screenshotLogo" src="img/icon-192x192.png" crossorigin="anonymous" class="shadow-2xl" style="height: 150px; width: 150px; border-radius: 10px;">
            <div class="bg-white rounded-2xl shadow-2xl p-3">
                <img id="screenshotQR" src="img/qrcode.png" crossorigin="anonymous" style="height: 126px; width: 126px;">
            </div>
        </div>

        <div class="text-center w-full flex flex-col items-center flex-grow justify-center mt-[-10px]">
            <h1 class="text-[72px] leading-none font-black text-white tracking-tighter mb-10">Lottong <span class="text-blue-500">Pinoy</span></h1>

            <!-- CHANGED TEXT HERE -->
            <p class="text-slate-500 uppercase mt-2 tracking-[0.3em] text-[20px] font-bold">Data-Driven Combinations</p>
            <h2 id="screenshotGameLabel" class="text-[48px] leading-none font-black text-green-400 uppercase tracking-widest mt-3"></h2>
            <p id="screenshotTimestamp" class="text-slate-300 font-bold mt-3 mb-6 text-[26px]"></p>

            <div id="screenshotOutput" class="flex justify-center items-center gap-2 flex-wrap mt-4"></div>

            <p class="mx-auto max-w-[700px] mt-6 text-[22px] leading-snug tracking-wide text-slate-400 italic mb-4">
                Note: This sequence is generated using historical draw statistics. Lottery results are purely random, and this tool does not guarantee a winning ticket. Please play responsibly.
            </p>
        </div>

        <div class="text-center w-full">
            <p class="text-[28px] font-bold text-white tracking-widest mb-8">lottong-pinoy.com</p>
        </div>
    </div>
</div>

<script>
    // ==========================================
    // 1. DATE SETUP & IMAGE HELPERS
    // ==========================================
    const now = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const screenshotTimestamp = document.getElementById('screenshotTimestamp');
    if (screenshotTimestamp) screenshotTimestamp.innerText = now.toLocaleDateString('en-PH', options);

    let isGenerating = false;

    async function getSafeImage(img) {
        try {
            const resp = await fetch(img.src + '?t=' + Date.now());
            const blob = await resp.blob();
            return new Promise(res => {
                const reader = new FileReader();
                reader.onloadend = () => res(reader.result);
                reader.readAsDataURL(blob);
            });
        } catch (e) { return img.src; }
    }

    // ==========================================
    // 2. SCREENSHOT CAPTURE LOGIC
    // ==========================================
    async function handleShare() {
        if (isGenerating) return;

        const sourceOutput = document.getElementById('genOutput');
        const sourceLabel = document.getElementById('genGameLabel');
        if (!sourceOutput || sourceOutput.innerText.includes("Waiting") || sourceOutput.innerText.includes("Click")) {
            return alert("Generate numbers first!");
        }

        isGenerating = true;

        const wrapper = document.getElementById('screenshotWrapper');
        const target = document.getElementById('captureTarget');
        const screenOutput = document.getElementById('screenshotOutput');
        const screenLabel = document.getElementById('screenshotGameLabel');
        const logo = document.getElementById('screenshotLogo');

        if (screenLabel) screenLabel.textContent = sourceLabel.textContent;
        if (screenOutput) {
            screenOutput.innerHTML = '';
            Array.from(sourceOutput.children).forEach(ball => {
                const wrap = document.createElement('div');
                wrap.className = 'screenshot-ball-wrap';
                wrap.innerHTML = `<div class="screenshot-ball"><span>${ball.innerText}</span></div>`;
                screenOutput.appendChild(wrap);
            });
        }

        if (wrapper) {
            wrapper.style.top = '0';
            wrapper.style.left = '0';
        }

        try {
            if (logo) logo.src = await getSafeImage(logo);
            await new Promise(resolve => requestAnimationFrame(() => requestAnimationFrame(resolve)));
            await new Promise(resolve => setTimeout(resolve, 150));

            const canvas = await html2canvas(target, {
                scale: 2,
                useCORS: true,
                backgroundColor: '#020617'
            });

            const fileName = `LottongPinoy-${Date.now()}.png`;
            const blob = await new Promise(res => canvas.toBlob(res, 'image/png'));
            const file = new File([blob], fileName, { type: 'image/png' });

            if (navigator.share && navigator.canShare && navigator.canShare({ files: [file] })) {
                await navigator.share({ title: 'Lottong Pinoy Prediction', files: [file] });
            } else {
                const link = document.createElement('a');
                link.download = fileName;
                link.href = canvas.toDataURL();
                link.click();
            }
        } catch (err) {
            console.error("Capture failed:", err);
            alert("Oops! Something went wrong generating the image.");
        }

        if (wrapper) {
            wrapper.style.top = '-9999px';
            wrapper.style.left = '-9999px';
        }
        isGenerating = false;
    }

    // ==========================================
    // 3. UI STATE & INITIALIZATION
    // ==========================================
    document.addEventListener('DOMContentLoaded', () => {
        // A. Bind Share Button
        const shareBtn = document.getElementById('shareBtn');
        if (shareBtn) shareBtn.addEventListener('click', handleShare);

        // B. Force "Normal" Method on Load (overrides browser cache)
        const systemContainer = document.getElementById('systemPicksContainer');
        setTimeout(() => {
            const normalRadio = document.querySelector('input[name="genMethod"][value="normal"]');
            if (normalRadio) normalRadio.checked = true;
            if (systemContainer) systemContainer.classList.add('hidden');
        }, 50);

        // C. Handle "Normal" vs "System" Radio Toggle
        document.addEventListener('change', (e) => {
            if (e.target.name === 'genMethod' && systemContainer) {
                if (e.target.value === 'system') {
                    systemContainer.classList.remove('hidden');
                    systemContainer.classList.add('animate-fade-in');
                } else {
                    systemContainer.classList.add('hidden');
                    systemContainer.classList.remove('animate-fade-in');
                }
            }
        });
    });
</script>