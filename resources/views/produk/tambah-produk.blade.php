<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zaatani</title>
  @vite('resources/js/app.js')


</head>

<body class="antialiased flex flex-col items-center relative min-h-screen justify-between bg-neutral-100">
  <x-navbar />
  <x-flash-message url="/penjual/tambah-produk" />
  <div class="container mx-auto">
    <h1 class="text-3xl font-righteous mb-4 text-center">Add Produk</h1>
    <form action="/penjual/tambah-produk" class="flex flex-col w-[40rem] mx-auto" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-4">
        <label for="nama" class="block text-gray-700 font-bold mb-2">Nama:</label>
        <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border border-gray-300 rounded" required>
      </div>

      <div class="mb-4">
        <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" class="w-full px-4 py-2 border border-gray-300 rounded" required></textarea>
      </div>

      <div class="mb-4">
        <label for="harga" class="block text-gray-700 font-bold mb-2">Harga:</label>
        <input type="number" id="harga" name="harga" class="w-full px-4 py-2 border border-gray-300 rounded" required>
      </div>

      <div class="mb-4">
        <label for="satuan" class="block text-gray-700 font-bold mb-2">Satuan:</label>
        <input type="text" id="satuan" name="satuan" class="w-full px-4 py-2 border border-gray-300 rounded" required>
      </div>

      <div class="mb-4">
        <label for="foto_produk" class="block text-gray-700 font-bold mb-2">Foto Produk:</label>
        <input type="file" id="foto_produk" name="foto_produk" class="w-full px-4 py-2 border border-gray-300 rounded" required>
      </div>

      <div class="mb-4">
        <label for="id_kategori" class="block text-gray-700 font-bold mb-2">Kategori:</label>
        <select type="number" id="id_kategori" name="id_kategori" class="w-full px-4 py-2 border border-gray-300 rounded" required>
          @foreach ($kategori as $kategori)
            <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
          @endforeach
        </select>
      </div>

      <div class="self-center mb-4">
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded ">Add Produk</button>
      </div>
    </form>
  </div>
  <x-footer />
</body>

</html>
