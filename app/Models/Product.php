<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;
    protected $table="product";
    protected $fillable=['product_name','category_id','p_image','description'];

    public function kategori()
    {
        return $this->hasOne('App\Models\Category','id','category_id');
    }
}
