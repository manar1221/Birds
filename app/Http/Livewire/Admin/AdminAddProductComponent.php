<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $phone;
    public $price;
    public $quantity;
    public $image;
    public $category_id;
    public $description;

    public function addProduct()
    {
        $this->validate([
            'name'=>'required',
            'phone'=>'required',
            'price' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);
        $product = new Product();
        $product->name =$this->name ;
        $product->phone =$this->phone ;
        $product->description =$this->description ;
        $product->price =$this->price ;
        $product->quantity =$this->quantity ;

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image =$imageName;

        $product->category_id =$this->category_id ;
        $product->save();
        session()->flash('message','Product has been added!');
        return redirect()->route('shop');
    }

    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories]);
    }
}
