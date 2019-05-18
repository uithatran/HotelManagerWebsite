<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Thư viện lớp đăng nhập
use Illuminate\Support\Facades\Auth;
use App\Phong;
use App\User;
use App\Tintuc;
use App\Khachhang;
use App\Datphong;
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

	function postDangky(Request $request)
	{
		$this->validate($request,
			[
				//tao dieu kien 
				'name' => 'required|min:3',
				'email' => 'required|email|unique:users,email',
				'password' => 'required|min:3|max:32',
				'passwordAgain' => 'required|same:password',
			]
			,
			[
				// in loi ra
				'name.required'=> 'Bạn chưa nhập tên người dùng',
				'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',

				'email.required'=>'Bạn chưa nhập email',
				'email.email'=>'Bạn chưa nhập đúng định dạng email',
				'email.unique'=>'Email đã tồn tại',

				'password.required'=>'Bạn chưa nhập mật khẩu',
				'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
				'password.max'=>'Mật khẩu chỉ được tối đã 32 ký tự',
				'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
				'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp',
				
			]);

		$user = new User;

		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->quyen = 0;
		$user->save();

		$khachhang = new Khachhang;
		$khachhang->tenkh = $request->name;
		$khachhang->cmnd = $request->cmnd;
		$khachhang->quoctich = $request->quoctich;
		$khachhang->tuoi = $request->tuoi;
		$khachhang->sdt = $request->sdt;
		$khachhang->save();

		return redirect('dangky')->with('thongbao','Chúc mừng bạn đã đăng ký thành công');
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

	function getNguoidung()
	{
		return view('pages.nguoidung');
	}

	function postNguoidung(Request $request)
	{
		$this->validate($request,
			[
				//tao dieu kien 
				'name' => 'required|min:3',
			],
			[
				'name.required'=> 'Bạn chưa nhập tên người dùng',
				'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
			]
		);

		$user = User::find( Auth::user()->id );
		$user->name = $request->name;

		if($request->changePassword == "on")
		{
			$this->validate($request,
				[
					'password' => 'required|min:3|max:32',
					'passwordagain' => 'required|same:password',
				],
				[
					'password.required'=>'Bạn chưa nhập mật khẩu',
					'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
					'password.max'=>'Mật khẩu chỉ được tối đã 32 ký tự',
					'passwordagain.required'=>'Bạn chưa nhập lại mật khẩu',
					'passwordagain.same'=>'Mật khẩu nhập lại chưa khớp',
				]);
			$user->password = bcrypt($request->password);
		}

		$user->save();
		return redirect('nguoidung')->with('thongbao','Bạn đã thay đổi thành công.');
	}

	function getDatphong()
	{
		return view('pages.datphong');
	}

	function postDatphong(Request $request)
	{
		$this->validate($request,[
            'tenkhachhang'=>'required',
            'email'=>'required',
            'sdt'=>'required',
            'ngayden'=>'required',
            'ngaydi'=>'required',
            'loaiphong'=>'required',
            'nguoilon'=>'required',
            'treem'=>'required',
            'cmnd'=>'required',
            'tuoi'=>'required',
            'quoctich'=>'required',
        ],
        [
            'tenkhachhang.required'=>'Bạn chưa nhập tên',
            'email.required'=>'Bạn chưa nhập email',
            'sdt.required'=>'Bạn chưa nhập sdt',
            'ngayden.required'=>'Bạn chưa nhập ngày đến',
            'ngaydi.required'=>'Bạn chưa nhập ngày đi',
            'loaiphong.required'=>'Bạn chưa nhập loại phòng',
            'nguoilon.required'=>'Bạn chưa nhập số người lớn',
            'treem.required'=>'Bạn chưa nhập số trẻ em',
            'cmnd.required'=>'Bạn chưa nhập cmnd',
            'tuoi.required'=>'Bạn chưa nhập email',
            'quoctich.required'=>'Bạn chưa nhập quốc tịch',           
        ]);

        $datphong = new Datphong;
        $datphong->tenkhachhang = $request->tenkhachhang;
        $datphong->email = $request->email;
        $datphong->sdt = $request->sdt;
        $datphong->ngayden = $request->ngayden;
        $datphong->ngaydi = $request->ngaydi;
        $datphong->loaiphong = $request->loaiphong;
        $datphong->nguoilon = $request->nguoilon;
        $datphong->treem = $request->treem;
        $datphong->cmnd = $request->cmnd;
        $datphong->tuoi = $request->tuoi;
        $datphong->quoctich = $request->quoctich;        

        $datphong->save();

        $khachhang = new Khachhang;
        $khachhang->tenkh = $request->tenkhachhang;
        $khachhang->email = $request->email;
        $khachhang->cmnd = $request->cmnd;
        $khachhang->quoctich = $request->quoctich;
        $khachhang->tuoi = $request->tuoi;
        $khachhang->sdt = $request->sdt;
        $khachhang->idphong = 0;

        $khachhang->save();

        return redirect('datphong')->with('thongbao','Đặt phòng thành công.'); 
	}
}