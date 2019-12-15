<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;

    protected $fillable=[
      'title',
      'details',
      'price',
      'photo',
    ];
    public function demands()
    {
        return $this->hasMany(Demand::class);
    }
    public function demandAdmin2()
    {
        return $this->hasMany(DemandAdmin2::class);
    }

}
