<?php

Route::get('/projects', 'ProjectController@index');
Route::post('/projects', 'ProjectController@store')->name('project.create');
Route::get('/projects/{project}', 'ProjectController@show')->name('project.show');

Route::get('/{company}', 'DashboardController@index');