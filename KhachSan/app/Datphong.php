<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datphong extends Model
{
	const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
    //khai báo tên table
    protected $table = "Datphong";

    //Do datphong co 1 khach hang
    public function khachhang()
    {
    	return $this->hasMany('App\Khachhang','iddatphong','id');
    }
    public $timestamps = false;
}
