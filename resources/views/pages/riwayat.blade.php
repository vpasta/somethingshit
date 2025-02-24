@include('layout.app')

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Absensi Online</title></script>
    <style>
        .profile-name {
            margin-top: 30px;
        }

        .menu-item.active {
            font-weight: bold;
            color: #000;
        }
    </style>
    
    <script>
        function populateMonths() {
            const months = [
                "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                "Juli", "Agustus", "September", "Oktober", "November", "Desember"
            ];

            const monthDropdown = document.getElementById("monthDropdown");
            months.forEach((month, index) => {
                const option = document.createElement("option");
                option.value = index + 1;
                option.textContent = month;
                monthDropdown.appendChild(option);
            });
        }
    </script>
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-700 text-white font-sans" onload="populateMonths()">
    <div class="p-4">
        <div class="mb-4">
            <select id="monthDropdown" class="border border-gray-300 rounded p-2 w-full text-gray-700"></select>
        </div>
        <div class="space-y-4">
            <div class="bg-white p-4 rounded shadow">
                <p class="text-gray-600">17 Agustus 1945</p>
                <p class="text-green-600 font-bold">Berhasil mengambil absen</p>
                <p class="text-gray-600">Waktu Hadir : 07:26:34</p>
                <p class="text-red-600">Terlambat: 00:00:00</p>
                <div class="flex justify-between text-gray-600 mt-2">
                    <p>Waktu Pulang : 17:53:20</p>
                    <p class="text-red-600">Cepat Pulang : 00:00:00</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="text-gray-600">02 November 2021</p>
                <p class="text-green-600 font-bold">Berhasil mengambil absen</p>
                <p class="text-gray-600">Waktu Hadir : 07:34:18</p>
                <p class="text-red-600">Terlambat: 00:04:29</p>
                <div class="flex justify-between text-gray-600 mt-2">
                    <p>Waktu Pulang : 16:34:50</p>
                    <p class="text-red-600">Cepat Pulang : 00:00:00</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="text-gray-600">03 November 2021</p>
                <p class="text-green-600 font-bold">Berhasil mengambil absen</p>
                <p class="text-gray-600">Waktu Hadir : 07:08:19</p>
                <p class="text-red-600">Terlambat: 00:00:00</p>
                <div class="flex justify-between text-gray-600 mt-2">
                    <p>Waktu Pulang : 16:28:26</p>
                    <p class="text-red-600">Cepat Pulang : 00:12:34</p>
                </div>
            </div>
        </div>
</body>

</html>
