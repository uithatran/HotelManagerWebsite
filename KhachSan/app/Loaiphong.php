<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaiphong extends Model
{
    //khai báo tên table
    protected $table = "Loaiphong";

    public function phong()
    {
    	//1 loai phong co nhieu Phong
    	return $this->hasMany('App\Phong','idloaiphong','id');
    }
}
