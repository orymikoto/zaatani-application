<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KategoriProduk
 *
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk query()
 */
	class KategoriProduk extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KeranjangPengguna
 *
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna query()
 */
	class KeranjangPengguna extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pembelian
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Pembelian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembelian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembelian query()
 */
	class Pembelian extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pembiayaan
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Pembiayaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembiayaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembiayaan query()
 */
	class Pembiayaan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pengguna
 *
 * @property int $id_pengguna
 * @property string $email
 * @property string $nama_lengkap
 * @property string $nomor_telepon
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $provinsi
 * @property string $kota
 * @property string|null $foto_profil
 * @property string|null $banner_profil
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereBannerProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereFotoProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereIdPengguna($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereNamaLengkap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereNomorTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereProvinsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereTanggalLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereUpdatedAt($value)
 */
	class Pengguna extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Penjual
 *
 * @property int $id_penjual
 * @property string $email
 * @property string $nama_lengkap
 * @property string $nomor_telepon
 * @property int $nomor_rekening
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $provinsi
 * @property string $kota
 * @property string|null $foto_profil
 * @property string|null $banner_profil
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual query()
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereBannerProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereFotoProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereIdPenjual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereNamaLengkap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereNomorRekening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereNomorTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereProvinsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereTanggalLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereUpdatedAt($value)
 */
	class Penjual extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Produk
 *
 * @property int $id_produk
 * @property string $nama
 * @property string $deskripsi
 * @property string $harga
 * @property string $satuan
 * @property string $alamat
 * @property int $id_penjual
 * @property int $id_kategori
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KategoriProduk $kategoriProduk
 * @property-read \App\Models\Penjual $penjual
 * @method static \Illuminate\Database\Eloquent\Builder|Produk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produk query()
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereIdKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereIdPenjual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereIdProduk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereSatuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereUpdatedAt($value)
 */
	class Produk extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transaksi
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi query()
 */
	class Transaksi extends \Eloquent {}
}

