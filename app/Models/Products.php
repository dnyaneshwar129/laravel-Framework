<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Products extends Model
{
    use HasFactory;
    protected  $table = "products";
    protected  $primaryKey = "product_id";

    public function category()
    {
        return $this->belongTo(Category::class);
    }
}
