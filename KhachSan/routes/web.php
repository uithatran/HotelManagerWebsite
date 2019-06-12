<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Nhanvien;
use App\Phong;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('thu', function () {
//     $nhanvien = NhanVien::find(3);
// 	foreach($nhanvien->phong as $phong)
// 	{
// 		echo $phong->tenphong."<br>";
// 	}
// });


// Route::get('danhsach', function () {
//     return view('admin.nhanvien.danhsach');
// });
Route::get('sayhello',function(){
	echo 'Hello Laravel';
});

Route::get('test', function () {
    return view('admin.tintuc.sua ');
});


Route::get('them', function () {
    return view('admin.user.them');
});

// Route::get('sua', function () {
// 	return view('admin.nhanvien.sua');
// });

Route::get('admin/dangnhap','UserController@getDangnhapAdmin');
Route::post('admin/dangnhap','UserController@postDangnhapAdmin');
Route::get('admin/logout','UserController@getDangXuatAdmin');

//gop nhom cac route
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){

	//Nhom
	Route::group(['prefix'=>'phong'],function(){
		Route::get('danhsach','PhongController@getDanhSach');
		Route::get('them','PhongController@getThem');
		Route::post('them','PhongController@postThem');

		Route::get('xoa/{id}','PhongController@getXoa');

		Route::get('sua/{id}','PhongController@getSua');
		Route::post('sua/{id}','PhongController@postSua');

		Route::get('danhsachdatphong','PhongController@getDanhsachdatphong');
		// Route::post('datphong','PagesController@postDatphong');

		Route::get('datphongtest','PhongController@getDatphongtest');
		Route::post('datphongtest','PagesController@postDatphongtest');

		Route::get('thongtinphong/{id}','PhongController@getThongtinphong');
		Route::get('datphong/{id}','PhongController@getDatphong');
		Route::post('datphong/{id}','PhongController@postDatphong');

		Route::get('traphong/{id}','PhongController@getTraphong');
		Route::post('traphong/{id}','PhongController@postTraphong');

		Route::get('chonphong/{id}','PhongController@getChonphong');
		Route::post('chonphong/{id}','PhongController@postChonphong');

	});

	Route::group(['prefix'=>'nhanvien'],function(){
		Route::get('danhsach','NhanvienController@getDanhSach');

		Route::get('sua/{id}','NhanvienController@getSua');
		Route::post('sua/{id}','NhanvienController@postSua');

		Route::get('them','NhanvienController@getThem');
		//Sang Controller tạo thêm hàm post Thêm
		//Hàm thực hiện nhận dữ liệu về và lưu dữ liệu và trong csdl
		Route::post('them','NhanvienController@postThem');

		Route::get('xoa/{id}','NhanvienController@getXoa');
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','UserController@getDanhSach');
		Route::get('them','UserController@getThem');
		Route::post('them','UserController@postThem');
		Route::get('sua/{id}','UserController@getSua');
		Route::post('sua/{id}','UserController@postSua');
		Route::get('xoa/{id}','UserController@getXoa');
	});

	Route::group(['prefix'=>'khachhang'],function(){
		Route::get('danhsach','KhachhangController@getDanhSach');
		Route::get('them','KhachhangController@getThem');
		Route::post('them','KhachhangController@postThem');
		Route::get('xoa/{id}','KhachhangController@getXoa');
		Route::get('thongtincanhan/{id}','KhachhangController@getThongtincanhan');
		// Route::get('them','UserController@getThem');
		// Route::post('them','UserController@postThem');
		// Route::get('sua/{id}','UserController@getSua');
		// Route::post('sua/{id}','UserController@postSua');
		// Route::get('xoa/{id}','UserController@getXoa');
	});

	Route::group(['prefix'=>'tintuc'],function(){
		Route::get('danhsach','TintucController@getDanhsach');
		Route::get('them','TintucController@getThem');
		Route::post('them','TintucController@postThem');
		Route::get('xoa/{id}','TintucController@getXoa');
		Route::get('sua/{id}','TintucController@getSua');
		Route::post('sua/{id}','TintucController@postSua');
		// Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
		// Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
	});

	Route::group(['prefix'=>'phanhoi'],function(){
		Route::get('danhsach','PhanhoiController@getDanhsach');
	});

});


Route::get('trangchu','PagesController@getTrangchu');

Route::get('dangnhap','PagesController@getDangnhap');
Route::post('dangnhap','PagesController@postDangnhap');

Route::get('dangky','PagesController@getDangky');
Route::post('dangky','PagesController@postDangky');

Route::get('dangxuat','PagesController@getDangxuat');
Route::get('phong','PagesController@getPhong');
Route::get('vechungtoi','PagesController@getVechungtoi');
Route::get('tintuc','PagesController@getTintuc');
Route::get('lienhe','PagesController@getLienhe');
Route::get('nguoidung','PagesController@getNguoidung');
Route::post('nguoidung','PagesController@postNguoidung');
Route::post('tinnhan','PagesController@postTinnhan');

Route::get('datphong','PagesController@getDatphong');
Route::post('datphong','PagesController@postDatphong');

Route::get('thu',function(){
	echo 'Xinchao';
});

Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

