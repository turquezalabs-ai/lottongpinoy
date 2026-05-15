<!-- views/calculator.php -->
<section id="section-calculator" class="section-page hidden">
    <div class="text-center my-6 md:my-10">
        <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
          Net Prize Estimator<span class="text-blue-400"> Calculator.</span>
        </h2>
        <p class="text-slate-400 text-md md:text-lg mx-auto mt-3 font-medium">
            Understand the tax breakdown and calculate the actual take-home value of your prize.
        </p>
    </div>
    <div class="panel mb-8">
        <h2 class="text-xl font-bold text-sky-400 mb-6 uppercase tracking-wider">💰 Prize Calculator</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- INPUT SIDE -->
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Jackpot Prize (₱)</label>
                    <input type="text" id="calcPrize" class="input text-lg" placeholder="e.g. 50,000,000" oninput="formatCurrency(this)">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Number of Winners</label>
                    <input type="number" id="calcWinners" class="input text-lg" value="1" min="1">
                </div>
                
                <button id="calculateBtn" class="btn btn-primary w-full py-3 text-sm uppercase font-bold tracking-wider">
                    Calculate Share
                </button>
            </div>

            <!-- OUTPUT SIDE -->
            <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700 flex flex-col justify-center items-center">
                <p class="text-xs text-slate-500 uppercase font-bold mb-2">Net Share Per Winner</p>
                <h3 id="calcResult" class="text-4xl md:text-5xl font-black text-green-400 mb-4">
                    ₱ 0.00
                </h3>
                
                <div class="w-full space-y-2 text-sm text-slate-400 mt-4 border-t border-slate-700 pt-4">
                    <div class="flex justify-between">
                        <span>Gross Prize:</span>
                        <span id="calcGross" class="font-bold text-white">₱ 0.00</span>
                    </div>
                    <div class="flex justify-between text-red-400">
                        <span>Less 20% Tax:</span>
                        <span id="calcTax" class="font-bold">- ₱ 0.00</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Disclaimer -->
        <p class="text-[10px] text-slate-600 mt-6 text-center">
            *Note: PCSO deducts 20% tax for prizes above ₱10,000. This calculator automatically applies the tax.
        </p>
    </div>

    <!-- TAX EXPLANATION SECTION -->
    <div class="bg-slate-800/50 rounded-2xl border border-slate-700 p-6 space-y-4 mt-6">
        <h3 class="text-xl font-bold text-white">Understanding Lotto Taxes in the Philippines</h3>
        <p class="text-slate-400 text-sm leading-relaxed">
            Under the Tax Reform for Acceleration and Inclusion (TRAIN) Law, or Republic Act No. 10963, all PCSO lotto prizes exceeding 10,000 pesos are subject to a 20% Final Withholding Tax. This means that the tax is automatically deducted by PCSO before the prize is released to the winner. Prizes of 10,000 pesos or below are tax-free and can be claimed in full. The 20% tax applies to the gross prize amount, not the net amount after other deductions. For jackpot prizes, this can mean a significant deduction — for example, a 100 million peso jackpot would have 20 million pesos withheld as tax, leaving the winner with 80 million pesos.
        </p>
        <p class="text-slate-400 text-sm leading-relaxed">
            Before the TRAIN Law took effect on January 1, 2018, lotto prizes above 10,000 pesos were subject to a lower tax rate. The increase to 20% was part of the government's broader tax reform initiative aimed at generating additional revenue for public services and infrastructure. All lotto prizes, regardless of the game type, are subject to the same tax rules. This includes major jackpot games (6/42, 6/45, 6/49, 6/55, 6/58) and digit games (2D, 3D, 4D, 6D). Use our calculator above to determine your exact net take-home amount after the 20% tax is applied.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div class="bg-emerald-500/5 border border-emerald-500/20 rounded-xl p-4">
                <h4 class="font-bold text-emerald-400 text-sm mb-2">Tax-Free Prizes (₱10,000 and below)</h4>
                <p class="text-slate-400 text-xs leading-relaxed">Small winnings from digit games and minor prize tiers in major games are received in full with no tax deduction. These can be claimed at any authorized PCSO outlet.</p>
            </div>
            <div class="bg-red-500/5 border border-red-500/20 rounded-xl p-4">
                <h4 class="font-bold text-red-400 text-sm mb-2">Taxable Prizes (Above ₱10,000)</h4>
                <p class="text-slate-400 text-xs leading-relaxed">Prizes above ₱10,000 are automatically subject to 20% Final Withholding Tax. The tax is deducted before the prize is released. No additional income tax filing is required for the winner.</p>
            </div>
        </div>
    </div>
</section>