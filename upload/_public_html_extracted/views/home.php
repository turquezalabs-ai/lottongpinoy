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
        <!-- SEO CONTENT: PCSO LOTTO GUIDE FOR SEARCH ENGINE VISIBILITY   -->
        <!-- This section provides substantial, unique textual content     -->
        <!-- that Google AdSense requires for "high value" classification  -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-10 mb-6 space-y-8">
            
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

        <!-- ============================================================ -->
        <!-- DETAILED GAME DESCRIPTIONS - Unique content for each game     -->
        <!-- Google values pages with comprehensive, original content       -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-10 mb-6 space-y-6">

            <h2 class="text-2xl md:text-3xl font-black text-white mb-4">PCSO Lottery Games — Complete Game-by-Game Guide</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed mb-6">
                The Philippine Charity Sweepstakes Office offers nine distinct lottery games, each with different odds, prize structures, and draw schedules. Understanding the differences between these games is essential for making informed choices about which games to play. Below is a comprehensive breakdown of every PCSO lotto game, including how to play, odds of winning, and prize information.
            </p>

            <!-- Ultra Lotto 6/58 -->
            <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                <h3 class="text-lg font-bold text-sky-400 mb-2">Ultra Lotto 6/58 — The Biggest Jackpot in the Philippines</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Ultra Lotto 6/58 is the flagship game of PCSO, offering the largest starting jackpot among all Philippine lottery games at a guaranteed minimum of 75 million pesos. To play, you select six numbers from 1 to 58 on a lotto ticket. Draws are held every Tuesday, Friday, and Sunday at 9:00 PM Philippine Standard Time. The odds of winning the Ultra Lotto 6/58 jackpot are 1 in 40,475,358, making it the most challenging PCSO game to win but also the most rewarding when someone hits the jackpot. When no one matches all six numbers, the jackpot rolls over and grows progressively larger, which is why Ultra Lotto 6/58 jackpots have been known to exceed 1 billion pesos during extended rollover streaks. Each ticket costs 20 pesos per combination. You can also play System 7 through System 12 for a higher chance, though at a proportionally higher cost.
                </p>
            </div>

            <!-- Grand Lotto 6/55 -->
            <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                <h3 class="text-lg font-bold text-sky-400 mb-2">Grand Lotto 6/55 — The Second Largest Jackpot Game</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Grand Lotto 6/55 features a minimum jackpot of 45 million pesos and is drawn every Monday, Wednesday, and Saturday at 9:00 PM. Players choose six numbers from 1 to 55, and the odds of winning the jackpot are 1 in 28,989,675. While the starting jackpot is smaller than Ultra Lotto 6/58, the Grand Lotto has produced some of the biggest prizes in Philippine lottery history during long rollover periods. The game is particularly popular among players who want the excitement of a large jackpot with slightly better odds than 6/58. Tickets cost 20 pesos per standard combination. The game follows the same System Play options as other major games, allowing players to select more than six numbers for multiple combination coverage.
                </p>
            </div>

            <!-- Super Lotto 6/49 -->
            <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                <h3 class="text-lg font-bold text-sky-400 mb-2">Super Lotto 6/49 — A Balanced Game for Smart Players</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Super Lotto 6/49 offers a minimum jackpot of 25 million pesos with draws every Tuesday, Thursday, and Sunday at 9:00 PM. Players pick six numbers from 1 to 49, with jackpot odds of 1 in 13,983,816. This game strikes a popular balance between significant jackpot amounts and more favorable odds compared to 6/55 and 6/58. Many experienced Filipino lotto players consider Super Lotto 6/49 the sweet spot in the PCSO game lineup because the odds are reasonable enough that the jackpot is won more frequently, while the prizes still reach impressive amounts during rollovers. Each ticket costs 20 pesos.
                </p>
            </div>

            <!-- Mega Lotto 6/45 -->
            <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                <h3 class="text-lg font-bold text-sky-400 mb-2">Mega Lotto 6/45 — Better Odds, Still Big Prizes</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Mega Lotto 6/45 starts with a minimum jackpot of 15 million pesos and is drawn on Monday, Wednesday, and Friday at 9:00 PM. With six numbers chosen from 1 to 45, the odds of winning the jackpot are 1 in 8,145,060 — significantly better than the larger games. This makes Mega Lotto 6/45 one of the more winnable major games in the PCSO lineup. The game attracts players who prefer a better probability of winning while still chasing a multi-million peso jackpot. Tickets are 20 pesos per combination, and System Play options are available for players who want to cover more combinations.
                </p>
            </div>

            <!-- Lotto 6/42 -->
            <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                <h3 class="text-lg font-bold text-sky-400 mb-2">Lotto 6/42 — The Most Winnable Major Game</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Lotto 6/42 has the best odds among all PCSO major games, with a 1 in 5,245,786 chance of hitting the jackpot. The minimum jackpot is 10 million pesos, and draws are held every Tuesday, Thursday, and Saturday at 9:00 PM. Players select six numbers from 1 to 42. Because the number pool is smaller, the jackpot is won more frequently than in other major games, making it a favorite among players who value higher probability over massive jackpots. At 20 pesos per ticket, Lotto 6/42 is an accessible entry point for regular lotto players and is considered the most practical choice for consistent play.
                </p>
            </div>

            <!-- Digit Games -->
            <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                <h3 class="text-lg font-bold text-purple-400 mb-2">PCSO Digit Games — 6D, 4D, 3D (Swertres), and 2D (EZ2)</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    PCSO digit games are among the most popular lottery games in the Philippines because they offer better odds and more frequent draws than the major jackpot games. The 6D Lotto requires you to pick a six-digit number from 000000 to 999999 for a top prize of 150,000 pesos, drawn on Tuesday, Thursday, and Saturday. The 4D Lotto uses a four-digit number from 0000 to 9999, offering a 10,000 peso top prize, drawn on Monday, Wednesday, and Friday. The 3D Lotto, commonly known as Swertres, is one of the most popular games in the country — players pick a three-digit number from 000 to 999 for a 4,500 peso prize, drawn three times daily at 11AM, 4PM, and 9PM. The 2D Lotto, also called EZ2, involves picking a two-digit number from 00 to 99 for a 4,000 peso prize, also drawn three times daily. Digit game tickets cost 10 pesos per play, and players can also choose Rambolito play for 3D and 2D games, which wins if your digits match in any order.
                </p>
            </div>

        </div>

        <!-- ============================================================ -->
        <!-- HOW TO PLAY GUIDE - Step by step instructions                 -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-10 mb-6 space-y-6">
            
            <h2 class="text-2xl md:text-3xl font-black text-white mb-4">How to Play the PCSO Lotto — Step-by-Step Guide</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                Playing the PCSO lotto is straightforward, but understanding the process ensures you have the best experience. Whether you are a first-time player or a seasoned bettor, following these steps will help you purchase tickets correctly, check results efficiently, and claim prizes without issues.
            </p>

            <div class="space-y-4">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 font-bold shrink-0">1</div>
                    <div>
                        <h4 class="font-bold text-white">Choose Your Game</h4>
                        <p class="text-slate-400 text-sm leading-relaxed mt-1">Visit any authorized PCSO lotto outlet and select which game you want to play. Each game has different rules, prize structures, and draw schedules. Consider your budget and preferred odds when choosing. Major games (6/42, 6/45, 6/49, 6/55, 6/58) offer bigger jackpots but harder odds, while digit games (2D, 3D, 4D, 6D) offer better odds with smaller prizes.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 font-bold shrink-0">2</div>
                    <div>
                        <h4 class="font-bold text-white">Fill Out Your Ticket</h4>
                        <p class="text-slate-400 text-sm leading-relaxed mt-1">For major games, mark six numbers on the betting card within the specified range. For digit games, write your chosen digits on the card. You can also ask the teller for a "Lucky Pick" where the computer randomly generates your numbers. Decide whether you want to play standard or System Play (which generates multiple combinations from more than six selected numbers).</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 font-bold shrink-0">3</div>
                    <div>
                        <h4 class="font-bold text-white">Pay and Get Your Ticket</h4>
                        <p class="text-slate-400 text-sm leading-relaxed mt-1">Pay the teller and receive your printed ticket. Standard tickets cost 20 pesos for major games and 10 pesos for digit games. Immediately check that the numbers, game type, and draw date are correct before leaving the counter. Sign the back of your ticket right away to establish ownership — this is critical because a lotto ticket is a bearer instrument, meaning whoever holds it can claim the prize.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 font-bold shrink-0">4</div>
                    <div>
                        <h4 class="font-bold text-white">Watch the Draw or Check Results Online</h4>
                        <p class="text-slate-400 text-sm leading-relaxed mt-1">PCSO draws are broadcast live on PTV-4 and streamed on the official PCSO Facebook page. You can also check results on Lottong Pinoy within minutes after each draw. Our platform updates automatically, so you always have access to the latest winning numbers. Use our Number Checker tool to quickly verify if your numbers match any winning combination from past draws.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 font-bold shrink-0">5</div>
                    <div>
                        <h4 class="font-bold text-white">Claim Your Prize If You Win</h4>
                        <p class="text-slate-400 text-sm leading-relaxed mt-1">Prizes of 20 to 5,000 pesos can be claimed at any authorized PCSO outlet. Prizes of 5,001 to 20,000 pesos must be claimed at a PCSO Branch Office with valid ID. Prizes above 20,000 pesos and all jackpot prizes must be claimed at the PCSO Main Office in Manila. Winnings above 10,000 pesos are subject to a 20% final withholding tax under the TRAIN Law. All prizes must be claimed within one year from the draw date. Visit our <a href="#" data-tab="claim" class="footer-link text-sky-400 underline">How to Claim page</a> for complete details.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- ============================================================ -->
        <!-- RESPONSIBLE GAMBLING SECTION - Required for AdSense approval -->
        <!-- ============================================================ -->
        <div class="bg-emerald-500/5 rounded-3xl border border-emerald-500/20 p-6 md:p-10 mb-6 space-y-4">
            <h2 class="text-2xl md:text-3xl font-black text-white mb-2">Play Responsibly — Your Well-Being Matters</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                Lottong Pinoy is committed to promoting responsible gambling. The PCSO lottery should be enjoyed as a form of entertainment, never as a financial strategy or a way to solve money problems. Set a personal budget before you play and never exceed it. Never borrow money to buy lotto tickets, and never spend money allocated for essentials like food, rent, or bills. The odds of winning a jackpot are extremely low — for Ultra Lotto 6/58, the odds are 1 in over 40 million — so treat every ticket as an entertainment expense rather than an investment.
            </p>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                If you or someone you know is experiencing problems with gambling, please reach out for help. The Philippine Department of Health provides mental health support through their helpline. You can also contact the National Center for Mental Health crisis hotline. Remember, there is no shame in asking for help, and recognizing a problem is the first step toward recovery. Play for fun, play within your means, and always prioritize your financial and mental health over lottery tickets.
            </p>
        </div>

        <!-- ============================================================ -->
        <!-- PCSO LOTTO ODDS & PROBABILITY TABLE                          -->
        <!-- Unique reference content that Google values for AdSense        -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-10 mb-6 space-y-6">

            <h2 class="text-2xl md:text-3xl font-black text-white mb-4">PCSO Lotto Odds & Probability — Complete Reference</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                Understanding the mathematical probability behind each PCSO lottery game is essential for making informed decisions about which games to play. Every lottery game is designed with specific odds that determine how likely you are to win the jackpot or any prize tier. While luck is the ultimate factor, knowing the odds helps you set realistic expectations and play responsibly. Below is a comprehensive breakdown of the odds for every PCSO game, including the total number of possible combinations, jackpot probability, and the expected number of draws before a statistical win.
            </p>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-slate-900/80 border-b border-slate-700 text-xs uppercase tracking-widest text-slate-500">
                        <tr>
                            <th class="p-4">Game</th>
                            <th class="p-4 text-center">Number Pool</th>
                            <th class="p-4 text-center">Total Combinations</th>
                            <th class="p-4 text-center">Jackpot Odds</th>
                            <th class="p-4 text-center">Min. Jackpot</th>
                            <th class="p-4 text-center">Ticket Price</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700/50">
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">Ultra Lotto 6/58</td>
                            <td class="p-4 text-center text-slate-400">1–58</td>
                            <td class="p-4 text-center text-slate-300 font-mono">40,475,358</td>
                            <td class="p-4 text-center text-red-400 font-bold">1 in 40.5M</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱75M</td>
                            <td class="p-4 text-center text-slate-400">₱20</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">Grand Lotto 6/55</td>
                            <td class="p-4 text-center text-slate-400">1–55</td>
                            <td class="p-4 text-center text-slate-300 font-mono">28,989,675</td>
                            <td class="p-4 text-center text-orange-400 font-bold">1 in 29.0M</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱45M</td>
                            <td class="p-4 text-center text-slate-400">₱20</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">Super Lotto 6/49</td>
                            <td class="p-4 text-center text-slate-400">1–49</td>
                            <td class="p-4 text-center text-slate-300 font-mono">13,983,816</td>
                            <td class="p-4 text-center text-amber-400 font-bold">1 in 14.0M</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱25M</td>
                            <td class="p-4 text-center text-slate-400">₱20</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">Mega Lotto 6/45</td>
                            <td class="p-4 text-center text-slate-400">1–45</td>
                            <td class="p-4 text-center text-slate-300 font-mono">8,145,060</td>
                            <td class="p-4 text-center text-yellow-400 font-bold">1 in 8.1M</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱15M</td>
                            <td class="p-4 text-center text-slate-400">₱20</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">Lotto 6/42</td>
                            <td class="p-4 text-center text-slate-400">1–42</td>
                            <td class="p-4 text-center text-slate-300 font-mono">5,245,786</td>
                            <td class="p-4 text-center text-green-400 font-bold">1 in 5.2M</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱10M</td>
                            <td class="p-4 text-center text-slate-400">₱20</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">6D Lotto</td>
                            <td class="p-4 text-center text-slate-400">000000–999999</td>
                            <td class="p-4 text-center text-slate-300 font-mono">1,000,000</td>
                            <td class="p-4 text-center text-green-400 font-bold">1 in 1.0M</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱150K</td>
                            <td class="p-4 text-center text-slate-400">₱10</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">4D Lotto</td>
                            <td class="p-4 text-center text-slate-400">0000–9999</td>
                            <td class="p-4 text-center text-slate-300 font-mono">10,000</td>
                            <td class="p-4 text-center text-green-400 font-bold">1 in 10K</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱10K</td>
                            <td class="p-4 text-center text-slate-400">₱10</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">3D Lotto (Swertres)</td>
                            <td class="p-4 text-center text-slate-400">000–999</td>
                            <td class="p-4 text-center text-slate-300 font-mono">1,000</td>
                            <td class="p-4 text-center text-green-400 font-bold">1 in 1,000</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱4,500</td>
                            <td class="p-4 text-center text-slate-400">₱10</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">2D Lotto (EZ2)</td>
                            <td class="p-4 text-center text-slate-400">00–99</td>
                            <td class="p-4 text-center text-slate-300 font-mono">100</td>
                            <td class="p-4 text-center text-green-400 font-bold">1 in 100</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱4,000</td>
                            <td class="p-4 text-center text-slate-400">₱10</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                As the table shows, there is a direct trade-off between jackpot size and probability of winning. The 2D Lotto (EZ2) offers the best odds at 1 in 100, but its prize is only 4,000 pesos. On the other end, Ultra Lotto 6/58 can produce jackpots exceeding 1 billion pesos during extended rollover periods, but the odds of hitting it are roughly equivalent to being struck by lightning in your lifetime. Most experienced players recommend choosing games based on your budget and risk tolerance: if you want frequent small wins, digit games like 3D and 2D are your best bet, while those dreaming of life-changing jackpots gravitate toward the 6/58 and 6/55 games despite the much longer odds.
            </p>

        </div>

        <!-- ============================================================ -->
        <!-- SYSTEM PLAY COMPLETE GUIDE                                    -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-10 mb-6 space-y-6">

            <h2 class="text-2xl md:text-3xl font-black text-white mb-4">PCSO System Play — Complete Cost & Combination Guide</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                System Play is one of the most popular ways to increase your chances of winning the PCSO lottery without having to fill out multiple betting cards. Instead of selecting just six numbers, you choose seven or more numbers, and the system automatically generates all possible six-number combinations from your selection. This means that if any six of your chosen numbers are drawn, you are guaranteed to win the jackpot. The trade-off is cost: more numbers means more combinations, and each combination costs 20 pesos. Below is the complete System Play reference for all major PCSO lotto games, showing how many combinations each system generates and the total cost per system.
            </p>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-slate-900/80 border-b border-slate-700 text-xs uppercase tracking-widest text-slate-500">
                        <tr>
                            <th class="p-4">System Play</th>
                            <th class="p-4 text-center">Numbers Selected</th>
                            <th class="p-4 text-center">Combinations Generated</th>
                            <th class="p-4 text-center">Cost (at ₱20/comb.)</th>
                            <th class="p-4 text-center">Odds Improvement</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700/50">
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">System 7</td>
                            <td class="p-4 text-center text-slate-400">7</td>
                            <td class="p-4 text-center text-slate-300 font-mono">7</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱140</td>
                            <td class="p-4 text-center text-slate-400">7x better</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">System 8</td>
                            <td class="p-4 text-center text-slate-400">8</td>
                            <td class="p-4 text-center text-slate-300 font-mono">28</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱560</td>
                            <td class="p-4 text-center text-slate-400">28x better</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">System 9</td>
                            <td class="p-4 text-center text-slate-400">9</td>
                            <td class="p-4 text-center text-slate-300 font-mono">84</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱1,680</td>
                            <td class="p-4 text-center text-slate-400">84x better</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">System 10</td>
                            <td class="p-4 text-center text-slate-400">10</td>
                            <td class="p-4 text-center text-slate-300 font-mono">210</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱4,200</td>
                            <td class="p-4 text-center text-slate-400">210x better</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">System 11</td>
                            <td class="p-4 text-center text-slate-400">11</td>
                            <td class="p-4 text-center text-slate-300 font-mono">462</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱9,240</td>
                            <td class="p-4 text-center text-slate-400">462x better</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">System 12</td>
                            <td class="p-4 text-center text-slate-400">12</td>
                            <td class="p-4 text-center text-slate-300 font-mono">924</td>
                            <td class="p-4 text-center text-yellow-500 font-bold">₱18,480</td>
                            <td class="p-4 text-center text-slate-400">924x better</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                The key insight about System Play is that while it improves your odds proportionally, it does not change the underlying probability of any individual number being drawn. For example, playing System 7 for Ultra Lotto 6/58 reduces your odds from 1 in 40.5 million to approximately 1 in 5.8 million — a significant improvement, but still extremely unlikely. System Play is best used strategically when jackpots are very large and the expected value of a ticket approaches or exceeds its cost. Some players pool their resources with friends or family to afford higher System Play levels, splitting both the cost and any potential winnings. Always remember that regardless of how many combinations you play, the lottery remains a game of chance.
            </p>

        </div>

        <!-- ============================================================ -->
        <!-- BIGGEST PCSO JACKPOT WINNERS                                 -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-10 mb-6 space-y-6">

            <h2 class="text-2xl md:text-3xl font-black text-white mb-4">Biggest PCSO Lotto Jackpots in Philippine History</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                The Philippine lottery has produced some truly life-changing jackpots over the years. These record-breaking prizes have captured the imagination of the entire nation and driven unprecedented ticket sales. While winning a jackpot of this magnitude is exceedingly rare, these stories show that it is possible — and they also serve as important reminders about the responsibility that comes with sudden wealth. Below are some of the most notable jackpot wins in PCSO history, showing the game, the prize amount, and the year the jackpot was claimed.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold text-yellow-400 uppercase tracking-widest">Ultra Lotto 6/58</span>
                        <span class="text-xs text-slate-500">November 2010</span>
                    </div>
                    <h4 class="text-2xl font-black text-white">₱741.2 Million</h4>
                    <p class="text-slate-500 text-xs mt-2 leading-relaxed">The largest single-winner jackpot in PCSO history. A lone bettor from Olongapo City, Zambales matched all six numbers and took home the largest prize ever awarded by PCSO. After the 20% TRAIN Law tax, the net amount was approximately ₱592.9 million.</p>
                </div>
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold text-yellow-400 uppercase tracking-widest">Grand Lotto 6/55</span>
                        <span class="text-xs text-slate-500">November 2010</span>
                    </div>
                    <h4 class="text-2xl font-black text-white">₱741.2 Million</h4>
                    <p class="text-slate-500 text-xs mt-2 leading-relaxed">A separate record from the same month, this Grand Lotto 6/55 jackpot was won by a single ticket holder. The prize had been rolling over for months before finally being won, making it one of the most anticipated draws in Philippine lottery history.</p>
                </div>
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold text-yellow-400 uppercase tracking-widest">Ultra Lotto 6/58</span>
                        <span class="text-xs text-slate-500">October 2022</span>
                    </div>
                    <h4 class="text-2xl font-black text-white">₱496.1 Million</h4>
                    <p class="text-slate-500 text-xs mt-2 leading-relaxed">This massive Ultra Lotto jackpot came after months of rollovers and generated nationwide excitement. Two winning tickets split the prize, each taking home approximately ₱248 million before tax. The draw caused massive queues at lotto outlets across the country.</p>
                </div>
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold text-yellow-400 uppercase tracking-widest">Super Lotto 6/49</span>
                        <span class="text-xs text-slate-500">April 2008</span>
                    </div>
                    <h4 class="text-2xl font-black text-white">₱347.8 Million</h4>
                    <p class="text-slate-500 text-xs mt-2 leading-relaxed">At the time, this was the largest Super Lotto 6/49 jackpot ever. The prize was won by a single ticket holder from Novaliches, Quezon City. The win sparked nationwide interest in the lottery and led to significantly increased ticket sales for subsequent draws.</p>
                </div>
            </div>

            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                These record jackpots demonstrate the power of the rollover mechanism in PCSO games. When no one matches all the winning numbers, the jackpot grows for the next draw, sometimes reaching astronomical sums over weeks or months of rollovers. While these stories are exciting, it is important to keep them in perspective — for every jackpot winner, there are tens of millions of tickets that do not win. The lottery should always be treated as entertainment, and players should never spend more than they can afford to lose.
            </p>

        </div>

        <!-- ============================================================ -->
        <!-- PCSO LOTTO TAX CALCULATION GUIDE                              -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-10 mb-6 space-y-6">

            <h2 class="text-2xl md:text-3xl font-black text-white mb-4">PCSO Lotto Tax Guide — How TRAIN Law Affects Your Winnings</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                Understanding how taxes work on lottery winnings is crucial for every Filipino lotto player. Under Republic Act No. 10963, commonly known as the TRAIN Law (Tax Reform for Acceleration and Inclusion), which took effect on January 1, 2018, all PCSO lottery prizes above 10,000 pesos are subject to a 20% Final Withholding Tax. This tax is automatically deducted by PCSO before the prize is released, meaning you receive the net amount without needing to file additional tax returns. Prizes of 10,000 pesos and below are completely tax-free and can be claimed in full at any authorized PCSO outlet.
            </p>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-slate-900/80 border-b border-slate-700 text-xs uppercase tracking-widest text-slate-500">
                        <tr>
                            <th class="p-4">Gross Prize</th>
                            <th class="p-4 text-center">Tax Rate</th>
                            <th class="p-4 text-center">Tax Amount</th>
                            <th class="p-4 text-center">Net Take-Home</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700/50">
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">₱4,500 (3D Lotto)</td>
                            <td class="p-4 text-center text-green-400 font-bold">0% (Tax-Free)</td>
                            <td class="p-4 text-center text-slate-400">₱0</td>
                            <td class="p-4 text-center text-green-400 font-bold">₱4,500</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">₱10,000 (Threshold)</td>
                            <td class="p-4 text-center text-green-400 font-bold">0% (Tax-Free)</td>
                            <td class="p-4 text-center text-slate-400">₱0</td>
                            <td class="p-4 text-center text-green-400 font-bold">₱10,000</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">₱50,000</td>
                            <td class="p-4 text-center text-red-400 font-bold">20%</td>
                            <td class="p-4 text-center text-slate-400">₱10,000</td>
                            <td class="p-4 text-center text-slate-300">₱40,000</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">₱150,000 (6D Lotto)</td>
                            <td class="p-4 text-center text-red-400 font-bold">20%</td>
                            <td class="p-4 text-center text-slate-400">₱30,000</td>
                            <td class="p-4 text-center text-slate-300">₱120,000</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">₱10,000,000 (Lotto 6/42)</td>
                            <td class="p-4 text-center text-red-400 font-bold">20%</td>
                            <td class="p-4 text-center text-slate-400">₱2,000,000</td>
                            <td class="p-4 text-center text-slate-300">₱8,000,000</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">₱75,000,000 (Ultra Lotto)</td>
                            <td class="p-4 text-center text-red-400 font-bold">20%</td>
                            <td class="p-4 text-center text-slate-400">₱15,000,000</td>
                            <td class="p-4 text-center text-slate-300">₱60,000,000</td>
                        </tr>
                        <tr class="hover:bg-slate-700/20 transition-colors">
                            <td class="p-4 font-bold text-white">₱1,000,000,000</td>
                            <td class="p-4 text-center text-red-400 font-bold">20%</td>
                            <td class="p-4 text-center text-slate-400">₱200,000,000</td>
                            <td class="p-4 text-center text-slate-300">₱800,000,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                The 20% Final Withholding Tax means that for major jackpot wins, a substantial portion goes directly to the government. For example, a ₱100 million Ultra Lotto jackpot results in ₱20 million in taxes and ₱80 million in take-home pay. This tax policy was implemented to ensure that large lottery winnings contribute to national development through government revenue. The tax is final, meaning winners do not need to declare it as additional income in their annual tax returns. Use our <a href="#" data-tab="calculator" class="footer-link text-sky-400 underline">Prize Calculator</a> tool to instantly compute the net prize for any amount after the 20% TRAIN Law tax.
            </p>

        </div>

        <!-- ============================================================ -->
        <!-- PCSO LOTTO DRAW SCHEDULE QUICK REFERENCE                      -->
        <!-- ============================================================ -->
        <div class="bg-slate-800/30 rounded-3xl border border-slate-700/50 p-6 md:p-10 mb-6 space-y-6">

            <h2 class="text-2xl md:text-3xl font-black text-white mb-4">PCSO Lotto Draw Schedule — At a Glance</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                PCSO conducts lottery draws throughout the week, with some games drawn daily and others on specific days. Knowing the draw schedule helps you plan when to buy tickets and when to check results. All draw times follow Philippine Standard Time (GMT+8). Draws are broadcast live on PTV-4 and streamed on the official PCSO Facebook page. Results are also available on Lottong Pinoy within minutes after each draw. Visit our full <a href="#" data-tab="schedule" class="footer-link text-sky-400 underline">Draw Schedule page</a> for the complete weekly matrix.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <h4 class="text-sm font-bold text-sky-400 uppercase tracking-widest mb-3">11:00 AM Draws</h4>
                    <ul class="space-y-2 text-slate-400 text-sm">
                        <li class="flex justify-between"><span>2D Lotto (EZ2)</span><span class="text-slate-600">Daily</span></li>
                        <li class="flex justify-between"><span>3D Lotto (Swertres)</span><span class="text-slate-600">Daily</span></li>
                    </ul>
                </div>
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <h4 class="text-sm font-bold text-sky-400 uppercase tracking-widest mb-3">4:00 PM Draws</h4>
                    <ul class="space-y-2 text-slate-400 text-sm">
                        <li class="flex justify-between"><span>2D Lotto (EZ2)</span><span class="text-slate-600">Daily</span></li>
                        <li class="flex justify-between"><span>3D Lotto (Swertres)</span><span class="text-slate-600">Daily</span></li>
                        <li class="flex justify-between"><span>4D Lotto</span><span class="text-slate-600">Mon/Wed/Fri</span></li>
                        <li class="flex justify-between"><span>6D Lotto</span><span class="text-slate-600">Tue/Thu/Sat</span></li>
                    </ul>
                </div>
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <h4 class="text-sm font-bold text-sky-400 uppercase tracking-widest mb-3">9:00 PM Draws</h4>
                    <ul class="space-y-2 text-slate-400 text-sm">
                        <li class="flex justify-between"><span>Ultra Lotto 6/58</span><span class="text-slate-600">Tue/Fri/Sun</span></li>
                        <li class="flex justify-between"><span>Grand Lotto 6/55</span><span class="text-slate-600">Mon/Wed/Sat</span></li>
                        <li class="flex justify-between"><span>Super Lotto 6/49</span><span class="text-slate-600">Tue/Thu/Sun</span></li>
                        <li class="flex justify-between"><span>Mega Lotto 6/45</span><span class="text-slate-600">Mon/Wed/Fri</span></li>
                        <li class="flex justify-between"><span>Lotto 6/42</span><span class="text-slate-600">Tue/Thu/Sat</span></li>
                        <li class="flex justify-between"><span>All Digit Games</span><span class="text-slate-600">Per Schedule</span></li>
                    </ul>
                </div>
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
