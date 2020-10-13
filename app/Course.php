<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';
    // primary key
    public $primaryKey='id_cours';
    // timestamps
    public $timestamps=true;


    public function gymsbelongs()
    {
        return $this->belongsTo('App\Gym','id_gym');
    }
}
