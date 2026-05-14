<?php
/**
 * Plugin Name: Lottong Pinoy
 * Description: Lotto Results & Analysis Portal.
 * Version: 2.0
 * Author: Your Name
 */

if (!defined('ABSPATH')) exit;

// ==========================================
// 1. DATABASE SETUP
// ==========================================
register_activation_hook(__FILE__, 'lp_db_init');
function lp_db_init() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'lotto_results';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        game varchar(50) NOT NULL,
        draw_date date NOT NULL,
        combination varchar(255) NOT NULL,
        prize varchar(255) DEFAULT '',
        winners int DEFAULT 0,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// ==========================================
// 2. LOAD SCRIPTS & STYLES
// ==========================================
add_action('wp_enqueue_scripts', 'lp_load_assets');
function lp_load_assets() {
    global $post;
    if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'lottong_pinoy_app') ) {
        
        // 1. Tailwind CSS
        wp_enqueue_style('tailwind-css', 'https://cdn.tailwindcss.com', array(), '3.3.0');

        // 2. Your Custom Styles
        wp_enqueue_style('lp-css', plugin_dir_url(__FILE__) . 'styles.css', array(), '1.0');

        // 3. JavaScript
        wp_enqueue_script('lp-js', plugin_dir_url(__FILE__) . 'app.js', array('jquery'), '1.0', true);
        
        // 4. Pass Data to JS
        wp_localize_script('lp-js', 'lotto_obj', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('lotto_secure_nonce')
        ));
    }
}

// ==========================================
// 3. PWA SETUP (Install Button)
// ==========================================
add_action('wp_head', 'lp_pwa_head');
function lp_pwa_head() {
    global $post;
    if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'lottong_pinoy_app') ) {
        // Mobile Viewport Fix (CRITICAL FOR ANDROID)
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
        
        // PWA Manifest Link
        echo '<link rel="manifest" href="' . plugin_dir_url(__FILE__) . 'manifest.json">';
        echo '<meta name="theme-color" content="#0f172a">';
        
        // Preconnect Fonts
        echo '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">';
    }
}

// Load Service Worker
add_action('wp_footer', 'lp_pwa_footer');
function lp_pwa_footer() {
    global $post;
    if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'lottong_pinoy_app') ) {
        ?>
        <script>
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('<?php echo plugin_dir_url(__FILE__); ?>sw.js')
                .then(function() { console.log('PWA Ready'); });
            }
        </script>
        <?php
    }
}

// ==========================================
// 4. SHORTCODE TO DISPLAY THE APP
// ==========================================
add_shortcode('lottong_pinoy_app', 'lp_render_app_html');
function lp_render_app_html() {
    
    // Inline fix for theme background conflicts
    echo '<style>
        .lp-app-wrapper { background-color: #0f172a; color: #f1f5f9; font-family: "Inter", sans-serif; margin: -20px; padding: 20px; min-height: 100vh; }
        .lp-app-wrapper * { box-sizing: border-box; }
        .lp-app-wrapper select, .lp-app-wrapper input {
            background: rgba(15, 23, 42, 0.6) !important;
            border: 1px solid #334155 !important;
            color: #f1f5f9 !important;
            border-radius: 0.5rem !important;
            padding: 0.75rem !important;
        }
    </style>';

    echo '<div class="lp-app-wrapper">';
    
    // ==================================================
    // HTML CONTENT STARTS HERE
    // ==================================================
    ?>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
            <div>
                <h1 class="font-display text-4xl tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-blue-500">
                    Lottong Pinoy
                </h1>
                <p class="text-slate-400 text-md mt-1">Official Results & Analysis Portal</p>
            </div>
            <div id="status" class="flex items-center gap-2 text-sm font-medium px-3 py-1 rounded-full bg-sky-500/10 text-sky-400">
                <span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span>
                <span id="statusText">Connecting...</span>
            </div>
        </header>

        <!-- Navigation Tabs -->
        <nav class="mb-8 border-b border-slate-700">
            <ul class="flex flex-wrap gap-x-1 gap-y-2 -mb-px text-md font-medium text-center">
                <li><button class="nav-tab active" data-tab="results">Results</button></li>
                <li><button class="nav-tab" data-tab="history">Draw History</button></li>
                <li><button class="nav-tab" data-tab="generator">Lucky Generator</button></li>
                <li><button class="nav-tab" data-tab="checker">Number Checker</button></li>
                <li><button class="nav-tab" data-tab="analysis">Analysis</button></li>
            </ul>
        </nav>

        <!-- SECTION 1: RESULTS -->
        <section id="section-results" class="section-page">
            <div class="mb-8">
                <div class="flex justify-between items-end mb-4">
                    <div>
                        <h2 class="text-2xl font-semibold text-white mt-3">Latest Draw Results</h2>
                        <p id="updateTimestamp" class="text-sm text-slate-500 mb-5 mt-1">As of Loading...</p>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-sky-400 my-5 uppercase tracking-wider">Major Games</h3>
                <div id="latestGridMajor" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-8"></div>
                <h3 class="text-xl font-bold text-sky-400 my-5 uppercase tracking-wider">Digit Games</h3>
                <div id="latestGridDigit" class="grid grid-cols-1 md:grid-cols-2 gap-4"></div>
            </div>
        </section>

        <!-- SECTION 2: DRAW HISTORY -->
        <section id="section-history" class="section-page hidden">
            <div class="mb-6">
                <h2 class="text-2xl font-semibold text-white mt-3">Draw History</h2>
                <p class="text-slate-400 text-md mt-1">Search and filter past winning numbers.</p>
            </div>
            <div class="grid lg:grid-cols-4 gap-8">
                <aside class="lg:col-span-1">
                    <div class="panel sticky top-8">
                        <h3 class="font-display text-sm text-sky-400 mb-6 tracking-widest">FILTER</h3>
                        <div class="space-y-5">
                            <div>
                                <label class="block text-xs text-slate-400 mb-2 uppercase tracking-wide">Game Type</label>
                                <select id="gameSelect" class="select w-full">
                                    <option value="all">All Games</option>
                                    <option value="6/58">Ultra Lotto 6/58</option>
                                    <option value="6/55">Grand Lotto 6/55</option>
                                    <option value="6/49">Super Lotto 6/49</option>
                                    <option value="6/45">Mega Lotto 6/45</option>
                                    <option value="6/42">Lotto 6/42</option>
                                    <option value="6D">6D Lotto</option>
                                    <option value="4D">4D Lotto</option>
                                    <option value="3D">3D Lotto</option>
                                    <option value="2D">2D Lotto</option>
                                </select>
                            </div>
                            <div id="scheduleContainer" class="hidden">
                                <label class="block text-xs text-slate-400 mb-2 uppercase tracking-wide">Schedule</label>
                                <select id="scheduleSelect" class="select w-full">
                                    <option value="all">All Schedules</option>
                                    <option value="11AM">11:00 AM</option>
                                    <option value="4PM">4:00 PM</option>
                                    <option value="9PM">9:00 PM</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs text-slate-400 mb-2 uppercase tracking-wide">Draw Date</label>
                                <div class="grid grid-cols-2 gap-2">
                                    <div>
                                        <label class="block text-[10px] text-slate-500 mb-1">From</label>
                                        <input type="date" id="startDate" class="input w-full">
                                    </div>
                                    <div>
                                        <label class="block text-[10px] text-slate-500 mb-1">To</label>
                                        <input type="date" id="endDate" class="input w-full">
                                    </div>
                                </div>
                            </div>
                            <button id="searchBtn" class="btn btn-primary w-full">Apply Filter</button>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-700 space-y-3">
                            <h4 class="text-xs text-slate-400 uppercase tracking-wide mb-3">Quick Stats</h4>
                            <div class="flex justify-between text-sm">
                                <span class="text-slate-400">Total Draws</span>
                                <span id="statDraws" class="text-white font-bold">0</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-slate-400">Total Winners</span>
                                <span id="statWinners" class="text-white font-bold">0</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-slate-400">Total Prize</span>
                                <span id="statPrize" class="text-white font-bold">P 0</span>
                            </div>
                        </div>
                    </div>
                </aside>
                <main class="lg:col-span-3">
                    <div class="panel min-h-[400px]">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-bold text-white">Filter Result</h3>
                            <span id="resultCountBadge" class="text-xs bg-slate-700 px-2 py-1 rounded text-slate-300">0 results</span>
                        </div>
                        <div id="loading" class="hidden flex-col items-center justify-center h-64">
                             <div class="w-10 h-10 border-4 border-sky-500 border-t-transparent rounded-full animate-spin mb-4"></div>
                            <p class="text-slate-400 text-sm">Fetching history...</p>
                        </div>
                        <div id="tableArea">
                            <div id="emptyState" class="text-center py-12">
                                <svg class="w-16 h-16 mx-auto text-slate-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                                <p class="text-slate-400 text-lg">Select a filter and click "Apply Filter"</p>
                            </div>
                            <div id="resultsContainer" class="hidden">
                                <div class="overflow-x-auto">
                                    <table class="w-full text-left">
                                        <thead>
                                            <tr class="border-b border-slate-700">
                                                <th class="text-xs text-slate-400 p-2">Draw Date</th>
                                                <th class="text-xs text-slate-400 p-2">Game</th>
                                                <th class="text-xs text-slate-400 p-2">Time</th>
                                                <th class="text-xs text-slate-400 p-2">Winning Numbers</th>
                                                <th class="text-right text-xs text-slate-400 p-2">Prize</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody"></tbody>
                                    </table>
                                </div>
                                <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-700">
                                    <button id="prevBtn" class="btn btn-outline text-xs px-4 py-2">← Previous</button>
                                    <div class="flex items-center gap-2 text-sm text-slate-400">
                                        <span>Page</span>
                                        <input type="number" id="gotoPageInput" class="w-12 bg-slate-800 border border-slate-600 rounded text-center text-xs py-1" min="1" value="1">
                                        <span>of <span id="totalPagesSpan">1</span></span>
                                        <button id="gotoPageBtn" class="btn btn-outline text-xs px-2 py-1">Go</button>
                                    </div>
                                    <button id="nextBtn" class="btn btn-outline text-xs px-4 py-2">Next →</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </section>

        <!-- SECTION 3: GENERATOR -->
        <section id="section-generator" class="section-page hidden">
             <div class="grid lg:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div>
                        <h2 class="text-2xl font-bold text-white mb-2">Your Lucky Number</h2>
                        <p class="text-slate-400 text-sm">Generate statistically suggested combinations.</p>
                    </div>
                    <div class="panel">
                        <div class="mb-6">
                            <label class="block text-xs text-slate-400 mb-2 uppercase tracking-wide">Method</label>
                            <div class="flex gap-6 items-center">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="radio" name="genMethod" value="normal" checked class="w-4 h-4 accent-sky-500 cursor-pointer">
                                    <span class="text-sm text-slate-300 group-hover:text-white">Normal</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="radio" name="genMethod" value="system" class="w-4 h-4 accent-sky-500 cursor-pointer">
                                    <span class="text-sm text-slate-300 group-hover:text-white">System Play</span>
                                </label>
                            </div>
                        </div>
                        <div id="systemPicksContainer" class="hidden mb-6 animate-fade-in">
                            <label class="block text-xs text-slate-400 mb-2 uppercase tracking-wide">Picks</label>
                            <select id="systemPicksSelect" class="select w-full">
                                <option value="7">System 7</option>
                                <option value="8">System 8</option>
                                <option value="9">System 9</option>
                                <option value="10">System 10</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div>
                                <label class="block text-xs text-slate-400 mb-2">Select Game</label>
                                <select id="genGameSelect" class="select w-full">
                                    <option value="6/58">Ultra Lotto 6/58</option>
                                    <option value="6/55">Grand Lotto 6/55</option>
                                    <option value="6/49">Super Lotto 6/49</option>
                                    <option value="6/45">Mega Lotto 6/45</option>
                                    <option value="6/42">Lotto 6/42</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs text-slate-400 mb-2">Strategy</label>
                                <select id="genStrategySelect" class="select w-full">
                                    <option value="60">Possible (60%)</option>
                                    <option value="70">Probable (70%)</option>
                                </select>
                            </div>
                        </div>
                        <button id="generateBtn" class="btn btn-primary w-full py-4 text-lg mb-6">🎲 Generate Numbers</button>
                        <div class="bg-black/20 p-6 rounded-lg text-center min-h-[80px] flex items-center justify-center">
                            <div id="genOutput" class="flex gap-2 flex-wrap justify-center"></div>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <h3 class="text-lg font-bold text-white">Saved Combinations</h3>
                    <div id="genHistoryList" class="saved-grid">
                        <p class="text-slate-500 text-sm text-center py-8 col-span-2">No numbers saved.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: CHECKER -->
        <section id="section-checker" class="section-page hidden">
            <div class="grid lg:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-2">Number Checker</h2>
                    <div class="panel mb-4">
                        <div class="flex justify-between items-center mb-4">
                            <select id="checkGameSelect" class="select w-auto">
                                <option value="6/42">Lotto 6/42</option>
                                <option value="6/45">Mega Lotto 6/45</option>
                            </select>
                            <button id="clearSelection" class="text-xs text-sky-400">Clear</button>
                        </div>
                        <div id="numberGrid" class="number-grid"></div>
                        <div class="mt-6 flex justify-between items-center">
                            <div id="selectedCountBadge" class="text-xs text-slate-400">Selected: 0/6</div>
                            <button id="checkNowBtn" class="btn btn-primary px-6 py-2" disabled>Check History</button>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white mb-2">Prize History</h3>
                    <div id="checkResults" class="panel min-h-[300px] overflow-y-auto">
                        <p class="text-slate-500 text-md text-center py-8">Select numbers.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: ANALYSIS -->
        <section id="section-analysis" class="section-page hidden">
            <div class="max-w-6xl mx-auto">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-white mb-2">Analysis</h2>
                    <p class="text-slate-400 text-sm">Data insights.</p>
                </div>
                <div class="panel mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                        <div class="md:col-span-2">
                            <select id="analysisGameSelect" class="select w-full">
                                <option value="6/58">Ultra Lotto 6/58</option>
                                <option value="6/55">Grand Lotto 6/55</option>
                            </select>
                        </div>
                        <div>
                            <input type="date" id="analysisStartDate" class="input w-full">
                        </div>
                        <div>
                            <input type="date" id="analysisEndDate" class="input w-full">
                        </div>
                    </div>
                    <button id="analyzeBtn" class="btn btn-primary w-full mt-4">Generate Analysis</button>
                </div>
                <div id="analysisResultsContainer" class="hidden space-y-12">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="panel"><h3 class="font-bold text-red-400 mb-4">🔥 Hot Numbers</h3><div id="hotNumbers" class="space-y-2"></div></div>
                        <div class="panel"><h3 class="font-bold text-blue-400 mb-4">❄️ Cold Numbers</h3><div id="coldNumbers" class="space-y-2"></div></div>
                    </div>
                </div>
                <div id="analysisEmptyState" class="panel text-center">
                    <p class="text-slate-400 text-lg">Select filters.</p>
                </div>
            </div>
        </section>

    </div>

    <?php
    echo '</div>';
}

// ==========================================
// 5. BACKEND LOGIC (AJAX)
// ==========================================
add_action('wp_ajax_lp_get_results', 'lp_handle_get_results');
add_action('wp_ajax_nopriv_lp_get_results', 'lp_handle_get_results');
function lp_handle_get_results() {
    global $wpdb;
    check_ajax_referer('lotto_secure_nonce', 'security');
    $table_name = $wpdb->prefix . 'lotto_results';
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY draw_date DESC LIMIT 5000");
    wp_send_json_success($results);
}

add_action('wp_ajax_lp_generate', 'lp_handle_generate');
add_action('wp_ajax_nopriv_lp_generate', 'lp_handle_generate');
function lp_handle_generate() {
    check_ajax_referer('lotto_secure_nonce', 'security');
    $count = isset($_POST['count']) ? intval($_POST['count']) : 6;
    $numbers = [];
    while(count($numbers) < $count) { $r = rand(1, 58); if(!in_array($r, $numbers)) $numbers[] = $r; }
    wp_send_json_success(array('numbers' => $numbers));
}