<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = ['department_id','username', 'email', 'phone', 'subject', 'message'];

    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id');
    }
}
