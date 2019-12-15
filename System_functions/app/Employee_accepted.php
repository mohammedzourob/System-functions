<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_accepted extends Model
{
    protected $fillable=[
        'demandAdmin2_id',
        'job_id',
    ];
    public function demandAdmin2()
    {
        return $this->belongsTo(DemandAdmin2::class,'demandAdmin2_id','id');
    }

    public function jobs()
    {
        return $this->belongsTo(Job::class,'job_id','id');
    }



}
