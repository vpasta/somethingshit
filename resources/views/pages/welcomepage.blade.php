<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Absensi Online
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi fade-out */
        .fade-out {
            opacity: 0;
            transition: opacity 2s ease-out;
        }
    </style>
</head>

<body id="welcome-body" class="bg-blue-600 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <img alt="PT. REZKI BATULICIN TRANSPORT" class="mx-auto mb-4" height="100"
            src="{{ asset('images/logorbt.png') }}" width="100" />
        <p class="text-white text-lg font-semibold">
            PT. REZKI BATULICIN TRANSPORT
        </p>
        <p class="text-white text-lg font-semibold mt-2">
            Absensi Online
        </p>
        <p class="text-white text-lg font-semibold">
            Kegiatan Departemen
        </p>
    </div>
</body>

<script>
    // Tambahkan kelas untuk efek fade-out setelah 2 detik
    setTimeout(function() {
        document.getElementById("welcome-body").classList.add("fade-out");
    }, 2500);

    // Redirect ke halaman login setelah total 2.5 detik
    setTimeout(function() {
        window.location.href = "{{ route('logins') }}";
    }, 3000);
</script>

</html>
