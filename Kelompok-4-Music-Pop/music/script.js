// Selecting the elements from the HTML document
let now_playing = document.querySelector('.now-playing');
let track_art = document.querySelector('.track-art');
let track_name = document.querySelector('.track-name');
let track_artist = document.querySelector('.track-artist');

let playpause_btn = document.querySelector('.playpause-track');
let next_btn = document.querySelector('.next-track');
let prev_btn = document.querySelector('.prev-track');

let seek_slider = document.querySelector('.seek_slider');
let volume_slider = document.querySelector('.volume_slider');
let curr_time = document.querySelector('.current-time');
let total_duration = document.querySelector('.total-duration');
let randomIcon = document.querySelector('.fa-random');
let curr_track = document.createElement('audio');

// Initializing variables
let track_index = 0;
let isPlaying = false;
let isRandom = false;
let updateTimer;

// Array of music tracks
const music_list = [
    {
        img: 'images/here.jpeg',
        name: 'Here With Me',
        artist: 'd4vd',
        music: 'music/herewithme.mp3'
    },
    {
        img: 'images/twil.jpg',
        name: 'Thats What I Like',
        artist: 'Bruno Mars',
        music: 'music/Thats What I Like.mp3'
    },
    {
        img: 'images/ratherbe.jpeg',
        name: 'Rather Be',
        artist: 'Clean Bandit',
        music: 'music/Rather Be.mp3'
    },
    {
        img: 'images/shakeitof.jpeg',
        name: 'Shake It Of',
        artist: 'Taylor Swift',
        music: 'music/ShakeItOf.mp3'
    },
    {
        img: 'images/bs.png',
        name: 'Blank Space',
        artist: 'Taylor Swift',
        music: 'music/blankspace.mp3'
    },
    {
        img: 'images/antihero.png',
        name: 'Anti Hero',
        artist: 'Taylor Swift',
        music: 'music/antihero.mp3'
    },
    {
        img: 'images/st.jpg',
        name: 'Satu Satu',
        artist: 'Idgitaf',
        music: 'music/satu.mp3'
    },
    {
        img: 'images/glen.png',
        name: 'Januari',
        artist: 'Glen Fredly',
        music: 'music/januari.mp3'
    },
    {
        img: 'images/dt.jpeg',
        name: 'Double Take',
        artist: 'dhruv',
        music: 'music/doubletake.mp3'
    },
    {
        img: 'images/likeican.jpg',
        name: 'Like I Can',
        artist: 'Sam Smith',
        music: 'music/likeican.mp3'
    },
    {
        img: 'images/diw.jpeg',
        name: 'Do I Wanna Know?',
        artist: 'Arctic Monkeys',
        music: 'music/doiwannaknow.mp3'
    },
    {
        img: 'images/lovestory.jpg',
        name: 'Love Story',
        artist: 'Taylor Swift',
        music: 'music/lovestory.mp3'
    },
    {
        img: 'images/cs.jpeg',
        name: 'Cruel Summer',
        artist: 'Taylor Swift',
        music: 'music/cruelsummer.mp3'
    },
    {
        img: 'images/onedirection.jpeg',
        name: 'What Makes You Beautiful',
        artist: 'One Direction',
        music: 'music/whatmakesyoubeautiful.mp3'
    },
    {
        img: 'images/idol.png',
        name: 'Idol',
        artist: 'YOASOBI',
        music: 'music/idol.mp3'
    },
    {
        img: 'images/diw.jpeg',
        name: "Why'd You Only Call Me When You're High?",
        artist: 'Arctic Monkeys',
        music: 'music/wyocmwh.mp3'
    }

];

// Function to load a track
loadTrack(track_index);

// Loading the track from the music_list array
function loadTrack(track_index) {
    // Clearing the update timer and resetting values
    clearInterval(updateTimer);
    reset();

    // Loading the track from the music_list array
    curr_track.src = music_list[track_index].music;
    curr_track.load();

    // Updating the track art, name, and artist
    track_art.style.backgroundImage = "url(" + music_list[track_index].img + ")";
    track_name.textContent = music_list[track_index].name;
    track_artist.textContent = music_list[track_index].artist;
    now_playing.textContent = "Playing music " + (track_index + 1) + " of " + music_list.length;

    // Setting the update timer to update the seek slider and current time
    updateTimer = setInterval(setUpdate, 1000);


    // Adding an event listener for when the track ends
    curr_track.addEventListener('ended', nextTrack);
}


// Function to reset the player values
function reset() {
    curr_time.textContent = "00:00";
    total_duration.textContent = "00:00";
    seek_slider.value = 0;
}
// Function to play or pause the track
function playpauseTrack() {
    isPlaying ? pauseTrack() : playTrack();
}
// Function to play the track
function playTrack() {
    curr_track.play();
    isPlaying = true;
    playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';
}
// Function to pause the track
function pauseTrack() {
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}
// Function to play the next track
function nextTrack() {
    // Checking if the current track is not the last track
    if (track_index < music_list.length - 1) {
        track_index += 1;
    }
    // If the current track is the last track, go back to the first track
    else {
        track_index = 0;
    }
    // Load and play the next track
    loadTrack(track_index);
    playTrack();
}
// Function to play the previous track
function prevTrack() {
    // Checking if the current track is not the first track
    if (track_index > 0) {
        track_index -= 1;
    }
    // If the current track is the first track, go to the last track
    else {
        track_index = music_list.length - 1;
    }
    // Load and play the previous track
    loadTrack(track_index);
    playTrack();
}
// Function to seek to a specific position in the track
function seekTo() {
    let seekto = curr_track.duration * (seek_slider.value / 100);
    curr_track.currentTime = seekto;
}
// Function to set the volume of the track
function setVolume() {
    curr_track.volume = volume_slider.value / 100;
}
// Function to update the seek slider and current time
function setUpdate() {
    let seekPosition = 0;
    if (!isNaN(curr_track.duration)) {
        seekPosition = curr_track.currentTime * (100 / curr_track.duration);
        seek_slider.value = seekPosition;

        let currentMinutes = Math.floor(curr_track.currentTime / 60);
        let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
        let durationMinutes = Math.floor(curr_track.duration / 60);
        let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);

        if (currentSeconds < 10) { currentSeconds = "0" + currentSeconds; }
        if (durationSeconds < 10) { durationSeconds = "0" + durationSeconds; }
        if (currentMinutes < 10) { currentMinutes = "0" + currentMinutes; }
        if (durationMinutes < 10) { durationMinutes = "0" + durationMinutes; }

        curr_time.textContent = currentMinutes + ":" + currentSeconds;
        total_duration.textContent = durationMinutes + ":" + durationSeconds;
    }
}

// Function to select the specific track
function select0Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 0;
    curr_track.src = music_list[0].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[0].img + ")";
    track_name.textContent = music_list[0].name;
    track_artist.textContent = music_list[0].artist;
    now_playing.textContent = "Playing music " + (0) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select1Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 1;
    curr_track.src = music_list[1].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[1].img + ")";
    track_name.textContent = music_list[1].name;
    track_artist.textContent = music_list[1].artist;
    now_playing.textContent = "Playing music " + (1) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select2Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 2;
    curr_track.src = music_list[2].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[2].img + ")";
    track_name.textContent = music_list[2].name;
    track_artist.textContent = music_list[2].artist;
    now_playing.textContent = "Playing music " + (2) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select3Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 3;
    curr_track.src = music_list[3].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[3].img + ")";
    track_name.textContent = music_list[3].name;
    track_artist.textContent = music_list[3].artist;
    now_playing.textContent = "Playing music " + (3) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select4Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 4;
    curr_track.src = music_list[4].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[4].img + ")";
    track_name.textContent = music_list[4].name;
    track_artist.textContent = music_list[4].artist;
    now_playing.textContent = "Playing music " + (4) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select5Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 5;
    curr_track.src = music_list[5].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[5].img + ")";
    track_name.textContent = music_list[5].name;
    track_artist.textContent = music_list[5].artist;
    now_playing.textContent = "Playing music " + (5) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select6Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 6;
    curr_track.src = music_list[6].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[6].img + ")";
    track_name.textContent = music_list[6].name;
    track_artist.textContent = music_list[6].artist;
    now_playing.textContent = "Playing music " + (6) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select7Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 7;
    curr_track.src = music_list[7].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[7].img + ")";
    track_name.textContent = music_list[7].name;
    track_artist.textContent = music_list[7].artist;
    now_playing.textContent = "Playing music " + (7) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select8Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 8;
    curr_track.src = music_list[8].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[8].img + ")";
    track_name.textContent = music_list[8].name;
    track_artist.textContent = music_list[8].artist;
    now_playing.textContent = "Playing music " + (8) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select9Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 9;
    curr_track.src = music_list[9].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[9].img + ")";
    track_name.textContent = music_list[9].name;
    track_artist.textContent = music_list[9].artist;
    now_playing.textContent = "Playing music " + (9) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select10Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 10;
    curr_track.src = music_list[10].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[10].img + ")";
    track_name.textContent = music_list[10].name;
    track_artist.textContent = music_list[10].artist;
    now_playing.textContent = "Playing music " + (10) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select11Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 11;
    curr_track.src = music_list[11].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[11].img + ")";
    track_name.textContent = music_list[11].name;
    track_artist.textContent = music_list[11].artist;
    now_playing.textContent = "Playing music " + (11) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select12Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 12;
    curr_track.src = music_list[12].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[12].img + ")";
    track_name.textContent = music_list[12].name;
    track_artist.textContent = music_list[12].artist;
    now_playing.textContent = "Playing music " + (12) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select13Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 13;
    curr_track.src = music_list[13].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[13].img + ")";
    track_name.textContent = music_list[13].name;
    track_artist.textContent = music_list[13].artist;
    now_playing.textContent = "Playing music " + (13) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select14Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 14;
    curr_track.src = music_list[14].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[14].img + ")";
    track_name.textContent = music_list[14].name;
    track_artist.textContent = music_list[14].artist;
    now_playing.textContent = "Playing music " + (14) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function select15Track() {
    clearInterval(updateTimer);
    reset();
    track_index = 15;
    curr_track.src = music_list[15].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[15].img + ")";
    track_name.textContent = music_list[15].name;
    track_artist.textContent = music_list[15].artist;
    now_playing.textContent = "Playing music " + (15) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);
    curr_track.addEventListener('ended', nextTrack);
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}