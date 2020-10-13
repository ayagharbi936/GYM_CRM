<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    protected $fillable = [
        'id_event', 'id'
        ];
        protected $table='eventParticipants';
        // primary key
        public $primaryKey='id_eventP';
        // timestamps
        public $timestamps=true;
        public function user()
        {
            return $this->belongsTo('App\User','id');
        }
        public function event()
        {
            return $this->belongsTo('App\Event','id_event');
        }
}
