<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Destinasi - Traveling.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .font-pacifico {
            font-family: 'Pacifico', cursive;
        }
        body {
            background: linear-gradient(135deg, #e8f5e8 0%, #c8e6c9 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body class="font-sans">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-sm w-full bg-white rounded-3xl shadow-2xl overflow-hidden">
            <!-- Header -->
            <div class="p-6 text-center relative" style="background-image: url('/images/background-hutan.jpg'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gray-300 bg-opacity-60 backdrop-blur-sm rounded-t-3xl"></div>
                <div class="relative z-10 flex items-center justify-center gap-2 mb-2">
                    <h1 class="text-2xl font-pacifico text-black">Traveling.co</h1>
                    <img src="/images/pine-tree.png" alt="Logo" class="w-8 h-8">
                </div>
                <h2 class="relative z-10 text-xl font-bold text-black mt-2">Destinasi</h2>
            </div>

            <!-- Destinasi Grid -->
           <div class="p-6 grid grid-cols-2 gap-4 text-center">
                @if (count($destinasi))
                    @foreach ($destinasi as $paket)
                        <a href="{{ route('pembayaran', $paket->id) }}" class="block hover:scale-105 transition">
                            <img src="/images/{{ $paket->gambar }}" alt="{{ $paket->nama_paket }}" class="rounded-xl w-full h-24 object-cover mb-1 shadow">
                            <p class="text-sm font-semibold text-gray-800">{{ $paket->nama_paket }}</p>
                            <p class="text-xs text-gray-600">Rp. {{ number_format($paket->harga, 0, ',', '.') }}</p>
                        </a>
                    @endforeach
                @else
                    <p class="text-center text-gray-500 col-span-2">Tidak ada destinasi tersedia.</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
