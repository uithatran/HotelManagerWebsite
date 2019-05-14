<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    //khai báo tên table
    protected $table = "Phong";

    public function nhanvien()
    {
    	//1 phòng được quản lý xác nhận bỏi 1 nhân viên
    	return $this->hasMany('App\Nhanvien','idnhanvien','id');
    }

    public function loaiphong()
    {
    	//1 phong co 1 loai phong
    	return $this->belongsTo('App\Loaiphong','idloaiphong','id');
    }
}
