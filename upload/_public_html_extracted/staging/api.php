<?php
// api.php
header('Content-Type: application/json');

// Correct path to your data file
 $jsonFile = __DIR__ . '/results.json';

if (file_exists($jsonFile)) {
    // Output the file content
    readfile($jsonFile);
} else {
    // Debug: Check if file permissions are correct or path is wrong
    // This will return an empty array if file not found, preventing JS errors
    echo json_encode([]);
}
// Get partial winners for a specific game
function get_partial_breakdown($game_name) {
    $file = __DIR__ . '/data/partial_winners.json';
    if (!file_exists($file)) return null;

    $json = json_decode(file_get_contents($file), true);
    if (!$json) return null;

    // Filter by game name and get the latest
    $filtered = array_filter($json, function($item) use ($game_name) {
        return $item['game'] === $game_name;
    });

    // Sort by date (just in case)
    usort($filtered, function($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });

    // Return the first (latest) one
    return reset($filtered);
}
?>