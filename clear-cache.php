<?php
 $cacheDir = __DIR__ . '/cache/';
if (is_dir($cacheDir)) {
    $files = glob($cacheDir . '*');
    foreach ($files as $file) {
        unlink($file);
    }
    echo "Cache cleared! " . count($files) . " files deleted.";
} else {
    echo "No cache directory found.";
}
?>