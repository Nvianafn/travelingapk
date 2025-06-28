<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran - Traveling.co</title>
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

            <!-- Konten -->
            <div class="relative z-20 bg-white rounded-t-3xl -mt-8 p-6">
            <h2 class="relative z-10 flex items-center justify-center text-xl font-bold text-black mt-2">Destinasi</h2>
            <div class="p-6 flex-grow ">
                <div class="text-center mb-6">
                    <img src="/images/{{ $gambar }}" alt="{{ $nama }}" class="rounded-2xl w-full h-40 object-cover mb-2">
                    <p class="text-base font-semibold text-gray-800">{{ $nama }}</p>
                    <p class="text-sm text-gray-600">Rp. {{ number_format($harga, 0, ',', '.') }}</p>
                </div>

            <form action="{{ route('pembayaran.bayar') }}" method="POST">
                @csrf

                <div class="text-center mb-4">
                    <p class="font-medium text-gray-800 mb-3">Pilih Metode Pembayaran</p>
                    <div class="grid grid-cols-2 gap-4 place-items-center" id="bank-options">
                        @foreach (['BRI', 'Mandiri', 'BCA', 'BNI'] as $bank)
                            <label class="cursor-pointer">
                                <input type="radio" name="metode" value="{{ $bank }}" class="hidden" required>
                                <img src="/images/{{ strtolower($bank) }}.png"
                                    class="bank-logo h-12 transition-all duration-200 rounded">
                            </label>
                        @endforeach
                    </div>
                </div>
                <script>
                    const logos = document.querySelectorAll('.bank-logo');
                    const inputs = document.querySelectorAll('input[name="metode"]');

                    inputs.forEach((input, index) => {
                        input.addEventListener('change', () => {
                            logos.forEach((img, i) => {
                                if (i === index) {
                                    img.classList.remove('opacity-40');
                                    img.classList.add('scale-105', 'shadow-md');
                                } else {
                                    img.classList.add('opacity-40');
                                    img.classList.remove('scale-105', 'shadow-md');
                                }
                            });
                        });
                    });
                </script>


                <div class="bg-gray-100 p-4 flex justify-between items-center rounded-b-3xl">
                    <p class="text-sm text-gray-800">Total <span class="font-semibold">Rp. {{ number_format($harga, 0, ',', '.') }}</span></p>
                    <button type="submit"
                            class="bg-yellow-400 hover:bg-yellow-200 px-6 py-2 rounded-full text-black font-bold text-sm shadow-md transition">
                        Bayar
                    </button>
                </div>
            </form>


        </div>
    </div>
</body>
</html>
