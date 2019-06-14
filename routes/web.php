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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login','LoginController@login');

//curl_get
Route::get('/curl_get','CurlController@curl_get');
//curl获取token
Route::get('/curl_token','CurlController@curl_token');
Route::post('/curl3','CurlController@curl3');

//表单测试
Route::get('/form1','CurlController@form1');

//自定义菜单
Route::get('/menu','CurlController@menu');

//上传文件
Route::get('/upload','CurlController@upload');
Route::get('/uploaddo','CurlController@uploaddo');
Route::post('/file','CurlController@file');


//测试
Route::get('/encry','CurlController@encryption');
//对称加密
Route::get('/symm','CurlController@symm');
//非对称加密
Route::get('/asymm','CurlController@asymm');
//非对称加密2
Route::get('/asymm2','CurlController@asymm2');
//将加密后的 数据与签名 发送给服务端
Route::get('/task','CurlController@task');
//接受服务端发送过来的 数据与签名
Route::post('/aa','CurlController@aa');


//支付宝手机端支付
Route::get('/alipay','CurlController@alipay');



