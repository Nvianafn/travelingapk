<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Pembayaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .font-pacifico {
            font-family: 'Pacifico', cursive;
        }
        body {
            background-image: url('/images/background-hutan.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
    </style>
</head>
<body class="flex items-center justify-center px-4 py-10 font-sans">
    <div class="bg-white rounded-3xl shadow-xl p-6 mx-auto w-[90%] max-w-md font-sans">
    <!-- Header -->
    <div class="text-center mb-4">
        <h1 class="text-xl font-bold font-pacifico text-black mb-1">Traveling.co <span>🌲</span></h1>
        <h2 class="text-lg font-bold border-y border-black py-1 mb-4">Detail Pembayaran</h2>
    </div>

    <!-- Detail Grid -->
    <div class="grid grid-cols-2 gap-y-2 text-sm text-gray-800">
        <p class="font-medium">Nama </p>
        <p> : {{ $user->name }}</p>

        <p class="font-medium">Alamat</p>
        <p> : {{ $user->alamat}}</p>

        <p class="font-medium">No. WhatsApp </p>
        <p> : {{ $user->no_whatsapp}}</p>

        <p class="font-medium">Email </p>
        <p> : {{ $user->email }}</p>

        <p class="font-medium">Metode Pembayaran </p>
        <p> : {{ $pembayaran }}</p>

        <p class="font-medium">Total Pembayaran </p>
        <p> : Rp. {{ number_format($paket->harga, 0, ',', '.') }}</p>

        <p class="font-medium">Status Pembayaran </p>
        <p> : <span class="text-green-600 font-semibold">Sukses</span></p>

        <p class="font-medium">Destinasi </p>
        <p> : {{ $paket->nama_paket }}</p>
    </div>

    <!-- Tombol -->
    <div class="mt-6 text-center">
        <a href="{{ route('home') }}"
           class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-8 rounded-full border border-black shadow transition">
            Home
        </a>
    </div>
</div>

</body>
</html>
