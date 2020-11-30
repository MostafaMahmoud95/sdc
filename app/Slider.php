<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //

    protected $fillable=['department_id','image'];

    public function department()
    {
        return $this->belongsTo('App\Department','department_id');
    }
}
