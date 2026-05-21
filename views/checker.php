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

    <!-- CHECKER INTRODUCTION CONTENT -->
    <div class="max-w-4xl mx-auto mb-10 space-y-6 px-4">
        <div class="bg-slate-800/60 rounded-2xl border border-slate-700 p-6 md:p-8">
            <h3 class="text-xl md:text-2xl font-black text-white mb-4">Check Your Numbers Against PCSO History</h3>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-4">
                Have you ever wondered if your favorite numbers — your "alaga" — have ever hit the jackpot in a PCSO draw? The Number Checker tool lets you find out instantly. Simply select your game, pick your numbers from the interactive grid, and click "Check History" to search through the entire archive of past draws. The checker compares your selected combination against every historical result and shows you all matches, including partial matches where some of your numbers appeared in winning combinations.
            </p>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed">
                This tool is perfect for players who have a set of "lucky numbers" they play regularly and want to see how those numbers have performed historically. It is also useful for verifying whether a specific combination has ever been drawn as a jackpot winner. Understanding how your numbers have fared in the past can be an interesting exercise, though it is important to remember that each draw is an independent event and historical performance has no bearing on future outcomes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">🎯 Exact Match Mode</h4>
                <p class="text-slate-400 text-xs leading-relaxed">In Exact mode, the checker looks for draws where your entire combination matches the winning numbers exactly. This is the strictest matching criteria — all of your selected numbers must appear in the winning combination. For major games like Ultra Lotto 6/58 or Grand Lotto 6/55, exact jackpot matches are extremely rare, which is reflected in the massive prize pools these games offer. Exact matches in digit games (2D, 3D, 4D, 6D) require the numbers to match in the correct position and order.</p>
            </div>
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">🔄 Partial Match Mode</h4>
                <p class="text-slate-400 text-xs leading-relaxed">Partial match mode shows you draws where at least some of your selected numbers appeared in the winning combination. For major games, partial matches require a minimum of 3 matching numbers from your selection. For digit games, the checker looks for consecutive positional matches — meaning the matching digits must appear in the correct sequence within the winning number. This mode is valuable for understanding how close your numbers have come to winning in the past and how often individual numbers from your set appear in draws.</p>
            </div>
        </div>

        <div class="bg-yellow-500/10 border border-yellow-500/20 rounded-xl p-5">
            <h4 class="text-sm font-bold text-yellow-400 mb-2">Tips for Using the Number Checker</h4>
            <p class="text-slate-300 text-xs leading-relaxed mb-3">
                To get the most out of the checker, start by selecting the game you typically play. Click on the numbers in the grid to select them — the number of picks allowed depends on the game type (6 numbers for major games, 2-6 digits for digit games). Your current selection is displayed below the grid for easy review. Once you have your numbers, click "Check History" to search the database. Results can be sorted by date, prize amount, number of winners, or match quality using the sort dropdown.
            </p>
            <p class="text-slate-400 text-xs leading-relaxed">
                <strong class="text-slate-300">Disclaimer:</strong> This checker is an informational tool provided by Lottong Pinoy, an independent website not affiliated with PCSO. Results shown are for reference only. Always verify winning tickets at authorized PCSO outlets. Past results do not predict future draws — each lottery draw is a random and independent event. Play responsibly.
            </p>
        </div>
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
                        <label for="checkGameSelect" class="sr-only">Select game for checker</label>
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
                            <button id="logicExact" aria-label="Exact match mode" class="w-1/2 py-2 text-xs font-bold rounded-lg transition-all bg-yellow-500 text-slate-900 focus:outline-none focus:ring-2 focus:ring-yellow-400">Exact</button>
                            <button id="logicPartial" aria-label="Partial match mode" class="w-1/2 py-2 text-xs font-bold rounded-lg transition-all text-slate-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-yellow-400">Partial</button>
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
                    <button id="clearSelectionBtn" class="text-xs text-red-400 hover:text-red-300 font-bold transition-colors focus:outline-none focus:ring-2 focus:ring-red-400 rounded">Clear Selection</button>
                    <button id="checkBtn" class="bg-yellow-500 hover:bg-yellow-400 text-slate-900 font-black px-8 py-3 rounded-xl shadow-lg uppercase tracking-widest text-xs transition-all focus:outline-none focus:ring-2 focus:ring-yellow-400">Check History</button>
                </div>
            </div>

            <!-- Results -->
            <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-white">Matched Results</h3>
                    
                    <!-- Sort Controls -->
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-slate-500 uppercase hidden sm:block">Sort by:</span>
                        <label for="resultSortSelect" class="sr-only">Sort results by</label>
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