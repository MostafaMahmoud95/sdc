<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id');
    }

    protected $fillable = ['department_id', 'title_en', 'title_ar', 'image', 'link'];
}
