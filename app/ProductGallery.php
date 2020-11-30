<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    //

    protected $table='products_gallery';
    protected $fillable=['product_id','image'];

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }

}
