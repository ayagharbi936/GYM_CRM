<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{    protected $fillable = [
    'id_gym', 'id'
    ];
    protected $table='favorites';
    // primary key
    public $primaryKey='id_favorite';
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
