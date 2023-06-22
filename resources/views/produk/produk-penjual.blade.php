<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zaatani</title>
  @vite('resources/js/app.js')

</head>

<body class="antialiased flex flex-col items-center justify-between relative min-h-screen bg-neutral-100">
  <x-navbar />
  <main class="flex max-w-[1280px] gap-8">
    {{-- SECTION FILTER --}}
    <section class=" rounded-md shadow-md my-8 w-[15rem] h-[20rem] flex flex-col items-center justify-center">
      <form action="/penjual/daftar-produk/{{ auth('penjual')->id() }}" method="GET" class="flex flex-col bg-white  h-[15rem] gap-4 p-2 w-full ">
        {{-- @csrf --}}
        <div class="col-span-6 flex flex-col items-start w-full">
          <p class="text-sky-700 font-medium mx-2">Harga Tertinggi</p>
          <input type="number" min="5000" name="harga" required oninput="this.setCustomValidity('')"
            class="outline-none text-neutral-600 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-sky-700 duration-200 w-full  rounded-md py-1 px-2 focus:border-sky-700">
        </div>
        <div class="col-span-6 flex flex-col items-start w-full">
          <p class="text-sky-700 font-medium mx-2">Urutkan Berdasarkan</p>
          <select placeholder="Jenis Kelamin" name="sort" required oninput="this.setCustomValidity('')"
            class="outline-none w-full text-neutral-600 focus:ring-0 border-2 border-neutral-400 px-2 py-[0.375rem] text-lg rounded-md  focus:text-sky-700 focus:border-sky-700 duration-200 ">
            <option value="new">Paling Baru</option>
            <option value="old">Paling Lama </option>
            <option value="price_asc">Harga Termurah</option>
            <option value="price_desc">Harga Termahal</option>
          </select>
        </div>
        <div class="mt-2">
          <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Terapkan</button>
        </div>
      </form>
      <a href="/penjual/tambah-produk"
        class="text-center font-poppins py-1 text-white text-lg rounded-full px-4 bg-emerald-500 hover:text-emerald-500 hover:bg-white duration-200">Tambah
        Produk</a>
    </section>

    <section class="flex-1 my-8">
      <p class="font-poppins mb-4 text-neutral-400">{{ $total_data }} produk ditemukan</p>
      <div class="grid xl:grid-cols-6 lg:grid-cols-4 md:grid-cols-2 gap-4 w-full">
        @foreach ($produk as $key => $value)
          <x-cart-produk-penjual :produk="$value" />
        @endforeach
      </div>
      <div class="mt-4">
        {{ $produk->links() }}
      </div>
    </section>
  </main>
  <x-footer />
</body>

</html>
