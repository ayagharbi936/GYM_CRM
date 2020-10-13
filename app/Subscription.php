<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
         //table name
 protected $tabel ='subscriptions';
 //primary key
 public $primarykey ='id_subscription';
 //timestamps
 public $timestamps =true ;

protected $dates = ['expired_at'];

 public function userMember(){
    return $this->belongsTo('App\User','id');
}

public function usercourse(){
    return $this->belongsTo('App\Course','id_cours');
}

public function gym(){
    return $this->belongsTo('App\Gym','id_gym');
}

}
