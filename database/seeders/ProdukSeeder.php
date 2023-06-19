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
        'foto_produk' => '/images/foto_produk/benih/1.jpg',
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
        'foto_produk' => '/images/foto_produk/benih/2.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Jagung Manis',
        'deskripsi' => 'Benih Jagung Manis Bonanza adalah salah satu jenis jagung yang vigor, tahan penyakit downy mildew juga kresek. Pertumbuhannya seragam dengan bentuk buah yang silindris. Benih jagung ini diproduksi oleh PT East West Seed Indonesia dengan kualitas yang unggul serta cocok ditanam pada daerah dataran rendah juga tinggi (900-1200 m dpl). Jagung manis bonanza mempunyai tekstur lembut dengan cita rasa yang sangat manis.

        Umumnya, masa panen jagung bonanza berkisar 70 hingga 85 hari dengan hasil panen kurang lebih 14 sampai 18 ton/ha. Tiap tongkolnya memiliki berat 300 hingga 400 gram per buah. Biasanya, jagung mempunyai daya simpan 3-5 hari. Jagung bonanza dengan bulir berukuran besar, berwarna kuning dan sangat manis, cocok dimasak, dibakar ataupun diolah dalam berbagai macam makanan yang enak.',
        'harga' => 30000,
        'satuan' => '200 biji',
        'foto_produk' => '/images/foto_produk/benih/3.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Kacang Panjang',
        'deskripsi' => 'Kacang Panjang Parade Tavi ialah benih kacang panjang yang ideal ditanam di wilayah dataran rendah – menengah. Cocok pula ditanam secara konvensional, aquaponik, hidroponik, dan organik. Umur panen yakni pada usia 48 – 55 hari semenjak benih ditanam dengan potensi hasil panen yang diperkirakan mencapai 35 ton/ha. Benih ini akan menghasilkan tanaman yang tahan terhadap Fw, Bw, dan MYMIV.',
        'harga' => 20000,
        'satuan' => '200 biji',
        'foto_produk' => '/images/foto_produk/benih/4.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Kale Siberian',
        'deskripsi' => 'Benih Kale Siberian Dwarf kemasan aluminium foil isi 250 biji (impor).

        Kale jenis ini memiliki bentuk daun keriting, berwarna hijau kebiruan dan rasanya sedikit manis. Daun muda ataupun daun yang sudah tua sekalipun benar-benar memiliki rasa yang sangat lezat. Selain itu, daun kale siberian juga lebih lembut dibanding jenis kale keriting lainnya.
        
        Pertumbuhan kale siberian tergolong pendek (dwarf). Masa panen daunnya adalah sekitar 50 hari sejak disemai atau bisa juga dipanen muda sekitar 25 hari sejak disemai.',
        'harga' => 15000,
        'satuan' => '250 biji',
        'foto_produk' => '/images/foto_produk/benih/5.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Oyong',
        'deskripsi' => 'Benih Oyong Prima adalah sayuran buah yang dikenal juga dengan nama Gambas. Sayuran ini biasanya dibudidayakan pada daerah dataran rendah juga menengah dan akan menghasilkan buah lonjong berukuran 35-45cm. Selain dapat diolah menjadi masakan yang lezat, buah oyong juga dipercaya baik bagi kesehatan kulit seperti melembabkan kulit, mencegah jerawat dan anti penuaan.

        Tanaman oyong termasuk produktif dan dapat dipanen 35-40 HST dengan hasil berkisar 300-350/buah (35-40 ton). Buah oyong berwarna hijau terang hingga hijau gelap dengan kulit yang sedikit kasar, sedangkan dagingnya berwarna putih. Memiliki cita rasa yang lezat, manis dan bertekstur lembut. Oyong prima (Luffa acutangula) merupakan Cucurbitaceae (suku labu-labuan) yang cukup tahan terhadap serangan embun bulu juga bercak mata kodok.',
        'harga' => 20000,
        'satuan' => '20 biji',
        'foto_produk' => '/images/foto_produk/benih/6.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Pakcoy',
        'deskripsi' => 'Benih Pakchoy Ching Chiang ini diproduksi oleh Known You Seed dengan isi per bungkusnya sebanyak 5 gram.

        Pakcoy ini termasuk dalam kategori sayuran sawi dengan kualitas produksi yang cukup tinggi. Berat tanaman ini bisa mencapai 110 gram dengan warna daun hijau tua serta tangkai berwarna hijau. Selain itu, daunnya juga berbentuk lonjong.
        
        Pertumbuhan tanaman ini cukup subur serta mempunyai ketahanan yang kuat terhadap iklim panas dan lembab sehingga cocok ditanam di dataran rendah. Untuk ketentuan masa panennya adalah sekitar 45 hari sejak ditanam.',
        'harga' => 25000,
        'satuan' => '50 biji',
        'foto_produk' => '/images/foto_produk/benih/7.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Paprika Merah',
        'deskripsi' => 'Paprika Merah Red Star merupakan jenis paprika yang menghasilkan buah berbentuk persegi dengan dimensi buah yakni rata-rata 9,8 x 7,3 cm dan bobotnya bisa mencapai sekitar 170-190 gr/buah.

        Pada saat paprika merah ini masih muda, kulit buahnya berwarna hijau segar dan perlahan berubah menjadi merah cerah ketika buah sudah matang. Dagingnya tebal dan daya tahan yang baik pada saat pengangkutan.',
        'harga' => 20000,
        'satuan' => '25 biji',
        'foto_produk' => '/images/foto_produk/benih/8.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ]
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
