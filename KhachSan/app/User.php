<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{   
    //Lỗi đăng xuất user
    public $remember_token=false;

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

    //user comment những cái gì
    public function comment()
    {
        //Người dùng comment nhiều comment khác nhau
        return $this->hasMany('App\Comment','idUser','id');
    }
}
