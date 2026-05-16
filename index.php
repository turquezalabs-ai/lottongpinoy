<?php
// ==========================================
// 1. DEFINE VARIABLES (Required for Head)
// ==========================================
 $page_title = "PCSO Lotto Results Today & Lucky Number Generator | Lottong Pinoy";
 $meta_description = "Check today's PCSO lotto results for Ultra Lotto 6/58, Grand Lotto 6/55, Super Lotto 6/49, Mega Lotto 6/45, Lotto 6/42, 6D, 4D, 3D & 2D. Smart number generator, hot & cold analysis, and prize calculator.";
 $canonical_url = "https://lottong-pinoy.com/";
 $og_image = "https://lottong-pinoy.com/img/og-image.jpg";
 $adsense_client_id = "ca-pub-8747017339704776";
 $ga4_measurement_id = "G-DJGNHWLX22";
 $gsc_verification_code = "WKvaftSclpF5Pa-Dyitap0eFb-IVdZ2INrOlyK8qYMw";

 // Dynamic lastmod for sitemap
 $today_date = date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0f172a">

    <!-- ============================================================ -->
    <!-- GOOGLE SEARCH CONSOLE VERIFICATION                          -->
    <!-- Replace the content value with your actual verification code -->
    <!-- from Google Search Console > Ownership verification          -->
    <!-- ============================================================ -->
    <meta name="google-site-verification" content="<?php echo $gsc_verification_code; ?>">

    <!-- ============================================================ -->
    <!-- CORE SEO META TAGS                                           -->
    <!-- ============================================================ -->
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="PCSO lotto results, lotto results today, Ultra Lotto 6/58, Grand Lotto 6/55, Super Lotto 6/49, Mega Lotto 6/45, Lotto 6/42, 3D lotto, 2D lotto, 4D lotto, 6D lotto, lucky number generator, lotto analysis Philippines, PCSO winning numbers, lotto hot cold numbers">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="Lottong Pinoy">
    <meta name="googlebot" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <!-- Hreflang - English (Primary) -->
    <link rel="alternate" hreflang="en" href="<?php echo $canonical_url; ?>">
    <link rel="alternate" hreflang="fil" href="<?php echo $canonical_url; ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo $canonical_url; ?>">

    <!-- ============================================================ -->
    <!-- OPEN GRAPH (Facebook, LinkedIn, etc.)                        -->
    <!-- ============================================================ -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="PCSO Lotto Results Today & Lucky Number Generator | Lottong Pinoy">
    <meta property="og:description" content="Check today's PCSO lotto results for all games. Smart number generator, hot & cold number analysis, prize calculator, and draw history.">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:site_name" content="Lottong Pinoy">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Lottong Pinoy - PCSO Lotto Results & Analysis">
    <meta property="og:locale" content="en_PH">
    <meta property="og:locale:alternate" content="fil_PH">

    <!-- ============================================================ -->
    <!-- TWITTER CARD                                                 -->
    <!-- ============================================================ -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@lottongpinoy">
    <meta name="twitter:title" content="PCSO Lotto Results Today & Lucky Number Generator">
    <meta name="twitter:description" content="Check today's PCSO lotto results. Smart number generator, hot & cold analysis, and prize calculator.">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">
    <meta name="twitter:image:alt" content="Lottong Pinoy - PCSO Lotto Results & Analysis">

    <!-- ============================================================ -->
    <!-- PWA META TAGS                                                -->
    <!-- ============================================================ -->
    <link rel="manifest" href="manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Lottong Pinoy">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Lottong Pinoy">
    <meta name="msapplication-TileColor" content="#0f172a">
    <meta name="msapplication-TileImage" content="/img/icon-192x192.png">

    <!-- FAVICON & ICONS -->
    <link rel="icon" type="image/svg+xml" href="img/logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icon-192x192.png">

    <!-- ============================================================ -->
    <!-- STRUCTURED DATA - JSON-LD (Organization + WebApplication +   -->
    <!-- WebSite with SearchAction + FAQPage + BreadcrumbList)        -->
    <!-- ============================================================ -->

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Lottong Pinoy",
      "url": "https://lottong-pinoy.com",
      "logo": "https://lottong-pinoy.com/img/logo.svg",
      "description": "Independent PCSO lotto results portal with smart analysis tools for the Filipino community.",
      "sameAs": [],
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer support",
        "url": "https://lottong-pinoy.com/#contact"
      }
    }
    </script>

    <!-- WebSite Schema with SearchAction -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Lottong Pinoy",
      "url": "https://lottong-pinoy.com",
      "description": "PCSO Lotto Results Today, Lucky Number Generator, and Statistical Analysis Tool for Philippine lottery games.",
      "inLanguage": ["en", "fil"],
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://lottong-pinoy.com/#history",
        "query-input": "required name=search_query"
      }
    }
    </script>

    <!-- WebApplication Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Lottong Pinoy",
      "url": "https://lottong-pinoy.com",
      "description": "A smart tool for analyzing PCSO lotto trends and generating data-driven number combinations for Philippine lottery games.",
      "applicationCategory": "UtilitiesApplication",
      "operatingSystem": "All",
      "browserRequirements": "Requires JavaScript",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "PHP"
      },
      "creator": {
        "@type": "Organization",
        "name": "Lottong Pinoy",
        "url": "https://lottong-pinoy.com"
      },
      "featureList": [
        "Real-time PCSO lotto results",
        "Lucky number generator with statistical strategies",
        "Hot and cold number analysis",
        "Frequent pairs and trios analysis",
        "Draw history with advanced filters",
        "Number checker for past prizes",
        "Prize calculator with tax computation",
        "Draw schedule for all PCSO games"
      ]
    }
    </script>

    <!-- FAQPage Schema (for search engine rich results) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What time are the PCSO lotto draws?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PCSO conducts draws three times a day: 11:00 AM (2D & 3D Lotto), 4:00 PM (2D, 3D, 4D & 6D Lotto), and 9:00 PM (All Major Games + Digit Games)."
          }
        },
        {
          "@type": "Question",
          "name": "How much is a lotto ticket in the Philippines?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The standard price per combination is ₱20.00. This applies to all digit games (2D, 3D, 4D, 6D) and major lotto games (6/42, 6/45, 6/49, 6/55, 6/58)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the legal age to play lotto in the Philippines?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You must be 18 years old and above to purchase lotto tickets and claim prizes. This is strictly enforced by PCSO."
          }
        },
        {
          "@type": "Question",
          "name": "How much is the tax on lotto winnings in the Philippines?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the TRAIN Law, winnings above ₱10,000.00 are subject to a 20% Final Withholding Tax. Prizes ₱10,000 and below are tax-free."
          }
        },
        {
          "@type": "Question",
          "name": "Where can I claim my PCSO lotto prize?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "₱20-₱5,000: Any authorized PCSO outlet. ₱5,001-₱20,000: PCSO Branch Offices. Above ₱20,000/Jackpot: PCSO Main Office (San Marcelino, Manila)."
          }
        },
        {
          "@type": "Question",
          "name": "How long is a winning lotto ticket valid?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Winning tickets are valid for one (1) year from the date of the draw. Unclaimed prizes go to the PCSO Charity Fund."
          }
        },
        {
          "@type": "Question",
          "name": "What is System Play in PCSO lotto?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "System Play lets you select more than 6 numbers, generating multiple combinations. System 7 generates 7 combinations for 140 pesos, System 8 generates 28 combinations for 560 pesos, up to System 12 which generates 924 combinations for 18,480 pesos."
          }
        },
        {
          "@type": "Question",
          "name": "What is the easiest PCSO lotto game to win?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 2D Lotto (EZ2) has the best odds at 1 in 100. Among major games, Lotto 6/42 has the best odds at 1 in 5,245,786."
          }
        },
        {
          "@type": "Question",
          "name": "Is Lottong Pinoy affiliated with PCSO?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No, Lottong Pinoy is an independent application. We are not affiliated with, endorsed by, or connected to the PCSO or any government agency. We display publicly available results for informational purposes only."
          }
        },
        {
          "@type": "Question",
          "name": "What are hot and cold numbers in lotto?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hot numbers are those drawn most frequently in recent draws. Cold numbers are those drawn least frequently or overdue. These are historical statistics only and do not predict future results."
          }
        }
      ]
    }
    </script>

    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://lottong-pinoy.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "PCSO Lotto Results",
          "item": "https://lottong-pinoy.com/#results"
        }
      ]
    }
    </script>

    <!-- ============================================================ -->
    <!-- GOOGLE ADSENSE                                               -->
    <!-- Auto-ads + Publisher ID. Ad units are placed in the body.    -->
    <!-- ============================================================ -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?php echo $adsense_client_id; ?>" crossorigin="anonymous"></script>

    <!-- ============================================================ -->
    <!-- GOOGLE ANALYTICS 4 (GA4) with Consent Mode v2                -->
    <!-- ============================================================ -->
    <script>
        // Google Consent Mode v2 - Default state (denied until user accepts cookies)
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}

        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied',
            'functionality_storage': 'denied',
            'personalization_storage': 'denied',
            'security_storage': 'granted'
        });
    </script>

    <!-- Google Tag Manager (GA4) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga4_measurement_id; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo $ga4_measurement_id; ?>', {
            'page_title': document.title,
            'page_location': window.location.href,
            'send_page_view': true
        });
    </script>

    <!-- ============================================================ -->
    <!-- PRECONNECT FOR PERFORMANCE                                   -->
    <!-- ============================================================ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://pagead2.googlesyndication.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://cdn.tailwindcss.com">

    <!-- CRITICAL CSS (Inlined to prevent render blocking) -->
    <style>
        *,*::before,*::after{box-sizing:border-box}
        body{margin:0;font-family:'Inter',system-ui,-apple-system,sans-serif;background-color:#020617;color:#f1f5f9;line-height:1.5;overflow-x:hidden}
        .main-wrapper{max-width:1440px;margin:0 auto;padding:1rem;width:100%}
        .section-page{display:block;width:100%}
        .section-page.hidden{display:none}
        .nav-tab{padding:.75rem 1.25rem;color:#94a3b8;border:none;border-bottom:2px solid transparent;cursor:pointer;background:none;font-size:.875rem;font-weight:500;transition:all .2s}
        .nav-tab:hover{color:#f1f5f9}
        .nav-tab.active{color:#38bdf8;border-bottom-color:#38bdf8}
    </style>

    <!-- FONTS (Non-blocking with swap) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"></noscript>
    
    <!-- STYLESHEETS (Non-blocking) -->
    <link rel="preload" as="style" href="css/styles.css?v=1.6">
    <link rel="stylesheet" href="css/styles.css?v=1.6" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="css/styles.css?v=1.6"></noscript>
    
    <link rel="preload" as="style" href="css/cards.css?v=1.5">
    <link rel="stylesheet" href="css/cards.css?v=1.5" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="css/cards.css?v=1.5"></noscript>

    <!-- TAILWIND CSS -->
    <script defer src="https://cdn.tailwindcss.com"></script>

</head>

<body class="min-h-screen bg-slate-900 text-slate-200 font-sans">

    <div class="main-wrapper">

        <header class="sticky top-0 z-50 flex justify-between items-center border-b border-slate-800 bg-slate-950/90 backdrop-blur-md py-3 px-4 -mx-4 w-[calc(100%+2rem)] md:-mx-6 md:w-[calc(100%+3rem)] md:relative md:bg-transparent md:backdrop-blur-none md:py-0 md:mb-6 md:pb-4 md:border-slate-700">
            <div class="flex items-center gap-3">
                <button id="menuBtn" class="lg:hidden p-2 rounded-lg bg-slate-800 text-white hover:bg-slate-700" aria-label="Open navigation menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <a href="#" data-tab="results" class="footer-link flex items-center gap-2.5">
                   <img src="img/logo.svg" alt="Lottong Pinoy - PCSO Lotto Results & Analysis" class="h-9 md:h-12 w-auto" width="36" height="36" style="aspect-ratio:1/1;height:36px;width:36px;">
                    <h1 class="text-xl md:text-2xl font-black text-white tracking-tight">
                        Lottong <span class="text-blue-400">Pinoy</span>
                    </h1>
                </a>
            </div>

            <nav id="mainNav" aria-label="Main Navigation" role="navigation" class="hidden lg:flex absolute top-full left-0 w-full lg:w-auto lg:static bg-slate-800 lg:bg-transparent border-b border-slate-700 lg:border-0 flex-col lg:flex-row gap-2 lg:gap-4 p-4 lg:p-0 z-50 shadow-xl lg:shadow-none mt-2 lg:mt-0">
                <button class="nav-tab active" data-tab="results">Results</button>
                <button class="nav-tab" data-tab="history">History</button>
                <button class="nav-tab" data-tab="generator">Generator</button>
                <button class="nav-tab" data-tab="checker">Checker</button>
                <button class="nav-tab" data-tab="analysis">Analysis</button>
                <button class="nav-tab" data-tab="calculator">Calculator</button>
            </nav>
        </header>

        <main id="main-content" role="main">
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
            <?php include 'views/terms.php'; ?>
        </main>

    </div>

    <?php include 'partials/footer.php'; ?>

    <!-- ============================================================ -->
    <!-- COOKIE CONSENT BANNER with Google Consent Mode v2            -->
    <!-- Integrates with gtag consent API for GDPR/privacy compliance -->
    <!-- ============================================================ -->
    <div id="cookieBanner" class="fixed bottom-0 left-0 right-0 bg-slate-900 border-t border-slate-700 shadow-2xl z-50 transition-transform duration-500 ease-out">
        <div class="max-w-[1440px] mx-auto p-4 md:p-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-center md:text-left">
                <p class="text-sm text-slate-300">
                    We use cookies to improve your experience and serve relevant ads. By clicking "Accept", you consent to our use of cookies for analytics and advertising. Read our <a href="#" data-tab="privacy" class="text-purple-400 underline footer-link">Privacy Policy</a>.
                </p>
            </div>
            <div class="flex gap-3 shrink-0">
                <button id="declineCookies" aria-label="Decline cookies" class="text-xs text-slate-300 hover:text-white px-4 py-2 rounded-lg border border-slate-700 transition-colors">Decline</button>
                <button id="acceptCookies" aria-label="Accept all cookies" class="text-xs font-bold text-white bg-purple-600 hover:bg-purple-500 px-6 py-2 rounded-lg shadow-lg transition-colors">Accept All Cookies</button>
            </div>
        </div>
    </div>

    <div id="insightModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[9999] hidden flex items-center justify-center p-4">
        <div class="bg-slate-900 rounded-3xl border border-slate-700 w-full max-w-sm shadow-2xl transform transition-all scale-95 opacity-0 relative" id="modalContent">
            <div class="p-6 text-center">
                <button onclick="closeInsightModal()" aria-label="Close insight modal" class="absolute top-4 right-4 text-slate-500 hover:text-white text-xl">&times;</button>
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

    <button id="scrollToTopBtn" aria-label="Scroll to top" class="fixed bottom-20 right-4 z-40 p-3 bg-blue-600 text-white rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-500 md:bottom-8">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <script type="module" src="js/app.js?v=1.7"></script>

    <!-- ============================================================ -->
    <!-- COOKIE CONSENT + GOOGLE CONSENT MODE v2 INTEGRATION          -->
    <!-- This script handles user consent and updates Google's        -->
    <!-- consent mode accordingly for GDPR/privacy compliance         -->
    <!-- ============================================================ -->
    <script>
        (function() {
            const banner = document.getElementById('cookieBanner');
            const acceptBtn = document.getElementById('acceptCookies');
            const declineBtn = document.getElementById('declineCookies');

            // Check if user already made a choice
            const consent = localStorage.getItem('cookie_consent');
            if (consent === 'accepted') {
                grantConsent();
                hideBanner();
            } else if (consent === 'denied') {
                denyConsent();
                hideBanner();
            }

            if (acceptBtn) {
                acceptBtn.addEventListener('click', function() {
                    localStorage.setItem('cookie_consent', 'accepted');
                    grantConsent();
                    hideBanner();
                });
            }

            if (declineBtn) {
                declineBtn.addEventListener('click', function() {
                    localStorage.setItem('cookie_consent', 'denied');
                    denyConsent();
                    hideBanner();
                });
            }

            function grantConsent() {
                gtag('consent', 'update', {
                    'ad_storage': 'granted',
                    'ad_user_data': 'granted',
                    'ad_personalization': 'granted',
                    'analytics_storage': 'granted',
                    'functionality_storage': 'granted',
                    'personalization_storage': 'granted'
                });
            }

            function denyConsent() {
                gtag('consent', 'update', {
                    'ad_storage': 'denied',
                    'ad_user_data': 'denied',
                    'ad_personalization': 'denied',
                    'analytics_storage': 'denied',
                    'functionality_storage': 'denied',
                    'personalization_storage': 'denied'
                });
            }

            function hideBanner() {
                if (banner) {
                    banner.style.transform = 'translateY(100%)';
                    setTimeout(() => { banner.style.display = 'none'; }, 500);
                }
            }
        })();
    </script>

    <!-- ============================================================ -->
    <!-- GA4 CUSTOM EVENT TRACKING FOR SPA NAVIGATION                 -->
    <!-- Tracks virtual page views when users switch tabs/sections    -->
    <!-- ============================================================ -->
    <script>
        (function() {
            // Track SPA navigation as virtual pageviews
            document.addEventListener('DOMContentLoaded', function() {
                const navTabs = document.querySelectorAll('.nav-tab');
                const footerLinks = document.querySelectorAll('.footer-link');
                const allTriggers = [...navTabs, ...footerLinks];

                allTriggers.forEach(function(trigger) {
                    trigger.addEventListener('click', function() {
                        const tabName = trigger.dataset.tab;
                        if (tabName && typeof gtag === 'function') {
                            gtag('event', 'page_view', {
                                'page_title': 'Lottong Pinoy - ' + tabName.charAt(0).toUpperCase() + tabName.slice(1),
                                'page_location': window.location.origin + '/#' + tabName
                            });
                            gtag('event', 'navigate', {
                                'event_category': 'navigation',
                                'event_label': tabName,
                                'value': tabName
                            });
                        }
                    });
                });

                // Track generate button clicks
                const genBtn = document.getElementById('generateBtn');
                if (genBtn) {
                    genBtn.addEventListener('click', function() {
                        if (typeof gtag === 'function') {
                            gtag('event', 'generate_numbers', {
                                'event_category': 'engagement',
                                'event_label': 'lucky_number_generator'
                            });
                        }
                    });
                }

                // Track check button clicks
                const checkBtn = document.getElementById('checkNowBtn');
                if (checkBtn) {
                    checkBtn.addEventListener('click', function() {
                        if (typeof gtag === 'function') {
                            gtag('event', 'check_numbers', {
                                'event_category': 'engagement',
                                'event_label': 'number_checker'
                            });
                        }
                    });
                }

                // Track analysis generation
                const analyzeBtn = document.getElementById('analyzeBtn');
                if (analyzeBtn) {
                    analyzeBtn.addEventListener('click', function() {
                        if (typeof gtag === 'function') {
                            gtag('event', 'run_analysis', {
                                'event_category': 'engagement',
                                'event_label': 'statistical_analysis'
                            });
                        }
                    });
                }
            });
        })();
    </script>
</body>
</html>