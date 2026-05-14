<!-- partials/ads.php -->

<?php
// TOP BANNER (Safe, usually visible)
function renderTopBannerAd() { ?>
    <div class="w-full bg-slate-800 border border-slate-700 rounded-xl p-2 flex items-center justify-center min-h-[90px] mb-6">
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8747017339704776" data-ad-slot="1234567890" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
<?php } ?>

<?php
// SIDEBAR (Fix for 'Width=0' error)
// We check if the container is visible before pushing
function renderSidebarAd() { ?>
    <div class="w-full bg-slate-800 border border-slate-700 rounded-xl p-2 flex items-center justify-center min-h-[250px] mt-6">
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8747017339704776" data-ad-slot="0987654321" data-ad-format="vertical" data-full-width-responsive="true"></ins>
        <script>
            // Fix: Only push if the parent element has a width
            if (this.parentElement.offsetWidth > 0) {
                (adsbygoogle = window.adsbygoogle || []).push({});
            }
        </script>
    </div>
<?php } ?>