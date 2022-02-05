<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Http; 


Route::get('/', function () {
  
    return redirect()->route('home');
});  

  

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes([
    
]);
Route::get('/home/{id}', 'RecordsController@album')->name('album-data');
Route::get('/home/{id}/redact', 'RecordsController@redact')->name('redact-album');
Route::post('/home/{id}/redact', 'RecordsController@redactSubmit')->name('redact-album-submit');
Route::get('/home/{id}/delete', 'RecordsController@delete')->name('delete-album');
Route::get('/home/create', 'RecordsController@create')->name('create-album');
