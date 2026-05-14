<!-- views/home.php -->

<!-- IMPORTANT: Default view, NO 'hidden' class -->
<section id="section-results" class="section-page">
    <div class="mb-8">
        
        <!-- HERO SECTION -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-black text-white leading-tight">
                More Than Just <span class="text-blue-400">Results.</span>
            </h2>
            <p class="text-slate-400 text-md md:text-lg max-w-2xl mx-auto mt-3 font-medium">
                We track the patterns and give you the numbers.
            </p>
            <p id="updateTimestamp" class="text-xs text-slate-500 mt-4 uppercase tracking-widest">
                Updated just now
            </p>
        </div>

        <!-- LATEST RESULTS -->
        <h3 class="text-lg md:text-xl font-bold text-sky-400 my-5 uppercase tracking-wider">Latest Draw Results</h3>
        <div id="latestGridMajor" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3 md:gap-4 mb-8">
            <div class="text-slate-500 text-center col-span-full py-8">Connecting...</div>
        </div>
        
        <h3 class="text-lg md:text-xl font-bold text-sky-400 my-5 uppercase tracking-wider">Digit Games</h3>
        <div id="latestGridDigit" class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4 mb-10">
             <div class="text-slate-500 text-center col-span-full py-8">Loading...</div>
        </div>

        <!-- TREND WATCH -->
        <div class="bg-slate-800/50 rounded-2xl border border-slate-700 p-6 mb-10">
            
            <!-- Header -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
                <div class="text-center sm:text-left">
                    <h3 class="text-lg font-bold text-white">🔍 Trend Watch</h3>
                    <p class="text-xs text-slate-400 mt-1">Analyze patterns for specific games.</p>
                </div>
                <select id="trendGameSelect" class="bg-slate-900 border border-slate-700 text-slate-200 rounded-lg px-4 py-2 text-sm font-bold outline-none cursor-pointer focus:ring-2 focus:ring-blue-500">
                    <option value="6/58">Ultra Lotto 6/58</option>
                    <option value="6/55">Grand Lotto 6/55</option>
                    <option value="6/49">Super Lotto 6/49</option>
                    <option value="2D">2D Lotto</option>
                    <option value="3D">3D Lotto</option>
                    <option value="4D">4D Lotto</option>
                    <option value="6D">6D Lotto</option>
                </select>
            </div>
            
            <!-- DAILY INSIGHT (MOVED TO TOP) -->
            <div id="dailyAnalysisBox" class="bg-blue-500/10 border border-blue-500/30 rounded-xl p-4 text-center mb-6">
                <div class="flex items-center justify-center gap-2 mb-1">
                    <span class="text-lg">💡</span>
                    <h4 class="font-bold text-blue-300 text-sm uppercase tracking-wide">Daily Insight</h4>
                </div>
                <p id="dailyAnalysisText" class="text-sm text-slate-300">
                    Analyzing the latest draw...
                </p>
            </div>

            <!-- Hot & Cold Grids -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Hot Numbers -->
                <div class="bg-red-500/5 border border-red-500/20 rounded-xl p-4">
                    <div class="flex items-center justify-center gap-2 mb-3">
                        <span class="text-2xl">🔥</span>
                        <h4 class="font-bold text-red-400">Numbers on Fire</h4>
                    </div>
                    <p id="homeHotDesc" class="text-[11px] text-slate-400 text-center mb-3">Analyzing...</p>
                    <div id="homeHotNumbers" class="flex justify-center gap-3 flex-wrap">
                        <div class="text-slate-500 text-xs">Calculating...</div>
                    </div>
                </div>

                <!-- Cold Numbers -->
                <div class="bg-cyan-500/5 border border-cyan-500/20 rounded-xl p-4">
                    <div class="flex items-center justify-center gap-2 mb-3">
                        <span class="text-2xl">❄️</span>
                        <h4 class="font-bold text-cyan-400">Due for a Win</h4>
                    </div>
                    <p class="text-[11px] text-slate-400 text-center mb-3">Haven't appeared in a while.</p>
                    <div id="homeColdNumbers" class="flex justify-center gap-3 flex-wrap">
                        <div class="text-slate-500 text-xs">Calculating...</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>