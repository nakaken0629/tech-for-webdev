window.addEventListener('DOMContentLoaded', () => {
    if (typeof navigator.mediaDevices.getUserMedia !== 'function') {
        const err = new Error('カメラが使えません');
        alert(`${err.name} ${err.message}`);
        throw err;
    }
    const $start = document.getElementById('start_btn');
    const $video = document.getElementById('video_area');
    $start.addEventListener('click', () => {
        navigator.mediaDevices.getUserMedia({ video: true, audio: false })
            .then(stream => $video.srcObject = stream)
            .catch(err => alert(`${err.name} ${err.message}`));
    }, false);
});
