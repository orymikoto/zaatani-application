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
  <x-flash-message url="/register" />
  <div class="w-[80%] h-[40rem] rounded-lg shadow-[7px_7px_21px_-14px_rgba(0,0,0,0.4)] bg-white flex overflow-hidden">

    {{-- FORM LOGIN --}}
    @if (empty(request()->get('role')))
      <div class=" min-w-[30rem] max-w-[30rem] flex flex-col items-center h-full justify-center">
        <div class="flex flex-col items-center gap-y-1">
          <h2 class="text-neutral-700 font-poppins font-medium text-lg">Pilih Jenis Akun</h2>
          <div class="flex rounded-full w-[21rem] overflow-hidden shadow-md shadow-black/80 bg-neutral-100">
            <a href="/register?role=pengguna"
              class="flex-1  duration-200 cursor-pointer font-poppins text-center font-medium text-lg py-1 {{ request()->get('role') == 'pengguna' ? 'text-white bg-rose-700' : 'text-rose-700 hover:text-white  hover:bg-rose-700' }} ">Pengguna</a>
            <a href="/register?role=penjual"
              class="flex-1  duration-200 cursor-pointer font-poppins text-center font-medium text-lg py-1 {{ request()->get('role') == 'penjual' ? 'text-white bg-teal-600' : 'hover:text-white text-teal-600 hover:bg-teal-600' }}">Penjual</a>
          </div>
        </div>
      </div>
    @else
      <div class=" min-w-[30rem] max-w-[36rem] flex flex-col items-center h-full justify-start overflow-y-scroll no-scrollbar">
        <h2 class="font-carterone text-sky-700 text-3xl mt-4">Zaatani Application</h2>
        <p class="font-lobster text-xs text-neutral-500 text-center w-[15rem]">Modernisasi segala proses pertanian guna
          menyejahterakan kehidupan petani</p>
        <h1 class="font-bebasneue text-neutral-800 text-3xl my-4">Register Page</h1>
        <div class="flex flex-col items-center gap-y-1">
          <h2 class="text-neutral-700 font-poppins font-medium text-lg">Pilih Jenis Akun</h2>
          <div class="flex rounded-full w-[21rem] overflow-hidden shadow-md shadow-black/80 bg-neutral-100">
            <a href="/register?role=pengguna"
              class="flex-1  duration-200 cursor-pointer font-poppins text-center font-medium text-lg py-1 {{ request()->get('role') == 'pengguna' ? 'text-white bg-rose-700' : 'text-rose-700 hover:text-white  hover:bg-rose-700' }} ">Pengguna</a>
            <a href="/register?role=penjual"
              class="flex-1  duration-200 cursor-pointer font-poppins text-center font-medium text-lg py-1 {{ request()->get('role') == 'penjual' ? 'text-white bg-teal-600' : 'hover:text-white text-teal-600 hover:bg-teal-600' }}">Penjual</a>
          </div>
        </div>
        <form action="/register?role={{ request()->get('role') }}" class="my-4 grid grid-cols-12 gap-2 mx-2" method="POST">
          @csrf
          <div class="col-span-6 flex flex-col items-start w-full">
            <p class="text-yellow-500 font-medium mx-2">Email</p>
            <input type="email" placeholder="user@mail.com" name="email" required oninput="this.setCustomValidity('')"
              class="outline-none text-neutral-600 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full  rounded-md py-1 px-2 focus:border-yellow-500">
          </div>
          <div class="col-span-6 flex flex-col items-start w-full">
            <p class="text-yellow-500 font-medium mx-2">Password</p>
            <input type="password" placeholder="password" name="password" required oninvalid="this.setCustomValidity('Semua data harus diisi')"
              autofocus="" oninput="this.setCustomValidity('')"
              class="outline-none text-neutral-600 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full rounded-md py-1 px-2 focus:border-yellow-500">
          </div>
          <div class="col-span-6 flex flex-col items-start w-full">
            <p class="text-yellow-500 font-medium mx-2">Nama</p>
            <input type="text" placeholder="Lintang Semesta" name="nama_lengkap" required oninput="this.setCustomValidity('')"
              class="outline-none text-neutral-600 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full  rounded-md py-1 px-2 focus:border-yellow-500">
          </div>
          @if (request()->get('role') == 'penjual')
            <div class="col-span-6 flex flex-col items-start w-full ">
              <p class="text-yellow-500 font-medium mx-2">Nomor Rekening</p>
              <input type="text" minlength="10" maxlength="16" placeholder="32xxxxxxx" name="nomor_rekening" required
                oninput="this.setCustomValidity('')"
                class="outline-none text-neutral-600 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full  rounded-md py-1 px-2 focus:border-yellow-500">
            </div>
          @endif
          <div class="col-span-6 flex flex-col items-start w-full">
            <p class="text-yellow-500 font-medium mx-2">Nomor Telepon</p>
            <input type="text" minlength="9" maxlength="13" placeholder="08xxxxxxx" name="telephone" required oninput="this.setCustomValidity('')"
              class="outline-none text-neutral-600 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full  rounded-md py-1 px-2 focus:border-yellow-500">
          </div>
          <div class="col-span-6 flex flex-col items-start w-full">
            <p class="text-yellow-500 font-medium mx-2">Jenis Kelamin</p>
            <select placeholder="Jenis Kelamin" name="jenis_kelamin" required oninput="this.setCustomValidity('')"
              class="outline-none w-full text-neutral-600 focus:ring-0 border-2 border-neutral-400 px-2 py-[0.375rem] text-lg rounded-md  focus:text-yellow-500 focus:border-yellow-500 duration-200 ">
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="col-span-6 flex flex-col items-start w-full">
            <p class="text-yellow-500 font-medium mx-2">Tanggal Lahir</p>
            <input type="date" placeholder="2001-01-01" name="tanggal" required oninput="this.setCustomValidity('')"
              class="outline-none text-neutral-600 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full  rounded-md py-1 px-2 focus:border-yellow-500">
          </div>
          <div class="col-span-6 flex flex-col items-start w-full">
            <p class="text-yellow-500 font-medium mx-2">Province</p>
            <select placeholder="Jenis Kelamin" name="jenis_kelamin" required oninput="this.setCustomValidity('')"
              class="outline-none w-full text-neutral-600 focus:ring-0 border-2 border-neutral-400 px-2 py-[0.375rem] text-lg rounded-md  focus:text-yellow-500 focus:border-yellow-500 duration-200 ">
              @foreach ($province as $key => $value)
                <option value="{{ $value->code }}">{{ $value->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-span-6 flex flex-col items-start w-full">
            <p class="text-yellow-500 font-medium mx-2">Kota</p>
            <select placeholder="Jenis Kelamin" name="jenis_kelamin" required oninput="this.setCustomValidity('')"
              class="outline-none w-full text-neutral-600 focus:ring-0 border-2 border-neutral-400 px-2 py-[0.375rem] text-lg rounded-md  focus:text-yellow-500 focus:border-yellow-500 duration-200 ">
              @foreach ($city as $key => $value)
                <option value="{{ $value->code }}">{{ $value->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-span-6 flex flex-col items-start w-full">
            <p class="text-yellow-500 font-medium mx-2">Alamat</p>
            <input type="text" placeholder="Perumahan xxx" name="alamat" required oninput="this.setCustomValidity('')"
              class="outline-none text-neutral-600 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full  rounded-md py-1 px-2 focus:border-yellow-500">
          </div>
          <div class="col-start-3 col-end-11 flex flex-col items-center">
            <button type="submit"
              class="w-[15rem] text-white hover:text-yellow-500 hover:bg-white bg-yellow-500 rounded-full font-poppins hover:shadow-md hover:shadow-black duration-200 py-1 cursor-pointer font-medium self-center my-2 text-lg">REGISTER</button>
            <div class="flex text-sm font-medium self-center">
              <p class="text-neutral-600">
                Already have account?
                <a href="/login" class="hover:text-teal-400 duration-200">Sign In</a>
              </p>
            </div>
          </div>
        </form>
      </div>
    @endif
    {{-- BACKGROUND --}}
    <div class="flex-1 bg-cover bg-center bg-[url('/images/auth-bg.jpg')]"></div>


  </div>


</body>

</html>
