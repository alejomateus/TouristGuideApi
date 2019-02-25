<?php

Route::group([], function ($ruta){
    $ruta->post('register', 'AuthController@register');
    $ruta->post('login', 'AuthController@login');
    Route::get('test', function(){
        return response()->json(['foo'=>'bar']);
    });
    Route::get('places','PlacesController@index');
});
Route::group(['middleware' => ['jwt.auth']], function() {
    Route::post('logout', 'AuthController@logout');
    Route::get('inmuebles','InmueblesController@index');
    Route::get('inmuebles/{id}','InmueblesController@show');
    Route::put('inmuebles/{id}','InmueblesController@update');
    Route::post('inmuebles','InmueblesController@store');
    Route::delete('inmuebles/{id}','InmueblesController@destroy');
    Route::get('cities','CitiesController@index');
    
});