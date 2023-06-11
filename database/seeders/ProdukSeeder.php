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
          'nama_kategori' => 'Benih dan Bibit',
        ],
        [
          'nama_kategori' => 'Beras',
        ],
        [
          'nama_kategori' => 'Buah',
        ],
        [
          'nama_kategori' => 'Hasil Hutan - Kayu',
        ],
        [
          'nama_kategori' => 'Hasil Hutan - Non Kayu',
        ],
        [
          'nama_kategori' => 'Ikan',
        ],
        [
          'nama_kategori' => 'Kopi',
        ],
        [
          'nama_kategori' => 'Teh',
        ],
        [
          'nama_kategori' => 'Makanan',
        ],
        [
          'nama_kategori' => 'Minuman',
        ],
        [
          'nama_kategori' => 'Pakan',
        ],
        [
          'nama_kategori' => 'Sayuran',
        ],
        [
          'nama_kategori' => 'Hasil Ternak',
        ],
        [
          'nama_kategori' => 'Kerajinan',
        ],
      ]
    );

    $faker = FakerFactory::create();

    $penjuals = Penjual::pluck('id_penjual')->all();
    $kategoris = KategoriProduk::pluck('id_kategori')->all();

    Produk::insert([
      [
        'nama' => 'Beras 5Kg',
        'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ratione voluptas ipsam sed perferendis illum. Officiis illo laborum dignissimos quisquam?',
        'harga' => 67000,
        'satuan' => 'Kg',
        'foto_produk' => '/images/foto_produk/1.jpg',
        'id_penjual' => 1,
        'id_kategori' => 2,
      ],
      [
        'nama' => 'Apel Malang',
        'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ratione voluptas ipsam sed perferendis illum. Officiis illo laborum dignissimos quisquam?',
        'harga' => 23000,
        'satuan' => 'Kg',
        'foto_produk' => '/images/foto_produk/2.jpg',
        'id_penjual' => 1,
        'id_kategori' => 3,
      ],
      [
        'nama' => 'Salak Semmboro',
        'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ratione voluptas ipsam sed perferendis illum. Officiis illo laborum dignissimos quisquam?',
        'harga' => 15000,
        'satuan' => 'Kg',
        'foto_produk' => '/images/foto_produk/3.jpg',
        'id_penjual' => 1,
        'id_kategori' => 3,
      ],
    ]);

    for ($i = 1; $i <= 50; $i++) {
      Produk::create([
        'nama' => $faker->sentence(3),
        'deskripsi' => $faker->paragraph(4),
        'harga' => $faker->random_int(10000, 210000,),
        'satuan' => $faker->randomElement(['kg', 'pcs', 'meter']),
        'foto_produk' => $faker->imageUrl(400, 400),
        'id_penjual' => $faker->randomElement($penjuals),
        'id_kategori' => $faker->randomElement($kategoris),
      ]);
    }
  }
}
