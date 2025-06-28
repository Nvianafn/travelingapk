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

    </style>
</head>
<body class="font-sans">
            <!-- Header -->
            <div class="p-12 text-center relative" style="background-image: url('/images/background-hutan.jpg'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gray-300 bg-opacity-60 backdrop-blur-sm"></div>
                <div class="relative z-10 flex items-center justify-center gap-2 mb-2">
                    <h1 class="text-2xl font-pacifico text-black">Traveling.co</h1>
                    <img src="/images/pine-tree.png" alt="Logo" class="w-8 h-8">
                </div>
            </div>
            
            <!-- Destinasi Grid -->
            <div class="relative z-20 bg-white rounded-t-3xl -mt-8 p-6">
            <h2 class="relative z-10 flex items-center justify-center text-xl font-bold text-black mt-2">Pilihan Destinasi</h2>
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
