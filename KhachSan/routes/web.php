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
// use App\TheLoai;
use App\Nhanvien;
use App\Phong;

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


Route::get('sua', function () {
    return view('admin.user.sua');
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
		Route::get('datphong','PhongController@getDatphong');
		Route::get('traphong','PhongController@getTraphong');
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
 
});


Route::get('trangchu',function(){
	return view('pages.trangchu');
});


