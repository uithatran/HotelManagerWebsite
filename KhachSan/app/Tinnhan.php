<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinnhan extends Model
{
	const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
    //khai báo tên table
    protected $table = "tinnhan";

    public $timestamps = false;
}
