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
 * @property int $id_admin
 * @property string $email
 * @property string $nama
 * @property string $password
 * @property string $nomor_telepon
 * @property string|null $foto_profil
 * @property string|null $banner_profil
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereBannerProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereFotoProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereIdAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereNomorTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DetailTransaksiKeranjang
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksiKeranjang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksiKeranjang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksiKeranjang query()
 */
	class DetailTransaksiKeranjang extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DetailTransaksiPembayaran
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksiPembayaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksiPembayaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksiPembayaran query()
 */
	class DetailTransaksiPembayaran extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KategoriProduk
 *
 * @property int $id_kategori
 * @property string $nama_kategori
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk query()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk whereIdKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk whereNamaKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriProduk whereUpdatedAt($value)
 */
	class KategoriProduk extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KeranjangPengguna
 *
 * @property int $id_keranjang_pengguna
 * @property int $id_produk
 * @property int $id_pengguna
 * @property int $jumlah
 * @property int $total_harga
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pengguna $pengguna
 * @property-read \App\Models\Produk $produk
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna query()
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna whereIdKeranjangPengguna($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna whereIdPengguna($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna whereIdProduk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna whereTotalHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeranjangPengguna whereUpdatedAt($value)
 */
	class KeranjangPengguna extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pembayaran
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran query()
 */
	class Pembayaran extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pengguna
 *
 * @property int $id_pengguna
 * @property string $email
 * @property string $password
 * @property string $nama_lengkap
 * @property string $nomor_telepon
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $provinsi
 * @property string $kota
 * @property string $alamat
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
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereBannerProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereFotoProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereIdPengguna($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereNamaLengkap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereNomorTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna wherePassword($value)
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
 * @property string $password
 * @property string $nama_lengkap
 * @property string $nomor_telepon
 * @property string $nomor_rekening
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $provinsi
 * @property string $kota
 * @property string $alamat
 * @property string|null $foto_profil
 * @property string|null $banner_profil
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Produk> $produk
 * @property-read int|null $produk_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual query()
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual whereAlamat($value)
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
 * @method static \Illuminate\Database\Eloquent\Builder|Penjual wherePassword($value)
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
 * @property int $harga
 * @property string $satuan
 * @property string $foto_produk
 * @property int $id_penjual
 * @property int $id_kategori
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KategoriProduk $kategoriProduk
 * @property-read \App\Models\Penjual $penjual
 * @method static \Illuminate\Database\Eloquent\Builder|Produk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produk query()
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereFotoProduk($value)
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
 * @property int $id_transaksi
 * @property int $id_produk
 * @property int $id_pengguna
 * @property int $id_penjual
 * @property string $tanggal_pemesanan
 * @property string $alamat_pengiriman
 * @property int $biaya_aplikasi
 * @property int $total_harga
 * @property int $status_pembayaran
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pengguna $pengguna
 * @property-read \App\Models\Penjual $penjual
 * @property-read \App\Models\Produk $produk
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereAlamatPengiriman($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereBiayaAplikasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereIdPengguna($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereIdPenjual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereIdProduk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereIdTransaksi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereStatusPembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereTanggalPemesanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereTotalHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereUpdatedAt($value)
 */
	class Transaksi extends \Eloquent {}
}

