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
  <x-flash-message url="/login" />
  <div class="w-[80%] h-[40rem] rounded-lg shadow-[7px_7px_21px_-14px_rgba(0,0,0,0.4)] bg-white flex overflow-hidden">

    {{-- FORM LOGIN --}}
    <div class=" min-w-[30rem] max-w-[30rem] flex flex-col items-center h-full justify-center">
      <h2 class="font-carterone text-sky-700 text-3xl">Zaatani Application</h2>
      <p class="font-lobster text-xs text-neutral-500 text-center w-[15rem]">Modernisasi segala proses pertanian guna
        menyejahterakan kehidupan petani</p>
      <h1 class="font-bebasneue text-neutral-800 text-3xl my-4">Login Page</h1>
      <div class="flex flex-col items-center gap-y-1">
        <h2 class="text-neutral-700 font-poppins font-medium text-lg">Pilih Jenis Akun</h2>
        <div class="flex rounded-full w-[21rem] overflow-hidden shadow-md shadow-black/80 bg-neutral-100">
          <a href="/login?role=pengguna"
            class="flex-1  duration-200 cursor-pointer font-poppins text-center font-medium text-lg py-1 {{ request()->get('role') == 'pengguna' ? 'text-white bg-rose-700' : 'text-rose-700 hover:text-white  hover:bg-rose-700' }} ">Pengguna</a>
          <a href="/login?role=penjual"
            class="flex-1  duration-200 cursor-pointer font-poppins text-center font-medium text-lg py-1 {{ request()->get('role') == 'penjual' ? 'text-white bg-teal-600' : 'hover:text-white text-teal-600 hover:bg-teal-600' }}">Penjual</a>
          <a href="/login?role=admin"
            class="flex-1  duration-200 cursor-pointer font-poppins text-center font-medium text-lg py-1 {{ request()->get('role') == 'admin' ? 'text-white bg-amber-400' : 'text-amber-400 hover:text-white  hover:bg-amber-400' }}">Admin</a>
        </div>
      </div>
      <form action="/login?role={{ request()->get('role') }}" class="my-4 flex flex-col" method="POST">
        @csrf

        <div class="flex flex-col items-start w-[20rem]">
          <p class="text-yellow-500 font-medium mx-2">Email</p>
          <input type="email" placeholder="user@mail.com" name="email" required oninput="this.setCustomValidity('')"
            class="outline-none text-neutral-400 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full  rounded-md py-1 px-2 focus:border-yellow-500">
        </div>
        <div class="flex flex-col items-start w-[20rem]">
          <p class="text-yellow-500 font-medium mx-2">Password</p>
          <input type="password" placeholder="password" name="password" required oninvalid="this.setCustomValidity('Semua data harus diisi')"
            autofocus="" oninput="this.setCustomValidity('')"
            class="outline-none text-neutral-400 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full rounded-md py-1 px-2 focus:border-yellow-500">
        </div>
        <button type="submit"
          class="w-[15rem] text-white hover:text-yellow-500 hover:bg-white bg-yellow-500 rounded-full font-poppins hover:shadow-md hover:shadow-black duration-200 py-1 cursor-pointer font-medium self-center my-2 text-lg">LOGIN</button>
        <div class="flex text-sm font-medium self-center">
          <p class="text-neutral-600">
            Doesn't have account?
            <a href="/register" class="hover:text-teal-400 duration-200">Sign Up</a>
          </p>
        </div>
      </form>
    </div>
    {{-- BACKGROUND --}}
    <div class="flex-1 bg-cover bg-center bg-[url('/images/auth-bg.jpg')]"></div>


  </div>


</body>

</html>
