<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Absensi Online
    </title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        .menu-item.active {
            font-weight: bold;
            color: #000;
        }
    </style>
@vite('resources/css/app.css')
</head>
<div class="flex justify-around w-full mt-12 border-b border-gray-300">
    <a class="py-2 px-4 text-yellow-300 border-b-2 border-yellow-300" href="{{ url('pages/profile') }}">
        Profil
    </a>
    <a class="py-2 px-4 hover:text-yellow-300" href="{{ url('pages/beranda') }}">
        Beranda
    </a>
    <a class="py-2 px-4 hover:text-yellow-300" href="{{ url('pages/riwayat') }}">
        Riwayat
    </a>
</div>

<body class="bg-blue-700 text-white font-sans">
    <div class="bg-yellow-400 p-6 text-center rounded-b-3xl">
        <img alt="Profile picture of Samsul Arip" class="w-24 h-24 rounded-full mx-auto mb-4" height="100"
            src="{{ asset('images/kocheng.jpeg') }}" width="100" />
        <h2 class="text-2xl font-bold">
            Samsul Arip
        </h2>
        <p class="text-gray-700">
            C23414912
        </p>
        <p class="text-gray-700">
            Pengawas
        </p>
    </div>
    <div class="p-6">
        <div class="mb-4">
            <h3 class="text-lg font-semibold">
                Data Pegawai
            </h3>
            <div class="flex justify-between">
                <p>
                    Nama
                </p>
                <p>
                    Samsul Arip
                </p>
            </div>
            <div class="flex justify-between">
                <p>
                    NIK
                </p>
                <p>
                    C23414912
                </p>
            </div>
            <div class="flex justify-between">
                <p>
                    Jabatan
                </p>
                <p>
                    Pengawas
                </p>
            </div>
        </div>
        <hr class="border-t-2 border-blue-600 mb-4" />
        <div class="mb-4">
            <h3 class="text-lg font-semibold">
                Pusat Bantuan
            </h3>
            <a href="" class="hover:text-yellow-300">
                Bantuan
            </a>
            <p>
            <a href="" class="hover:text-yellow-300">
                Laporkan Masalah
            </a>
        </div>
        <hr class="border-t-2 border-blue-600 mb-4" />
        <div>
            <h3 class="text-lg font-semibold">
                Pengaturan
            </h3>
            <a href="{{ url('/logina') }}" class="hover:text-yellow-300">
                Atur Ulang Kata Sandi
            </a>
            <p>
            <a href="{{ url('/login') }}" class="btn btn-primary hover:text-red-500">
                !!! Masuk Sebagai Admin !!!
            </a>
            <p>            
            <a href="{{ url('pages/logins') }}" class="btn btn-primary hover:text-yellow-300">
                Keluar
            </a>            
        </div>
    </div>

</body>

</html>
