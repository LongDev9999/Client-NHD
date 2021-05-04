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


Route::resource('ctdt','CTDT_Controller');
Route::resource('monhoc','Monhoc_Controller');
Route::resource('nganhangde','Nganhangde_Controller');
Route::resource('kh-xaydung-nhd','Kehoach_Xaydung_NHD');
Route::resource('kh-capnhat-nhd','Kehoach_Capnhat_NHD');

//THONG KE,1 ĐƯỜNG DẪN BAO GỒM ALL THỐNG KÊ
Route::get('bcthongke','ThongKeController@TongHopThongKe')->name('thongke');

Route::get('xuatexcel-chuacoNHD', 'ThongKeController@XuatExcelChuaCoNHD');
Route::get('xuatexcel-dacoNHD', 'ThongKeController@XuatExcelDaCoNHD');
Route::get('xuatexcel-denKHXD', 'ThongKeController@XuatExcelDenKHXDNHD');

