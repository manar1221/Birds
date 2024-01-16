<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(6);
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.home-component',['lproducts'=>$lproducts,'categories'=>$categories]);
    }
}
