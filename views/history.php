<!-- views/history.php -->
<section id="section-history" class="section-page hidden">
    <div class="text-center my-6 md:my-10">
        <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
            The Complete Data<span class="text-blue-400"> Archive.</span>
        </h2>
        <p class="text-slate-400 text-md md:text-lg max-w-2xl mx-auto mt-3 font-medium">
            Trace the trends and explore the full history of Philippine lottery draws.
        </p>
    </div>

    <!-- HISTORY INTRODUCTION CONTENT -->
    <div class="max-w-4xl mx-auto mb-10 space-y-6 px-4">
        <div class="bg-slate-800/60 rounded-2xl border border-slate-700 p-6 md:p-8">
            <h3 class="text-xl md:text-2xl font-black text-white mb-4">Explore the Complete PCSO Draw History</h3>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-4">
                The Philippine Charity Sweepstakes Office (PCSO) has been conducting lottery draws since 1933, making it one of the oldest lottery systems in Southeast Asia. Our comprehensive draw history archive allows you to search through thousands of past results across all PCSO games, including Ultra Lotto 6/58, Grand Lotto 6/55, Super Lotto 6/49, Mega Lotto 6/45, Lotto 6/42, and the digit games 6D, 4D, 3D, and 2D Lotto. Whether you are researching number patterns, verifying an old ticket, or simply curious about historical outcomes, this tool puts the entire PCSO database at your fingertips.
            </p>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-4">
                Each record in our archive includes the draw date, the winning combination, the jackpot prize amount, and the number of winners for that particular draw. You can filter results by game type (major or digit), specific game, draw schedule, and custom date ranges to narrow down exactly what you are looking for. The quick stats panel updates automatically to show you summary statistics for your filtered results, including total draws, total winners, and aggregate prize amounts.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <div class="text-2xl mb-3">🔍</div>
                <h4 class="text-sm font-bold text-white mb-2">Advanced Filtering</h4>
                <p class="text-slate-400 text-xs leading-relaxed">Filter by game category, specific game, draw schedule, and custom date ranges spanning multiple years. Our archive covers draws from as far back as data is available, giving you the most comprehensive view of PCSO results.</p>
            </div>
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <div class="text-2xl mb-3">📊</div>
                <h4 class="text-sm font-bold text-white mb-2">Quick Statistics</h4>
                <p class="text-slate-400 text-xs leading-relaxed">Instantly see aggregate statistics for your filtered results including total number of draws, combined jackpot prizes, and total winners. These stats help you understand the scope and frequency of outcomes for any game and period.</p>
            </div>
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <div class="text-2xl mb-3">📄</div>
                <h4 class="text-sm font-bold text-white mb-2">Paginated Results</h4>
                <p class="text-slate-400 text-xs leading-relaxed">Browse through results 15 draws at a time with our convenient pagination system. Each result displays the draw date, winning combination with visual number balls, jackpot prize, and winner count for easy scanning.</p>
            </div>
        </div>

        <div class="bg-blue-500/10 border border-blue-500/20 rounded-xl p-5">
            <h4 class="text-sm font-bold text-blue-400 mb-2">How to Use the History Archive</h4>
            <p class="text-slate-300 text-xs leading-relaxed mb-3">
                Using the draw history tool is straightforward. First, select the game category — Major Games for 6-number lotto formats (6/58, 6/55, 6/49, 6/45, 6/42) or Digit Games for fixed-digit formats (6D, 4D, 3D, 2D). Next, choose the specific game from the dropdown. If you selected a digit game, you can further filter by draw schedule (11 AM, 4 PM, or 9 PM). Then set your desired date range using the From and To selectors. Click "Fetch Results" to load the matching draws. The quick stats panel will automatically update with summary data for your selection.
            </p>
            <p class="text-slate-400 text-xs leading-relaxed">
                <strong class="text-slate-300">Important Disclaimer:</strong> Historical lottery results are provided for informational and entertainment purposes only. Past results do not influence or predict future draws. Each lottery draw is an independent random event. Please play responsibly and only spend what you can afford.
            </p>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-6">
        
        <!-- SIDEBAR -->
        <aside class="w-full lg:w-[320px] shrink-0">
            <div class="lg:sticky lg:top-6 bg-slate-800 rounded-2xl p-6 border border-slate-700 shadow-2xl">
                <div class="flex items-center gap-2 mb-8">
                    <div class="w-2 h-6 bg-blue-500 rounded-full"></div>
                    <h2 class="text-xl font-black text-white tracking-tight">DATA <span class="text-blue-400">FILTER</span></h2>
                </div>

                <div class="space-y-6">
                    <!-- Category -->
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Category</label>
                        <div class="flex flex-wrap gap-4 items-center">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input type="radio" name="catRadio" value="major" checked class="w-4 h-4 accent-sky-500 cursor-pointer">
                                <span class="text-sm text-slate-300 group-hover:text-white">Major Game</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input type="radio" name="catRadio" value="digit" class="w-4 h-4 accent-sky-500 cursor-pointer">
                                <span class="text-sm text-slate-300 group-hover:text-white">Digit Game</span>
                            </label>
                        </div>
                    </div>

                    <!-- Game -->
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Select Game</label>
                        <select id="gameSelect" aria-label="Select game" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
                            <option disabled>Loading...</option>
                        </select>
                    </div>

                    <!-- Schedule -->
                    <div id="scheduleContainer" class="hidden">
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Schedule</label>
                        <select id="scheduleSelect" aria-label="Select draw schedule" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
                            <option value="all">All Schedules</option>
                            <option value="11AM">11:00 AM</option>
                            <option value="4PM">4:00 PM</option>
                            <option value="9PM">9:00 PM</option>
                        </select>
                    </div>

                    <!-- Dates -->
                    <div class="space-y-3">
                        <div>
                            <label class="block text-[12px] text-slate-500 mb-1">From</label>
                            <div class="grid grid-cols-2 gap-3">
                                <select id="fromYearSelect" aria-label="From year" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                                <select id="fromMonthSelect" aria-label="From month" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[12px] text-slate-500 mb-1">To</label>
                            <div class="grid grid-cols-2 gap-3">
                                <select id="toYearSelect" aria-label="To year" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                                <select id="toMonthSelect" aria-label="To month" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                            </div>
                        </div>
                    </div>
                    <button id="searchBtn" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-black py-4 rounded-xl shadow-lg uppercase tracking-widest text-xs">Fetch Results</button>

                    <!-- Stats (Hidden by default) -->
                    <div id="quickStatsBox" class="hidden pt-6 border-t border-slate-700">
                        <h4 class="text-[10px] text-slate-500 uppercase tracking-widest mb-4 text-center">Quick Stats</h4>
                        <div class="grid grid-cols-3 gap-4 text-center">
                            <div>
                                <span class="block text-[10px] text-slate-500 uppercase mb-1">Draws</span>
                                <span id="statDraws" class="block text-xl font-black text-white">0</span>
                            </div>
                            <div>
                                <span class="block text-[10px] text-slate-500 uppercase mb-1">Winners</span>
                                <span id="statWinners" class="block text-xl font-black text-green-400">0</span>
                            </div>
                            <div>
                                <span class="block text-[10px] text-slate-500 uppercase mb-1">Prize</span>
                                <span id="statPrize" class="block text-xl font-black text-yellow-400 break-words">P 0</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile Readout (FIXED: Removed Duplicate ID) -->
                    <div id="statMobileReadout" class="hidden pt-6 border-t border-slate-700 text-center text-sm text-slate-400"></div>
                </div>
            </div>
        </aside>

        <!-- MAIN TABLE -->
        <main class="flex-1 min-w-0 space-y-6">
            <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-700 flex justify-between items-center">
                    <div>
                        <span id="headerGameLabel" class="text-[10px] font-black text-blue-400 uppercase tracking-[0.2em]">All Games</span>
                        <h3 class="text-lg font-bold text-white">Search Results</h3>
                    </div>
                    <span id="resultCountBadge" class="text-xs text-slate-400 font-medium">0 results</span>
                </div>

                <!-- Table Header -->
                <div id="tableHead" class="hidden md:block bg-slate-900/50 border-b border-slate-700">
                    <div class="grid grid-cols-12 gap-4 px-6 py-4 text-[10px] font-black uppercase tracking-widest text-slate-500">
                        <div class="col-span-2">Date</div>
                        <div class="col-span-5 text-center">Winning Combination</div>
                        <div class="col-span-3 text-right">Jackpot Prize</div>
                        <div class="col-span-2 text-right">Wins</div>
                    </div>
                </div>

                <!-- Table Body -->
                <div id="tableBody" class="divide-y divide-slate-700/50">
                    <p class="text-slate-500 text-xs text-center py-8">Click "Fetch Results" to start.</p>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center items-center gap-6 text-xs font-black uppercase tracking-widest text-slate-500">
                <button id="prevBtn" class="hover:text-blue-400">&larr; Previous</button>
                <span id="pageInfo" class="text-slate-300 font-bold">Page 1 / 1</span>
                <button id="nextBtn" class="hover:text-blue-400">Next &rarr;</button>
            </div>
        </main>
    </div>
</section>