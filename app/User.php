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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

  public function getFnameAttribute($value)
  {
    return ucfirst($value);
  }

  public function setFnameAttribute($value)
  {
    return $this->attributes['fname']=ucfirst($value);
  }
  public function getLnameAttribute($value)
  {
    return ucfirst($value);
  }
  public function setLnameAttribute($value)
  {
    return $this->attributes['lname']=ucfirst($value);
  }



}
