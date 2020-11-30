<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = ['department_id', 'title_en', 'title_ar', 'intro_ar', 'intro_en', 'image', 'description_ar', 'description_en','slug','created_at'];

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
