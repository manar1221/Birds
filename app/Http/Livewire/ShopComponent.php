<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.shop-component',['products'=>$products,'categories'=>$categories]);
    }
}
