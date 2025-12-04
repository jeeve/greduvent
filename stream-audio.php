<?php
/**
 * Audio Streaming Script with HTTP Range Request Support
 * This script allows seeking in audio files by supporting partial content requests
 */

// Get the requested file
$file = isset($_GET['file']) ? $_GET['file'] : '';

if (empty($file)) {
    header("HTTP/1.1 400 Bad Request");
    exit('No file specified');
}

// Security: only allow files from the musique/songs directory
$musicDir = __DIR__ . '/musique/songs/';
$filePath = $musicDir . basename($file); // basename prevents directory traversal

// Debug: log the paths (remove this in production)
error_log("Requested file: $file");
error_log("Music dir: $musicDir");
error_log("Full path: $filePath");
error_log("File exists: " . (file_exists($filePath) ? 'yes' : 'no'));

// Check if file exists and is within the allowed directory
if (!file_exists($filePath) || !is_file($filePath)) {
    header("HTTP/1.1 404 Not Found");
    header("Content-Type: text/plain");
    exit("File not found: $filePath");
}

// Verify the file is in the correct directory (security check)
if (realpath(dirname($filePath)) !== realpath($musicDir)) {
    header("HTTP/1.1 403 Forbidden");
    exit('Access denied');
}

// Get file information
$fileSize = filesize($filePath);
$fileName = basename($filePath);

// Determine MIME type based on file extension
$ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
$mimeTypes = [
    'mp3' => 'audio/mpeg',
    'wav' => 'audio/wav',
    'ogg' => 'audio/ogg',
    'flac' => 'audio/flac',
    'm4a' => 'audio/mp4'
];
$mimeType = isset($mimeTypes[$ext]) ? $mimeTypes[$ext] : 'application/octet-stream';

error_log("MIME type: $mimeType");

// Handle Range Requests
$start = 0;
$end = $fileSize - 1;
$length = $fileSize;

// Check if Range header is present
if (isset($_SERVER['HTTP_RANGE'])) {
    // Parse the range header
    if (preg_match('/bytes=(\d+)-(\d*)/', $_SERVER['HTTP_RANGE'], $matches)) {
        $start = intval($matches[1]);
        if (!empty($matches[2])) {
            $end = intval($matches[2]);
        }
    }
    
    // Validate range
    if ($start > $end || $start >= $fileSize || $end >= $fileSize) {
        header("HTTP/1.1 416 Requested Range Not Satisfiable");
        header("Content-Range: bytes */$fileSize");
        exit();
    }
    
    $length = $end - $start + 1;
    
    // Send partial content response
    header("HTTP/1.1 206 Partial Content");
    header("Content-Range: bytes $start-$end/$fileSize");
} else {
    // Send full content response
    header("HTTP/1.1 200 OK");
}

// Common headers
header("Content-Type: $mimeType");
header("Content-Length: $length");
header("Accept-Ranges: bytes");
header("Cache-Control: public, max-age=3600");
header("Content-Disposition: inline; filename=\"$fileName\"");

// Disable output buffering
if (ob_get_level()) {
    ob_end_clean();
}

// Open file and seek to start position
$fp = fopen($filePath, 'rb');
if ($start > 0) {
    fseek($fp, $start);
}

// Stream the file in chunks
$chunkSize = 8192; // 8KB chunks
$bytesRemaining = $length;

while ($bytesRemaining > 0 && !feof($fp)) {
    $bytesToRead = min($chunkSize, $bytesRemaining);
    echo fread($fp, $bytesToRead);
    $bytesRemaining -= $bytesToRead;
    flush();
}

fclose($fp);
exit();
