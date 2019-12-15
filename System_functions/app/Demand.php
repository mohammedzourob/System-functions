<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demand extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'name',
        'email',
        'details',
        'phone_number',
        'job_id',
    ];


    public function jobs()
    {
        return $this->belongsTo(Job::class,'job_id','id');
    }
    public function demandAdmin2()
    {
        return $this->hasMany(DemandAdmin2::class);
    }
}
