<?php

Route::get('/admin-login','Admin\Auth\LoginController@showAdminLoginForm')->name('admin.login.get');
Route::post('/admin-login','Admin\Auth\LoginController@login')->name('admin.login.check');

Route::get('/admin-forgot-password','Admin\Auth\ForgotPasswordController@showAdminLinkRequestForm')->name('admin.password.request');
Route::post('/admin-send-email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::get('/admin-reset-password/{token}','Admin\Auth\ResetPasswordController@adminResetPasswordForm')->name('admin.password.reset');
Route::post('/admin-update-password','Admin\Auth\ResetPasswordController@reset')->name('admin.password.update');



Route::group(['middleware' => 'auth:admin'],function(){
	
	Route::get('/dashboard','Admin\AdminController@showDashboard')->name('admin.dashboard');
	Route::get('/admin-logout','Admin\AdminController@logout')->name('admin.logout');

});

