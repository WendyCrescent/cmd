<?php

Route::get('/', 'SiteController@index')->name('home');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio/{portfolio}', 'PortfolioController@show')->name('portfolio.item');

Route::get('/writing-portfolio', 'WritingController@index')->name('writing');
Route::get('/writing-portfolio/{writing}', 'WritingController@show')->name('writing.item');

Route::group(['prefix' => 'commissions'], function () {
  Route::get('/', 'CommissionController@index')->name('commission.home');
  Route::get('/{commission}', 'CommissionController@show')->name('commission.show');
  Route::post('/{commission}/order', 'CommissionController@order')->name('commission.order');
});

Route::group(['prefix' => 'blog'], function () {
  Route::group(['namespace' => 'Blog'], function () {
    Route::get('/', 'PostsController@index')->name('blog.home');
    Route::get('/posts/{tag}', 'PostsController@tagged')->name('posts.tagged');
    Route::get('/post/{post}', 'PostController@show')->name('post.show');
  });
});

Route::group(['prefix' => 'my-account'], function () {
  Route::get('/orders', 'ClientController@orders')->name('account.orders');
  Route::get('/edit', 'ClientController@edit')->name('account.edit');
  Route::post('/edit', 'ClientController@postEdit');
});

Auth::routes();
