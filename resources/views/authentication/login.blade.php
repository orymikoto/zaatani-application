<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zaatani</title>
  @vite('resources/js/app.js')

</head>

<body class="w-full flex flex-col items-center justify-center relative min-h-screen bg-neutral-200">
  <div class="w-[80%] h-[40rem] rounded-lg shadow-[7px_7px_21px_-14px_rgba(0,0,0,0.4)] bg-white flex">

    {{-- FORM LOGIN --}}
    <div class=" min-w-[21rem] max-w-[21rem] flex flex-col items-center h-full">
      <h2 class="font-carterone text-sky-700 text-3xl">Zaatani Application</h2>
      <p class="font-lobster text-xs text-neutral-500 text-center w-[10rem]">Modernisasi segala proses pertanian guna menyejahterakan kehidupan petani</p>
    </div>
    {{-- BACKGROUND --}}
    <div class="flex-1 bg-cover bg-center bg-[url('/images/auth-bg.jpg')]"></div>


  </div>


</body>

</html>
