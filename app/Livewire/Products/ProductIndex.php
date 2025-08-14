<?php

namespace App\Livewire\Products;

use App\Models\Products;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Products::all();
        return view('livewire.products.product-index', compact('products'));
    }

    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();

        session()->flash("success", "Product Deleted.");
    }
}
