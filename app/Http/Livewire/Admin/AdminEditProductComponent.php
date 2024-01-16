<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;
    public $name;
    public $phone;
    public $price;
    public $quantity;
    public $image;
    public $category_id;
    public $description;

    public $newimage;

    public function mount($product_id)
    {
        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->phone = $product->phone;
    }

    public function updateProduct()
    {
        $this->validate([
            'name'=>'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'phone' => 'required'
        ]);
        $product = Product::find($this->product_id);
        $product->name =$this->name ;
        $product->description =$this->description ;
        $product->price =$this->price ;
        $product->phone =$this->phone ;
        $product->quantity =$this->quantity ;
        if($this->newimage)
        {
            unlink('images/products/'.$product->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image =$imageName;
        }
        $product->category_id =$this->category_id ;
        $product->save();
        session()->flash('message',' تم تعديل المنتج بنجاح ');
        return redirect()->route('admin.products');
    }

    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories]);
    }
}
