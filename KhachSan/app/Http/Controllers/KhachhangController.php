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

