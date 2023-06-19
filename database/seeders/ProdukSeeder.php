<?php

namespace Database\Seeders;

use App\Models\KategoriProduk;
use App\Models\Penjual;
use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class ProdukSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    KategoriProduk::insert(
      [
        [
          'nama_kategori' => 'Benih',
        ],
        [
          'nama_kategori' => 'Beras',
        ],
        [
          'nama_kategori' => 'Biji',
        ],
        [
          'nama_kategori' => 'Umbi',
        ],
        [
          'nama_kategori' => 'Pertaninan Organik',
        ],
        [
          'nama_kategori' => 'Sayuran',
        ],
        [
          'nama_kategori' => 'Pupuk dan Obat',
        ],
        [
          'nama_kategori' => 'Mesin dan Alat',
        ],
      ]
    );

    $faker = FakerFactory::create();

    $penjuals = Penjual::pluck('id_penjual')->all();
    $kategoris = KategoriProduk::pluck('id_kategori')->all();

    Produk::insert([
      [
        'nama' => 'Benih Cabai Keriting Kastilo',
        'deskripsi' => 'Benih Cabe Keriting Kastilo adalah varietas cabe keriting hibrida yang diproduksi oleh Panah Merah dengan isi kemasan 50 biji.

        Buah yang dihasilkan bertekstur keriting dengan ukuran panjang 16 cm dan diameternya 1 cm tiap buah. Baik ditanam di daerah dataran menengah sampai tinggi. Termasuk tanaman cabe yang tumbuh tinggi dan tegak serta tahan penyakit Phythopthora capsici.
        
        Umur panen buah cabe kastilo sekitar 100-115 hari setelah penanaman dengan potensi hasil panen mencapai 15-20 ton per hektar.',
        'harga' => 30000,
        'satuan' => '50 biji',
        'foto_produk' => 'public\images\foto_produk\benih\benih cabai keriting.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Cabai Rawit Cakra Putih',
        'deskripsi' => 'Cabe Cakra Putih adalah jenis cabe rawit yang sangat populer di saat sekarang. Buah yang dihasilkan warnanya putih kekuningan namun tetap merah saat buahnya matang. Buahnya tumbu tegak ke atas dengan ukuran panjang sekitar 3 cm dan diameternya 0.75 cm serta memiliki rasa yang sangat pedas.

        Tanaman ini mampu tumbuh dengan sangat kuat dan bercabang banyak. Sangat produktif dan biasanya mampu menghasilkan buah sekitar 700 biji dalam satu tanaman.
        
        Masa panen buahnya sekitar 90 hari setelah benih disemaikan dengan hasil panen mencapai 12 ton per hektar. Termasuk jenis tanaman cabe yang dapat bertahan dari serangan penyakit antraknosa.',
        'harga' => 40000,
        'satuan' => '10 biji',
        'foto_produk' => 'public\images\foto_produk\benih\benih cabe rawit cakra putih.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Jagung Manis',
        'deskripsi' => 'Benih Jagung Manis Bonanza adalah salah satu jenis jagung yang vigor, tahan penyakit downy mildew juga kresek. Pertumbuhannya seragam dengan bentuk buah yang silindris. Benih jagung ini diproduksi oleh PT East West Seed Indonesia dengan kualitas yang unggul serta cocok ditanam pada daerah dataran rendah juga tinggi (900-1200 m dpl). Jagung manis bonanza mempunyai tekstur lembut dengan cita rasa yang sangat manis.

        Umumnya, masa panen jagung bonanza berkisar 70 hingga 85 hari dengan hasil panen kurang lebih 14 sampai 18 ton/ha. Tiap tongkolnya memiliki berat 300 hingga 400 gram per buah. Biasanya, jagung mempunyai daya simpan 3-5 hari. Jagung bonanza dengan bulir berukuran besar, berwarna kuning dan sangat manis, cocok dimasak, dibakar ataupun diolah dalam berbagai macam makanan yang enak.',
        'harga' => 30000,
        'satuan' => '200 biji',
        'foto_produk' => 'public\images\foto_produk\benih\benih jagung manis.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
    ]);

    for ($i = 1; $i <= 200; $i++) {
      Produk::create([
        'nama' => $faker->sentence(3),
        'deskripsi' => $faker->paragraph(4),
        'harga' => $faker->numberBetween(10000, 210000,),
        'satuan' => $faker->randomElement(['kg', 'pcs', 'meter']),
        'foto_produk' => $faker->imageUrl(400, 400),
        'id_penjual' => $faker->randomElement($penjuals),
        'id_kategori' => $faker->randomElement($kategoris),
      ]);
    }
  }
}
