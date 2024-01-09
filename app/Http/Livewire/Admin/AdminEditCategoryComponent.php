<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_id;
    public $name;
    public $image;
    public $newimage;

    public function mount($category_id)
    {
        $category = Category::find($category_id);
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->image = $category->image;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
        ]);
    }

    public function updateCategory()
    {
        $this->validate([
            'name'=>'required',
        ]);
        $category = Category::find($this->category_id);
        $category->name = $this->name;

        if($this->newimage)
        {
            unlink('images/categories/'.$category->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('categories',$imageName);
            $category->image =$imageName;
        }

        $category->save();
        session()->flash('message',' تم تعديل الفئة بنجاح ');
        return redirect()->route('admin.categories');
    }


    public function render()
    {
        return view('livewire.admin.admin-edit-category-component');
    }
}
