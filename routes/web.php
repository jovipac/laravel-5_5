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

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/items', 'ItemsController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/measures', 'Admin\\MeasuresController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/material_categories', 'Admin\\Material_CategoriesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/material_measures', 'Admin\\Material_MeasuresController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/material', 'Admin\\MaterialController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/partner_categories', 'Admin\\Partner_categoriesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/partner_categories', 'Admin\\Partner_CategoriesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/partner_categories', 'Admin\\Partner_CategoriesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('business_partners', 'Business_PartnersController');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('material_providers', 'Material_ProvidersController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('delivery_order', 'Delivery_OrderController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detail_delivery_order', 'Detail_Delivery_OrderController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('business_partner_document', 'Business_Partner_DocumentController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('business_partner_documents', 'Business_Partner_DocumentsController');
});