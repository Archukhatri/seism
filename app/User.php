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



    public function post(){
        return $this->hasOne('App\post');
    }


    public function posts(){
        return $this->hasMany('App\post');
    }

    public function roles(){
        return $this->belongsToMany('App\Role')->withPivot('created_at');

        //  return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
    }

       public function photos(){
        return $this->morphMany('App\Photo', 'imageable');  
    }
}
