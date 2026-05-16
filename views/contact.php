<!-- views/contact.php -->
<section id="section-contact" class="section-page hidden">
    <div class="text-center my-6 md:my-10">
        <h2 class="text-3xl md:text-5xl font-black text-white leading-tight">
            Get In<span class="text-blue-400"> Touch.</span>
        </h2>
        <p class="text-slate-400 text-md md:text-lg max-w-2xl mx-auto mt-3 font-medium">
            Have questions, feedback, or suggestions? We would love to hear from you.
        </p>
    </div>

    <div class="max-w-3xl mx-auto space-y-8 px-4">
        <div class="bg-slate-800/60 rounded-2xl border border-slate-700 p-6 md:p-8">
            <h3 class="text-xl font-black text-white mb-4">Contact Lottong Pinoy</h3>
            <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-6">
                Lottong Pinoy is an independent PCSO lotto results platform built for the Filipino community. Whether you have questions about our tools, want to report an issue with the data, or have suggestions for new features, we welcome your feedback. Our team reviews all messages and strives to respond within a reasonable timeframe. Please note that we are not affiliated with PCSO and cannot assist with prize claims or ticket verification — for those concerns, please contact the official PCSO directly.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <h4 class="text-sm font-bold text-white mb-2">General Inquiries</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">For questions about our platform, features, or how to use our tools, feel free to reach out. We are happy to help you navigate the Lottong Pinoy experience and make the most of our lottery analysis resources.</p>
                </div>
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <h4 class="text-sm font-bold text-white mb-2">Data Accuracy Reports</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">If you notice any discrepancies in our lottery results or data, please let us know. We strive for accuracy but occasionally errors may occur in data processing. Your reports help us maintain the highest quality standards for all users.</p>
                </div>
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <h4 class="text-sm font-bold text-white mb-2">Feature Suggestions</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">We are constantly working to improve Lottong Pinoy. If you have ideas for new analysis tools, number generators, or any other features that would enhance your experience, we would love to hear them. Many of our best features started as user suggestions.</p>
                </div>
                <div class="bg-slate-900/50 rounded-xl p-5 border border-slate-700">
                    <h4 class="text-sm font-bold text-white mb-2">PCSO-Related Concerns</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">For prize claims, ticket verification, draw schedules, or any official PCSO matters, please visit the <a href="https://www.pcso.gov.ph/" target="_blank" rel="noopener noreferrer" class="text-sky-400 underline">official PCSO website</a> or contact them directly. Lottong Pinoy is an independent platform and cannot assist with official PCSO transactions.</p>
                </div>
            </div>
        </div>

        <div class="bg-slate-800/60 rounded-2xl border border-slate-700 p-6 md:p-8">
            <h3 class="text-xl font-black text-white mb-4">Send Us a Message</h3>
            <form id="contactForm" class="space-y-4" action="send_email.php" method="POST">
                <div>
                    <label for="contactName" class="block text-xs font-bold text-slate-300 mb-1 uppercase tracking-wider">Your Name</label>
                    <input type="text" id="contactName" name="name" required
                        class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-4 py-3 text-sm outline-none cursor-pointer focus:ring-2 focus:ring-blue-500"
                        placeholder="Juan Dela Cruz" aria-required="true">
                </div>
                <div>
                    <label for="contactEmail" class="block text-xs font-bold text-slate-300 mb-1 uppercase tracking-wider">Email Address</label>
                    <input type="email" id="contactEmail" name="email" required
                        class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-4 py-3 text-sm outline-none cursor-pointer focus:ring-2 focus:ring-blue-500"
                        placeholder="your@email.com" aria-required="true">
                </div>
                <div>
                    <label for="contactSubject" class="block text-xs font-bold text-slate-300 mb-1 uppercase tracking-wider">Subject</label>
                    <select id="contactSubject" name="subject" aria-label="Select message subject"
                        class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-4 py-3 text-sm font-bold outline-none cursor-pointer focus:ring-2 focus:ring-blue-500">
                        <option value="general">General Inquiry</option>
                        <option value="data">Data Accuracy Report</option>
                        <option value="feature">Feature Suggestion</option>
                        <option value="bug">Bug Report</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <label for="contactMessage" class="block text-xs font-bold text-slate-300 mb-1 uppercase tracking-wider">Message</label>
                    <textarea id="contactMessage" name="message" rows="5" required
                        class="w-full bg-slate-900 border border-slate-700 text-slate-200 rounded-xl px-4 py-3 text-sm outline-none cursor-pointer focus:ring-2 focus:ring-blue-500 resize-y"
                        placeholder="Tell us what's on your mind..." aria-required="true"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-black py-4 rounded-xl shadow-lg uppercase tracking-widest text-xs transition-colors">
                    Send Message
                </button>
            </form>
        </div>

        <div class="bg-yellow-500/10 border border-yellow-500/20 rounded-xl p-5">
            <h4 class="text-sm font-bold text-yellow-400 mb-2">Important Notice</h4>
            <p class="text-slate-300 text-xs leading-relaxed">
                Lottong Pinoy is not affiliated with, endorsed by, or connected to the Philippine Charity Sweepstakes Office (PCSO) or any government agency. We cannot verify winning tickets, process prize claims, or provide official lottery information. For all official PCSO matters, please visit <a href="https://www.pcso.gov.ph/" target="_blank" rel="noopener noreferrer" class="text-sky-400 underline">pcso.gov.ph</a>. Our platform provides lottery results and analysis tools for informational and entertainment purposes only. Always play responsibly.
            </p>
        </div>
    </div>
</section>
