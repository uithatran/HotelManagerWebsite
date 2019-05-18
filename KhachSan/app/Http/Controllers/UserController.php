<?php

namespace App\Http\Controllers;

// Thư viện lớp đăng nhập
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getDanhSach()
    {
    	$user = User::all();
    	return view('admin.user.danhsach',['user'=>$user]);
	}

	public function getThem()
	{
		return view('admin.user.them');
	}

	public function postThem(Request $request)
	{

		$this->validate($request,
			[
				//tao dieu kien 
				'name' => 'required|min:3',
				'email' => 'required|email|unique:users,email',
				'password' => 'required|min:3|max:32',
				'passwordagain' => 'required|same:password',
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
				'passwordagain.required'=>'Bạn chưa nhập lại mật khẩu',
				'passwordagain.same'=>'Mật khẩu nhập lại chưa khớp',
				
			]);

		$user = new User;

		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->quyen = $request->quyen;

		$user->save();
		return redirect('admin/user/them')->with('thongbao','Thêm thành công');
	}

	public function getSua($id)
	{
		$user = User::find($id);
		return view('admin.user.sua',['user'=>$user]);
	}

	public function postSua(Request $request,$id)
	{
		$this->validate($request,
			[
				//tao dieu kien 
				'name' => 'required|min:3',
			]
			,
			[
				// in loi ra
				'name.required'=> 'Bạn chưa nhập tên người dùng',
				'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
			]);

		$user = User::find($id);
		$user->name = $request->name;
		$user->quyen = $request->quyen;

		if($request->changePassword == "on")
		{
			$this->validate($request,
				[
					'password' => 'required|min:3|max:32',
					'passwordagain' => 'required|same:password',
				]
				,
				[
					// in loi ra
					'password.required'=>'Bạn chưa nhập mật khẩu',
					'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
					'password.max'=>'Mật khẩu chỉ được tối đã 32 ký tự',
					'passwordagain.required'=>'Bạn chưa nhập lại mật khẩu',
					'passwordagain.same'=>'Mật khẩu nhập lại chưa khớp',
					
				]);
			$user->password = bcrypt($request->password);
		}
		$user->save();
		return redirect('admin/user/sua/'.$id)->with('thongbao','Bạn đã sửa thành công');
	}

	public function getXoa($id)
	{
		$user = User::find($id);
		$user->delete();
		return redirect('admin/user/danhsach')->with('thongbao','Bạn đã xóa thành công');
	}

	// Ham dang nhap
	public function getDangnhapAdmin()
	{
		return view('admin.login');
	}

	public function postDangnhapAdmin(Request $request)
	{
		$this->validate($request,[
			'email'=>'required',
			'password'=>'required|min:3|max:32',
		],
		[
			'email.required'=>'Bạn chưa nhập email',
			'password.required'=>'Bạn chưa nhập password',
			'password.min'=>'password không được nhỏ hơn 3 ký tự',
			'password.max'=>'password không được lớn hơn 32 ký tự',
		]);
		// Thêm thư viện Auth
		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
		{
			return redirect('admin/phong/danhsach');
		}
		else
		{
			return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
			// Nhớ thêm hidden
		}
	}

	public function getDangXuatAdmin()
	{
		Auth::logout();
		// return view('admin.login');
		return redirect('admin/dangnhap');
	}
}

