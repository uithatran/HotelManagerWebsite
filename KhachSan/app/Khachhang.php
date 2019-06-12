<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
	const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
    //
    protected $table = "Khachhang";

    //1 khach hang dat nhieu phong
    public function phong()
    {
    	return $this->belongsTo('App\Phong','idphong','id');
    }

    public function datphong()
    {
        return $this->belongsTo('App\datphong','iddatphong','id');
    }


    public $timestamps = false;
}
