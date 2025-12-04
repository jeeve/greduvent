document.addEventListener('DOMContentLoaded', () => {
    // DOM Elements
    const container = document.getElementById('side-player-container');
    const panel = document.getElementById('side-player-panel');
    const trigger = document.getElementById('side-player-trigger');
    const fileInput = document.getElementById('file-input');
    const playPauseBtn = document.getElementById('play-pause-btn');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const playIcon = document.getElementById('play-icon');
    const pauseIcon = document.getElementById('pause-icon');
    const progressBar = document.getElementById('progress-bar');
    const progressContainer = document.getElementById('progress-container');
    const currentTimeEl = document.getElementById('current-time');
    const durationEl = document.getElementById('duration');
    const volumeSlider = document.getElementById('volume-slider');
    const playlistEl = document.getElementById('playlist');
    const trackTitleEl = document.getElementById('track-title');
    const trackArtistEl = document.getElementById('track-artist');
    const trackCountEl = document.getElementById('track-count');
    const visualizerCanvas = document.getElementById('visualizer');

    // Panel Interaction
    let isPanelOpen = false;

    // Toggle panel on trigger click (optional fallback)
    trigger.addEventListener('click', () => {
        panel.classList.toggle('active');
    });

    // Ensure panel stays open when interacting with file input
    fileInput.addEventListener('click', (e) => {
        e.stopPropagation();
    });

    // State
    let playlist = [];
    let currentTrackIndex = -1;
    let isPlaying = false;
    let audio = new Audio();
    audio.preload = 'metadata'; // Load metadata only initially
    let audioContext;
    let analyser;
    let source;
    let isAudioContextSetup = false;

    // Add error handler for audio element
    audio.addEventListener('error', (e) => {
        console.error('Audio error:', e);
        console.error('Audio error code:', audio.error ? audio.error.code : 'unknown');
        console.error('Audio error message:', audio.error ? audio.error.message : 'unknown');
        console.error('Current source:', audio.src);
    });

    // Event Listeners
    fileInput.addEventListener('change', handleFileSelect);
    playPauseBtn.addEventListener('click', togglePlay);
    prevBtn.addEventListener('click', playPrev);
    nextBtn.addEventListener('click', playNext);
    audio.addEventListener('timeupdate', updateProgress);
    audio.addEventListener('ended', playNext);
    audio.addEventListener('loadedmetadata', () => {
        durationEl.textContent = formatTime(audio.duration);
    });
    progressContainer.addEventListener('click', setProgress);
    volumeSlider.addEventListener('input', setVolume);
    
    // Save state periodically and on important events
    audio.addEventListener('timeupdate', () => {
        // Save every 2 seconds to avoid too many writes
        if (Math.floor(audio.currentTime) % 2 === 0) {
            saveState();
        }
    });
    audio.addEventListener('pause', saveState);
    audio.addEventListener('play', saveState);
    
    // Save state before page unload
    window.addEventListener('beforeunload', saveState);

    // LocalStorage keys
    const STORAGE_KEY = 'audioPlayerState';

    // Save player state to localStorage
    function saveState() {
        const state = {
            currentTrackIndex,
            currentTime: audio.currentTime,
            isPlaying,
            volume: audio.volume,
            playlist: playlist.map(track => ({
                name: track.name,
                url: track.url
            }))
        };
        localStorage.setItem(STORAGE_KEY, JSON.stringify(state));
    }

    // Load player state from localStorage
    function loadState() {
        const saved = localStorage.getItem(STORAGE_KEY);
        if (saved) {
            try {
                return JSON.parse(saved);
            } catch (e) {
                console.error('Error loading saved state:', e);
                return null;
            }
        }
        return null;
    }

    // Clear saved state
    function clearState() {
        localStorage.removeItem(STORAGE_KEY);
    }

    // Initialize Volume
    audio.volume = volumeSlider.value;

    // Load Initial Playlist
    console.log('Checking for initial playlist...');
    console.log('window.initialPlaylist:', window.initialPlaylist);
    
    // Try to restore previous state first
    const savedState = loadState();
    let shouldRestoreState = false;
    
    if (window.initialPlaylist && window.initialPlaylist.length > 0) {
        // Check if we have a saved shuffled order
        if (savedState && savedState.playlist && savedState.playlist.length > 0) {
            // Use the saved playlist order
            console.log('Using saved playlist order');
            playlist = savedState.playlist;
        } else {
            // First time - shuffle the initial playlist
            console.log('First time - shuffling playlist');
            playlist = [...window.initialPlaylist];
            
            // Fisher-Yates shuffle algorithm
            for (let i = playlist.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [playlist[i], playlist[j]] = [playlist[j], playlist[i]];
            }
            
            // Save the shuffled order immediately
            saveState();
        }
        
        console.log('Loaded playlist with', playlist.length, 'tracks');
        console.log('Playlist:', playlist);
        console.log('First track URL:', playlist[0]?.url);
        
        // Check if we should restore previous playback state
        if (savedState && savedState.currentTrackIndex >= 0) {
            console.log('Found saved state, restoring playback...');
            console.log('Saved track index:', savedState.currentTrackIndex);
            console.log('Saved time:', savedState.currentTime);
            console.log('Was playing:', savedState.isPlaying);
            
            currentTrackIndex = savedState.currentTrackIndex;
            audio.volume = savedState.volume;
            volumeSlider.value = savedState.volume;
            
            updatePlaylistUI();
            loadTrack(currentTrackIndex);
            
            // Wait for metadata to load before setting time
            audio.addEventListener('loadedmetadata', function restoreTime() {
                audio.currentTime = savedState.currentTime || 0;
                if (savedState.isPlaying) {
                    playTrack();
                }
                audio.removeEventListener('loadedmetadata', restoreTime);
            }, { once: true });
        } else {
            updatePlaylistUI();
            // Load first track but don't play
            loadTrack(0);
        }
    } else {
        console.log('No initial playlist found');
    }

    // Handle File Selection
    function handleFileSelect(e) {
        const files = Array.from(e.target.files);
        handleFiles(files);
    }

    function handleFiles(files) {
        if (files.length === 0) return;

        // Add files to playlist
        const newTracks = files.map(file => ({
            name: file.name.replace(/\.[^/.]+$/, ""), // Remove extension
            url: URL.createObjectURL(file),
            file: file
        }));

        playlist = [...playlist, ...newTracks];
        updatePlaylistUI();

        // If it's the first track added, load it but don't play yet
        if (currentTrackIndex === -1) {
            loadTrack(0);
        }
    }

    // Update Playlist UI
    function updatePlaylistUI() {
        playlistEl.innerHTML = '';
        trackCountEl.textContent = `(${playlist.length})`;

        if (playlist.length === 0) {
            playlistEl.innerHTML = '<li class="empty-state-side">Vide</li>';
            return;
        }

        playlist.forEach((track, index) => {
            const li = document.createElement('li');
            li.classList.add('playlist-item');
            if (index === currentTrackIndex) {
                li.classList.add('active');
            }

            li.innerHTML = `
                <span class="track-number">${index + 1}</span>
                <div class="track-details">
                    <div class="track-name">${track.name}</div>
                </div>
            `;

            li.addEventListener('click', () => {
                loadTrack(index);
                playTrack();
            });

            playlistEl.appendChild(li);
        });
    }

    // Load Track
    function loadTrack(index) {
        if (index < 0 || index >= playlist.length) return;

        currentTrackIndex = index;
        const trackUrl = playlist[index].url;
        console.log('Loading track:', playlist[index].name);
        console.log('Track URL:', trackUrl);
        audio.src = trackUrl;
        trackTitleEl.textContent = playlist[index].name;
        trackArtistEl.textContent = "Fichier local";
        
        // Reset progress
        progressBar.style.width = '0%';
        currentTimeEl.textContent = '0:00';
        
        updatePlaylistUI();
    }

    // Play/Pause Toggle
    function togglePlay() {
        if (playlist.length === 0) return;

        if (!isAudioContextSetup) {
            setupAudioContext();
        }

        if (isPlaying) {
            pauseTrack();
        } else {
            playTrack();
        }
    }

    function playTrack() {
        if (!isAudioContextSetup) {
            setupAudioContext();
        }
        
        audio.play()
            .then(() => {
                isPlaying = true;
                saveState();
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
                updatePlaylistUI(); // To show active state
            })
            .catch(err => console.error("Error playing:", err));
    }

    function pauseTrack() {
        audio.pause();
        isPlaying = false;
        playIcon.classList.remove('hidden');
        pauseIcon.classList.add('hidden');
        saveState();
    }

    function playPrev() {
        if (currentTrackIndex > 0) {
            loadTrack(currentTrackIndex - 1);
            playTrack();
        } else {
            // Loop to last
            loadTrack(playlist.length - 1);
            playTrack();
        }
    }

    function playNext() {
        if (currentTrackIndex < playlist.length - 1) {
            loadTrack(currentTrackIndex + 1);
            playTrack();
        } else {
            // Loop to first
            loadTrack(0);
            playTrack();
        }
    }

    // Progress Bar
    function updateProgress(e) {
        const { duration, currentTime } = e.srcElement;
        if (isNaN(duration)) return;
        
        const progressPercent = (currentTime / duration) * 100;
        progressBar.style.width = `${progressPercent}%`;
        currentTimeEl.textContent = formatTime(currentTime);
    }

    function setProgress(e) {
        const duration = audio.duration;
        if (isNaN(duration)) return;

        // Use getBoundingClientRect for accurate click position
        const rect = this.getBoundingClientRect();
        const clickX = e.clientX - rect.left;
        const width = rect.width;
        
        // Calculate the new time
        const newTime = (clickX / width) * duration;
        const clampedTime = Math.max(0, Math.min(newTime, duration));
        
        // Just set it - let the browser handle buffering
        audio.currentTime = clampedTime;
    }

    function setVolume(e) {
        audio.volume = e.target.value;
        saveState();
    }

    function formatTime(seconds) {
        const min = Math.floor(seconds / 60);
        const sec = Math.floor(seconds % 60);
        return `${min}:${sec < 10 ? '0' : ''}${sec}`;
    }

    // Visualizer
    function setupAudioContext() {
        if (isAudioContextSetup) return;

        try {
            audioContext = new (window.AudioContext || window.webkitAudioContext)();
            analyser = audioContext.createAnalyser();
            source = audioContext.createMediaElementSource(audio);
            
            source.connect(analyser);
            analyser.connect(audioContext.destination);
            
            analyser.fftSize = 128; // Smaller FFT for smaller canvas
            isAudioContextSetup = true;
            
            drawVisualizer();
        } catch (e) {
            console.error("Audio Context setup failed:", e);
        }
    }

    function drawVisualizer() {
        if (!isAudioContextSetup) return;

        const bufferLength = analyser.frequencyBinCount;
        const dataArray = new Uint8Array(bufferLength);
        
        const canvas = visualizerCanvas;
        const ctx = canvas.getContext('2d');
        
        // Resize canvas to match display size
        canvas.width = canvas.clientWidth;
        canvas.height = canvas.clientHeight;
        
        const WIDTH = canvas.width;
        const HEIGHT = canvas.height;
        const barWidth = (WIDTH / bufferLength) * 2.5;
        let barHeight;
        let x = 0;

        function renderFrame() {
            requestAnimationFrame(renderFrame);
            
            x = 0;
            analyser.getByteFrequencyData(dataArray);
            
            ctx.clearRect(0, 0, WIDTH, HEIGHT);
            
            for (let i = 0; i < bufferLength; i++) {
                barHeight = dataArray[i] / 2; // Scale down
                
                // Create gradient
                const gradient = ctx.createLinearGradient(0, HEIGHT, 0, HEIGHT - barHeight);
                gradient.addColorStop(0, '#6366f1');
                gradient.addColorStop(1, '#ec4899');
                
                ctx.fillStyle = gradient;
                ctx.fillRect(x, HEIGHT - barHeight, barWidth, barHeight);
                
                x += barWidth + 1;
            }
        }
        
        renderFrame();
    }
});
