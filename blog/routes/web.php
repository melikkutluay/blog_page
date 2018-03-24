<?php

Route::get('','PostController@index');

Route::get('/{id}','PostController@show');

Auth::routes();

