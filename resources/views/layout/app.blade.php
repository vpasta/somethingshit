<!doctype html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>
    <div class="text-center">
        <div class="profile-name text-center text-xl font-bold">
            Samsul Arip
        </div>
        <p class="text-lg">
            C2344192
        </p>
    </div>
    <div class="flex justify-around w-full mt-4 border-b border-gray-300">
        <a class="py-2 px-4 text-white {{ Request::is('pages/profile') ? 'text-yellow-300 border-b-2 border-yellow-300' : 'hover:text-yellow-300' }}" href="{{ url('pages/profile') }}">
            Profil
        </a>
        <a class="py-2 px-4 text-white {{ Request::is('pages/beranda') ? 'text-yellow-300 border-b-2 border-yellow-300' : 'hover:text-yellow-300' }}" href="{{ url('pages/beranda') }}">
            Beranda
        </a>
        <a class="py-2 px-4 text-white {{ Request::is('pages/riwayat') ? 'text-yellow-300 border-b-2 border-yellow-300' : 'hover:text-yellow-300' }}" href="{{ url('pages/riwayat') }}">
            Riwayat
        </a>
    </div>    
</body>