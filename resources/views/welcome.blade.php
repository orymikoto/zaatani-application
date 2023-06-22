<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
      centeredSlides: true,
      slidesPerView: 'auto',
      effect: 'flip',
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  </script>
</head>

<body class="antialiased flex flex-col items-center relative min-h-screen bg-neutral-50">
  <x-navbar />
  <x-flash-message url="/" />
  <main class="flex flex-col py-4 min-w-[1280px] w-[90%]">
    {{-- Heading Zaatani --}}
    <section class="w-full flex min-h-[20rem] items-center ">
      <div class="flex flex-col items-start w-[70%] gap-4">
        <h1 class="font-comfortaa font-bold text-neutral-700 text-4xl"> <span
            class="text-transparent bg-clip-text bg-gradient-to-tr to-sky-500 from-pink-600">
            Website Zaatani </span> Memudahakan Petani Dalam Memenuhi Kebutuhan Pertanian</h1>
        <p class="text-xl font-poppins text-neutral-700">Membangun dan memajukan pertanian dengan digitalisasi dan transparansi di setiap prosesnya.
          Menjadi mitra bagi petani dalam mendukung segala proses pertanian
          Menjadi mitra bagi para penjual dan petani guna meningkatkan kinerja rantai pasok di dunia pertanian.
          Berkolaborasi dengan badan usaha pangan guna meningkatkan ketahanan pangan nasional.
          Memberikan dampak sosial yang positif dan membangun bagi pertanian di Indonesia.</p>
      </div>
      <div class="min-w-[30%] min-h-[20rem] bg-[url('/images/harvestmoon.png')] bg-center bg-contain bg-no-repeat">
      </div>
    </section>

    <section class="flex w-full justify-center items-center gap-4 my-4">
      <a href="/mart"
        class="flex items-center gap-4 px-4 w-[32rem] bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-lg h-[8rem] hover:shadow-md hover:shadow-emerald-400/75 duration-200 cursor-pointer">
        <img src="/icons/cart.svg" class="w-16 h-16 p-2 rounded-md bg-white  " alt="">
        <div class="flex flex-col flex-1">
          <p class="text-white font-poppins font-medium text-xl">Zaatani Mart</p>
          <p class="text-white font-poppins ">Mari Mulai Belanja!</p>
        </div>
        <img src="/icons/right-arrow.svg" class="w-12 h-12" alt="">
      </a>
      {{-- <a href="/pelatihan"
        class="flex items-center gap-4 px-4 w-[32rem] bg-gradient-to-br from-sky-400 to-sky-600 rounded-lg h-[8rem] hover:shadow-md hover:shadow-sky-400/75 duration-200 cursor-pointer">
        <img src="/icons/class.svg" class="w-16 h-16 p-2 rounded-md bg-white  " alt="">
        <div class="flex flex-col flex-1">
          <p class="text-white font-poppins font-medium text-xl">Zaatani Class</p>
          <p class="text-white font-poppins ">Mari Belajar Modern dalam Bertani!</p>
        </div>
        <img src="/icons/right-arrow.svg" class="w-12 h-12" alt="">
      </a> --}}
    </section>

    <section class="flex w-full">
      <div class="swiper mySwiper w-full h-[540px] py-8 px-12 ">
        <div class="swiper-wrapper">
          <div class="swiper-slide flex flex-col bg-sky-700/25 rounded-xl">
            <h2 class="font-bebasneue text-center text-3xl text-sky-700 my-2">Testimoni</h2>
            <div class="flex mx-4 gap-4">
              <div class="flex-1 bg-white rounded-md shadow-md flex flex-col items-center p-4 h-[400px]">
                <img src="/icons/double-quotes.svg" class="w-16 h-16 p-2 rounded-full object-center" alt="">
                <div class="flex-1 flex items-center justify-center">
                  <p class="italic font-poppins text-sm text-center text-neutral-600"> Lorem ipsum
                    dolor, sit amet
                    consectetur adipisicing
                    elit.
                    Mollitia
                    libero quae molestiae sapiente rem. Maiores perspiciatis quas vero rerum non!</p>

                </div>
                <p class="font-poppins font-semibold text-neutral-800 text-xl mt-8">LINTANG SEMESTA</p>
                <p class="font-poppins font-semibold text-neutral-400 text-lg">SINAR GALAXY MILKYWAY</p>
              </div>
              <div class="flex-1 bg-white rounded-md shadow-md flex flex-col items-center p-4 h-[400px]">
                <img src="/icons/double-quotes.svg" class="w-16 h-16 p-2 rounded-full object-center" alt="">
                <div class="flex-1 flex items-center justify-center">
                  <p class="italic font-poppins text-sm text-center text-neutral-600">Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Sit provident, voluptates vitae, facilis earum deserunt dolore odit
                    neque repellat distinctio aperiam ut quibusdam. Consequatur hic est magnam doloribus velit officiis
                    mollitia, ratione dicta consequuntur culpa.</p>

                </div>
                <p class="font-poppins font-semibold text-neutral-800 text-xl mt-8">AMBA</p>
                <p class="font-poppins font-semibold text-neutral-400 text-lg">CEO FERO CORP</p>
              </div>
              <div class="flex-1 bg-white rounded-md shadow-md flex flex-col items-center p-4 h-[400px]">
                <img src="/icons/double-quotes.svg" class="w-16 h-16 p-2 rounded-full object-center" alt="">
                <div class="flex-1 flex items-center justify-center">
                  <p class="italic font-poppins text-sm text-center text-neutral-600"> Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Minima, officiis.</p>

                </div>
                <p class="font-poppins font-semibold text-neutral-800 text-xl mt-8 text-center">JUPITER</p>
                <p class="font-poppins font-semibold text-neutral-400 text-lg text-center">PLANET TATA SURYA</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide flex flex-col bg-sky-700/25 rounded-xl">
            <h2 class="font-bebasneue text-center text-3xl text-sky-700 my-2">Testimoni</h2>
            <div class="flex mx-4 gap-4">
              <div class="flex-1 bg-white rounded-md shadow-md flex flex-col items-center p-4 h-[400px]">
                <img src="/icons/double-quotes.svg" class="w-16 h-16 p-2 rounded-full object-center" alt="">
                <div class="flex-1 flex items-center justify-center">
                  <p class="italic font-poppins text-sm text-center text-neutral-600">Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Sit provident, voluptates vitae, facilis earum deserunt dolore odit
                    neque repellat distinctio aperiam ut quibusdam. Consequatur hic est magnam doloribus velit officiis
                    mollitia, ratione dicta consequuntur culpa.</p>

                </div>
                <p class="font-poppins font-semibold text-neutral-800 text-xl mt-8">AMBA</p>
                <p class="font-poppins font-semibold text-neutral-400 text-lg">CEO FERO CORP</p>
              </div>
              <div class="flex-1 bg-white rounded-md shadow-md flex flex-col items-center p-4 h-[400px]">
                <img src="/icons/double-quotes.svg" class="w-16 h-16 p-2 rounded-full object-center" alt="">
                <div class="flex-1 flex items-center justify-center">
                  <p class="italic font-poppins text-sm text-center text-neutral-600"> Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Minima, officiis.</p>

                </div>
                <p class="font-poppins font-semibold text-neutral-800 text-xl mt-8 text-center">JUPITER</p>
                <p class="font-poppins font-semibold text-neutral-400 text-lg text-center">PLANET TATA SURYA</p>
              </div>

              <div class="flex-1 bg-white rounded-md shadow-md flex flex-col items-center p-4 h-[400px]">
                <img src="/icons/double-quotes.svg" class="w-16 h-16 p-2 rounded-full object-center" alt="">
                <div class="flex-1 flex items-center justify-center">
                  <p class="italic font-poppins text-sm text-center text-neutral-600"> Lorem ipsum
                    dolor, sit amet
                    consectetur adipisicing
                    elit.
                    Mollitia
                    libero quae molestiae sapiente rem. Maiores perspiciatis quas vero rerum non!</p>
                </div>
                <p class="font-poppins font-semibold text-neutral-800 text-xl mt-8">LINTANG SEMESTA</p>
                <p class="font-poppins font-semibold text-neutral-400 text-lg">SINAR GALAXY MILKYWAY</p>
              </div>

            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>


  </main>
  <x-footer />
</body>

</html>
