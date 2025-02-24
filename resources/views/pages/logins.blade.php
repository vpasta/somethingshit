<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Absensi Online</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }

        async function checkFingerprintSupport() {
            const fingerprintButton = document.getElementById("fingerprint-login");
            if (window.PublicKeyCredential) {
                try {
                    const isSupported = await PublicKeyCredential.isUserVerifyingPlatformAuthenticatorAvailable();
                    if (isSupported) {
                        fingerprintButton.style.display = "flex";
                    }
                } catch (error) {
                    console.error("Error saat mendeteksi fingerprint:", error);
                }
            } else {
                console.warn("Fingerprint API tidak didukung oleh browser ini.");
            }
        }

        // Jalankan saat halaman selesai dimuat
        document.addEventListener("DOMContentLoaded", checkFingerprintSupport);
    </script>
</head>

<body class="bg-blue-700 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-xs">
        <!-- Header -->
        <div class="flex flex-col items-center">
            <img alt="App logo" class="w-20 h-20 mb-4" src="{{ asset('images/logorbt.png') }}" />
            <h1 class="text-white text-xl font-bold mb-6">Absensi Online</h1>
        </div>

        <!-- Form -->
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ url('pages/beranda') }}" method="GET">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Masukkan Nama dan Password Anda
                </label>
            </div>
            <div class="mb-4">
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Nama" required />
            </div>
            <div class="mb-6 relative">
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="Password" required />
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                    onclick="togglePasswordVisibility()">
                    <i id="eye-icon" class="fas fa-eye-slash text-gray-500"></i>
                </span>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 w-full rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Login
                </button>
            </div>
            <!-- Tombol Fingerprint -->
            <div class="flex items-center justify-center mt-4" id="fingerprint-login" style="display: none;">
                <button
                    class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex items-center"
                    type="button">
                    <i class="fas fa-fingerprint text-2xl mr-2"></i>
                    Login dengan Fingerprint
                </button>
            </div>
        </form>
    </div>
</body>

</html>
