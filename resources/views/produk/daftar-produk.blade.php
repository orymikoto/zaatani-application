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
  <main class="flex flex-col min-w-[1280px] w-[90%]">
    {{--  --}}
    <section class="flex w-full">
      <div class="swiper mySwiper w-full h-[450px] py-8 px-12 ">
        <div class="swiper-wrapper">
          <div class="swiper-slide flex bg-sky-700/25 rounded-lg">
            <div class=""></div>
          </div>
          <div class="swiper-slide flex flex-col bg-sky-700/25 rounded-lg">

          </div>
          <div class="swiper-slide flex flex-col bg-sky-700/25 rounded-lg">

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
