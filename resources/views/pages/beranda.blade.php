@include('layout.app')

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=375, initial-scale=1">
    <title>
        Absensi Online
    </title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        #map {
            height: 600px;
            width: 100%;
        }

        .notification {
            position: absolute;
            top: 170px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            background-color: #ffd500ec;
            border: 1px solid #3f3e3e;
            padding: 10px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .profile-name {
            margin-top: 50px;
        }

        .menu-item.active {
            font-weight: bold;
            color: #000;
            /* Warna lebih mencolok untuk halaman aktif */
        }
    </style>
    @vite('resources/css/app.css')
    <script>
        function initMap() {
            const map = L.map('map').setView([-3.68464, 115.64664], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            const marker = L.marker([-3.68464, 115.64664]).addTo(map)
                .bindPopup('<b>Ini Lokasi Anda!</b><br>Angsana, Indonesia.')
                .openPopup();
        }
    </script>
</head>

<body class="bg-blue-700 text-white font-sans" onload="initMap()"> 
    <div id="map"></div>
    <div class="notification">
        <p class="text-sm text-black font-bold">Jumat, 17 Agustus 1945</p>
        <p class="text-sm text-black">P5M</p>
        <p class="text-red-500 font-bold">Status: Belum absen</p>
    </div>

    <div class="left-0 w-full flex justify-center p-4 bg-blue-700">
        <a href="{{ url('pages/scan') }}"
            class="bg-white text-blue-700 font-bold py-2 px-4 rounded shadow flex items-center">
            <i class="fas fa-camera text-xl mr-2"></i>
            Scan Kode QR Absensi
        </a>
    </div>

    <div class="left-0 w-full flex justify-center p-4 bg-blue-700">
        <a href="{{ url('pages/absen') }}"
            class="bg-white text-blue-700 font-bold py-2 px-4 rounded shadow flex items-center">
            <i class="fas fa-camera text-xl mr-2"></i>
            Absen Manual Disini
        </a>
    </div>
</body>

</html>
