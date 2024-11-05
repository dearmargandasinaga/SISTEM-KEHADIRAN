let video = document.getElementById('video');

function startScanner() {
    navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
        .then(function(stream) {
            video.srcObject = stream;
            video.play();
        })
        .catch(function(err) {
            console.log("Error: " + err);
        });
}

video.addEventListener('canplay', function(ev) {
    if (!streaming) {
        video.setAttribute('width', width);
        video.setAttribute('height', height);
        streaming = true;
    }
}, false);
