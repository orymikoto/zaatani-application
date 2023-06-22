<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zaatani</title>
  @vite('resources/js/app.js')

</head>

<body class="antialiased flex flex-col items-center relative min-h-screen bg-neutral-50 justify-between">
  <x-navbar />
  <x-flash-message url="/mart/beli-produk/{{ $produk->id_produk }}" />
  <main class="max-w-[1280px] w-full flex flex-col mx-auto my-4 flex-1">
    {{-- DETAIL PRODUK --}}
    <h1 class="text-center font-righteous text-5xl text-sky-700">BELI PRODUK</h1>
    <section class="flex w-full gap-2 my-4">
      <div class="rounded-xl shadow-md shadow-black/60 p-4 flex flex-col flex-1 items-center bg-neutral-100">
        <h2 class="text-2xl font-roboto font-medium text-neutral-700">Data Barang</h2>
        <img src="{{ $produk->foto_produk }}" class="w-[450px] h-[450px] object-cover rounded-lg overflow-hidden shadow-md" alt="">
        <div class="grid grid-cols-2 font-poppins font-medium w-[600px] gap-2 my-2 bg-white p-2 rounded-md">
          <div class="col-span-full text-center">
            <h3 class="text-neutral-700 text-xl">Detail Pembelian</h3>
          </div>
          <div class="flex flex-col">
            <p class="text-neutral-600 ml-3">Nama Produk</p>
            <div class="border border-neutral-800 rounded-md text-neutral-600 pl-2 py-1">{{ $produk->nama }}</div>
          </div>
          <div class="flex flex-col">
            <p class="text-neutral-600 ml-3">Harga</p>
            <div class="border border-neutral-800 rounded-md text-neutral-600 pl-2 py-1">Rp. {{ $produk->harga }} / <strong
                class="text-sky-900">{{ $produk->satuan }}</strong></div>
          </div>
          <div class="flex flex-col col-span-full">
            <p class="text-neutral-600 ml-3">Deskripsi</p>
            <div class="border border-neutral-800 rounded-md text-xs text-justify font-normal text-neutral-600 px-2 py-1">
              {{ $produk->deskripsi }}</div>
          </div>
          <div class="col-span-full flex flex-col text-neutral-700">
            <div class="flex">
              <p class=" w-32">
                Kuantitas
              </p>
              <p class="flex-1">
                : {{ request()->get('jumlah') }}
              </p>
            </div>
            <div class="flex">
              <p class=" w-32 ">
                Harga Barang
              </p>
              <p class=" flex-1">
                : Rp. {{ $produk->harga * request()->get('jumlah') }}
              </p>
            </div>
            <div class="flex">
              <p class=" w-32 ">
                Ongkos Kirim
              </p>
              <p class=" flex-1">
                : Rp. 20000
              </p>
            </div>
            <div class="flex">
              <p class=" w-32 ">
                Biaya Aplikasi
              </p>
              <p class=" flex-1">
                : Rp. 3000
              </p>
            </div>
            <div class="flex text-red-600">
              <p class=" w-32 ">
                Harga Akhir
              </p>
              <p class=" flex-1">
                : Rp. {{ $produk->harga * request()->get('jumlah') + 20000 + 3000 }}
              </p>
            </div>
            <a href="https://wa.me/62{{ substr($produk->penjual->nomor_telepon, 1, strlen($produk->penjual->nomor_telepon)) }}"
              class="flex mx-auto cursor-pointer my-2 rounded-full py-1 px-4 bg-emerald-400 text-white hover:text-emerald-400 hover:bg-white hover:shadow-md hover:shadow-emerald-400/75 duration-200">
              Hubungi Penjual
            </a>
          </div>
        </div>
      </div>
      <div class="rounded-xl shadow-md shadow-black/60 p-4 flex flex-col w-[21rem] items-center">
        <h2 class="text-2xl font-roboto font-medium text-neutral-700">Data Pembeli</h2>
      </div>
    </section>
  </main>
  <x-footer />
</body>

</html>
