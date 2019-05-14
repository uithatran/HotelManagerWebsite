<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Thư viện lớp đăng nhập
use Illuminate\Support\Facades\Auth;
use App\Phong;
use App\User;
use App\Tintuc;
// public $remember_token=false;

class PagesController extends Controller
{
	function __construct()
	{
		if(Auth::check())
		{
			view()->share('nguoidung',Auth::user());
		}
	}

	function getDangnhap()
	{
		return view('pages.dangnhap');
	}

	function postDangnhap(Request $request)
	{
		$this->validate($request,[
			'email'=>'required',
			'password'=>'required|min:3|max:32',
		],
		[
			'main.required'=>'Bạn chưa nhập email',
			'password.required'=>'Bạn chưa nhập password',
			'password.min'=>'password không được nhỏ hơn 3 ký tự',
			'password.max'=>'password không được lớn hơn 32 ký tự',
		]);

		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
		{
			return redirect('trangchu');
		}
		else
		{
			return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công.');
		}
	}

	function getDangxuat()
	{
		Auth::logout();
		// auth()->logout();

		return redirect('trangchu');
	}

	function getDangky()
	{
		return view('pages.dangky');
	}

	// function getPhong()
	// {
	// 	return view('pages.phong');
	// }

	function getPhong()
	{
		$phong = Phong::all();
		// Mang "dulieuphong" se duoc truyen sang pages.phong
		return view('pages.phong',['dulieuphong'=>$phong]);
	}

	function getVechungtoi()
	{
		return view('pages.vechungtoi');
	}

	function getTintuc()
	{
		$tintuc = Tintuc::all();
		return view('pages.tintuc',['tintuc'=>$tintuc]);
	}

	function getLienhe()
	{
		return view('pages.lienhe');
	}
}