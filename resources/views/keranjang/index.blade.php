<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zaatani</title>
  @vite('resources/js/app.js')

</head>

<body>
  <div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-4">Your Cart</h1>
    @if ($keranjangItems->isEmpty())
      <p class="text-gray-500">Your cart is empty.</p>
    @else
      <ul class="space-y-4">
        @foreach ($keranjangItems as $item)
          <li class="border rounded-md p-4">
            <h2 class="font-bold">{{ $item->produk->nama }}</h2>
            <p class="text-gray-500">Quantity: {{ $item->jumlah }}</p>
            <div class="flex justify-between items-center mt-4">
              <form action="{{ route('keranjang.increase', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                  Add Quantity
                </button>
              </form>
              <form action="{{ route('keranjang.decrease', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">
                  Decrease Quantity
                </button>
              </form>
            </div>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
</body>

</html>
