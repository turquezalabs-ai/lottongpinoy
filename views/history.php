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
                        <select id="gameSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
                            <option disabled>Loading...</option>
                        </select>
                    </div>

                    <!-- Schedule -->
                    <div id="scheduleContainer" class="hidden">
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Schedule</label>
                        <select id="scheduleSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
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
                                <select id="fromYearSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                                <select id="fromMonthSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[12px] text-slate-500 mb-1">To</label>
                            <div class="grid grid-cols-2 gap-3">
                                <select id="toYearSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                                <select id="toMonthSelect" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
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