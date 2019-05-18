<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tintuc;

class TintucController extends Controller 
{
	public function getDanhsach()
	{
		$tintuc = Tintuc::all();
		return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);
	}

	public function getThem()
	{
		return view('admin.tintuc.them');
	}

	public function postThem(Request $request)
	{
		$this->validate($request,
			[
				'tieudetintuc'=>'required'
			]
			,
			[
				'tieudetintuc.required'=>'Bạn chưa nhập tiêu đề'
			]);
		$tintuc = new Tintuc;
		$tintuc->tieudetintuc = $request->tieudetintuc;
		$tintuc->hinhanhtintuc = $request->hinhanhtintuc;
		$tintuc->noidungtintuc = $request->noidungtintuc;
		$tintuc->save();

		return redirect('admin/tintuc/them')->with('thongbao','Thêm thành công.');
	}

}

