<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Zaatani</title>
  @vite('resources/js/app.js')
</head>

<body class="antialiased flex flex-col items-center relative min-h-screen bg-neutral-50">
  <x-navbar />

  <div class="flex py-4 min-w-[1280px] w-[90%]  ">
    <div class="w-full flex min-h-[20rem] items-center">
      <div class="flex flex-col items-start w-[70%] gap-4">
        <h1 class="font-comfortaa font-bold text-neutral-700 text-4xl"> <span
            class="text-transparent bg-clip-text bg-gradient-to-tr to-sky-500 from-pink-600">
            Website Zaatani </span> Modernisasi segala
          proses pertanian guna menyejahterakan kehidupan petani</h1>
        <p class="text-xl font-poppins text-neutral-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sapiente eveniet
          assumenda reiciendis harum itaque? Expedita, omnis? Quae facilis voluptatum dolores, accusamus odio commodi necessitatibus doloremque
          repellendus qui recusandae sunt harum perspiciatis possimus atque.</p>
      </div>
      <div class="min-w-[30%] min-h-[20rem] bg-[url('/images/harvestmoon.png')] bg-center bg-contain bg-no-repeat"></div>
    </div>
  </div>

</body>

</html>
