<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{     protected $fillable = [
    'id_gym', 'id', 'content','rate'
    ];
    protected $table='feedbacks';
    // primary key
    public $primaryKey='id_feedback';
    // timestamps
    public $timestamps=true;

    public function user()
    {
        return $this->belongsTo('App\User','id');
    }
    public function gym()
    {
        return $this->belongsTo('App\Gym','id_gym');
    }
}
