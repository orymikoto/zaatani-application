<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zaatani</title>
  @vite('resources/js/app.js')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'
  
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

      // Navigation arrows

      // And if we need scrollbar
    });
  </script>
</head>

<body class="antialiased flex flex-col items-center relative min-h-screen bg-neutral-50">
  <x-navbar />
  <main class="flex flex-col min-w-[1280px] w-[90%]">
    {{-- SECTION HEADER --}}
    <h1 class="font-comfortaa my-4 text-5xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-tr to-sky-400 from-pink-600">ZAATANI
      MART</h1>
    <section class="flex flex-col w-full">
      <div class="swiper mySwiper w-full h-[300px] mb-4">
        <div class="swiper-wrapper">
          <div class="swiper-slide overflow-hidden grid grid-cols-3 gap-4 rounded-lg">
            <img src="/images/mart/head1.jpg" class="overflow-hidden h-full w-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head2.jpg" class="overflow-hidden h-full w-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head3.jpg" class="overflow-hidden h-full w-full rounded-md object-cover object-center" alt="">
          </div>
          <div class="swiper-slide overflow-hidden grid grid-cols-3 gap-4 rounded-lg">
            <img src="/images/mart/head4.jpg" class="overflow-hidden h-full w-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head5.jpg" class="overflow-hidden h-full w-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head6.jpg" class="overflow-hidden h-full w-full rounded-md object-cover object-center" alt="">
          </div>
          <div class="swiper-slide overflow-hidden grid grid-cols-3 gap-4 rounded-lg">
            <img src="/images/mart/head7.jpg" class="overflow-hidden h-full w-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head8.jpg" class="overflow-hidden h-full w-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head9.jpg" class="overflow-hidden h-full w-full rounded-md object-cover object-center" alt="">
          </div>
        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> --}}
      </div>
      <p class="text-center font-poppins  text-xl text-neutral-400">Temukan Segala Kebutuhan Pertanian Disini</p>
    </section>

    {{-- SECTION KATEGORI --}}
    <section class="flex flex-col w-full gap-4 my-4">
      <h2 class="font-roboto font-medium text-3xl text-neutral-700">Daftar Kategori</h2>
      <div class="grid grid-cols-12 w-full gap-2 gap-y-4 bg-white">
        <a href="/mart/kategori-produk/1"
          class="lg:col-span-3 col-span-4 flex gap-2 items-center rounded-md p-2 w-full shadow-[3px_3px_5px_-3px_rgba(0,0,0,0.5)] hover:shadow-[3px_3px_5px_-2px_rgba(0,0,0,0.5)] duration-200">
          <img src="/images/kategori/benih.png" class="w-20 h-20 bg-neutral-200 rounded-md object-contain object-center" alt="">
          <div class="flex flex-col">
            <p class="text-neutral-700 font-poppins text-xl">Benih</p>
            <p class="text-neutral-400 font-poppins text-md">Benih tanaman dan benih pohon</p>
          </div>
        </a>
        <a href="/mart/kategori-produk/2"
          class="lg:col-span-3 col-span-4 flex gap-2 items-center rounded-md p-2 w-full shadow-[3px_3px_5px_-3px_rgba(0,0,0,0.5)] hover:shadow-[3px_3px_5px_-2px_rgba(0,0,0,0.5)] duration-200">
          <img src="/images/kategori/beras.png" class="w-20 h-20 bg-neutral-200 rounded-md object-contain object-center" alt="">
          <div class="flex flex-col">
            <p class="text-neutral-700 font-poppins text-xl">Beras</p>
            <p class="text-neutral-400 font-poppins text-md">Segala merk dan jenis beras</p>
          </div>
        </a>
        <a href="/mart/kategori-produk/3"
          class="lg:col-span-3 col-span-4 flex gap-2 items-center rounded-md p-2 w-full shadow-[3px_3px_5px_-3px_rgba(0,0,0,0.5)] hover:shadow-[3px_3px_5px_-2px_rgba(0,0,0,0.5)] duration-200">
          <img src="/images/kategori/biji.png" class="w-20 h-20 bg-neutral-200 rounded-md object-contain object-center" alt="">
          <div class="flex flex-col">
            <p class="text-neutral-700 font-poppins text-xl">Biji</p>
            <p class="text-neutral-400 font-poppins text-md">Macam macam produk biji-bijian</p>
          </div>
        </a>
        <a href="/mart/kategori-produk/4"
          class="lg:col-span-3 col-span-4 flex gap-2 items-center rounded-md p-2 w-full shadow-[3px_3px_5px_-3px_rgba(0,0,0,0.5)] hover:shadow-[3px_3px_5px_-2px_rgba(0,0,0,0.5)] duration-200">
          <img src="/images/kategori/umbi.png" class="w-20 h-20 bg-neutral-200 rounded-md object-contain object-center" alt="">
          <div class="flex flex-col">
            <p class="text-neutral-700 font-poppins text-xl">Umbi</p>
            <p class="text-neutral-400 font-poppins text-md">Produk jenis umbi-umbian</p>
          </div>
        </a>
        <a href="/mart/kategori-produk/5"
          class="lg:col-span-3 col-span-4 flex gap-2 items-center rounded-md p-2 w-full shadow-[3px_3px_5px_-3px_rgba(0,0,0,0.5)] hover:shadow-[3px_3px_5px_-2px_rgba(0,0,0,0.5)] duration-200">
          <img src="/images/kategori/organik.png" class="w-20 h-20 bg-neutral-200 rounded-md object-contain object-center" alt="">
          <div class="flex flex-col">
            <p class="text-neutral-700 font-poppins text-xl">Pertanian Organik</p>
            <p class="text-neutral-400 font-poppins text-md">Produk untuk pertanian organik</p>
          </div>
        </a>
        <a href="/mart/kategori-produk/6"
          class="lg:col-span-3 col-span-4 flex gap-2 items-center rounded-md p-2 w-full shadow-[3px_3px_5px_-3px_rgba(0,0,0,0.5)] hover:shadow-[3px_3px_5px_-2px_rgba(0,0,0,0.5)] duration-200">
          <img src="/images/kategori/sayuran.png" class="w-20 h-20 bg-neutral-200 rounded-md object-contain object-center" alt="">
          <div class="flex flex-col">
            <p class="text-neutral-700 font-poppins text-xl">Sayuran</p>
            <p class="text-neutral-400 font-poppins text-md">Produk jenis sayur-sayuran</p>
          </div>
        </a>
        <a href="/mart/kategori-produk/7"
          class="lg:col-span-3 col-span-4 flex gap-2 items-center rounded-md p-2 w-full shadow-[3px_3px_5px_-3px_rgba(0,0,0,0.5)] hover:shadow-[3px_3px_5px_-2px_rgba(0,0,0,0.5)] duration-200">
          <img src="/images/kategori/pupuk.png" class="w-20 h-20 bg-neutral-200 rounded-md object-contain object-center" alt="">
          <div class="flex flex-col">
            <p class="text-neutral-700 font-poppins text-xl">Pupuk</p>
            <p class="text-neutral-400 font-poppins text-md">Segala jenis pupuk tanaman</p>
          </div>
        </a>
        <a href="/mart/kategori-produk/8"
          class="lg:col-span-3 col-span-4 flex gap-2 items-center rounded-md p-2 w-full shadow-[3px_3px_5px_-3px_rgba(0,0,0,0.5)] hover:shadow-[3px_3px_5px_-2px_rgba(0,0,0,0.5)] duration-200">
          <img src="/images/kategori/mesin.png" class="w-20 h-20 bg-neutral-200 rounded-md object-contain object-center" alt="">
          <div class="flex flex-col">
            <p class="text-neutral-700 font-poppins text-xl">Mesin dan Alat</p>
            <p class="text-neutral-400 font-poppins text-md">Mesin dan alat untuk menunjang pertanian</p>
          </div>
        </a>
      </div>
      <hr class=" bg-neutral-400 h-[1px] my-4">

    </section>

    {{-- SECTION KATEGORI BENIH --}}
    <section class="flex flex-col w-full gap-4 my-4">
      <h2 class="font-roboto font-medium text-3xl text-neutral-700">Aneka Benih</h2>
      <div class="w-full rounded-lg h-[25rem] bg-sky-700 flex gap-x-8 p-4">
        <div class="rounded-lg overflow-hidden w-[18rem] bg-[url('/images/bg-kategori.jpg')] bg-cover bg-center py-4 flex flex-col items-center">
          <div class="bg-gradient-to-r from-sky-900/50 to-sky-900/0 h-16 w-[15rem] pl-4 flex items-center self-start">
            <p class=" text-white font-poppins font-semibold text-2xl">Aneka Pilihan <br /> <span
                class="text-pink-700 font-poppins font-semibold text-2xl">Benih</span> </p>
          </div>
          <div class="flex-1 flex items-center justify-center">
            <img src="/images/kategori/benih.png" class=" w-[15rem] object-cover object-center " alt="">
          </div>
          <a
            class="w-[16rem] rounded-md text-center h-12 flex items-center justify-center text-white duration-200 text-lg font-roboto bg-sky-700 hover:bg-sky-400 cursor-pointer">
            Cek sekarang juga
          </a>
        </div>
        <div class="rounded-lg flex-1 overflow-hidden flex gap-x-4 justify-evenly">
          @php
            $number_row = 0;
          @endphp
          @foreach ($produk as $key => $value)
            @if ($value->id_kategori == 1 && $number_row <= 3)
              <x-cart-produk :produk="$value" :city="$value->name" />
              @php
                $number_row += 1;
              @endphp
            @endif
          @endforeach
        </div>
      </div>
      <hr class=" bg-neutral-400 h-[1px] my-4">

    </section>

    {{-- SECTION KATEGORI PERTANIAN ORGANIK --}}
    <section class="flex flex-col w-full gap-4 my-4">
      <h2 class="font-roboto font-medium text-3xl text-neutral-700">Pertanian Organik</h2>
      <div class="w-full rounded-lg h-[25rem] bg-sky-700 flex gap-x-8 p-4">
        <div class="rounded-lg overflow-hidden w-[18rem] bg-[url('/images/bg-kategori.jpg')] bg-cover bg-center py-4 flex flex-col items-center">
          <div class="bg-gradient-to-r from-sky-900/50 to-sky-900/0 h-16 w-[15rem] pl-4 flex items-center self-start">
            <p class=" text-white font-poppins font-semibold text-2xl">Produk <br /> <span
                class="text-pink-700 font-poppins font-semibold text-2xl">Pertanian Organik</span> </p>
          </div>
          <div class="flex-1 flex items-center justify-center">
            <img src="/images/kategori/organik.png" class=" w-[15rem] object-cover object-center " alt="">
          </div>
          <a
            class="w-[16rem] rounded-md text-center h-12 flex items-center justify-center text-white duration-200 text-lg font-roboto bg-sky-700 hover:bg-sky-400 cursor-pointer">
            Cek sekarang juga
          </a>
        </div>
        <div class="rounded-lg flex-1 overflow-hidden flex gap-x-4 justify-evenly">
          @php
            $number_row = 0;
          @endphp
          @foreach ($produk as $key => $value)
            @if ($value->id_kategori == 5 && $number_row <= 3)
              <x-cart-produk :produk="$value" :city="$value->name" />
              @php
                $number_row += 1;
              @endphp
            @endif
          @endforeach
        </div>
      </div>
      <hr class=" bg-neutral-400 h-[1px] my-4">
    </section>

    {{-- SECTION KATEGORI PERTANIAN ORGANIK --}}
    <section class="flex flex-col w-full gap-4 my-4">
      <h2 class="font-roboto font-medium text-3xl text-neutral-700">Aneka Pupuk</h2>
      <div class="w-full rounded-lg h-[25rem] bg-sky-700 flex gap-x-8 p-4">
        <div class="rounded-lg overflow-hidden w-[18rem] bg-[url('/images/bg-kategori.jpg')] bg-cover bg-center py-4 flex flex-col items-center">
          <div class="bg-gradient-to-r from-sky-900/50 to-sky-900/0 h-16 w-[15rem] pl-4 flex items-center self-start">
            <p class=" text-white font-poppins font-semibold text-2xl">Aneka Pilihan <br /> <span
                class="text-pink-700 font-poppins font-semibold text-2xl">Pupuk</span> </p>
          </div>
          <div class="flex-1 flex items-center justify-center">
            <img src="/images/kategori/pupuk.png" class=" w-[10rem] object-cover object-center " alt="">
          </div>
          <a
            class="w-[16rem] rounded-md text-center h-12 flex items-center justify-center text-white duration-200 text-lg font-roboto bg-sky-700 hover:bg-sky-400 cursor-pointer">
            Cek sekarang juga
          </a>
        </div>
        <div class="rounded-lg flex-1 overflow-hidden flex gap-x-4 justify-evenly">
          @php
            $number_row = 0;
          @endphp
          @foreach ($produk as $key => $value)
            @if ($value->id_kategori == 7 && $number_row <= 3)
              <x-cart-produk :produk="$value" :city="$value->name" />
              @php
                $number_row += 1;
              @endphp
            @endif
          @endforeach
        </div>
      </div>
      <hr class=" bg-neutral-400 h-[1px] my-4">
    </section>

    {{-- SECTION KATEGORI MESIN DAN ALAT --}}
    <section class="flex flex-col w-full gap-4 my-4">
      <h2 class="font-roboto font-medium text-3xl text-neutral-700">Mesin dan Alat Pertnian</h2>
      <div class="w-full rounded-lg h-[25rem] bg-sky-700 flex gap-x-8 p-4">
        <div class="rounded-lg overflow-hidden w-[18rem] bg-[url('/images/bg-kategori.jpg')] bg-cover bg-center py-4 flex flex-col items-center">
          <div class="bg-gradient-to-r from-sky-900/50 to-sky-900/0 h-16 w-[15rem] pl-4 flex items-center self-start">
            <p class=" text-white font-poppins font-semibold text-2xl">Mesin dan Alat <br /> <span
                class="text-pink-700 font-poppins font-semibold text-2xl">Pertanian</span> </p>
          </div>
          <div class="flex-1 flex items-center justify-center">
            <img src="/images/kategori/mesin.png" class=" w-[10rem] object-cover object-center " alt="">
          </div>
          <a
            class="w-[16rem] rounded-md text-center h-12 flex items-center justify-center text-white duration-200 text-lg font-roboto bg-sky-700 hover:bg-sky-400 cursor-pointer">
            Cek sekarang juga
          </a>
        </div>
        <div class="rounded-lg flex-1 overflow-hidden flex gap-x-4 justify-evenly">
          @php
            $number_row = 0;
          @endphp
          @foreach ($produk as $key => $value)
            @if ($value->id_kategori == 8 && $number_row <= 3)
              <x-cart-produk :city="$value->name" :produk="$value" />
              @php
                $number_row += 1;
              @endphp
            @endif
          @endforeach
        </div>
      </div>
      <hr class=" bg-neutral-400 h-[1px] my-4">
    </section>
  </main>
  <x-footer />
</body>

</html>
