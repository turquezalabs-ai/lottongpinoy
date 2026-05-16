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

    <!-- ANALYSIS INTRODUCTION CONTENT -->
    <div class="max-w-4xl mx-auto mb-10 space-y-6 px-4">
        <div class="bg-slate-800/60 rounded-2xl border border-slate-700 p-6 md:p-8">
            <h3 class="text-xl md:text-2xl font-black text-white mb-4">Statistical Analysis of PCSO Lottery Data</h3>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-4">
                The Lottong Pinoy Analysis tool provides a comprehensive statistical breakdown of historical PCSO lottery draws. Whether you are a casual player curious about number trends or a dedicated analyst looking for patterns, this tool gives you the data you need to make informed decisions about your number selections. Our analysis engine processes thousands of past draws to calculate frequency distributions, identify hot and cold numbers, detect frequently paired numbers, and generate visual heatmaps of the entire number field.
            </p>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed">
                The analysis covers all nine PCSO games and allows you to customize the date range for your query. This means you can focus on recent trends by selecting the last few months, or take a long-term view by analyzing years of historical data. The four key statistics at the top — Total Draws, Total Jackpot, Average Sum, and Winners — provide a quick overview of the data scope. The detailed sections below dive deeper into individual number performance, number groupings, and frequency patterns that emerge from the data.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">🔥 Hot Numbers — Frequency Leaders</h4>
                <p class="text-slate-400 text-xs leading-relaxed">Hot numbers are those that have appeared most frequently in the winning combinations within your selected date range. These numbers have been drawn more often than the statistical average, which could indicate a short-term trend or simply reflect the natural variance inherent in random number generation. Some players choose to include hot numbers in their selections, believing that trends may continue in the short term. However, it is crucial to understand that frequency deviations are normal in any random system and do not imply predictability.</p>
            </div>
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">❄️ Cold Numbers — Statistically Overdue</h4>
                <p class="text-slate-400 text-xs leading-relaxed">Cold numbers are the opposite of hot numbers — they have appeared least frequently in draws within your selected period. The concept of "overdue" numbers is based on the expectation that over a sufficiently large number of draws, each number should appear roughly the same number of times. Numbers that have been drawn far less than expected are considered "cold" or "overdue." While this does not mean they are more likely to appear next, some players use cold numbers as part of a contrarian strategy, betting that these numbers will eventually regress toward their expected frequency.</p>
            </div>
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">🔗 Frequent Pairs and Trios</h4>
                <p class="text-slate-400 text-xs leading-relaxed">Our analysis identifies pairs and trios of numbers that have appeared together in winning combinations more frequently than would be expected by chance alone. For example, if numbers 12 and 34 have appeared in the same draw 15 times over the past year while the average pair frequency is 8, that pair would be highlighted as a frequent duo. Similarly, trios show groups of three numbers that tend to appear together. These co-occurrence patterns can be interesting for players who want to understand which number groupings have historically shown up together, though statistical independence means these patterns do not predict future co-occurrences.</p>
            </div>
            <div class="bg-slate-800/60 rounded-xl border border-slate-700 p-5">
                <h4 class="text-sm font-bold text-white mb-2">🌡️ Number Heatmap</h4>
                <p class="text-slate-400 text-xs leading-relaxed">The heatmap provides a visual representation of every number's frequency in the selected game, color-coded from blue (cold/least frequent) through neutral gray to red (hot/most frequent). This at-a-glance visualization makes it easy to spot which numbers have been drawn most and least often without having to read through individual frequency counts. The heatmap is particularly useful for identifying clusters of hot or cold numbers in specific ranges of the number field, which can inform your selection strategy whether you prefer to focus on trending numbers or seek out overdue ones.</p>
            </div>
        </div>

        <div class="bg-purple-500/10 border border-purple-500/20 rounded-xl p-5">
            <h4 class="text-sm font-bold text-purple-400 mb-2">Understanding the Average Sum Statistic</h4>
            <p class="text-slate-300 text-xs leading-relaxed mb-3">
                One of the key statistics our analysis provides is the Average Sum of winning combinations. For a 6/58 game, the theoretical median sum is approximately 177 (the midpoint of the possible range from 21 to 333). Combinations with sums close to the theoretical average are more common because there are more ways to form combinations that sum to the middle range. This statistical insight is used by some players to avoid combinations with extremely high or low sums, as those are less likely to occur purely due to combinatorial mathematics.
            </p>
            <p class="text-slate-400 text-xs leading-relaxed">
                <strong class="text-slate-300">Important Disclaimer:</strong> Statistical analysis of lottery data is provided for educational and entertainment purposes. Lottery draws are random events, and no amount of historical analysis can predict future results. The patterns and trends shown by this tool are descriptive of past data only, not predictive of future outcomes. Lottong Pinoy is an independent tool and is not affiliated with PCSO. Please play responsibly.
            </p>
        </div>
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
                        <select id="analysisGameSelect" aria-label="Select game for analysis" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer">
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
                                <select id="analysisFromYear" aria-label="Analysis from year" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                                <select id="analysisFromMonth" aria-label="Analysis from month" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[12px] text-slate-500 mb-1">To</label>
                            <div class="grid grid-cols-2 gap-3">
                                <select id="analysisToYear" aria-label="Analysis to year" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
                                <select id="analysisToMonth" aria-label="Analysis to month" class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-3 py-2.5 text-sm outline-none cursor-pointer"></select>
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