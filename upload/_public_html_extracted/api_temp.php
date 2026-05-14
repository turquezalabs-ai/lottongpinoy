<?php
header('Content-Type: application/json');

 $VPS_DATA_URL = 'http://194.233.87.137:3001/data/results_temp_2d_3d.json';
 $CACHE_FILE = __DIR__ . '/cache_temp_2d_3d.json';
 $CACHE_TIME = 60;

if (file_exists($CACHE_FILE) && (time() - filemtime($CACHE_FILE)) < $CACHE_TIME) {
    readfile($CACHE_FILE);
    exit;
}

 $ch = curl_init($VPS_DATA_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
 $data = curl_exec($ch);
 $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($data && $httpCode === 200) {
    file_put_contents($CACHE_FILE, $data);
    echo $data;
} else {
    if (file_exists($CACHE_FILE)) {
        readfile($CACHE_FILE);
    } else {
        echo json_encode([]);
    }
}
?>