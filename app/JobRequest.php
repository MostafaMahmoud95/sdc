<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    //
    protected $table = 'job_requests';
    protected $fillable = ['department_id', 'job_id', 'username', 'email', 'phone', 'cv', 'message'];

    public function job()
    {
        return $this->belongsTo('App\Job', 'job_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id');
    }
}