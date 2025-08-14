<?php

namespace App\Livewire\Products;

use App\Models\Products;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProductEdit extends Component
{

    public $product, $name, $details;

    public function mount($id)
    {
        $this->product = Products::findOrFail($id);
        $this->name = $this->product->name;
        $this->details = $this->product->details;
    }

    public function render()
    {
        return view('livewire.products.product-edit');
    }

    public function submit()
    {
        $this->validate([
            "name" => "required",
            "details" => "required",
        ]);


        $this->product->name = $this->name;
        $this->product->details = $this->details;

        $this->product->save();

        return to_route("product.index")->with("Success", "Product Updated");
    }


}
