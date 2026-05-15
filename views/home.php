<!-- views/home.php -->

<!-- IMPORTANT: Default view, NO 'hidden' class -->
<section id="section-results" class="section-page">
    <div class="mb-8">

        <div class="text-center my-6 md:my-10">
            <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
                More Than Just <span class="text-blue-400">Results.</span>
            </h2>
            <p class="text-slate-400 text-md md:text-lg max-w-2xl mx-auto mt-3 font-medium">
                We track the patterns and give you the numbers.
            </p>
            <p>
                <button id="homeGenerateBtn" type="button"
                        class="bg-green-600 hover:bg-green-500 text-white font-bold px-8 py-4 mt-6 rounded-2xl transition-all text-xl shadow-lg shadow-green-900/40 active:scale-95">
                    Generate Numbers Now
                </button>
            </p>
        </div>

        <h2 class="text-2xl md:text-3xl text-center font-bold text-sky-400 my-6 tracking-wider">Latest Draw Results</h2>

        <h3 class="text-base md:text-lg font-bold text-sky-400 my-3 uppercase tracking-wider">Digit Games</h3>
        <div id="latestGridDigit" class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div class="text-slate-500 text-center col-span-full py-8 italic">Loading draw data...</div>
        </div>

        <h3 class="text-base md:text-lg font-bold text-sky-400 my-3 uppercase tracking-wider">Major Jackpots</h3>
        <div id="latestGridMajor" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-6">
            <div class="text-slate-500 text-center col-span-full py-8 italic">Connecting to PCSO...</div>
        </div>

        <div class="bg-slate-800/50 rounded-3xl border border-slate-700 p-5 md:p-8 mb-6">
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
        <!-- BRIEF INTRO + LINKS TO OTHER PAGES                           -->
        <!-- Content is distributed across sub-pages, not dumped here     -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-8 mb-6">

            <h2 class="text-2xl md:text-3xl font-black text-white mb-4">PCSO Lotto Results Today</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed mb-6">
                Lottong Pinoy is your complete source for PCSO lotto results in the Philippines. We provide real-time, accurate results for all nine PCSO lottery games including Ultra Lotto 6/58, Grand Lotto 6/55, Super Lotto 6/49, Mega Lotto 6/45, Lotto 6/42, 6D Lotto, 4D Lotto, 3D Lotto (Swertres), and 2D Lotto (EZ2). Our platform updates automatically after every draw, ensuring you have the latest winning numbers within minutes of the official PCSO announcement.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <a href="#" data-tab="schedule" class="footer-link group">
                    <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700 hover:border-sky-500/50 transition-all">
                        <h4 class="font-bold text-sky-400 text-sm mb-1 group-hover:text-sky-300">📋 Game Guide & Schedule</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">Complete game-by-game descriptions, odds, and draw schedules for all PCSO lotto games.</p>
                    </div>
                </a>
                <a href="#" data-tab="claim" class="footer-link group">
                    <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700 hover:border-green-500/50 transition-all">
                        <h4 class="font-bold text-green-400 text-sm mb-1 group-hover:text-green-300">🎯 How to Play & Claim</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">Step-by-step guide to playing the PCSO lotto and claiming your prizes.</p>
                    </div>
                </a>
                <a href="#" data-tab="alaga" class="footer-link group">
                    <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700 hover:border-pink-500/50 transition-all">
                        <h4 class="font-bold text-pink-400 text-sm mb-1 group-hover:text-pink-300">🛡️ Play Responsibly</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">Important reminders about responsible gambling and keeping your numbers safe.</p>
                    </div>
                </a>
                <a href="#" data-tab="about" class="footer-link group">
                    <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700 hover:border-purple-500/50 transition-all">
                        <h4 class="font-bold text-purple-400 text-sm mb-1 group-hover:text-purple-300">ℹ️ About Lottong Pinoy</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">Our mission, data sources, and tools to help you understand lottery patterns.</p>
                    </div>
                </a>
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
