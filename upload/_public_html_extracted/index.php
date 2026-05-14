<?php
// ==========================================
// 1. DEFINE VARIABLES (Required for Head)
// ==========================================
 $page_title = "Smart Lotto Generator & PCSO Analysis Tool | Lottong Pinoy";
 $meta_description = "Use data to generate smarter combinations. Analyze hot & cold numbers before you bet.";
 $canonical_url = "https://lottong-pinoy.com/";
 $og_image = "https://lottong-pinoy.com/img/og-image.jpg";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0f172a">

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="Lottong Pinoy">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Smart Lotto Number Generator & PCSO Analysis Tool">
    <meta property="og:description"
        content="Use data to generate smarter combinations. Analyze hot & cold numbers before you bet.">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:site_name" content="Lottong Pinoy">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Smart Lotto Generator Philippines">
    <meta name="twitter:description" content="Analyze trends and generate data-driven lotto numbers.">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">

    <link rel="manifest" href="manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <link rel="icon" type="image/svg+xml" href="img/logo.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icon-192x192.png">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Lottong Pinoy",
      "url": "https://lottong-pinoy.com",
      "description": "A smart tool for analyzing PCSO lotto trends and generating number combinations.",
      "applicationCategory": "UtilitiesApplication",
      "operatingSystem": "All",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "PHP"
      },
      "creator": {
        "@type": "Organization",
        "name": "Lottong Pinoy"
      }
    }
    </script>
    <!-- Google Analytics (GA4) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DJGNHWLX22"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-DJGNHWLX22');
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/styles.css?v=1.4">
    <link rel="stylesheet" href="css/cards.css?v=1.3">

    <script defer src="https://cdn.tailwindcss.com"></script>

</head>

<body class="min-h-screen bg-slate-900 text-slate-200 font-sans">

    <div class="main-wrapper">

        <header class="sticky top-0 z-50 flex justify-between items-center border-b border-slate-800 bg-slate-950/90 backdrop-blur-md py-3 px-4 -mx-4 w-[calc(100%+2rem)] md:-mx-6 md:w-[calc(100%+3rem)] md:relative md:bg-transparent md:backdrop-blur-none md:py-0 md:mb-6 md:pb-4 md:border-slate-700">
            <div class="flex items-center gap-3">
                <button id="menuBtn" class="lg:hidden p-2 rounded-lg bg-slate-800 text-white hover:bg-slate-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <a href="#" data-tab="results" class="footer-link flex items-center gap-2.5">
                   <img src="img/logo.svg" alt="Logo" class="h-9 md:h-12 w-auto" style="height: 36px; width: auto; max-width: 100%;">
                    <h1 class="text-xl md:text-2xl font-black text-white tracking-tight">
                        Lottong <span class="text-blue-400">Pinoy</span>
                    </h1>
                </a>
            </div>

            <nav id="mainNav" class="hidden lg:flex absolute top-full left-0 w-full lg:w-auto lg:static bg-slate-800 lg:bg-transparent border-b border-slate-700 lg:border-0 flex-col lg:flex-row gap-2 lg:gap-4 p-4 lg:p-0 z-50 shadow-xl lg:shadow-none mt-2 lg:mt-0">
                <button class="nav-tab active" data-tab="results">Results</button>
                <button class="nav-tab" data-tab="history">History</button>
                <button class="nav-tab" data-tab="generator">Generator</button>
                <button class="nav-tab" data-tab="checker">Checker</button>
                <button class="nav-tab" data-tab="analysis">Analysis</button>
                <button class="nav-tab" data-tab="calculator">Calculator</button>
            </nav>
        </header>

        <?php include 'views/home.php'; ?>
        <?php include 'views/history.php'; ?>
        <?php include 'views/generator.php'; ?>
        <?php include 'views/checker.php'; ?>
        <?php include 'views/analysis.php'; ?>
        <?php include 'views/calculator.php'; ?>
        <?php include 'views/about.php'; ?>
        <?php include 'views/contact.php'; ?>
        <?php include 'views/privacy.php'; ?>
        <?php include 'views/schedule.php'; ?>
        <?php include 'views/claim.php'; ?>
        <?php include 'views/faq.php'; ?>
        <?php include 'views/blog.php'; ?>
        <?php include 'views/article.php'; ?>
        <?php include 'views/alaga.php'; ?>

    </div>

    <?php include 'partials/footer.php'; ?>

    <div id="cookieBanner" class="fixed bottom-0 left-0 right-0 bg-slate-900 border-t border-slate-700 shadow-2xl z-50 transition-transform duration-500 ease-out">
        <div class="max-w-[1440px] mx-auto p-4 md:p-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-center md:text-left">
                <p class="text-sm text-slate-300">
                    🍪 We use cookies to improve your experience. By clicking "Accept", you agree to our <a href="#" data-tab="privacy" class="text-purple-400 underline footer-link">Privacy Policy</a>.
                </p>
            </div>
            <div class="flex gap-3 shrink-0">
                <button id="declineCookies" class="text-xs text-slate-400 hover:text-white px-4 py-2 rounded-lg border border-slate-700 transition-colors">Decline</button>
                <button id="acceptCookies" class="text-xs font-bold text-white bg-purple-600 hover:bg-purple-500 px-6 py-2 rounded-lg shadow-lg transition-colors">Accept Cookies</button>
            </div>
        </div>
    </div>

    <div id="insightModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[9999] hidden flex items-center justify-center p-4">
        <div class="bg-slate-900 rounded-3xl border border-slate-700 w-full max-w-sm shadow-2xl transform transition-all scale-95 opacity-0 relative" id="modalContent">
            <div class="p-6 text-center">
                <button onclick="closeInsightModal()" class="absolute top-4 right-4 text-slate-500 hover:text-white text-xl">&times;</button>
                <div class="w-16 h-16 rounded-full bg-orange-500 text-white text-2xl font-black flex items-center justify-center mx-auto mb-4 shadow-lg" id="modalNumber">41</div>
                <h3 class="text-xl font-black text-white" id="modalTitle">Number Insight</h3>
                <p class="text-xs text-blue-400 font-bold uppercase tracking-widest mt-1" id="modalSubtitle">Ultra Lotto 6/58</p>
            </div>

            <div class="border-t border-slate-700 p-6 space-y-4 bg-slate-800/50 rounded-b-3xl">
                <div id="modalBody" class="text-center text-sm text-slate-300">
                    <p>Analyzing number...</p>
                </div>
                <button onclick="closeInsightModal()" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 rounded-xl text-sm uppercase tracking-wider">Got it!</button>
            </div>
        </div>
    </div>

    <button id="scrollToTopBtn" class="fixed bottom-20 right-4 z-40 p-3 bg-blue-600 text-white rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-500 md:bottom-8">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script type="module" src="js/app.js?v=1.5"></script>
</body>
</html>