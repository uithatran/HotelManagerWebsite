<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nhanvien;

class NhanvienController extends Controller
{
    //
    public function getDanhSach(){
    	$nhanvien = Nhanvien::all();
		return view('admin.nhanvien.danhsach',['nhanvien'=>$nhanvien]);
	}

	public function getThem(){
		return view('admin.nhanvien.them');
	}

	//Request để nhận dữ liệu
	public function postThem(Request $request)
	{
		//check dieu kien
		//$ths1:lỗi ths2:Thông báo 
		$this->validate($request,
			[
				'tennv' => 'required|min:3|max:50',
				'chucvu' =>'required',
			]
			,
			[
				'tennv.required' => 'Bạn chưa nhập tên thể loại',
				'tennv.min'=>'Tên nhân viên phải có độ dài từ 3 đến 100 ký tự',
				'tennv.max'=>'Tên nhân viên phải có độ dài từ 3 đến 100 ký tự',
				'chucvu.required'=>'Bạn chưa nhập chức vụ nhân viên',
			]);
		$nhanvien = new Nhanvien;
		$nhanvien->tennv = $request->tennv; 
		$nhanvien->chucvu = $request->chucvu;
		$nhanvien->namsinh = $request->namsinh;
		$nhanvien->gioitinh = $request->gioitinh;
		$nhanvien->chuthich = $request->chuthich;
		$nhanvien->save();

		return redirect('admin/nhanvien/them')->with('thongbao','Thêm thành công'); 
	}

	public function getSua($id)
	{
		//tim id nhan vien
		$nhanvien = Nhanvien::find($id);
		//truyền id sang trang sua
		return view('admin.nhanvien.sua',['nhanvien'=>$nhanvien]);
		
	}

	public function postSua(Request $request,$id)
	{
		$nhanvien = Nhanvien::find($id);
		$this->validate($request,
			[
				'tennv' => 'required|min:3|max:50',
				'chucvu' =>'required',
			],
			[
				'tennv.required' => 'Bạn chưa nhập tên thể loại',
				'tennv.min'=>'Tên nhân viên phải có độ dài từ 3 đến 100 ký tự',
				'tennv.max'=>'Tên nhân viên phải có độ dài từ 3 đến 100 ký tự',
				'chucvu.required'=>'Bạn chưa nhập chức vụ nhân viên',
			]);
		$nhanvien->tennv = $request->tennv;
		$nhanvien->chucvu = $request->chucvu;
		$nhanvien->namsinh = $request->namsinh;
		$nhanvien->gioitinh = $request->gioitinh;
		$nhanvien->chuthich = $request->chuthich;
		$nhanvien->save();

		// Đưa người dùng về trang sửa
		return redirect('admin/nhanvien/sua/'.$id)->with('thongbao','Sửa thành công');
	}

	public function getXoa($id)
	{
		$nhanvien = Nhanvien::find($id);
		$nhanvien->delete();

		return redirect('admin/nhanvien/danhsach')->with('thongbao','Bạn đã xóa thành công');
	}
}

