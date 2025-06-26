<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paket_wisata')->insert([
            [
                'nama_paket' => 'Raja Ampat',
                'deskripsi' => 'Surga bawah laut Indonesia.',
                'harga' => 3500000,
                'gambar' => 'raja-ampat.jpg',
            ],
            [
                'nama_paket' => 'Kawah Ijen',
                'deskripsi' => 'Fenomena api biru yang langka.',
                'harga' => 2800000,
                'gambar' => 'kawah-ijen.jpg',
            ],
            [
                'nama_paket' => 'Bali',
                'deskripsi' => 'Pulau Dewata dengan keindahan alam dan budaya.',
                'harga' => 3200000,
                'gambar' => 'bali.jpg',
            ],
            [
                'nama_paket' => 'Gunung Fuji',
                'deskripsi' => 'Ikon Jepang yang terkenal.',
                'harga' => 4200000,
                'gambar' => 'fuji.jpg',
            ],
            [
                'nama_paket' => 'Swissterland',
                'deskripsi' => 'Pemandangan salju dan pegunungan indah.',
                'harga' => 5000000,
                'gambar' => 'swissterland.jpg',
            ],
            [
                'nama_paket' => 'Paris',
                'deskripsi' => 'Kota romantis dengan Menara Eiffel.',
                'harga' => 4800000,
                'gambar' => 'paris.jpg',
            ],
            [
                'nama_paket' => 'Petra',
                'deskripsi' => 'Kota batu bersejarah di Yordania.',
                'harga' => 4600000,
                'gambar' => 'petra.jpg',
            ],
            [
                'nama_paket' => 'Karimun Jawa',
                'deskripsi' => 'Kepulauan eksotis di utara Jawa.',
                'harga' => 2900000,
                'gambar' => 'karimun-jawa.jpg',
            ],
        ]);
    }
}
