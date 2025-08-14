<?php

namespace App\Livewire\Products;

use App\Models\Products;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProductCreate extends Component
{

    public $name, $details;

    public function render()
    {
        return view('livewire.products.product-create');
    }

    public function submit()
    {
        // dd($this->all());
        $this->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        Products::create([
            'name' => $this->name,
            'details' => $this->details,
        ]);

        return to_route('product.index')->with('success', 'Product Create.');
    }
}
