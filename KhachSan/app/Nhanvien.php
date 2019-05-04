<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
	const CREATED_AT = 'name_of_created_at_column';
const UPDATED_AT = 'name_of_updated_at_column';
    //khai báo
    protected $table = "Nhanvien";

    public function phong()
    {
    	//1 nhân viên quản lý nhiều phòng
    	return $this->hasMany('App\Phong','idnhanvien','id');
    }
    public $timestamps = false;
}
