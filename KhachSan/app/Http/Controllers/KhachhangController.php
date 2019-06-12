<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Khachhang;

class KhachhangController extends Controller 
{
    public function getDanhsach()
    {
        $khachhang = Khachhang::all();
        return view('admin.khachhang.danhsach',['khachhang'=>$khachhang]);
    }

    public function getThem()
    {
        return view('admin.khachhang.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'hoten'=>'required|min:3',
                'email' => 'required | email | unique:users,email',
                'password'=>'required|min:3',
                'sdt'=>'required',
                'cmnd'=>'required',
                'quoctich'=>'required',
                'tuoi'=>'required',

            ]
            ,
            [
                'hoten.required'=> 'Bạn chưa nhập tên người dùng',
                'hoten.min' => 'Tên người dùng phải có ít nhất 3 ký tự',

                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',

                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
                'sdt.required'=>'Bạn chưa nhập mật khẩu',
                'cmnd.required'=>'Bạn chưa nhập mật khẩu',
                'cmnd.required'=>'Bạn chưa nhập mật khẩu',
                'quoctich.required'=>'Bạn chưa nhập mật khẩu',
            ]);

            $khachhang = new Khachhang;
            $khachhang->tenkh = $request->hoten;
            $khachhang->email = $request->email;
            $khachhang->password = $request->password;
            $khachhang->sdt = $request->sdt;
            $khachhang->cmnd = $request->cmnd;
            $khachhang->quoctich = $request->quoctich;
            $khachhang->tuoi = $request->tuoi;

            $khachhang->save();

            return view('admin/khachhang/them')->with('Bạn đã thêm thành công.');
    }

    public function getThongtincanhan($id)
    {
        $khachhang = Khachhang::find($id);
        return view('admin/khachhang/thongtincanhan',['khachhang'=>$khachhang]);
    }

    public function getXoa($id)
    {
        $khachhang = Khachhang::find($id);
        $khachhang->delete();
        return redirect('admin/khachhang/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
    //tao ham getdanhsach
    // public function getDanhSach()
    // {
    //     //Lay tat ca cac phong
    //     $phong = Phong::all();
    //     //truyen danh sach phong sang trang danh sach
    //     return view('admin.phong.danhsach',['phong'=>$phong]);
    // }

    // public function getThem()
    // {
    //     return view('admin.phong.them');
    // }

    // public function postThem(Request $request)
    // {
    //     echo $request->tenphong;
    // }

    // public function getDatphong()
    // {
    //     return view('admin.phong.datphong');
    // }

    // public function getTraphong()
    // {
    //     return view('admin.phong.traphong');
    // }



}

