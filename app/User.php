<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    public function setPasswordAttribute($password)
    {
         $this->attributes['password'] = bcrypt($password);
     }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','imageSrc','birthday','adress','phone','sexe'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function feedback()
    {
        return $this->hasMany('App\Feedback');
    }
    public function favorite()
    {
        return $this->hasMany('App\Favorite');
    }
    public function event()
    {
        return $this->hasMany('App\Event');
    }
    public function eventparticpant()
    {
        return $this->hasMany('App\EventParticipant');
    }
    public function gym()
    {
        return $this->hasMany('App\Gym');
    }
    
}
