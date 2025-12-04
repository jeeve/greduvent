<?php
// Scan for music files
$musicDir = __DIR__ . '/../musique/songs';
$songs = [];

// Calculate the base URL - simple approach
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$baseUrl = $protocol . '://' . $host;

if (is_dir($musicDir)) {
    $files = scandir($musicDir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['mp3', 'wav', 'ogg'])) {
                $songs[] = [
                    'name' => pathinfo($file, PATHINFO_FILENAME),
                    'url' => $baseUrl . '/stream-audio.php?file=' . urlencode($file),
                    'file' => null // It's a server file, not a Blob
                ];
            }
        }
    }
    
    // Don't shuffle here - let JavaScript handle it to maintain consistency
}
?>
<!-- Debug: Base URL = <?php echo htmlspecialchars($baseUrl); ?> -->
<!-- Debug: Number of songs found = <?php echo count($songs); ?> -->
<?php if (count($songs) > 0): ?>
<!-- Debug: First song URL = <?php echo htmlspecialchars($songs[0]['url']); ?> -->
<?php endif; ?>
<script>
    window.initialPlaylist = <?php echo json_encode($songs); ?>;
</script>
<div id="side-player-container">
    <div id="side-player-trigger">
        <i class="glyphicon glyphicon-music"></i>
    </div>
    <div id="side-player-panel">
        <div class="app-container-side">
            <header class="side-header">
                <h3><a href="https://www.youtube.com/playlist?list=PLvp4urJ2GQfiRa0B5ZYjLukDXRb4fA4zr" target="_blank" style="text-decoration: none; color: #fff;">Cuisine Spectrale</a></h3>
                    <label style="display: none;" for="file-input" class="upload-btn-side" title="Ajouter des fichiers">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                    </label>
                    <input style="display: none;" type="file" id="file-input" accept="audio/mp3, audio/wav, audio/mpeg" multiple hidden>         
            </header>

            <main class="side-main">
                <div class="player-card-side">
                    <div class="visualizer-container-side">
                        <canvas id="visualizer"></canvas>
                        <div class="track-info-side">
                            <h4 id="track-title">Aucune lecture</h4>
                            <p id="track-artist">Sélectionnez des fichiers</p>
                        </div>
                    </div>

                    <div class="controls-container-side">
                        <div class="progress-area-side">
                            <span id="current-time">0:00</span>
                            <div class="progress-bar-wrapper" id="progress-container">
                                <div class="progress-bar" id="progress-bar"></div>
                            </div>
                            <span id="duration">0:00</span>
                        </div>

                        <div class="main-controls-side">
                            <button id="prev-btn" class="control-btn sm" aria-label="Précédent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="19 20 9 12 19 4 19 20"/><line x1="5" y1="19" x2="5" y2="5"/></svg>
                            </button>
                            <button id="play-pause-btn" class="control-btn lg" aria-label="Lecture/Pause">
                                <svg id="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                                <svg id="pause-icon" class="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="none"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>
                            </button>
                            <button id="next-btn" class="control-btn sm" aria-label="Suivant">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 4 15 12 5 20 5 4"/><line x1="19" y1="5" x2="19" y2="19"/></svg>
                            </button>
                        </div>
                        
                        <div class="volume-control-side">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
                            <input type="range" id="volume-slider" min="0" max="1" step="0.05" value="0.8">
                        </div>
                    </div>
                </div>

                <div class="playlist-panel-side">
                    <h5>Playlist <span id="track-count">(0)</span></h5>
                    <ul id="playlist" class="playlist-list-side">
                        <!-- Items will be added here dynamically -->
                        <li class="empty-state-side">Vide</li>
                    </ul>
                </div>
            </main>
        </div>
    </div>
</div>
