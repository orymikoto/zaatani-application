<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zaatani</title>
  @vite('resources/js/app.js')

  <script>
    function increaseValue() {
      var input = document.getElementById('quantity');
      input.value = parseInt(input.value) + 1;
    }

    function decreaseValue() {
      var input = document.getElementById('quantity');
      var value = parseInt(input.value);
      input.value = value > 1 ? value - 1 : 1;
    }
  </script>
</head>

<body class="antialiased flex flex-col items-center relative min-h-screen justify-between bg-neutral-100">
  <x-navbar />

  <main class="flex flex-col min-w-[1280px] w-[90%]">
    <!-- component -->


    <section class="text-gray-700 body-font overflow-hidden ">
      <div class="container px-5 py-12 mx-auto">
        <x-route-detail-produk :produk="$produk" />
        <div class="w-full mt-8 mx-auto flex flex-wrap">
          <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{ $produk->foto_produk }}">
          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $produk->penjual->nama_lengkap }}</h2>
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $produk->nama }}</h1>
            <div class="flex mb-4 items-center">
              <p class="text-neutral-600 font-poppins text-lg">{{ $produk->penjual->kota }}</p>
              <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                <a class="text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>
                </a>
              </span>
            </div>
            <p class="leading-relaxed">{{ $produk->deskripsi }}</p>
            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
              <div class="flex items-center">
                <span class="mr-3">Jumlah</span>
                <div class="flex items-center">
                  <button
                    class="px-2 py-1 border border-gray-300 rounded-l w-6 font-poppins text-neutral-600 flex items-center
                  justify-center"
                    onclick="decreaseValue()">-</button>
                  <input type="numeric" id="quantity" name="quantity"
                    class="w-16 font-poppins text-neutral-600 px-2 py-1 border outline-none border-gray-300 text-center" value="1"
                    min="1">
                  <button
                    class="px-2 py-1 border border-gray-300 rounded-r w-6 font-poppins text-neutral-600 flex items-center
                  justify-center"
                    onclick="increaseValue()">+</button>
                </div>
              </div>
            </div>
            <div class="flex items-center">
              <span class="title-font font-medium text-2xl text-gray-900">Rp. {{ $produk->harga }}</span>
              <button
                class="flex ml-auto font-poppins items-center text-white bg-emerald-500 border-0 py-2 px-6 focus:outline-none hover:bg-emerald-600 duration-200 rounded">Beli
                Sekarang</button>
              <button
                class="rounded-md border-sky-700 font-poppins w-10 h-10 hover:text-emerald-500 duration-200 bg-sky-200  hover:border-sky-500 border-2 inline-flex items-center justify-center text-gray-500 ml-4">
                <img src="/icons/add-cart.svg" class="w-8 h-8 object-contain object-center" alt="">
              </button>

            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- PRODUK TERKAIT --}}
    <section class="w-full my-8 flex flex-col gap-4">
      <h2 class="font-poppins font-medium text-3xl">Produk Terkait</h2>
      <div class="grid gap-4 xl:grid-cols-6 lg:grid-cols-4 md:grid-cols-2 grid-cols-1">
        @foreach ($recommend_produk as $key => $value)
          <x-cart-produk :produk="$value" />
        @endforeach
      </div>
    </section>
  </main>

  <x-footer />
</body>

</html>
