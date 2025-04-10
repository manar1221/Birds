<?php

use App\Http\Livewire\Admin\AdminAddBlogComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminBlogsComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminEditBlogComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/',HomeComponent::class)->name('home.index');

    Route::get('/shop',ShopComponent::class)->name('shop');

    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');

    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');

    Route::get('/admin/product/edit/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');

    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');

    Route::get('/product/{id}',DetailsComponent::class)->name('product.details');

    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');

    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');

    Route::get('/product-category/{id}',CategoryComponent::class)->name('product.category');

    Route::get('/admin/blogs',AdminBlogsComponent::class)->name('admin.blogs');

    Route::get('/admin/blog/add',AdminAddBlogComponent::class)->name('admin.blog.add');

    Route::get('/admin/blog/edit/{blog_id}',AdminEditBlogComponent::class)->name('admin.blog.edit');
});

Route::middleware(['auth','authadmin'])->group(function () {

});



require __DIR__.'/auth.php';


