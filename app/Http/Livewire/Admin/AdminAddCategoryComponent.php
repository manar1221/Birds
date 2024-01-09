<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'image'=>'required'
        ]);
    }


    public function storeCategory()
    {
        $this->validate([
            'name'=>'required',
            'image'=>'required'
        ]);
        $category = new Category();
        $category->name =$this->name;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('categories',$imageName);
        $category->image = $imageName;
        $category->save();
        session()->flash('message',' تم اضافة الفئة بنجاح ');
        return redirect()->route('admin.categories');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component');
    }
}
