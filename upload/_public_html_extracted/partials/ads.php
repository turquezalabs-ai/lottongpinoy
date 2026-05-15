<!-- partials/ads.php -->

<?php
// AdSense Publisher ID
$adsense_client = "ca-pub-8747017339704776";

// ============================================================
// GOOGLE ADSENSE AUTO-ADS APPROACH
// ============================================================
// We use Google AdSense Auto-Ads, which automatically places
// ads in optimal positions throughout the page. No manual
// ad unit placement is needed. The auto-ads script in the
// <head> of index.php handles everything.
//
// Once AdSense is approved and you have real ad-slot IDs,
// you can optionally add specific ad units using the
// functions below. For now, auto-ads handles it all.
// ============================================================

// TOP BANNER AD - Optional: Use only after AdSense approval
function renderTopBannerAd() {
    global $adsense_client; ?>
    <!-- AdSense: Top Banner / Leaderboard (Activate after AdSense approval) -->
    <!-- <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="<?php echo $adsense_client; ?>"
         data-ad-slot="YOUR_REAL_AD_SLOT_ID"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script> -->
<?php } ?>

<?php
// IN-FEED AD - Optional: Use only after AdSense approval
function renderInFeedAd() { ?>
    <!-- AdSense: In-Feed (Activate after AdSense approval) -->
    <!-- <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-8747017339704776"
         data-ad-slot="YOUR_REAL_AD_SLOT_ID"
         data-ad-format="fluid"
         data-ad-layout-key="-6t+ed+2i-1n-4w"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script> -->
<?php } ?>

<?php
// BOTTOM BANNER AD - Optional: Use only after AdSense approval
function renderBottomBannerAd() { ?>
    <!-- AdSense: Bottom Banner (Activate after AdSense approval) -->
    <!-- <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-8747017339704776"
         data-ad-slot="YOUR_REAL_AD_SLOT_ID"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script> -->
<?php } ?>
