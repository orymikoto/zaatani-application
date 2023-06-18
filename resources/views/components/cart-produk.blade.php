<a href="/mart/detail-produk/{{ $produk->id_produk }}" class="h-full flex-1 rounded-md overflow-hidden bg-white flex flex-col">
  <img src="{{ $produk->foto_produk }}" class="w-full object-cover object-center h-[10rem]" alt="">
  <div class="flex flex-col p-4 flex-1 ">
    <p class="text-neutral-700 font-poppins line-clamp-2">{{ $produk->nama }}</p>
    <p class="text-neutral-800 font-poppins font-semibold line-clamp-2">Rp {{ $produk->harga }} / {{ $produk->satuan }}</p>
    <p class="items-end flex-1 flex  font-poppins text-neutral-500 line-clamp-1">{{ $produk->penjual->kota }}</p>
  </div>
</a>
