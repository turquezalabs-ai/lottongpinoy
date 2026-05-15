<!-- views/alaga.php -->
<section id="section-alaga" class="section-page hidden">
    <div class="max-w-4xl mx-auto">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-black text-white leading-tight">
                My <span class="text-pink-400">Alaga.</span>
            </h2>
            <p class="text-slate-400 text-md md:text-lg max-w-2xl mx-auto mt-3 font-medium">
                Save your lucky numbers here. We'll check them against results automatically every day.
            </p>
        </div>

        <!-- INPUT FORM -->
        <div class="bg-slate-800 rounded-2xl border border-slate-700 p-6 mb-8">
            <h3 class="text-lg font-bold text-white mb-4">Add New Combination</h3>

            <div class="grid grid-cols-6 gap-2 mb-4">
                <input type="number" min="1" max="58" placeholder="01" class="alaga-input input text-center text-lg font-bold" id="alagaInput1">
                <input type="number" min="1" max="58" placeholder="02" class="alaga-input input text-center text-lg font-bold" id="alagaInput2">
                <input type="number" min="1" max="58" placeholder="03" class="alaga-input input text-center text-lg font-bold" id="alagaInput3">
                <input type="number" min="1" max="58" placeholder="04" class="alaga-input input text-center text-lg font-bold" id="alagaInput4">
                <input type="number" min="1" max="58" placeholder="05" class="alaga-input input text-center text-lg font-bold" id="alagaInput5">
                <input type="number" min="1" max="58" placeholder="06" class="alaga-input input text-center text-lg font-bold" id="alagaInput6">
            </div>

            <button id="saveAlagaBtn" class="w-full bg-pink-600 hover:bg-pink-500 text-white font-bold py-3 rounded-xl transition-colors">
                💾 Save to My Alaga
            </button>
        </div>

        <!-- SAVED LIST -->
        <div class="space-y-4 mb-10">
            <h3 class="text-lg font-bold text-white border-b border-slate-700 pb-2">Your Saved Combinations</h3>
            <div id="alagaListContainer" class="space-y-3">
                <!-- Populated by JS -->
                <p class="text-slate-500 text-sm text-center py-8">No numbers saved yet. Add your "Alaga" above!</p>
            </div>
        </div>

        <!-- ============================================================ -->
        <!-- RESPONSIBLE GAMBLING - Moved from home page for distribution  -->
        <!-- ============================================================ -->
        <div class="bg-emerald-500/5 rounded-3xl border border-emerald-500/20 p-6 md:p-10 space-y-4">
            <h2 class="text-2xl md:text-3xl font-black text-white mb-2">Play Responsibly — Your Well-Being Matters</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                Lottong Pinoy is committed to promoting responsible gambling. The PCSO lottery should be enjoyed as a form of entertainment, never as a financial strategy or a way to solve money problems. Set a personal budget before you play and never exceed it. Never borrow money to buy lotto tickets, and never spend money allocated for essentials like food, rent, or bills. The odds of winning a jackpot are extremely low — for Ultra Lotto 6/58, the odds are 1 in over 40 million — so treat every ticket as an entertainment expense rather than an investment.
            </p>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                If you or someone you know is experiencing problems with gambling, please reach out for help. The Philippine Department of Health provides mental health support through their helpline. You can also contact the National Center for Mental Health crisis hotline. Remember, there is no shame in asking for help, and recognizing a problem is the first step toward recovery. Play for fun, play within your means, and always prioritize your financial and mental health over lottery tickets.
            </p>
            <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700 mt-4">
                <h4 class="font-bold text-emerald-400 text-sm mb-2">Tips for Responsible Play</h4>
                <ul class="text-slate-400 text-xs leading-relaxed space-y-1 list-disc ml-5">
                    <li>Set a fixed budget for lotto tickets and never go beyond it.</li>
                    <li>Treat the lottery as entertainment, not as a way to make money.</li>
                    <li>Never borrow money or use savings to buy lotto tickets.</li>
                    <li>Do not chase losses — losing is part of the game.</li>
                    <li>If you feel you are losing control, seek help immediately.</li>
                    <li>Always verify results on the <a href="https://www.pcso.gov.ph/" target="_blank" class="text-sky-400 underline">official PCSO website</a> before claiming any prize.</li>
                </ul>
            </div>
        </div>

    </div>
</section>
