<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandAdmin2 extends Model
{
    protected $fillable=[
        'demand_id',
        'job_id',
    ];
    public function demands()
    {
        return $this->belongsTo(Demand::class,'demand_id','id');
    }

    public function jobs()
    {
        return $this->belongsTo(Job::class,'job_id','id');
    }

}
