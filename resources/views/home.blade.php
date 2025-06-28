<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traveling.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .font-pacifico {
            font-family: 'Pacifico', cursive;
        }
    </style>
</head>
<body class="bg-slate-100">

    <div class="p-12 text-center relative" style="background-image: url('/images/background-hutan.jpg'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gray-300 bg-opacity-60 backdrop-blur-sm"></div>
                <div class="relative z-10 flex items-center justify-center gap-2 mb-2">
                    <h1 class="text-4xl font-pacifico text-black">Traveling.co</h1>
                    <img src="/images/pine-tree.png" alt="Logo" class="w-8 h-8">
                </div>
    </div>            
        <div class="relative z-20 bg-white rounded-t-3xl -mt-8 p-6">
            
            <h2 class="text-2xl font-bold mb-3 text-gray-900 text-center">Menjelajahi Dunia Dengan Low Budget</h2>
            <p class="text-sm mb-6 leading-relaxed text-gray-600 text-center">
                Kami menyediakan jasa open trip dengan harga yang ramah dikantong.
                Mulai dari dalam negeri hingga luar negeri, kami menyediakan dengan harga terjangkau.
            </p>

            <div class="grid grid-cols-2 gap-3 mb-6">
                <div class="row-span-2">
                    <img src="/images/raja-ampat.jpg" alt="Raja Ampat" class="rounded-2xl w-full h-48 object-cover mb-2">
                    <p class="text-sm font-medium text-center text-gray-800">Raja Ampat</p>
                </div>
                <div>
                    <img src="/images/kawah-ijen.jpg" alt="Kawah Ijen" class="rounded-2xl w-full h-24 object-cover mb-2">
                    <p class="text-sm font-medium text-center text-gray-800">Kawah Ijen</p>
                </div>
                <div>
                    <img src="/images/fuji.jpg" alt="Gunung Fuji" class="rounded-2xl w-full h-20 object-cover mb-2">
                    <p class="text-sm font-medium text-center text-gray-800">Gunung Fuji</p>
                </div>
            </div>

            <div class="flex items-center justify-between bg-yellow-400 p-4 rounded-2xl mb-6 shadow-lg">
                <div class="flex items-center gap-3">
                    <div class="bg-black p-2 rounded-lg">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"/></svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-black">Diskon 50%</p>
                        <p class="text-xs text-black opacity-80">untuk anda pelanggan baru</p>
                    </div>
                </div>
                <a href="{{ route('destinasi') }}" class="bg-black text-yellow-400 px-6 py-2 rounded-full font-bold text-sm hover:scale-105 transition-transform flex items-center gap-1">
                    Beli 
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </a>
            </div>

            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="/images/jl-aja-dulu.jpg" alt="JL AJA DULU" class="w-full h-32 object-cover">
            </div>
        </div>
    </div>

</body>
</html>