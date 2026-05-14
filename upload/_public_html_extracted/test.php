<?php
 $url = 'https://raw.githubusercontent.com/turquezalabs-ai/lottongpinoy-scraper/main/data/results_temp_2d_3d.json';

 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_VERBOSE, true);

 $verbose = fopen('php://temp', 'w+');
curl_setopt($ch, CURLOPT_STDERR, $verbose);

 $response = curl_exec($ch);
 $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 $error = curl_error($ch);
curl_close($ch);

echo "<h3>cURL Test Results</h3>";
echo "<p>HTTP Code: " . $httpCode . "</p>";
echo "<p>Error: " . ($error ? $error : 'None') . "</p>";
echo "<p>Response length: " . strlen($response) . " bytes</p>";

if ($response) {
    $data = json_decode($response, true);
    echo "<p>Records found: " . count($data) . "</p>";
    echo "<pre>" . print_r($data, true) . "</pre>";
} else {
    echo "<p style='color:red'>FAILED to fetch data</p>";
}
?>