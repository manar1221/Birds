<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    public $category_id;

    public function deleteCategory()
    {
        $category = Category::find($this->category_id);
        // unlink('assets/imgs/categories/'.$category->newimage);
        $category->delete();
        session()->flash('message',' تم حذف الفئة بنجاح ');
    }

    public function render()
    {
        $categories =Category::orderBy('name','ASC')->paginate(20);
        return view('livewire.admin.admin-category-component',['categories'=>$categories]);
    }
}
