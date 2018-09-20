<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function is_admin(){
if($this->admin){
    return true;
}
return false;
    }

    public function posts()
{
    return $this->hasMany(info::class);
}

public function verified(){
return $this->token===null;

}

public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

}
