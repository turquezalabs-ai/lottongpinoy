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
