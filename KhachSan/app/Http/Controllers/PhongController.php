<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DB;
use App\Phong;
use App\Loaiphong;
use App\Datphong;
use App\Khachhang;
use App\User;

class PhongController extends Controller 
{
    //tao ham getdanhsach
    public function getDanhSach()
    {
        //Lay tat ca cac phong
        $phong = Phong::all();
        $loaiphong = Loaiphong::all();
        $count = Phong::whereRaw('idloaiphong = ?',[1])->count();
        // $count = Phong::whereRaw('idloaiphong = ?',[1])->count();
        // $count = Phong::whereRaw('idloaiphong = ?',[1])->count();
        // $count = Phong::whereRaw('idloaiphong = ?',[1])->count();
        //truyen danh sach phong sang trang danh sach
        return view('admin.phong.danhsach',['phong'=>$phong],['loaiphong'=>$loaiphong])->with('count',$count);
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
                'tenphong'=>'required |unique:phong,tenphong| min:3',
                'hinhanhphong'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
            [
                'tenphong.required'=>'Bạn chưa nhập tên phòng',
                'tenphong.min'=>'Tên phòng phải dài hơn 3 ký tự',
                'hinhanhphong.required'=>'Bạn chưa thêm ảnh trong tin tức',
                'hinhanhphong.image'=>'File không phải dạng hình ảnh',
                'hinhanhphong.max'=>'Kích thước hình ảnh không hợp lệ',
                'hinhanhphong.mimes'=>'Hình ảnh phải được dưới dạng: jpeg, png, jpg, gif, svg.',
            ]
        );
        $imageName = time().'.'.request()->hinhanhphong->getClientOriginalExtension();
        request()->hinhanhphong->move(public_path('images/phong'), $imageName);

        $phong = new Phong;
        $phong->tenphong = $request->tenphong;
        $phong->idloaiphong = $request->idloaiphong;
        $phong->hinhanhphong = $imageName;
        $phong->trangthai = 0;
        $phong->idnhanvien = Auth::user()->id;

        $phong->save();

        return redirect('admin/phong/them')->with('thongbao','Thêm phòng thành công.');
    }

    public function getDanhsachdatphong()
    {
        //Lay tat ca cac phong
        // $datphong = Datphong::all();
        // $tintucmoi = DB::table('tintuc')->orderBy('id','desc')->take(3)->get();
        $datphong = DB::table('datphong')->orderBy('id','desc')->get();
        //truyen danh sach phong sang trang danh sach
        return view('admin.phong.danhsachdatphong',['datphong'=>$datphong]);
    }

    public function getXoa($id)
    {
        $phong = phong::find($id);
        $phong->delete();

        return redirect('admin/phong/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }

    public function getSua($id)
    {
        $phong = phong::find($id);

        return view('admin/phong/sua',['phong'=>$phong]);
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request,
            [
                'tenphong'=>'required|min:3',
                'hinhanhphong'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
            [
                'tenphong.required'=>'Bạn chưa nhập tên phòng',
                'tenphong.min'=>'Tên phòng phải dài hơn 3 ký tự',
                'tenphong.unique'=>'Tên phong đã tồn tại.',
                'hinhanhphong.required'=>'Bạn chưa thêm ảnh trong tin tức',
                'hinhanhphong.image'=>'File không phải dạng hình ảnh',
                'hinhanhphong.max'=>'Kích thước hình ảnh không hợp lệ',
                'hinhanhphong.mimes'=>'Hình ảnh phải được dưới dạng: jpeg, png, jpg, gif, svg.',
            ]
        );
        $imageName = time().'.'.request()->hinhanhphong->getClientOriginalExtension();
        request()->hinhanhphong->move(public_path('images/phong'), $imageName);

        $phong = phong::find($id);

        $phong->tenphong = $request->tenphong;
        $phong->idloaiphong = $request->idloaiphong;
        $phong->hinhanhphong = $imageName;
        $phong->trangthai = $request->trangthai;
        $a = Auth::user()->id;
        $phong->idnhanvien = $a;
        $phong->save();

        return redirect('admin/phong/danhsach')->with('thongbao','Sửa đổi thành công.');
    }

    public function getThongtinphong($id)
    {
        $phong = Phong::find($id);
        return view('admin.phong.thongtinphong',['phong'=>$phong]);
    }

    public function getDatphong($id)
    {
        $phong = Phong::find($id);
        return view('admin.phong.datphong',['phong'=>$phong]);
    }

    public function postDatphong(Request $request , $id)
    {
        $this->validate($request,
            [
                'tenkhachhang'=>'required|min:3|max:50',
                'email'=>'required|max:255',
                'sdt'=>'required|digits_between:0,999999999999999',
                'ngayden'=>'required',
                'ngaydi'=>'required',
                'nguoilon'=>'required',
                'treem'=>'required',
                'cmnd'=>'required|digits_between:0,999999999999999',
                'tuoi'=>'required|integer|min:18|max:100',
                'quoctich'=>'required|max:255',
            ],
            [
                'tenkhachhang.required'=>'Bạn chưa nhập tên khách hàng',
                'email.required'=>'Bạn chưa nhập tên email',
                'sdt.required'=>'Bạn chưa nhập tên số điện thoại',
                'sdt.digits_between'=>'Nhập số điện thoại chưa đúng',
                'ngayden.required'=>'Bạn chưa nhập ngày đến',
                'ngaydi.required'=>'Bạn chưa nhập ngày đi',
                'nguoilon.required'=>'Bạn chưa nhập số lượng người lớn',
                'treem.required'=>'Bạn chưa nhập số lượng trẻ em',
                'cmnd.required'=>'Bạn chưa nhập số CMND',
                'cmnd.digits_between'=>'Nhập số chứng minh chưa đúng',
                'tuoi.required'=>'Bạn chưa nhập số tuổi',
                'quoctich.required'=>'Bạn chưa nhập quốc tịch',

            ]);

        $phong = Phong::find($id);
        $phong->trangthai = 1;
        $a = Auth::user()->id;
        $phong->idnhanvien = $a;
        $phong->save();

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
        $datphong->kiemdinh = 1;
        $datphong->save();

        $khachhang = new Khachhang;
        $khachhang->tenkh = $request->tenkhachhang;
        $khachhang->email = $request->email;
        $khachhang->sdt = $request->sdt;
        $khachhang->cmnd = $request->cmnd;
        $khachhang->quoctich = $request->quoctich;
        $khachhang->tuoi = $request->tuoi;
        $khachhang->trangthai = 1;
        $khachhang->idphong = $id;
        $khachhang->iddatphong = $datphong->id;
        $khachhang->save();

        // $user = new User;
        // $user->name = $request->tenkhachhang;
        // $user->email = $request->email;
        // $user->password = bcrypt(123456);
        // $user->quyen = 0;
        // $user->save();

        return redirect('admin/phong/danhsach')->with('thongbao','Đặt phòng thành công.');
    }


    public function getTraphong($id)
    {
        $phong = Phong::find($id);
        return view('admin.phong.traphong',['phong'=>$phong]);
    }

    public function postTraphong(Request $request, $id)
    {
        $phong = Phong::find($id);
        $phong->trangthai = 0;
        $phong->save();

        $khachhang = Khachhang::find($phong->khachhang->id);
        $khachhang->idphong = 0;
        $khachhang->trangthai = 0;
        $khachhang->save();

        return redirect('admin/phong/danhsach');
    }

    public function getChonphong($id)
    {
        // //phong duoc chon
        $chonphong = Datphong::find($id);

        // //tat ca cac phong
        $phong = Phong::all();
        return view('admin/phong/chonphong',['chonphong'=>$chonphong],['phong'=>$phong]);
    }

    public function postChonphong(Request $request, $id)
    {
        // $khachhang = Khachhang::find();
        // echo $request->tenphong;
        // $chonphong = Datphong::find($id);
        // echo $chonphong->email;
        $chonphong = Datphong::find($id);
        $chonphong->kiemdinh = 1;
        $chonphong->save();

        $khachhang = new Khachhang;
        $khachhang->tenkh = $chonphong->tenkhachhang;
        $khachhang->matkhau = 123456;
        $khachhang->email = $chonphong->email;
        $khachhang->cmnd = $chonphong->cmnd;
        $khachhang->quoctich = $chonphong->quoctich;
        $khachhang->tuoi = $chonphong->tuoi;
        $khachhang->sdt = $chonphong->sdt;
        $khachhang->trangthai = 1;
        $khachhang->idphong = $request->tenphong;
        $khachhang->iddatphong = $id;
        $khachhang->save();

        $a = $request->tenphong;


        $phong = Phong::find($request->tenphong);
        $phong->trangthai = 1;
        $phong->save();

        return redirect('admin/phong/danhsach');
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

