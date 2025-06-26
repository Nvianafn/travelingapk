<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traveling.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Pacifico -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .font-pacifico {
            font-family: 'Pacifico', cursive;
        }
        body {
            background-image: url('/images/background-hutan.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="relative min-h-screen">
    <!-- 🔹 Overlay Transparan -->
    <div class="absolute inset-0 bg-white bg-opacity-30 z-0"></div>

    <!-- 🔹 Konten -->
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="text-center w-full max-w-xs">
            
            <!-- 🌲 Logo -->
            <img src="/images/pine-tree.png" alt="Traveling.co Logo"
                 class="w-28 h-32 mx-auto mb-6 drop-shadow-lg object-contain">

            <!-- 🧭 Judul -->
            <h1 class="text-4xl mb-10 text-black drop-shadow-sm font-pacifico">Traveling.co</h1>

            <!-- 🔘 Tombol -->
            <div class="flex justify-center gap-5">
                <a href="{{ route('login') }}"
                   class="px-6 py-3 rounded-full border-2 border-black bg-white/90 text-black font-pacifico transition-all duration-300 hover:bg-white hover:shadow-lg hover:-translate-y-1">
                    Login
                </a>
                <a href="{{ route('register') }}"
                   class="px-6 py-3 rounded-full border-2 border-black bg-white/90 text-black font-pacifico transition-all duration-300 hover:bg-white hover:shadow-lg hover:-translate-y-1">
                    Regist
                </a>
            </div>
        </div>
    </div>
</body>
</html>
