Object.defineProperty(HTMLMediaElement.prototype, 'playing', {
    get: function(){
        return !!(this.currentTime > 0 && !this.paused && !this.ended && this.readyState > 2);
    }
})

function playVideo(index) {
    const video = document.getElementById(`my-video-${index}`);
    video.play();
    const button = document.getElementById(`video-play-button-${index}`);
    button.setAttribute('style','display:none')
    const button2 = document.getElementById(`video-pause-button-${index}`);
    button2.setAttribute('style','display:block')
}

function pauseVideo(index) {
    const video = document.getElementById(`my-video-${index}`);
    video.pause();
    const button = document.getElementById(`video-pause-button-${index}`);
    button.setAttribute('style','display:none')
    const button2 = document.getElementById(`video-play-button-${index}`);
    button2.setAttribute('style','display:block')
}

function showVolumeBar(index){
    const volumeBar=document.getElementById(`volume-${index}`)
    volumeBar.setAttribute('style','opacity:1;visibility:visible')
}

function hideVolumeBar(index){
    const volumeBar=document.getElementById(`volume-${index}`)
    volumeBar.setAttribute('style','opacity:0;visibility:hidden')
}

function seekVideo(index) {
    const video = document.getElementById(`my-video-${index}`);
    const seek = document.getElementById(`seek-${index}`);
    const value = seek.value;
    const duration = video.duration;
    video.currentTime = (value / 100) * duration;
}

function changeVolume(index) {
    const video = document.getElementById(`my-video-${index}`);
    const volume = document.getElementById(`volume-${index}`);
    video.volume = volume.value;
}

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("video").forEach((video) => {
        video.addEventListener("timeupdate", () => {
            const id = video.id.replace("my-video-", "");
            const seek = document.getElementById(`seek-${id}`);
            if (seek) {
                seek.value = (video.currentTime / video.duration) * 100;
            }
        });
    });
    // const items=document.getElementsByClassName('video-js');
    // for (let i=0;i<items.length;i++){
    //     console.log(i)
    //     const button = document.getElementById(`video-pause-button-${i}`);
    //     button.setAttribute('style','display:none')
    // }
});
