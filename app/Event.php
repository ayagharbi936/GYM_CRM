<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    'id_event', 'id', 'name','startDate','startTime','endDate','endTime','location','detail','image_src'
    ];
    protected $table='events';
    // primary key
    public $primaryKey='id_event';
    // timestamps
    public $timestamps=true;
    public function user()
    {
        return $this->belongsTo('App\User','id');
    }
    public function eventparticpant()
    {
        return $this->hasMany('App\EventParticipant');
    }
}
