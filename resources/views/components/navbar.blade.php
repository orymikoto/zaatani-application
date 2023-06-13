<nav class="bg-sky-700 z-10 shadow-md w-full">
  <div class="container mx-auto px-4">
    <div class="flex gap-2 items-center justify-between h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="/" class="text-neutral-800 text-lg font-semibold">Your Logo</a>
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

      {{-- @if (auth('login')->check()) --}}
      <div class="flex items-center gap-2">
        <div class="flex items-center gap-1 cursor-pointer rounded-md py-1 pl-1 pr-4 hover:bg-white/50 duration-200">
          <div class="bg-center bg-cover rounded-full w-8 h-8 bg-neutral-300"></div>
          <p class="text-white font-poppins text-sm">Lintang Semesta</p>
        </div>
        <img src="/icons/log-out.svg" class="w-10 h-10 rounded-full hover:bg-white/50 cursor-pointer duration-200 p-2" alt="log out">
      </div>
      {{-- @else --}}
      {{-- <div class=""></div> --}}
      {{-- @endif --}}
    </div>
  </div>
</nav>
