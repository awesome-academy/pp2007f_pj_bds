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
Route::prefix('/admin',)->group(function () {
    Route::get('/master',function () {
        return view('admin.master');
    });

    // admin
    // User - CRUD
    Route::get('/user','UserController@index');
    Route::get('/user','UserController@index')->name('userIndex');
    Route::get('/user/ajaxDistrict','UserController@ajaxDistrict')->name('userDistrict');
    Route::get('/user/ajaxWard','UserController@ajaxWard')->name('userWard');
    Route::get('/user/create','UserController@create')->name('createUser');
    Route::post('/user/create','UserController@store')->name('storeUser');
    Route::get('/user/edit/{id}','UserController@edit')->name('editUser');
    Route::post('/user/edit/{id}','UserController@update')->name('updateUser');
    Route::get('/user/delete','UserController@delete')->name('deleteUser');

    // user -post
    Route::get('/user/post/','UserController@post')->name('postUser');
    Route::post('/user/post/','PostController@store')->name('storePost');

    Route::get('/slide', 'SlideController@index')->name('Slide');
    Route::get('/slide/create', 'SlideController@create')->name('createSlide');
    Route::post('/slide/create', 'SlideController@store')->name('storeSlide');
    Route::get('slide/edit/{id}', 'SlideController@edit')->name('editSlide');
    Route::post('slide/edit/{id}', 'SlideController@update')->name('updateslide');
    Route::post('slide/delete/{id}', 'SlideController@delete')->name('deleteSlide');

});
// admin/menu
// admin/cate
Route::prefix('/admin')->group(function () {
    // admin/post-type
    Route::get('/post-type', 'PostTypeController@index')->name('postTypeIndex');
    Route::get('/post-type/create', 'PostTypeController@create')->name('createPostType');
    Route::post('/post-type/create', 'PostTypeController@store')->name('storePostType');
    Route::get('/post-type/edit/{id}', 'PostTypeController@edit')->name('editPostType');
    Route::post('/post-type/edit/{id}', 'PostTypeController@update')->name('updatePostType');
    Route::post('/post-type/delete/{id}', 'PostTypeController@delete')->name('deletePostType');
    //  POSTS - TAI ANH
    Route::get('/posts', 'PostController@viewPost')->name('viewPost');
    Route::get('/edit-post{id}', 'PostController@editPost')->name('editPost');
    Route::post('/edit-post{id}', 'PostController@updatePost')->name('updatePost');
    Route::get('/delete-post', 'PostController@deletePost')->name('deletePost');




    // admin/menu
    Route::get('/menu', 'MenuController@index')->name('menuIndex');
    Route::get('/menu/create', 'MenuController@create')->name('createMenu');
    Route::post('/menu/create', 'MenuController@store')->name('storeMenu');
    Route::get('/menu/edit/{id}', 'MenuController@edit')->name('editMenu');
    Route::post('/menu/edit/{id}', 'MenuController@update')->name('updateMenu');
    Route::post('/menu/delete/{id}', 'MenuController@delete')->name('deleteMenu');

     //News-H
    Route::get('/news', 'NewsController@listNews')->name('listNews');
    Route::get('/news/create', 'NewsController@create')->name('createNews');
    Route::post('/news/create', 'NewsController@store')->name('storeNews');
    Route::get('news/edit/{id}', 'NewsController@edit')->name('editNews');
    Route::post('news/edit/{id}', 'NewsController@update')->name('updateNews');
    Route::get('news/delete/{id}', 'NewsController@delete')->name('deleteNews');




    // admin/login
    Route::get('/login', 'Auth\LoginController@login')->name('login');
});
