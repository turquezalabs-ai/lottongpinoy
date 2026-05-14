<!-- views/contact.php -->
<section id="section-contact" class="section-page hidden">
    <div class="max-w-4xl mx-auto space-y-8">
        
        <div class="text-center mb-12">
            <span class="text-[10px] uppercase tracking-widest text-green-400 font-bold">Get in Touch</span>
            <h2 class="text-3xl md:text-4xl font-black text-white mt-2">Contact <span class="text-green-400">Us</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Info Card -->
            <div class="bg-slate-800 rounded-2xl border border-slate-700 p-8 space-y-6">
                <h3 class="text-lg font-bold text-white">Contact Information</h3>
                
                <div class="space-y-4 text-sm text-slate-300">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center text-lg">📧</div>
                        <div>
                            <p class="text-xs text-slate-500">Email Us</p>
                            <p class="font-bold">support@lottong-pinoy.com</p>
                        </div>
                    </div>
                    
                    <!--<div class="flex items-center gap-3">-->
                    <!--    <div class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center text-lg">🌐</div>-->
                    <!--    <div>-->
                    <!--        <p class="text-xs text-slate-500">Social Media</p>-->
                    <!--        <p class="font-bold">@lottongpinoy</p>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>

                <p class="text-xs text-slate-500 border-t border-slate-700 pt-4 mt-4">
                    For business inquiries, partnerships, or bug reports, please use the form or email us directly.
                </p>
            </div>

            <!-- Contact Form Card -->
            <div class="bg-slate-800 rounded-2xl border border-slate-700 p-8">
                <!-- FIX: Added name="..." attributes below -->
                <form id="contactForm" class="space-y-6">
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Your Name</label>
                        <input type="text" id="contactName" name="name" required class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-green-500/40" placeholder="Juan dela Cruz">
                    </div>
                    
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Email Address</label>
                        <input type="email" id="contactEmail" name="email" required class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-green-500/40" placeholder="juan@email.com">
                    </div>

                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-black mb-2 ml-1">Message</label>
                        <textarea id="contactMessage" name="message" required rows="4" class="w-full bg-slate-900 border border-slate-700 text-slate-100 rounded-xl px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-green-500/40" placeholder="Your message..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-green-600 hover:bg-green-500 text-white font-black py-4 rounded-xl shadow-lg uppercase tracking-widest text-xs">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>