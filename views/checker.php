<!-- views/checker.php -->
<section id="section-checker" class="section-page hidden">
        <!-- ===== NEW HEADER (Matching Home Style) ===== -->
    <div class="text-center my-6 md:my-10">
        <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
           Instant Precision<span class="text-blue-400"> Checker.</span>
        </h2>
        <p class="text-slate-400 text-md md:text-lg max-w-2xl mx-auto mt-3 font-medium">
            Verify your numbers against official historical data with a single click.
        </p>
    </div>
    <div class="flex flex-col lg:flex-row gap-6">
        
        <!-- SIDEBAR -->
        <aside class="w-full lg:w-[320px] shrink-0">
            <div class="lg:sticky lg:top-6 bg-slate-800 rounded-2xl p-6 border border-slate-700 shadow-2xl">
                <div class="flex items-center gap-2 mb-8">
                    <div class="w-2 h-6 bg-yellow-500 rounded-full"></div>
                    <h2 class="text-xl font-black text-white tracking-tight">NUMBER <span class="text-yellow-400">CHECKER</span></h2>
                </div>

                <div class="space-y-6">
                    <!-- Game -->
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Select Game</label>
                        <select id="checkGameSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
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

                    <!-- Logic -->
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Matching Logic</label>
                        <div class="flex items-center justify-center bg-slate-900 rounded-xl p-1 border border-slate-700">
                            <button id="logicExact" class="w-1/2 py-2 text-xs font-bold rounded-lg transition-all bg-yellow-500 text-slate-900">Exact</button>
                            <button id="logicPartial" class="w-1/2 py-2 text-xs font-bold rounded-lg transition-all text-slate-400 hover:text-white">Partial</button>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- MAIN -->
        <main class="flex-1 min-w-0 space-y-6">
            
            <!-- Input Grid -->
            <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 bg-slate-900/30">
                    <h3 class="text-lg font-bold text-white">Check Your Combination</h3>
                    <p class="text-[11px] text-slate-400 mt-1">
                        Check if your favorite numbers ('Alaga') have ever won the jackpot!
                    </p>
                </div>

                <div class="p-4 md:p-6">
                    <div id="numberGrid" class="grid grid-cols-7 md:grid-cols-10 gap-2"></div>
                </div>

                <!-- Selected Numbers Display -->
                <div class="px-6 py-3 bg-slate-900/50 border-t border-slate-700/50 text-center min-h-[40px] flex items-center justify-center">
                    <span class="text-xs text-slate-500 uppercase tracking-wider mr-2">Selection:</span>
                    <span id="selectedNumbersDisplay" class="font-black text-yellow-400 text-lg tracking-widest">--</span>
                </div>

                <!-- Action Footer -->
                <div class="px-6 py-4 border-t border-slate-700 flex justify-between items-center bg-slate-900/30">
                    <button id="clearSelectionBtn" class="text-xs text-red-400 hover:text-red-300 font-bold transition-colors">Clear Selection</button>
                    <button id="checkBtn" class="bg-yellow-500 hover:bg-yellow-400 text-slate-900 font-black px-8 py-3 rounded-xl shadow-lg uppercase tracking-widest text-xs transition-all">Check History</button>
                </div>
            </div>

            <!-- Results -->
            <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-white">Matched Results</h3>
                    
                    <!-- Sort Controls -->
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-slate-500 uppercase hidden sm:block">Sort by:</span>
                        <select id="resultSortSelect" class="bg-slate-900 border border-slate-700 text-slate-300 text-xs rounded-lg px-2 py-1 outline-none cursor-pointer focus:ring-1 focus:ring-blue-500">
                            <option value="date">Date (Newest)</option>
                            <option value="prize">Prize (Highest)</option>
                            <option value="winners">Winners (Most)</option>
                            <option value="matches">Matches (Best)</option>
                        </select>
                        <span id="checkCountBadge" class="text-xs text-slate-400 font-medium ml-2">0 found</span>
                    </div>
                </div>
                <div id="checkResultsList" class="divide-y divide-slate-700/50">
                    <p class="text-slate-500 text-xs text-center py-8">Select numbers to see if history is on your side.</p>
                </div>
            </div>

        </main>
    </div>
</section>