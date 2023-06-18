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

      // Navigation arrows

      // And if we need scrollbar
    });
  </script>
</head>

<body class="antialiased flex flex-col items-center relative min-h-screen bg-neutral-50">
  <x-navbar />
  <main class="flex flex-col min-w-[1280px] w-[90%]">
    {{--  --}}
    <h1 class="font-comfortaa my-4 text-5xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-tr to-sky-400 from-pink-600">ZAATANI
      MART</h1>
    <section class="flex w-full">
      <div class="swiper mySwiper w-[1280px] h-[300px] mb-8">
        <div class="swiper-wrapper">
          <div class="swiper-slide w-[1280px] overflow-hidden px-2 grid grid-cols-3 gap-4 rounded-lg">
            <img src="/images/mart/head1.jpg" class=" h-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head2.jpg" class=" h-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head3.jpg" class=" h-full rounded-md object-cover object-center" alt="">
          </div>
          <div class="swiper-slide w-[1280px] overflow-hidden px-2 grid grid-cols-3 gap-4 rounded-lg">
            <img src="/images/mart/head4.jpg" class=" h-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head5.jpg" class=" h-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head6.jpg" class=" h-full rounded-md object-cover object-center" alt="">
          </div>
          <div class="swiper-slide w-[1280px] overflow-hidden px-2 grid grid-cols-3 gap-4 rounded-lg">
            <img src="/images/mart/head7.jpg" class=" h-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head8.jpg" class=" h-full rounded-md object-cover object-center" alt="">
            <img src="/images/mart/head9.jpg" class=" h-full rounded-md object-cover object-center" alt="">
          </div>
        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> --}}
      </div>
    </section>
  </main>
  <x-footer />
</body>

</html>
