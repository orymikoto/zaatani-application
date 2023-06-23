<nav class="bg-sky-700 z-10 shadow-md w-full">
  <div class="mx-auto container">
    <div class="flex gap-2 items-center justify-between h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="/" class="text-neutral-800 text-lg font-semibold"><img src="/logo.png" class="w-16 h-16 object-cover" alt=""></a>
      </div>

      <!-- Menu -->
      <div class="hidden md:flex font-poppins flex-1">
        <ul class="flex items-start space-x-4">
          <li>
            <a href="#" class="text-white hover:text-pink-600 hover:bg-white/50 duration-200 px-3 py-2 rounded-md">Home</a>
          </li>
          <li>
            <a href="#" class="text-white hover:text-pink-600 hover:bg-white/50 duration-200 px-3 py-2 rounded-md">About</a>
          </li>
          <li>
            <a href="#" class="text-white hover:text-pink-600 hover:bg-white/50 duration-200 px-3 py-2 rounded-md">Services</a>
          </li>
          <li>
            <a href="#" class="text-white hover:text-pink-600 hover:bg-white/50 duration-200 px-3 py-2 rounded-md">Contact</a>
          </li>
        </ul>
      </div>
      @if (auth('penjual')->check())
        <a href="/penjual/daftar-produk/{{ auth('penjual')->id() }}"
          class="bg-rose-600 rounded-full text-center text-white font-poppins hover:text-red-500 hover:bg-white duration-200 py-1 px-2">Lapak
          Penjual</a>
      @endif

      {{-- @if (auth('login')->check()) --}}
      <div class="flex items-center gap-2">
        @if (auth('admin')->check() || auth('penjual')->check() || auth('pengguna')->check())
          <a href="/profile" class="flex items-center gap-1 cursor-pointer rounded-md py-1 pl-1 pr-4 hover:bg-white/50 duration-200">
            <div class="bg-center bg-cover rounded-full w-8 h-8 overflow-hidden">
              <img
                src="{{ auth('admin')->check() ? auth('admin')->user()->foto_profil : '' }}
              {{ auth('pengguna')->check() ? auth('pengguna')->user()->foto_profil : '' }}
              {{ auth('penjual')->check() ? auth('penjual')->user()->foto_profil : '' }}"
                class="w-full h-full object-cover object-center" alt="">
            </div>
            <p class="text-white font-poppins text-sm">
              {{ auth('admin')->check() ? auth('admin')->user()->nama : '' }}
              {{ auth('pengguna')->check() ? auth('pengguna')->user()->nama_lengkap : '' }}
              {{ auth('penjual')->check() ? auth('penjual')->user()->nama_lengkap : '' }}
            </p>
          </a>
          <a href="/logout">
            <img src="/icons/log-out.svg" class="w-10 h-10 rounded-full hover:bg-white/50 cursor-pointer duration-200 p-2" alt="log out">
          </a>
        @else
          <a href="/login"
            class="w-[7rem] py-1 rounded-full text-white bg-emerald-500 flex items-center justify-center font-poppins font-medium text-lg hover:text-emerald-500 hover:bg-white hover:shadow-md hover:shadow-emerald-500/75 duration-200 cursor-pointer ">Login</a>
          <a href="/register"
            class="w-[7rem] py-1 rounded-full text-white bg-yellow-500 flex items-center justify-center font-poppins font-medium text-lg hover:text-yellow-500 hover:bg-white hover:shadow-md hover:shadow-yellow-500/75 duration-200 cursor-pointer ">Register</a>
        @endif

      </div>
      {{-- @else --}}
      {{-- <div class=""></div> --}}
      {{-- @endif --}}
    </div>
  </div>
</nav>
