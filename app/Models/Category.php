<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Category extends Model
{
    use HasFactory;
    protected  $table = "category";
    protected  $primaryKey = "category_id";

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
}
