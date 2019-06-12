<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tinnhan;

class PhanhoiController extends Controller
{
    //
    public function getDanhSach(){
    	$tinnhan = Tinnhan::all();
		return view('admin.phanhoi.danhsach',['tinnhan'=>$tinnhan]);
	}

}

