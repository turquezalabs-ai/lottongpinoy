<!-- views/calculator.php -->
<section id="section-calculator" class="section-page hidden">
    <div class="text-center my-10 md:my-20">
        <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
          Net Prize Estimator<span class="text-blue-400"> Calculator.</span>
        </h2>
        <p class="text-slate-400 text-md md:text-lg mx-auto mt-4 font-medium">
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
</section>