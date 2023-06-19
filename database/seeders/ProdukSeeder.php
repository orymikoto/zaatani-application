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
      [
        'nama' => 'Benih Kacang Panjang',
        'deskripsi' => 'Kacang Panjang Parade Tavi ialah benih kacang panjang yang ideal ditanam di wilayah dataran rendah – menengah. Cocok pula ditanam secara konvensional, aquaponik, hidroponik, dan organik. Umur panen yakni pada usia 48 – 55 hari semenjak benih ditanam dengan potensi hasil panen yang diperkirakan mencapai 35 ton/ha. Benih ini akan menghasilkan tanaman yang tahan terhadap Fw, Bw, dan MYMIV.',
        'harga' => 20000,
        'satuan' => '200 biji',
        'foto_produk' => 'public\images\foto_produk\benih\benih kacang panjang.jpg',
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
        'foto_produk' => 'public\images\foto_produk\benih\benih kale siberian.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Oyong',
        'deskripsi' => 'Benih Oyong Prima adalah sayuran buah yang dikenal juga dengan nama Gambas. Sayuran ini biasanya dibudidayakan pada daerah dataran rendah juga menengah dan akan menghasilkan buah lonjong berukuran 35-45cm. Selain dapat diolah menjadi masakan yang lezat, buah oyong juga dipercaya baik bagi kesehatan kulit seperti melembabkan kulit, mencegah jerawat dan anti penuaan.

        Tanaman oyong termasuk produktif dan dapat dipanen 35-40 HST dengan hasil berkisar 300-350/buah (35-40 ton). Buah oyong berwarna hijau terang hingga hijau gelap dengan kulit yang sedikit kasar, sedangkan dagingnya berwarna putih. Memiliki cita rasa yang lezat, manis dan bertekstur lembut. Oyong prima (Luffa acutangula) merupakan Cucurbitaceae (suku labu-labuan) yang cukup tahan terhadap serangan embun bulu juga bercak mata kodok.',
        'harga' => 20000,
        'satuan' => '20 biji',
        'foto_produk' => 'public\images\foto_produk\benih\benih oyong.jpg',
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
        'foto_produk' => 'public\images\foto_produk\benih\benih pakcoy.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],
      [
        'nama' => 'Benih Paprika Merah',
        'deskripsi' => 'Paprika Merah Red Star merupakan jenis paprika yang menghasilkan buah berbentuk persegi dengan dimensi buah yakni rata-rata 9,8 x 7,3 cm dan bobotnya bisa mencapai sekitar 170-190 gr/buah.

        Pada saat paprika merah ini masih muda, kulit buahnya berwarna hijau segar dan perlahan berubah menjadi merah cerah ketika buah sudah matang. Dagingnya tebal dan daya tahan yang baik pada saat pengangkutan.',
        'harga' => 20000,
        'satuan' => '25 biji',
        'foto_produk' => 'public\images\foto_produk\benih\benih paprika merah red star.jpg',
        'id_penjual' => 1,
        'id_kategori' => 1,
      ],


      [
        'nama' => 'Digital Thermometer Hygrometer',
        'deskripsi' => 'Digital Thermometer adalah alat multiguna yang berfungsi untuk mengukur kelembaban dan juga temperatur udara. Dilengkapi dengan pengaturan jam, kalender dan alarm.

        Keunggulan Produk:
        
        Dapat mengukur suhu di luar dan di dalam ruangan secara otomatis ketika alat ini dipidahkan dalam waktu 5 detik.
        Screen LCDnya berukuran lebih besar sehingga tampilan tulisannya juga lebih besar dan mudah dibaca.
        Pengukuran temperaturnya dapat diubah dari Celsius (C) ke Fahrenheit (F).
        Dilengkapi dengan memori agar mudah mengingat suhu tertinggi dan terendah.
        Memiliki pengatur kalender, jam dan alarm.
        Spesifikasi produk:
        
        Bisa set jam 12 / 24
        Ukuran LCD digital display
        Suhu temperatur min -10° C sampai 60° C ataupun dapat diubah ke Fahrenheit
        Akurat: 1 C, RH 5%
        Kelembaban mulai dari 25% sampai 98%
        Baterai: 1xAAA 1.5 V (tidak termasuk baterai)
        Ukuran:
        
        Dimensi produk: 122 mm x 98 mm x 22 mm
        Dimensi LCD: 80 mm x 70 mm',
        'harga' => 36000,
        'satuan' => '1 pcs',
        'foto_produk' => 'public\images\foto_produk\mesin dan alat\digital thermometer hygrometer.jpg',
        'id_penjual' => 1,
        'id_kategori' => 8,
      ],
      [
        'nama' => 'Gergaji Dahan Pohon',
        'deskripsi' => 'Gergaji Dahan Pohon / Tree Pruner juga dikenal sebagai gunting galah atau gunting tarik. Alat ini dapat digunakan untuk memangkas dahan ataupun ranting-ranting pohon yang sulit untuk dijangkau, serta dapat digunakan sebagai alat untuk memanen buah yang tinggi, seperti rambutan, mangga, kelengkeng, jambu, petai dan lain-lain.


        Cara Penggunaan Gergaji/Gunting
        Spesifikasi Gergaji Dahan / Gunting Tarik:
        
        Merk: Drexel
        Body: Aluminium
        Mata pisau: Carbon stell / baja yang kuat dan dapat menjangkau hingga 5 meter
        Kemampuan memotong dahan: Diameter 4 cm
        Catatan:
        
        Produk ini hanya ada gunting/gergaji saja (tidak termasuk gagang/tongkatnya).
        Untuk penggunaannya, gunakan tongkat atau pipa sebagai gagang gergaji/gunting',
        'harga' => 105000,
        'satuan' => '1 pcs',
        'foto_produk' => 'public\images\foto_produk\mesin dan alat\gergaji dahan pohon.jpg',
        'id_penjual' => 1,
        'id_kategori' => 8,
      ],
      [
        'nama' => 'Lakban Plastik UV (20cm x 33 meter',
        'deskripsi' => 'Lakban plastik UV 10 cm x 33 m merupakan salah satu alat perekat plastik UV dalam konstruksi green house atau hidroponik. Lakban plastik UV ini berfungsi untuk menambal plastik UV yang sobek, bocor, dan untuk menyambung plastik UV. Selain itu, lakban ini juga dapat membantu memperkuat bagian plastik UV yang terjepit klip.

        Lakban plastik UV ini terbuat dari bahan anti UV, sehingga kuat, tahan dan awet terhadap segala kondisi cuaca (sinar matahari dan hujan).
        
        Spesifikasi Lakban:
        
        Warna: Bening
        Ukuran: 10 cm x 33 m',
        'harga' => 85000,
        'satuan' => '1 pcs',
        'foto_produk' => 'public\images\foto_produk\mesin dan alat\lakban plastik uv (20cm x 33meter).jpg',
        'id_penjual' => 1,
        'id_kategori' => 8,
      ],
      [
        'nama' => 'Pompa Air High Pressure',
        'deskripsi' => 'Spesifikasi Produk:

          Dimensi ukuran pompa: 170 x 100 x 67 mm.
          Daya semprot lebih kuat.
          Daya / Arus: 60-65 Watt (disarankan untuk menggunakan adaptor minimal 12 Volt 5A).
          Voltage: DC 12V (maksimal 15 Volt).
          High speed booster (menyedot dan mengeluarkan air dengan kecepatan tinggi).
          Max flow: 4.0 L/Min.
          Max pressure: 0.68 Mpa.
          Ukuran selang in/outnya: 3/8 inch atau 5/16 inch (disarankan untuk menggunakan selang ukuran 5/16 inch).
          Catatan:
          
          Yang kami jual hanya pompanya saja (belum termasuk adaptor, konektor pompa, konektor selang, dll).
          Tidak diperkenankan digunakan untuk bahan kimia, air yang mengandung bubuk, cairan korosive, bahan bakar (seperti bensin, solar dan minyak tanah) serta flameable yang sejenis karena dapat menyebabkan kebakaran.
          Temperatur maksimum air yang digunakan tidak boleh melebihi dari 43°C atau 119°F.',
        'harga' => 110000,
        'satuan' => '1 pcs',
        'foto_produk' => 'public\images\foto_produk\mesin dan alat\pompa air high pressure.jpg',
        'id_penjual' => 1,
        'id_kategori' => 8,
        ],
        [
          'nama' => 'Pressure Sprayer Maspion',
          'deskripsi' => 'Pressure Sprayer Maspion MPS-5 terbuat dari bahan plastik yang kuat dan memiliki kualitas yang baik. Pressure Sprayer merek Maspion ini merupakan sprayer yang penggunaannya dengan cara digendong (seperti memakai tas punggung), mempermudah dalam melakukan proses penyiraman, pemupukan maupun penyemprotan pestisida pada tanaman.

          Pressure Sprayer Maspion dilengkapi dengan corong bermulut lebih lebar yang akan memudahkan pengisian cairan, serta terdapat katup pengaman untuk mengatur tekanan cairan, sehingga dapat menghindari ledakan pada tangki. Penyangga pegangan sprayer ini kuat, dan yang lebih menyenangkan adalah volume air yang disemprotkan dapat diatur sesuai dengan keinginan Anda.
          
          Spesifikasi Pressure Sprayer Maspion MPS-5:
          
          Kapasitas tangki sebesar 5 liter
          Tekanan maksimal yang dapat dikeluarkan sebesar 5kg/cm2, sedangkan tekanan operasionalnya sebesar 3kg/cm2
          Lebih ekonomis, mudah digunakan, praktis
          Kuat, kualitasnya bagus dan tahan lama',
          'harga' => 160000,
          'satuan' => '1 pcs',
          'foto_produk' => 'public\images\foto_produk\mesin dan alat\pressure sprayer maspion.jpg',
          'id_penjual' => 1,
          'id_kategori' => 8,
        ],
        [
          'nama' => 'Paranet 85% (3x100meter)',
          'deskripsi' => 'Merek You-V, kualitas terbaik di kelasnya. Boleh dibandingkan dengan paranet lainnya, kualitas jauh lebih bagus.

          Paranet 85% Lebar 3 Meter juga dikenal sebagai shading net (pembuat naungan) merupakan jaring yang dapat menyaring intensitas cahaya matahari langsung dan untuk mencegah masuknya air hujan secara berlebihan.
          
          Paranet 85% ini mampu menyaring intensitas cahaya matahari sebanyak 85%, sehingga cahaya yang diteruskan ke tanaman hanya tersisa 15% saja.
          
          Spesifikasi Paranet 85% Lebar 3 M:
          
          Merek: You-V (produk import luar negeri)
          Ukuran: Panjang 100 meter (1 roll) x Lebar 3 meter
          Terbuat dari plastik berwarna hitam
          Kualitas sangat baik dan jauh lebih unggul dari merek-merek paranet lainnya yang ada di pasaran (baik impor maupun lokal).
          Berat per roll: 20 kg',
          'harga' => 1550000,
          'satuan' => '1 pcs',
          'foto_produk' => 'public\images\foto_produk\mesin dan alat\paranet 85% (3x100meter).jpg',
          'id_penjual' => 1,
          'id_kategori' => 8,
        ],
        [
          'nama' => 'Sarung tangan Latex',
          'deskripsi' => 'Sarung tangan  merupakan salah satu perlengkapan berkebun yang berfungsi sebagai pelindung tangan saat bekerja dan dari bahan-bahan berbahaya. Sarung tangan yang Kami jual berbahan karet lateks sehingga nyaman dan melengket baik pada kulit saat digunakan.

          Mudah digunakan dan bersifat anti slip karena terbuat dari bahan latex sehingga barang yang digenggam saat memakai sarung tangan ini tidak mudah jatuh atau tergelincir meski dalam kondisi basah sekalipun.',
          'harga' => 15000,
          'satuan' => '1 pcs',
          'foto_produk' => 'public\images\foto_produk\mesin dan alat\sarung tangan latex.jpg',
          'id_penjual' => 1,
          'id_kategori' => 8,
        ],
        [
          'nama' => 'Water Timer',
          'deskripsi' => 'Fitur dan Spesifikasi Produk:
            Material: Plastik ABS, waterproof dan aman untuk digunakan.
            Warna: Hijau
            Baterai: 2 x 1.5V AAA
            Ukuran: 7.5 x 7.5 x 7.0 cm
            Diameter connector selang: 13mm (1/2″)
            Diameter connector ke keran: 21mm tap with 26,5mm thread
            Max. temperatur air: 40°C
            Max. tekanan air: Max. 6 Bar / 150 PSI
            100% inovasi baru & high quality
            Dilengkapi dengan LCD display
            Dapat diset / diprogram selama 1 s/d 16 kali pengaturan waktu.
            Minimum waktu penyiraman 1 menit, sedangkan maksimum dapat diset sesuai dengan waktu penggunaan yang diinginkan.
            Setting timer 24 jam, sehingga alat akan terus beroperasi selama 1 minggu.
            Jika baterainya lemah, maka controlnya akan tertutup otomatis, sehingga air tidak akan keluar.
            Catatan:
            
            Produk ini hanya diperuntukkan untuk pengontrolan lokal, seperti apartement, rumah, cottage, taman, kebun, dan lain-lain.
            Minimum pressure: 0.6 bar, namun berdasarkan pengetesan, tandon 3 meter sudah bisa.',
          'harga' => 190000,
          'satuan' => '1 pcs',
          'foto_produk' => 'public\images\foto_produk\mesin dan alat\water timer.jpg',
          'id_penjual' => 1,
          'id_kategori' => 8,
        ],


        [
          'nama' => 'Asparagus',
          'deskripsi' => 'Asparagus F1 merupakan jenis tanaman yang dimanfaatkan sebagai sayuran. Tanaman ini termasuk dalam genus Asparagus dengan nama ilmiah Asparagus officinalis. Biasanya dimanfaatkan bagian batang mudanya yang menghasilkan rasa renyah dan lembut. Tanaman premium ini dulunya hanya dinikmati oleh keluarga kerajaan di Mesir kuno.

          Asparagus terbukti sangat baik dalam hal membantu kelancaran urin dan secara otomatis akan membantu menjaga kesehatan ginjal. Selain itu, sangat baik dikonsumsi oleh penderita kolesterol tinggi ataupun tekanan darah tinggi.',
          'harga' => 50000,
          'satuan' => ' 30 biji',
          'foto_produk' => 'public\images\foto_produk\pertanian organik\asparagus.jpg',
          'id_penjual' => 1,
          'id_kategori' => 5,
        ],
        [
          'nama' => 'Terong Ungu',
          'deskripsi' => 'Terong ungu (Solanum melongena) termasuk tanaman terna perennial yang buahnya dapat dikonsumsi sebagai sayuran. Terong ungu berasal dari Asia bagian Selatan dan Asia bagian Timur. Tanaman terong ungu memiliki batang berkayu, bulat, tegak, dan percabangannya simpodial.
          Kandungan dalam buah terong ungu antara lain kalsium, serat, flavonoid, vitamin, dan mineral. Terong ungu memiliki banyak manfaat bagi kesehatan, yaitu dapat membantu pencernaan, sumber serat yang baik untuk penderita jantung, kolesterol tinggi, dan diabetes. Kalsium yang terkandung dalam terong ungu tinggi, membuatnya menjadi makanan yang dapat memperkuat tulang dan persendian. Selain itu kandungan mineral zat besi yang dimiliki terong ungu mampu mencegah anemia.',
          'harga' => 50000,
          'satuan' => ' 30 biji',
          'foto_produk' => 'public\images\foto_produk\pertanian organik\terong ungu.jpg',
          'id_penjual' => 1,
          'id_kategori' => 5,
        ],
        [
          'nama' => 'Jagung Permata',
          'deskripsi' => 'Benih jagung permata atau dikenal pula dengan nama jagung pelangi, di luar negeri dijuluki sebagai Glass Gem Corn. Jagung ini merupakan salah satu varietas yang terkenal, berasal dari hasil persilangan sehingga menghasilkan biji jagung yang berwarna-warni layaknya pelangi. Permukaan bijinya mengkilap terlihat seperti permata / manik-manik kaca.

          Jagung unik ini ditemukan pertama kali oleh seorang petani bernama Carl Barnes lalu kemudian diproduksi oleh perusahaan benih skala kecil di Arizona. Sangat ideal dibuat popcorn, dikonsumsi langsung setelah direbus ataupun dibuat tepung.',
          'harga' => 55000,
          'satuan' => ' 25 biji',
          'foto_produk' => 'public\images\foto_produk\pertanian organik\jagung permata.jpeg',
          'id_penjual' => 1,
          'id_kategori' => 5,
        ],
        [
          'nama' => 'Kenikir',
          'deskripsi' => 'Tanaman Kenikir, tanaman ini memiliki nama ilmiah Cosmos Caudatus. Tanaman yang dapat tumbuh mencapai tinggi 1 meter ini mempunyai daun yang bertangkai panjang, dan duduk daunnya berhadapan, sehingga terbagi menyirip menjadi 2-3 tangkai. Tumbuhan tahunan yang memiliki batang pipa isi termasuk dalam genus Cosmos dan keluarga Asteraceae. Tanaman ini biasanya tersebar di daerah Amerika Tengah dengan suhu yang panas.
          Kelebihan tanaman ini adalah:

          Memiliki khasiat yang mampu menyembuhkan penyakit mematikan seperti kanker
          Dapat mengatasi tidak stabilnya peredaran darah
          Dapat menguatkan tulang, menambah nafsu makan, menghalangi proses penuaan dini, menghilangkan bau tidak sedap di dalam mulut, dan dapat mengusir keberadaan nyamuk',
          'harga' => 25000,
          'satuan' => ' 20 biji',
          'foto_produk' => 'public\images\foto_produk\pertanian organik\kenikir.jpg',
          'id_penjual' => 1,
          'id_kategori' => 5,
        ],


        [
          'nama' => 'Insektisida Curacron',
          'deskripsi' => '',
          'harga' => 25000,
          'satuan' => ' 20 biji',
          'foto_produk' => 'public\images\foto_produk\pupuk dan obat\insektisida curacron.jpg',
          'id_penjual' => 1,
          'id_kategori' => 7,
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
