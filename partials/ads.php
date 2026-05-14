<!-- partials/ads.php -->

<?php
// AdSense Publisher ID
$adsense_client = "ca-pub-8747017339704776";

// TOP BANNER AD - Horizontal leaderboard
function renderTopBannerAd() {
    global $adsense_client; ?>
    <!-- AdSense: Top Banner / Leaderboard -->
    <div class="ad-container w-full bg-slate-950/50 py-2 text-center" id="ad-top-banner-partial">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="<?php echo $adsense_client; ?>"
             data-ad-slot="0000000001"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
<?php } ?>

<?php
// SIDEBAR AD - Vertical rectangle
function renderSidebarAd() { ?>
    <!-- AdSense: Sidebar Vertical -->
    <div class="ad-container mt-6 hidden lg:block" id="ad-sidebar-partial">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8747017339704776"
             data-ad-slot="0000000004"
             data-ad-format="vertical"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
<?php } ?>

<?php
// IN-FEED AD - Blends with content
function renderInFeedAd() { ?>
    <!-- AdSense: In-Feed -->
    <div class="ad-container my-6 px-4" id="ad-infeed-partial">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8747017339704776"
             data-ad-slot="0000000002"
             data-ad-format="fluid"
             data-ad-layout-key="-6t+ed+2i-1n-4w"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
<?php } ?>

<?php
// IN-ARTICLE AD - Within article/blog content
function renderInArticleAd() { ?>
    <!-- AdSense: In-Article -->
    <div class="ad-container my-6" id="ad-inarticle-partial">
        <ins class="adsbygoogle"
             style="display:block;text-align:center"
             data-ad-client="ca-pub-8747017339704776"
             data-ad-slot="0000000005"
             data-ad-layout="in-article"
             data-ad-format="fluid"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
<?php } ?>

<?php
// BOTTOM BANNER AD - Before footer
function renderBottomBannerAd() { ?>
    <!-- AdSense: Bottom Banner / Leaderboard -->
    <div class="ad-container w-full bg-slate-950/50 py-4 text-center" id="ad-bottom-banner-partial">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8747017339704776"
             data-ad-slot="0000000003"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
<?php } ?>
