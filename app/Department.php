<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //


    protected $fillable=['title_ar','title_en','slug'];
    
     public function setTitleEnAttribute($value)
    {
        $this->attributes['title_en'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

}
