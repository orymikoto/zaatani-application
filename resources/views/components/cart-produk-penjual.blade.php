<div class="h-full min-h-[20rem] shadow-md flex-1 rounded-md overflow-hidden bg-white flex flex-col">
  <img src="{{ $produk->foto_produk }}" class="w-full object-cover object-center h-[10rem]" alt="">
  <div class="flex flex-col p-4 flex-1 ">
    <p class="text-neutral-700 font-poppins line-clamp-2">{{ $produk->nama }}</p>
    <p class="text-neutral-800 font-poppins font-semibold line-clamp-2 flex-1">Rp {{ $produk->harga }} / {{ $produk->satuan }}</p>
    {{-- <p class="items-end flex-1 flex  font-poppins text-neutral-500 line-clamp-1">{{ $produk->penjual->kota }}</p> --}}
    <div class="flex rounded-lg justify-evenly items-center bg-neutral-200 py-1">
      <a class="hover:bg-neutral-100 duration-200" href="/mart/detail-produk/{{ $produk->id_produk }}"><img src="/icons/view.svg"
          class="w-6 h-6 object-contain object-center" alt=""></a>
      <a class="hover:bg-neutral-100 duration-200" href="/penjual/edit-produk/{{ $produk->id_produk }}"><img src="/icons/edit.svg"
          class="w-6 h-6 object-contain object-center" alt=""></a>
      <a class="hover:bg-neutral-100 duration-200" href="/penjual/hapus-produk/{{ $produk->id_produk }}"><img src="/icons/delete.svg"
          class="w-6 h-6 object-contain object-center" alt=""></a>
    </div>
  </div>
</div>
