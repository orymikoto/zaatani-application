<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zaatani</title>
  @vite('resources/js/app.js')

</head>

<body class="w-full flex flex-col items-center justify-between relative min-h-screen bg-neutral-200">
  <x-navbar />
  <main class="min-w-[1280px] w-full flex flex-col items-center flex-1">
    <h1 class="font-righteous text-sky-700 text-3xl my-4">Profile</h1>
    {{-- <img src="{{ $detailUser->foto_profil }}" alt="Profile Picture" class="w-32 h-32 object-cover object-center rounded-full mb-4">
    <div>
      <input type="file" id="profile_picture" name="profile_picture" class="mb-2">
      @error('profile_picture')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
    </div>
    <div>
      <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update Profile Picture</button>
    </div> --}}
    <form action="/profile/edit" method="POST" enctype="multipart/form-data"
      class="relative grid grid-cols-12 p-4 gap-2 w-[50rem] bg-white rounded-lg shadow-md shadow-black/50">
      @csrf
      <div class="mx-auto w-64 text-center col-span-full ">
        <div class="relative w-64 h-64">
          <img class="w-64 h-64 rounded-full object-cover object-center absolute" src="{{ $detailUser->foto_profil }}" alt="" />
        </div>
      </div>
      @if (request()->get('edit') == 'true')
        <label class="col-span-full flex mx-auto items-center justify-center">
          <span class="sr-only">Choose profile photo</span>
          <input type="file" name="foto_profil" onchange="loadFile(event)"
            class="block w-full text-sm text-slate-500
          file:mr-4 file:py-2 file:px-4
          file:rounded-full file:border-0
          file:text-sm file:font-semibold
          file:bg-violet-50 file:text-violet-700
          hover:file:bg-violet-100
        " />
        </label>
      @endif

      @if (request()->get('edit') == 'true')
        <a href="/profile"
          class="bg-red-400/50 text-center absolute right-4 top-4 rounded-full px-4 py-1 text-white cursor-pointer hover:bg-red-500 duration-200">
          cancel
        </a>
      @endif
      <div class="col-start-4 col-end-10 bg-yellow-500/80  rounded-lg py-2 text-white text-center font-righteous text-2xl">
        <p>{{ request()->get('edit') == 'true' ? 'Edit' : 'Detail' }} User</p>
      </div>
      <div class="col-span-6 py-1 flex flex-col text-neutral-500 font-medium font-roboto">
        <p class="text-neutral-700 mx-2">NAMA</p>
        <input type="text" name="nama_lengkap" required oninvalid="this.setCustomValidity('Semua data harus diisi')"
          oninput="this.setCustomValidity('')" {{ request()->get('edit') != 'true' ? 'disabled' : null }}
          class="outline-none focus:ring-0 border-2 border-neutral-400 px-2 py-1 text-lg rounded-md bg-neutral-200/50 focus:text-yellow-500 focus:border-yellow-500 duration-200 focus:bg-yellow-100/25"
          value="{{ $detailUser->nama_lengkap }}">
      </div>
      <div class="col-span-6 py-1 flex flex-col text-neutral-500 font-medium font-roboto">
        <p class="text-neutral-700 mx-2">EMAIL</p>
        <input type="email" name="email" {{ request()->get('edit') != 'true' ? 'disabled' : null }}
          class="outline-none focus:ring-0 border-2 border-neutral-400 px-2 py-1 text-lg rounded-md bg-neutral-200/50 focus:text-yellow-500 focus:border-yellow-500 duration-200 focus:bg-yellow-100/25"
          value="{{ $detailUser->email }}">
      </div>
      <div class="col-span-6 py-1 flex flex-col text-neutral-500 font-medium font-roboto">
        <p class="text-neutral-700 mx-2">NOMOR TELEPON</p>
        <input type="text" name="nomor_telepon" minlength="9" maxlength="13" required {{ request()->get('edit') != 'true' ? 'disabled' : null }}
          class="outline-none focus:ring-0 border-2 border-neutral-400 px-2 py-1 text-lg rounded-md bg-neutral-200/50 focus:text-yellow-500 focus:border-yellow-500 duration-200 focus:bg-yellow-100/25"
          value="{{ !empty($detailUser->nomor_telepon) ? $detailUser->nomor_telepon : null }}">
      </div>
      @if (auth('penjual')->check())
        <div class="col-span-6 py-1 flex flex-col text-neutral-500 font-medium font-roboto">
          <p class="text-neutral-700 mx-2">NOMOR REKENING</p>
          <input type="text" name="nomor_rekening" minlength="10" maxlength="16" required
            {{ request()->get('edit') != 'true' ? 'disabled' : null }}
            class="outline-none focus:ring-0 border-2 border-neutral-400 px-2 py-1 text-lg rounded-md bg-neutral-200/50 focus:text-yellow-500 focus:border-yellow-500 duration-200 focus:bg-yellow-100/25"
            value="{{ !empty($detailUser->nomor_rekening) ? $detailUser->no_rekening : null }}">
        </div>
      @endif
      <div class="col-span-6 py-1 flex flex-col text-neutral-500 font-medium font-roboto">
        <p class="text-neutral-700 mx-2">TANGGAL LAHIR</p>
        <input type="date" name="tanggal_lahir" minlength="9" maxlength="13" required {{ request()->get('edit') != 'true' ? 'disabled' : null }}
          class="outline-none focus:ring-0 border-2 border-neutral-400 px-2 py-1 text-lg rounded-md bg-neutral-200/50 focus:text-yellow-500 focus:border-yellow-500 duration-200 focus:bg-yellow-100/25"
          value="{{ !empty($detailUser->tanggal_lahir) ? $detailUser->tanggal_lahir : null }}">
      </div>
      <div class="col-span-6 py-1 flex flex-col text-neutral-500 font-medium font-roboto">
        <p class="text-neutral-700 mx-2">Jenis Kelamin</p>
        <select {{ request()->get('edit') != 'true' ? 'disabled' : null }} placeholder="Jenis Kelamin" name="jenis_kelamin" required
          oninput="this.setCustomValidity('')"
          class="outline-none focus:ring-0 border-2 border-neutral-400 px-2 py-[6px] text-lg rounded-md bg-neutral-200/50 focus:text-yellow-500 focus:border-yellow-500 duration-200 focus:bg-yellow-100/25">
          <option value="Laki-laki" {{ $detailUser->jenis_kelamin = 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
          <option value="Perempuan" {{ $detailUser->jenis_kelamin = 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
      </div>


      <div class="col-span-6 py-1 flex flex-col text-neutral-500 font-medium font-roboto">
        <p class="text-neutral-700 mx-2">PROVINSI</p>
        <select type="text" name="provinsi"
          class="outline-none focus:ring-0 border-2 border-neutral-400 px-2 py-[6px] text-lg rounded-md bg-neutral-200/50 focus:text-yellow-500 focus:border-yellow-500 duration-200 focus:bg-yellow-100/25"
          {{ request()->get('edit') != 'true' ? 'disabled' : '' }}>
          @foreach ($province as $key => $value)
            <option value="{{ $value->code }}" {{ $value->code == $detailUser->provinsi ? 'selected' : '' }}>
              {{ $value->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-span-6 py-1 flex flex-col text-neutral-500 font-medium font-roboto">
        <p class="text-neutral-700 mx-2">KOTA</p>
        <select type="text" name="kota"
          class="outline-none focus:ring-0 border-2 border-neutral-400 px-2 py-[6px] text-lg rounded-md bg-neutral-200/50 focus:text-yellow-500 focus:border-yellow-500 duration-200 focus:bg-yellow-100/25"
          {{ request()->get('edit') != 'true' ? 'disabled' : '' }}>
          @foreach ($city as $key => $value)
            <option value="{{ $value->code }}" {{ $value->code == $detailUser->kota ? 'selected' : '' }}>
              {{ $value->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-span-6 py-1 flex flex-col text-neutral-500 font-medium font-roboto">
        <p class="text-neutral-700 mx-2">ALAMAT RUMAH</p>
        <input type="text" name="alamat" required oninvalid="this.setCustomValidity('Semua data harus diisi')"
          oninput="this.setCustomValidity('')"
          class="outline-none focus:ring-0 border-2 border-neutral-400 px-2 py-1 text-lg rounded-md bg-neutral-200/50 focus:text-yellow-500 focus:border-yellow-500 duration-200 focus:bg-yellow-100/25"
          {{ request()->get('edit') != 'true' ? 'disabled' : null }} value="{{ !empty($detailUser->alamat) ? $detailUser->alamat : null }}">
      </div>

      @if (request()->get('edit') == 'true')
        <button type="submit"
          class="col-start-4 col-end-10 text-center  py-2 my-2 font-roboto font-medium text-white bg-rose-700 rounded-full hover:text-rose-700 hover:bg-white hover:shadow-md hover:shadow-rose-700/50 cursor-pointer duration-200">
          <p>UPDATE PROFILE</p>
        </button>
      @else
        <a href="/profile?edit=true{{ !empty($detailUser->kota) ? '&kota=' . $detailUser->kota : '' }}{{ !empty($detailUser->kecamatan) ? '&kecamatan=' . $detailUser->kecamatan : '' }}"
          class="col-start-4 col-end-10 text-center  py-2 my-2 font-roboto font-medium text-white bg-rose-700 rounded-full hover:text-rose-700 hover:bg-white hover:shadow-md hover:shadow-rose-700/50 cursor-pointer duration-200">
          <p>EDIT PROFILE</p>
        </a>
      @endif
    </form>
  </main>
  <div class="flex flex-col min-w-[1280px] w-[90%]">
  </div>
  <x-footer />
</body>

</html>
