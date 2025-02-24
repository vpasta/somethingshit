<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan QR Code</title>
    <script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.min.js"></script>
    <style>
        #camera {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            display: block;
        }

        #result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: green;
        }

        #error {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: red;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Scan QR Code</h1>
    <video id="camera" autoplay playsinline></video>
    <canvas id="canvas" style="display: none;"></canvas>
    <p id="result">Scanning...</p>
    <p id="error"></p>

    <script>
        const video = document.getElementById('camera');
        const canvas = document.getElementById('canvas');
        const result = document.getElementById('result');
        const errorMsg = document.getElementById('error');
        const context = canvas.getContext('2d');
        let isScanning = true; // Control scanning state

        // Akses kamera
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({
                    video: {
                        facingMode: "environment"
                    }
                })
                .then((stream) => {
                    video.srcObject = stream;
                    video.play();
                    scanQR();
                })
                .catch((err) => {
                    console.error("Error accessing camera: ", err);
                    errorMsg.innerText = "Tidak dapat mengakses kamera. Periksa izin atau perangkat Anda.";
                });
        } else {
            errorMsg.innerText = "Perangkat Anda tidak mendukung akses kamera.";
        }

        // Fungsi untuk scan QR code
        function scanQR() {
            if (!isScanning) return; // Stop scanning if scanning is disabled

            if (video.readyState === video.HAVE_ENOUGH_DATA) {
                canvas.height = video.videoHeight;
                canvas.width = video.videoWidth;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);

                const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                const code = jsQR(imageData.data, imageData.width, imageData.height, {
                    inversionAttempts: "dontInvert",
                });

                if (code) {
                    result.innerText = "QR Code Terdeteksi: " + code.data;
                    isScanning = false; // Stop further scanning
                    sendDataToBackend(code.data);
                } else {
                    result.innerText = "Scanning...";
                }
            }
            requestAnimationFrame(scanQR);
        }

        // Fungsi untuk mengirim data ke backend Laravel
        function sendDataToBackend(data) {
            fetch('/scan', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        qr_data: data
                    })
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Gagal mengirim data ke server.');
                    }
                })
                .then(data => {
                    console.log('Success:', data);
                    result.innerText = "Data berhasil dikirim ke server.";
                })
                .catch((error) => {
                    console.error('Error:', error);
                    errorMsg.innerText = "Terjadi kesalahan saat mengirim data.";
                });
        }
    </script>
</body>

</html>
