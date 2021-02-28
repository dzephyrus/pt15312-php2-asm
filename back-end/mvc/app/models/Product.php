<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'image', 'cate_id', 'price', 'desc', 'created_at', 'updated_at', 'views'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id');
    }
}
