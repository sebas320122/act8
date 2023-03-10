<?php
use App\Http\Controllers\SuperheroeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('superheroe', 'App\Http\Controllers\SuperheroeController');
Route::get('superheroe', 'App\Http\Controllers\SuperheroeController@index')->name('superheroe.index'); 
Route::post('superheroe', 'App\Http\Controllers\SuperheroeController@store')->name('superheroe.store'); 
Route::post('superheroe/create', 'App\Http\Controllers\SuperheroeController@create')->name('superheroe.create'); 
Route::get('superheroe/{id}', 'App\Http\Controllers\SuperheroeController@show')->name('superheroe.show'); 
Route::patch('superheroe/{id}', 'App\Http\Controllers\SuperheroeController@update')->name('superheroe.update'); 
Route::delete('superheroe/{id}', 'App\Http\Controllers\SuperheroeController@destroy')->name('superheroe.destroy'); 
Route::get('superheroe/{id}/edit', 'App\Http\Controllers\SuperheroeController@edit')->name('superheroe.edit'); 