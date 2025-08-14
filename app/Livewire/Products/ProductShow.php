<?php

namespace App\Livewire\Products;

use App\Models\Products;
use Livewire\Component;

class ProductShow extends Component
{

    public $product;

    public function mount($id)
    {
        $this->product = Products::find($id);
    }

    public function render()
    {
        return view('livewire.products.product-show');
    }

}
