<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['department_id', 'title_en', 'title_ar', 'intro_en', 'intro_ar', 'description_ar', 'description_en', 'image','slug'];

    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id');
    }
    
     public function setTitleEnAttribute($value)
    {
        $this->attributes['title_en'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
