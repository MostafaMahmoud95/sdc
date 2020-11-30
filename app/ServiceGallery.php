<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceGallery extends Model
{
    //
    protected $table = 'services_gallery';

    protected $fillable=['service_id','image'];

    public function service()
    {
        return $this->belongsTo('App\Service', 'service_id');
    }

}
