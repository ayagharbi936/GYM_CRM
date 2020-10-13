<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $table='gyms';
    // primary key
    public $primaryKey='id_gym';
    // timestamps
    public $timestamps=true;
    public function feedback()
    {
        return $this->hasMany('App\Feedback');
    }
    public function favorite()
    {
        return $this->hasMany('App\Favorite');
    }
    public function user()
    {
        return $this->belongsTo('App\User','id');
    }

    public function cours()
    {
        return $this->hasMany('App\Course','id_gym');
    }
}
