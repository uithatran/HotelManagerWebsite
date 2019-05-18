<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Phong;
use App\Datphong;
use App\User;

class PhongController extends Controller 
{
    //tao ham getdanhsach
    public function getDanhSach()
    {
        //Lay tat ca cac phong
        $phong = Phong::all();
        //truyen danh sach phong sang trang danh sach
        return view('admin.phong.danhsach',['phong'=>$phong]);
    }

    public function getThem()
    {
        return view('admin.phong.them');
    }

    public function postThem(Request $request)
    {
        // TEST THEM PHONG
        // echo $request->tenphong;
        $this->validate($request,
            [
                'tenphong'=>'required | min:3',
            ],
            [
                'tenphong.required'=>'Bạn chưa nhập tên phòng',
                'tenphong.min'=>'Tên phòng phải dài hơn 3 ký tự',
            ]
        );

        $phong = new Phong;
        $phong->tenphong = $request->tenphong;
        $phong->idloaiphong = $request->idloaiphong;
        $phong->hinhanhphong = $request->hinhanhphong;
        $phong->trangthai = 0;
        $phong->chuthich = $request->chuthich;
        $phong->idnhanvien = 1;
        $phong->iddichvu = 1;

        $phong->save();

        return redirect('admin/phong/them')->with('thongbao','Thêm phòng thành công.');
    }

    public function getTraphong()
    {
        return view('admin.phong.traphong');
    }

    public function getDatphong()
    {
        //Lay tat ca cac phong
        $datphong = Datphong::all();
        //truyen danh sach phong sang trang danh sach
        return view('admin.phong.datphong',['datphong'=>$datphong]);
    }

    public function getXoa($id)
    {
        $phong = phong::find($id);
        $phong->delete();

        return redirect('admin/phong/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }

/*
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
        $phong = new phong;
        $phong->tennv = $request->tennv;
        $phong->chucvu = $request->chucvu;
        $phong->namsinh = $request->namsinh;
        $phong->gioitinh = $request->gioitinh;
        $phong->chuthich = $request->chuthich;
        $phong->save();

        return redirect('admin/phong/them')->with('thongbao','Thêm thành công'); 
    }

    public function getSua($id)
    {
        //tim id nhan vien
        $phong = phong::find($id);
        //truyền id sang trang sua
        return view('admin.phong.sua',['phong'=>$phong]);
        
    }

    public function postSua(Request $request,$id)
    {
        $phong = phong::find($id);
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
        $phong->tennv = $request->tennv;
        $phong->chucvu = $request->chucvu;
        $phong->namsinh = $request->namsinh;
        $phong->gioitinh = $request->gioitinh;
        $phong->chuthich = $request->chuthich;
        $phong->save();

        // Đưa người dùng về trang sửa
        return redirect('admin/phong/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $phong = phong::find($id);
        $phong->delete();

        return redirect('admin/phong/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
    */
}

