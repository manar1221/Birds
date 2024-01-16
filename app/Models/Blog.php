<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function blog_category(){
        return $this->belongsTo(Blog_Category::class,'category_id');
    }
}
