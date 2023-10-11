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

let track_index = 0;
let isPlaying = false;
let isRandom = false;
let updateTimer;

const music_list = [
    {
        img: 'images/505.jpg',
        name: '505',
        artist: 'Arctic Monkeys',
        music: 'music/505.mp3'
    },
    {
        img: 'images/diw.jpeg',
        name: 'Do I Wanna Know?',
        artist: 'Arctic Monkeys',
        music: 'music/doiwannaknow.mp3'
    },
    {
        img: 'images/diw.jpeg',
        name: "Why'd You Only Call Me When You're High?",
        artist: 'Arctic Monkeys',
        music: 'music/wyocmwh.mp3'
    },
    {
        img: 'images/diw.jpeg',
        name: 'I Wanna Be Yours',
        artist: 'Arctic Monkeys',
        music: 'music/iwannabe.mp3'
    },
];

loadTrack(track_index);

function loadTrack(track_index) {
    clearInterval(updateTimer);
    reset();

    curr_track.src = music_list[track_index].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[track_index].img + ")";
    track_name.textContent = music_list[track_index].name;
    track_artist.textContent = music_list[track_index].artist;
    now_playing.textContent = "Playing music " + (track_index + 1) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);

    curr_track.addEventListener('ended', nextTrack);
}


function reset() {
    curr_time.textContent = "00:00";
    total_duration.textContent = "00:00";
    seek_slider.value = 0;
}

function playpauseTrack() {
    isPlaying ? pauseTrack() : playTrack();
}
function playTrack() {
    curr_track.play();
    isPlaying = true;
    playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';
}
function pauseTrack() {
    curr_track.pause();
    isPlaying = false;
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}
function nextTrack() {
    if (track_index < music_list.length - 1 && isRandom === false) {
        track_index += 1;
    } else if (track_index < music_list.length - 1 && isRandom === true) {
        let random_index = Number.parseInt(Math.random() * music_list.length);
        track_index = random_index;
    } else {
        track_index = 0;
    }
    loadTrack(track_index);
    playTrack();
}
function prevTrack() {
    if (track_index > 0) {
        track_index -= 1;
    } else {
        track_index = music_list.length - 1;
    }
    loadTrack(track_index);
    playTrack();
}
function seekTo() {
    let seekto = curr_track.duration * (seek_slider.value / 100);
    curr_track.currentTime = seekto;
}
function setVolume() {
    curr_track.volume = volume_slider.value / 100;
}
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

