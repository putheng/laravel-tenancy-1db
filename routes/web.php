<?php

Route::get('/{vue?}', 'HomeController@index')->where('vue', '[\/\w\.-]*');
