<!-- views/analysis.php -->
<section id="section-analysis" class="section-page hidden">
    <div class="text-center my-6 md:my-10">
        <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
           Deep-Dive Pattern<span class="text-blue-400"> Analysis</span>
        </h2>
        <p class="text-slate-400 text-md md:text-lg max-w-2xl mx-auto mt-3 font-medium">
            Visualize hot, cold, and overdue numbers with interactive data charts.
        </p>
    </div>
    <div class="flex flex-col lg:flex-row gap-6">
        
        <!-- SIDEBAR -->
        <aside class="w-full lg:w-[320px] shrink-0">
            <div class="lg:sticky lg:top-6 bg-slate-800 rounded-2xl p-6 border border-slate-700 shadow-2xl">
                <div class="flex items-center gap-2 mb-8">
                    <div class="w-2 h-6 bg-purple-500 rounded-full"></div>
                    <h2 class="text-xl font-black text-white tracking-tight">DATA <span class="text-purple-400">ANALYSIS.</span></h2>
                </div>

                <div class="space-y-6">
                    <!-- Game -->
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Select Game</label>
                        <select id="analysisGameSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
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

                    <!-- Dates -->
                    <div class="space-y-3">
                        <div>
                            <label class="block text-[12px] text-slate-500 mb-1">From</label>
                            <div class="grid grid-cols-2 gap-3">
                                <select id="analysisFromYear" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                                <select id="analysisFromMonth" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[12px] text-slate-500 mb-1">To</label>
                            <div class="grid grid-cols-2 gap-3">
                                <select id="analysisToYear" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                                <select id="analysisToMonth" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                            </div>
                        </div>
                    </div>

                    <button id="analyzeBtn" class="w-full bg-purple-600 hover:bg-purple-500 text-white font-black py-4 rounded-xl shadow-lg uppercase tracking-widest text-xs">Analyze Data</button>
                </div>

                <!-- NARRATIVE: Insight Box -->
                <div class="mt-6 bg-blue-500/10 border border-blue-500/20 rounded-lg p-4">
                    <h3 class="text-xs font-bold text-blue-400 uppercase tracking-wide">💡 Insight</h3>
                    <p class="text-[11px] text-slate-300 mt-1">
                        While lottery draws are random, analyzing trends helps you make informed choices. Look for patterns, but always play responsibly.
                    </p>
                </div>

            </div>
        </aside>

        <!-- MAIN -->
        <main class="flex-1 min-w-0 space-y-6">
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-slate-800 rounded-xl p-4 border border-slate-700">
                    <span class="text-[10px] text-slate-500 block uppercase">Total Draws</span>
                    <span id="analysisStatDraws" class="text-xl font-black text-white block mt-1">0</span>
                </div>
                <div class="bg-slate-800 rounded-xl p-4 border border-slate-700">
                    <span class="text-[10px] text-slate-500 block uppercase">Total Jackpot</span>
                    <span id="analysisStatPrize" class="text-xl font-black text-yellow-400 block mt-1">P 0</span>
                </div>
                <div class="bg-slate-800 rounded-xl p-4 border border-slate-700">
                    <span class="text-[10px] text-slate-500 block uppercase">Avg Sum</span>
                    <span id="analysisStatSum" class="text-xl font-black text-blue-400 block mt-1">0</span>
                </div>
                <div class="bg-slate-800 rounded-xl p-4 border border-slate-700">
                    <span class="text-[10px] text-slate-500 block uppercase">Winners</span>
                    <span id="analysisStatWinners" class="text-xl font-black text-green-400 block mt-1">0</span>
                </div>
            </div>

            <!-- Hot Numbers -->
            <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold text-white">🔥 Numbers on Fire</h3>
                        <!-- NARRATIVE -->
                        <p class="text-[11px] text-slate-400 mt-1">Most frequent winners. Players often "ride the trend" with these.</p>
                    </div>
                </div>
                <div id="hotNumbersGrid" class="p-6 flex flex-wrap gap-4 justify-center">
                    <p class="text-slate-500 text-sm">Click Analyze to see results.</p>
                </div>
            </div>

            <!-- Cold Numbers -->
            <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold text-white">❄️ Due for a Win</h3>
                        <!-- NARRATIVE -->
                        <p class="text-[11px] text-slate-400 mt-1">These haven't appeared in a while. Some players believe they are "overdue".</p>
                    </div>
                </div>
                <div id="coldNumbersGrid" class="p-6 flex flex-wrap gap-4 justify-center">
                    <p class="text-slate-500 text-sm">Click Analyze to see results.</p>
                </div>
            </div>
            <!-- HEATMAP SECTION -->
<div class="mt-10">
    <div class="flex items-center justify-center gap-2 mb-4">
        <span class="text-2xl">🌡️</span>
        <h3 class="text-lg font-bold text-white">Number Heatmap</h3>
    </div>
    
    <!-- Legend -->
    <div class="flex justify-center gap-4 mb-4 text-xs text-slate-400">
        <div class="flex items-center gap-1"><div class="w-3 h-3 rounded-sm bg-blue-500"></div> Cold</div>
        <div class="flex items-center gap-1"><div class="w-3 h-3 rounded-sm bg-slate-500"></div> Neutral</div>
        <div class="flex items-center gap-1"><div class="w-3 h-3 rounded-sm bg-red-500"></div> Hot</div>
    </div>

    <!-- The Grid -->
    <div id="heatmapGrid" class="grid grid-cols-10 gap-1 bg-slate-800/50 p-4 rounded-xl border border-slate-700">
        <!-- JS will inject numbers here -->
        <div class="col-span-full text-center text-slate-500 text-sm py-4">Run analysis to generate heatmap.</div>
    </div>
</div>

            <!-- Pairs & Trios Grid (2 Columns) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Frequent Pairs -->
                <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-700 flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-bold text-white">🔗 Frequent Pairs</h3>
                            <!-- NARRATIVE -->
                            <p class="text-[11px] text-slate-400 mt-1">Duo combinations that often appear together.</p>
                        </div>
                    </div>
                    <div id="pairsContainer" class="p-4 space-y-2">
                        <p class="text-slate-500 text-sm text-center">Click Analyze.</p>
                    </div>
                </div>

                <!-- Frequent Trios -->
                <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-700 flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-bold text-white">🔺 Frequent Trios</h3>
                            <!-- NARRATIVE -->
                            <p class="text-[11px] text-slate-400 mt-1">Triple threat! Groups of three numbers that frequently hit.</p>
                        </div>
                    </div>
                    <div id="triosContainer" class="p-4 space-y-2">
                        <p class="text-slate-500 text-sm text-center">Click Analyze.</p>
                    </div>
                </div>

            </div>

            <!-- Frequency Chart -->
            <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold text-white">📊 Frequency Distribution</h3>
                    <!-- NARRATIVE -->
                    <p class="text-[11px] text-slate-400 mt-1">A complete visual map of how often every number has been drawn.</p>
                </div>
                <div id="frequencyChart" class="p-6 space-y-3 max-h-[400px] overflow-y-auto">
                    <p class="text-slate-500 text-sm text-center">Click Analyze to see results.</p>
                </div>
            </div>

        </main>
    </div>
</section>