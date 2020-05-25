<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table ='products';
    protected $fillable=['name','price','image_path','category_id','user_id'];
    public function category()
    {
       return $this->belongsTo('\App\Category');
    }
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
