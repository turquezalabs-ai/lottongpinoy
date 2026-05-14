<footer class="w-full border-t border-slate-800 mt-12 bg-slate-900/50 no-print">
    <div class="max-w-[1440px] mx-auto px-4 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center md:text-left">
            
            <div class="space-y-3">
                <h3 class="text-lg font-black text-white tracking-tight">Lottong Pinoy</h3>
                <p class="text-slate-500 text-xs leading-relaxed max-w-[250px] mx-auto md:mx-0">
                    Providing accurate lotto results and intelligent analysis for the Filipino community.
                </p>
            </div>

            <div>
                <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Quick Links</h4>
                <ul class="space-y-2 text-xs text-slate-400">
                    <li><a href="#" data-tab="about" class="hover:text-sky-400 transition-colors footer-link">About Us</a></li>
                    <li><a href="#" data-tab="contact" class="hover:text-sky-400 transition-colors footer-link">Contact Us</a></li>
                    <li><a href="#" data-tab="privacy" class="hover:text-sky-400 transition-colors footer-link">Privacy Policy</a></li>
                    <li><a href="https://www.pcso.gov.ph/" target="_blank" class="hover:text-sky-400 transition-colors">Official PCSO</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Resources</h4>
                <div class="space-y-2">
                    <a href="#" data-tab="schedule" class="footer-link text-xs text-slate-400 hover:text-white transition-colors block">Draw Schedule</a>
                    <a href="#" data-tab="claim" class="footer-link text-xs text-slate-400 hover:text-white transition-colors block">How to Claim</a>
                    <a href="#" data-tab="faq" class="footer-link text-xs text-slate-400 hover:text-white transition-colors block">FAQ</a>
                    <a href="#" data-tab="blog" class="footer-link text-xs text-slate-400 hover:text-white transition-colors block">Blog</a>
                    <a href="#" data-tab="alaga" class="footer-link text-xs text-slate-400 hover:text-white transition-colors block">Alaga</a>
                </div>
            </div>

            <div>
                <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Disclaimer</h4>
                <p class="text-slate-500 text-xs leading-relaxed">
                    This is an independent application. We are not affiliated with PCSO. 
                    Please verify results with official sources.
                </p>
            </div>
        </div>

        <div class="mt-10 pt-6 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center text-xs text-slate-600">
            <p>© <span id="currentYear"></span> Lottong Pinoy. All Rights Reserved.</p>
            <p class="mt-2 md:mt-0 flex items-center">
                Built with <span class="text-red-500 mx-1">❤️</span> for the Filipino People
            </p>
        </div>
    </div>
</footer>
<script>
    document.getElementById('currentYear').textContent = new Date().getFullYear();

    // ==================================================
    // CONTENT STUDIO ACCESS LOGIC
    // ==================================================
    // 1. Check if the user has previously unlocked access
    if (localStorage.getItem('cs_unlocked')) {
        const link = document.getElementById('csNavLink');
        if(link) link.classList.remove('hidden');
    }

    // 2. Check if the current URL has the "secret key"
    // Example: www.yoursite.com/?cs_access=letmein
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('cs_access') === 'letmein') {
        // Save to local storage so they stay unlocked
        localStorage.setItem('cs_unlocked', 'true');
        
        // Show the link immediately
        const link = document.getElementById('csNavLink');
        if(link) link.classList.remove('hidden');
        
        // Optional: Clean the URL (remove the parameter)
        window.history.replaceState({}, document.title, window.location.pathname);
    }
</script>