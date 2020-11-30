<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = ['department_id', 'intro_ar', 'intro_en', 'vision_ar', 'vision_en', 'message_ar', 'message_en', 'mission_ar', 'mission_en', 'values_ar', 'values_en', 'goal_ar', 'goal_en', 'whyus_ar', 'whyus_en', 'facebook', 'twitter', 'youtube', 'googleplus', 'linkedin', 'address_eg_ar', 'address_eg_en', 'address_uae_ar', 'address_uae_en', 'address_ksa_ar', 'address_ksa_en', 'email_egy', 'email_uae', 'email_ksa', 'phone_eg', 'phone_uae', 'phone_ksa'];


    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id');
    }
}
