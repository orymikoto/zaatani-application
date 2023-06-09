<?php

namespace App\Http\Livewire;

use App\Models\KeranjangPengguna;
use Livewire\Component;

class KeranjangPenggunaLivewire extends Component
{
  public $items = [];

  public function mount()
  {
    // Initialize cart items
    $this->items = [
      [
        'name' => 'Product 1',
        'quantity' => 1,
      ],
      [
        'name' => 'Product 2',
        'quantity' => 3,
      ],
      // Add more items as needed
    ];
  }

  public function increaseQuantity($index)
  {
    $this->items[$index]['quantity']++;
  }

  public function decreaseQuantity($index)
  {
    if ($this->items[$index]['quantity'] > 1) {
      $this->items[$index]['quantity']--;
    }
  }

  public function render()
  {
    return view('livewire.cart');
  }
}
