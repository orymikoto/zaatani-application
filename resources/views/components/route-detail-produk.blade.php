<div class="flex items-center gap-2">
  <a href="/" class="font-poppins text-sky-700">Zaatani</a>
  <img src="/icons/route.svg" class="w-4 h-4" alt="">
  <a href="/mart" class="font-poppins text-sky-700">Mart</a>
  <img src="/icons/route.svg" class="w-4 h-4" alt="">
  <a href="/mart/kategori-produk/{{ $produk->id_kategori }}" class="font-poppins text-sky-700">{{ $produk->kategoriProduk->nama_kategori }}</a>
  <img src="/icons/route.svg" class="w-4 h-4" alt="">
  <p class="font-poppins text-neutral-400">{{ $produk->nama }}</p>
</div>
