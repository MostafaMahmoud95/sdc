<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable=['department_id','title_ar','title_en','intro_ar','intro_en','description_ar','description_en','requirements_ar','requirements_en','location_ar','location_en','image','salary','slug'];
    public function department()
    {
        return $this->belongsTo('App\Department','department_id');
    }
    
     public function setTitleEnAttribute($value)
    {
        $this->attributes['title_en'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
