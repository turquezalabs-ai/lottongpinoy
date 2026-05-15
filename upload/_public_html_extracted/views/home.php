<!-- views/home.php -->

<!-- IMPORTANT: Default view, NO 'hidden' class -->
<section id="section-results" class="section-page">
    <div class="mb-8">

        <div class="text-center my-10 md:my-20">
            <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
                More Than Just <span class="text-blue-400">Results.</span>
            </h2>
            <p class="text-slate-400 text-md md:text-lg max-w-2xl mx-auto mt-4 font-medium">
                We track the patterns and give you the numbers.
            </p>
            <p>
                <button id="homeGenerateBtn" type="button" 
                        class="bg-green-600 hover:bg-green-500 text-white font-bold px-8 py-4 mt-8 rounded-2xl transition-all text-xl shadow-lg shadow-green-900/40 active:scale-95">
                    Generate Numbers Now
                </button>
            </p>
        </div>

        <h2 class="text-3xl text-center font-bold text-sky-400 my-10 tracking-wider">Latest Draw Results</h2>
        
        <h3 class="text-lg md:text-xl font-bold text-sky-400 my-5 uppercase tracking-wider">Digit Games</h3>
        <div id="latestGridDigit" class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
            <div class="text-slate-500 text-center col-span-full py-8 italic">Loading draw data...</div>
        </div>

        <h3 class="text-lg md:text-xl font-bold text-sky-400 my-5 uppercase tracking-wider">Major Jackpots</h3>
        <div id="latestGridMajor" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-8">
            <div class="text-slate-500 text-center col-span-full py-8 italic">Connecting to PCSO...</div>
        </div>

        <div class="bg-slate-800/50 rounded-3xl border border-slate-700 p-6 md:p-8 mb-10">
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <div class="text-center sm:text-left">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <span>🔍</span> Trend Watch
                    </h3>
                    <p class="text-xs text-slate-500 mt-1 uppercase tracking-widest font-bold">Pattern Analysis</p>
                </div>
                <select id="trendGameSelect"
                    class="bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-4 py-2 text-sm font-bold outline-none cursor-pointer focus:ring-2 focus:ring-blue-500 transition-all">
                    <option value="6/58">Ultra Lotto 6/58</option>
                    <option value="6/55">Grand Lotto 6/55</option>
                    <option value="6/49">Super Lotto 6/49</option>
                    <option value="2D">2D Lotto</option>
                    <option value="3D">3D Lotto</option>
                    <option value="4D">4D Lotto</option>
                    <option value="6D">6D Lotto</option>
                </select>
            </div>

            <div id="dailyAnalysisBox" class="bg-blue-500/10 border border-blue-500/20 rounded-2xl p-5 text-center mb-8">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="text-lg">💡</span>
                    <h4 class="font-black text-blue-300 text-[10px] uppercase tracking-[0.2em]">Live Insights</h4>
                </div>
                <p id="dailyAnalysisText" class="text-sm text-slate-400 italic">
                    Analyzing historical frequency...
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-red-500/5 border border-red-500/10 rounded-2xl p-6 transition-hover hover:bg-red-500/10">
                    <div class="flex items-center justify-center gap-2 mb-4">
                        <span class="text-2xl">🔥</span>
                        <h4 class="font-bold text-red-400 uppercase text-xs tracking-widest">Hot Numbers</h4>
                    </div>
                    <p id="homeHotDesc" class="text-[10px] text-slate-500 text-center mb-4 uppercase">Most frequent in recent draws</p>
                    <div id="homeHotNumbers" class="flex justify-center gap-2 flex-wrap min-h-[40px]">
                        <div class="text-slate-600 text-[10px] italic">Calculating...</div>
                    </div>
                </div>

                <div class="bg-cyan-500/5 border border-cyan-500/10 rounded-2xl p-6 transition-hover hover:bg-cyan-500/10">
                    <div class="flex items-center justify-center gap-2 mb-4">
                        <span class="text-2xl">❄️</span>
                        <h4 class="font-bold text-cyan-400 uppercase text-xs tracking-widest">Cold Numbers</h4>
                    </div>
                    <p id="homeColdDesc" class="text-[10px] text-slate-500 text-center mb-4 uppercase">Longest overdue for a win</p>
                    <div id="homeColdNumbers" class="flex justify-center gap-2 flex-wrap min-h-[40px]">
                        <div class="text-slate-600 text-[10px] italic">Calculating...</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================ -->
        <!-- SEO CONTENT: PCSO LOTTO GUIDE FOR SEARCH ENGINE VISIBILITY   -->
        <!-- This section provides substantial, unique textual content     -->
        <!-- that Google AdSense requires for "high value" classification  -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-10 mb-10 space-y-8">
            
            <div>
                <h2 class="text-2xl md:text-3xl font-black text-white mb-4">PCSO Lotto Results Today — Your Complete Guide</h2>
                <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                    Lottong Pinoy is the most comprehensive source for PCSO lotto results in the Philippines. We provide real-time, accurate results for all nine PCSO lottery games including Ultra Lotto 6/58, Grand Lotto 6/55, Super Lotto 6/49, Mega Lotto 6/45, Lotto 6/42, 6D Lotto, 4D Lotto, 3D Lotto (Swertres), and 2D Lotto (EZ2). Our platform updates automatically after every draw, ensuring you have the latest winning numbers within minutes of the official PCSO announcement.
                </p>
            </div>

            <div>
                <h3 class="text-xl font-bold text-white mb-3">How to Check Your PCSO Lotto Results</h3>
                <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                    Checking your lotto results on Lottong Pinoy is simple and fast. Our home page displays the latest draw results for all games immediately after each PCSO draw. For major jackpot games like Ultra Lotto 6/58 and Grand Lotto 6/55, results are updated after the 9PM draw. For digit games like 3D Swertres and 2D EZ2 Lotto, results are updated after each of the three daily draws at 11AM, 4PM, and 9PM. You can also browse our complete Draw History to search past results by game, date, or schedule. Our Number Checker tool lets you select your favorite numbers and instantly see how they have performed across all historical draws.
                </p>
            </div>

            <div>
                <h3 class="text-xl font-bold text-white mb-3">Understanding PCSO Lottery Games</h3>
                <p class="text-slate-400 text-sm md:text-base leading-relaxed mb-4">
                    The Philippine Charity Sweepstakes Office (PCSO) operates nine official lottery games that are drawn daily. These games are divided into two main categories:
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700">
                        <h4 class="font-bold text-sky-400 text-sm mb-2">Major Lotto Games</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            These are the big jackpot games where you pick 6 numbers from a specified range. Ultra Lotto 6/58 has the largest starting jackpot at 75 million pesos, followed by Grand Lotto 6/55 at 45 million pesos, Super Lotto 6/49 at 25 million pesos, Mega Lotto 6/45 at 15 million pesos, and Lotto 6/42 at 10 million pesos. When no one wins the jackpot, the prize rolls over and grows larger for the next draw.
                        </p>
                    </div>
                    <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700">
                        <h4 class="font-bold text-purple-400 text-sm mb-2">Digit Lotto Games</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            These games require you to match specific digit combinations. The 6D Lotto offers a top prize of 150,000 pesos, while 4D Lotto pays up to 10,000 pesos. The 3D Lotto (Swertres) and 2D Lotto (EZ2) are drawn three times daily and have smaller but more frequent prizes, making them the most popular digit games among Filipino bettors.
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold text-white mb-3">Smart Analysis Tools for Smarter Play</h3>
                <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                    Beyond simply displaying results, Lottong Pinoy offers powerful analysis tools to help you understand lottery patterns. Our Hot Numbers feature identifies the most frequently drawn numbers in recent games, while Cold Numbers highlights those that have been overdue for a draw. The Frequent Pairs and Trios analysis shows which number combinations tend to appear together, and our Frequency Distribution charts give you a complete visual overview of how often each number has been drawn. Our Lucky Number Generator uses these statistical insights to create balanced number combinations based on different strategies — from favoring hot numbers to mixing hot and cold for a balanced approach. While no tool can guarantee a win, these features give you a data-driven way to pick your numbers.
                </p>
            </div>

            <div>
                <h3 class="text-xl font-bold text-white mb-3">Important Reminder for All Lotto Players</h3>
                <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                    Please remember that the lottery is a game of chance. No analysis tool, number generator, or pattern recognition system can predict or guarantee winning numbers. Every draw is completely random and independent. Lottong Pinoy provides statistical data for entertainment and educational purposes only. Always play responsibly, set a budget you can afford, and never chase losses. If you or someone you know has a gambling problem, seek help from professional organizations. Always verify winning numbers on the <a href="https://www.pcso.gov.ph/" target="_blank" class="text-sky-400 underline">official PCSO website</a> before claiming any prize.
                </p>
            </div>

        </div>

    </div>
</section>
<script>
    document.getElementById('homeGenerateBtn').addEventListener('click', function(e) {
        e.preventDefault();
        
        // 1. Hide all pages
        document.querySelectorAll('.section-page').forEach(function(section) {
            section.classList.add('hidden');
        });
        
        // 2. Show the generator page
        var genSection = document.getElementById('section-generator');
        if (genSection) {
            genSection.classList.remove('hidden');
        }

        // 3. Update the navigation tabs to show 'Generator' as active
        document.querySelectorAll('.nav-tab').forEach(function(tab) {
            tab.classList.remove('active');
        });
        var genTab = document.querySelector('.nav-tab[data-tab="generator"]');
        if (genTab) {
            genTab.classList.add('active');
        }

        // 4. Scroll to the top of the page smoothly
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
