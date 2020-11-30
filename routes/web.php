<?php

use Illuminate\Support\Facades\Route;

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


// HomeController index
Route::get('/', 'HomeController@index')->name('home');


// check post
Route::get('/post', 'PostController@post');

//ProjectController
route::get('/du-an', 'ProjectController@index')->name('indexProjects');
// single post Project
route::get('/single-post','ProjectController@singlePost')->name('singlePostProject');
// vi tri ha tang - Project
route::get('/vi-tri-ha-tang', 'ProjectController@viTriHaTang')->name('viTriHaTang');

// DanhbaController index. 

Route::get('/nha-moi-gioi', 'DanhbaController@index')->name('nhamoigioi');
Route::get('/nhamoigioi{id}', 'DanhbaController@singlepost1')->name('singlepost1');
Route::get('/doanhnghiep{id}', 'DanhbaController@singlepost2')->name('singlepost2');


//TinTucController
Route::get('/tin-tuc', 'TinTucController@index')->name('tintucbds');
Route::get('/tin-thi-truong', 'TinTucController@tinthitruong')->name('tinthitruong');
Route::get('/phan-tich','TinTucController@phantich')->name('phan_tich');
Route::get('/chinh-sach','TinTucController@chinhsach')->name('chinh_sach');
Route::get('/quy-hoach','TinTucController@quyhoach')->name('quy_hoach');
Route::get('/bds-the-gioi','TinTucController@bdsthegioi')->name('tintucbds_tg');
Route::get('/tai-chinh-chung-khoan-bds','TinTucController@taichinhbds')->name('tai_chinh');
//Tintucsinglepost
Route::get('/articles{id}', 'TinTucController@articles')->name('tintuc_single_post');

//NhaDatBanController -----TAI ANH
Route::get('/nha-dat-ban', 'NhaDatBanController@index')->name('nha_dat_ban');
Route::get('/ban-can-ho-chung-cu', 'NhaDatBanController@banCanHoChungCu')->name('ban_can_ho_chung_cu');
Route::get('/ban-nha-rieng', 'NhaDatBanController@banNhaRieng')->name('ban_nha_rieng');
Route::get('/ban-nha-mat-pho', 'NhaDatBanController@banNhaMatPho')->name('ban_nha_mat_pho');
Route::get('/nha-dat-ban{id}', 'NhaDatBanController@nhaDatBanSinglePost')->name('nhadatban_single_post');


//NhaDatChoThueController ----TAI ANH
Route::get('/nha-dat-cho-thue', 'NhaDatChoThueController@index')->name('nha_dat_cho_thue');
Route::get('/cho-thue-can-ho-chung-cu', 'NhaDatChoThueController@choThueCanHo')->name('cho_thue_can_ho');
Route::get('/cho-thue-nha-rieng', 'NhaDatChoThueController@choThueNhaRieng')->name('cho_thue_nha_rieng');
Route::get('/cho-thue-nha-mat-pho', 'NhaDatChoThueController@choThueNhaMatPho')->name('cho_thue_nha_mat_pho');
Route::get('/nha-dat-cho-thue{id}', 'NhaDatChoThueController@nhaDatChoThueSinglePost')->name('nhadatchothue_single_post');




Route::get('/nha-moi-gioi', 'DanhbaController@index')->name('nhamoigioi');

//Doanh nghiep
Route::get('/doanh-nghiep', 'DanhbaController@index1')->name('doanhnghiep');

//Noi-ngoaithat
Route::get('/noi-ngoai-that', 'NoiNgoaiThatController@index');

//Canmuacanthue route

Route::get('/can-mua-can-thue/', 'BuyerSellerController@index')->name('buyerseller');
Route::get('/nha-dat-can-thue', 'BuyerSellerController@seller')->name('seller');
Route::get('/nha-dat-can-mua', 'BuyerSellerController@buyer')->name('buyer');
Route::get('/can-mua-can-thue-post{id}', 'BuyerSellerController@post')->name('buyersellerpost');



//Phong Thuy
Route::get('/phong-thuy', 'PhongThuyController@index')->name('phongthuy');
Route::get('/phong-thuy-toan-canh', 'PhongThuyController@index1')->name('phongthuytoancanh');
Route::get('/tu-van-phong-thuy', 'PhongThuyController@index2')->name('tuvanphongthuy');
Route::get('/phong-thuy-nha-o', 'PhongThuyController@index3')->name('phongthuynhao');
Route::get('/phong-thuy-van-phong', 'PhongThuyController@index4')->name('phongthuyvanphong');
Route::get('/phong-thuy-theo-tuoi', 'PhongThuyController@index5')->name('phongthuytheotuoi');




//   ADMIN
Route::prefix('/admin')->group(function () {
    Route::get('/master',function () {
        return view('admin.master');
    });

// admin
    Route::get('/user/index','UserController@index');
    Route::get('/user/index','UserController@index')->name('userIndex');
    Route::get('/user/create','UserController@create')->name('createUser');
    Route::post('/user/create','UserController@store')->name('storeUser');

    Route::get('/user/edit/{id}','UserController@edit')->name('editUser');
    Route::post('/user/edit/{id}','UserController@update')->name('updateUser');

    Route::get('/user/delete/{id}','UserController@delete')->name('deleteUser');

    Route::get('/slide', 'SlideController@index')->name('Slide');
    Route::get('/slide/create', 'SlideController@create')->name('createSlide');
    Route::post('/slide/create', 'SlideController@store')->name('storeSlide');

});
// admin/menu
// admin/cate
Route::prefix('/admin')->group(function () {
    // admin/category
    Route::get('/category', 'CategoryController@index')->name('categoryIndex');
    Route::get('/category/create', 'CategoryController@create')->name('createCategory');
    Route::post('/category/create', 'CategoryController@store')->name('storeCategory');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('editCategory');
    Route::post('/category/edit/{id}', 'CategoryController@update')->name('updateCategory');
    Route::post('/category/delete/{id}', 'CategoryController@delete')->name('deleteCategory');
    //  POSTS - TAI ANH
Route::get('/posts', 'PostController@viewPost')->name('viewPost');
Route::get('/edit-post{id}', 'PostController@editPost')->name('editPost');
Route::post('/edit-post{id}', 'PostController@updatePost')->name('updatePost');


});
