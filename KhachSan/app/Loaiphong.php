<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaiphong extends Model
{
    //khai báo tên table
    protected $table = "Loaiphong";

    public function phong()
    {
    	return $this->hasMany('App\Phong','idloaiphong','id');
    }
}
