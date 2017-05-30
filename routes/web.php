<?php

Route::get('/', 'SiteController@index')->name('home');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio/{portfolio}', 'PortfolioController@show')->name('portfolio.item');

Route::group(['prefix' => 'commissions'], function () {
  Route::get('/', 'CommissionController@index')->name('commission.home');
  Route::get('/{commission}', 'CommissionController@show')->name('commission.show');
  Route::post('/{commission}/order', 'CommissionController@order')->name('commission.order');
});

Route::group(['prefix' => 'my-account'], function () {
  Route::get('/orders', 'ClientController@orders')->name('account.orders');
  Route::get('/edit', 'ClientController@edit')->name('account.edit');
  Route::post('/edit', 'ClientController@postEdit');
});
