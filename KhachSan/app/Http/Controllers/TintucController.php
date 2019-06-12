<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tintuc;
use Validator;
use Redirect;
use View;

class TintucController extends Controller 
{
	public function getDanhsach()
	{
		// $tintuc = Tintuc::all();
        $tintuc = DB::table('tintuc')->get();
		return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);
	}

	public function getThem()
	{
		return view('admin.tintuc.them');
	}

	public function postThem(Request $request)
	{
        request()->validate([
            'tieudetintuc'=> 'required|min:10|max:255',
            'noidungtintuc'=> 'required|min:10',
            'linktintuc'=> 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'tieudetintuc.required'=>'Bạn chưa nhập tiêu đề tin tức',
            'tieudetintuc.min'=>'Tiêu đề phải dài hơn 10 ký tự',
            'tieudetintuc.max'=>'Tiêu đề phải ngắn hơn 255 ký tự',
            'noidungtintuc.required'=>'Bạn chưa nhập tóm tắt tin tức',
            'noidungtintuc.min'=>'Nội dung phải dài hơn 10 ký tự',
            'noidungtintuc.max'=>'Nội dung phải ngắn hơn 10000 ký tự',
            'linktintuc.required'=>'Bạn chưa nhập link tin tức',
            'linktintuc.max'=>'Link phải ngắn hơn 255 ký tự',
            'image.required'=>'Bạn chưa thêm ảnh trong tin tức',
            'image.image'=>'File không phải dạng hình ảnh',
            'image.max'=>'Kích thước hình ảnh không hợp lệ',
            'image.mimes'=>'Hình ảnh phải được dưới dạng: jpeg, png, jpg, gif, svg.',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/tintuc'), $imageName);

        $tintuc = new Tintuc;
        $tintuc->hinhanhtintuc = $imageName;
        $tintuc->tieudetintuc = $request->tieudetintuc;
        $tintuc->noidungtintuc = $request->noidungtintuc;
        $tintuc->linktintuc = $request->linktintuc;
        $tintuc->save();
        return back()
            ->with('thongbao','You have successfully upload image.')
            ->with('image',$imageName);
	}

    public function getXoa($id)
    {
        $tintuc = tintuc::find($id);
        $tintuc->delete();

        return redirect('admin/tintuc/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }

    public function getSua($id)
    {
        $tintuc = Tintuc::find($id);
        return view('admin/tintuc/sua',['tintuc'=>$tintuc]);
    }

    public function postSua(Request $request, $id)
    {
        $tintuc = Tintuc::find($id);
        request()->validate(
            [
                'tieudetintuc'=> 'required|min:10|max:255',
                'noidungtintuc'=> 'required|min:10',
                'linktintuc'=> 'required|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'tieudetintuc.required'=>'Bạn chưa nhập tiêu đề tin tức',
                'tieudetintuc.min'=>'Tiêu đề phải dài hơn 10 ký tự',
                'tieudetintuc.max'=>'Tiêu đề phải ngắn hơn 255 ký tự',
                'noidungtintuc.required'=>'Bạn chưa nhập tóm tắt tin tức',
                'noidungtintuc.min'=>'Nội dung phải dài hơn 10 ký tự',
                'noidungtintuc.max'=>'Nội dung phải ngắn hơn 10000 ký tự',
                'linktintuc.required'=>'Bạn chưa nhập link tin tức',
                'linktintuc.max'=>'Link phải ngắn hơn 255 ký tự',
                'image.required'=>'Bạn chưa thêm ảnh trong tin tức',
                'image.image'=>'File không phải dạng hình ảnh',
                'image.max'=>'Kích thước hình ảnh không hợp lệ',
                'image.mimes'=>'Hình ảnh phải được dưới dạng: jpeg, png, jpg, gif, svg.',
            ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/tintuc'), $imageName);

        $tintuc->hinhanhtintuc = $imageName;
        $tintuc->noidungtintuc = $request->noidungtintuc;
        $tintuc->tieudetintuc = $request->tieudetintuc;
        $tintuc->linktintuc = $request->linktintuc;
        $tintuc->save();

        return back()
            ->with('thongbao','You have successfully upload image.')
            ->with('image',$imageName);
    }
}

