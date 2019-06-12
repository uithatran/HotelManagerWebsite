<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    const CREATED_AT = 'name_of_created_at_column';
    const UPDATED_AT = 'name_of_updated_at_column';
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

    public function khachhang()
    {
        //1 phong duoc thue boi 1 khach hang
        return $this->hasOne('App\Khachhang','idphong','id');
    }

    public $timestamps = false;
}
