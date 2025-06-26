<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Traveling.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Pacifico -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('/images/background-hutan.jpg');
            background-size: cover;
            background-position: center;
            font-family: 'Pacifico', cursive;
        }
    </style>
</head>
<body class="relative min-h-screen">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-white bg-opacity-30 z-0"></div>

    <!-- Konten -->
    <div class="relative z-10 flex justify-center items-center min-h-screen px-4">
        <div class="bg-white/70 backdrop-blur-md rounded-3xl shadow-xl w-full max-w-md p-8">
            
            <!-- Logo + Title -->
            <div class="text-center mb-6">
                <img src="/images/pine-tree.png" alt="Logo" class="w-20 mx-auto mb-4">
                <h1 class="text-3xl font-pacifico text-black">Traveling.co</h1>
                <p class="text-sm font-sans text-gray-600 mt-2">Buat akun barumu</p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <input type="text" name="name" value="{{ old('name') }}"
                           placeholder="Nama Lengkap"
                           class="w-full px-4 py-2 rounded-full border border-gray-400 bg-white/80 text-sm focus:outline-none focus:ring focus:ring-blue-200 font-sans"
                           required autofocus>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Alamat -->
                <div class="mb-4">
                    <input type="text" name="alamat" value="{{ old('alamat') }}"
                        placeholder="Alamat"
                        class="w-full px-4 py-2 rounded-full border border-gray-400 bg-white/80 text-sm focus:outline-none focus:ring focus:ring-blue-200 font-sans"
                        required>
                    @error('alamat')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- No WhatsApp -->
                <div class="mb-4">
                    <input type="text" name="no_whatsapp" value="{{ old('no_whatsapp') }}"
                        placeholder="No. WhatsApp"
                        class="w-full px-4 py-2 rounded-full border border-gray-400 bg-white/80 text-sm focus:outline-none focus:ring focus:ring-blue-200 font-sans"
                        required>
                    @error('no_whatsapp')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <input type="email" name="email" value="{{ old('email') }}"
                           placeholder="Email"
                           class="w-full px-4 py-2 rounded-full border border-gray-400 bg-white/80 text-sm focus:outline-none focus:ring focus:ring-blue-200 font-sans"
                           required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <input type="password" name="password"
                           placeholder="Password"
                           class="w-full px-4 py-2 rounded-full border border-gray-400 bg-white/80 text-sm focus:outline-none focus:ring focus:ring-blue-200 font-sans"
                           required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <input type="password" name="password_confirmation"
                           placeholder="Konfirmasi Password"
                           class="w-full px-4 py-2 rounded-full border border-gray-400 bg-white/80 text-sm focus:outline-none focus:ring focus:ring-blue-200 font-sans"
                           required>
                </div>

                <!-- Register Button -->
                <button type="submit"
                        class="w-full py-2 rounded-full bg-white/90 border border-black text-black font-semibold transition hover:bg-white hover:shadow-lg hover:-translate-y-1">
                    Daftar
                </button>
            </form>

            <!-- Link ke Login -->
            <div class="text-center text-sm mt-6 font-sans">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="underline text-blue-600">Login di sini</a>
            </div>
        </div>
    </div>
</body>
</html>
