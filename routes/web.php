<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\SitetronicExams\Controllers'], function () {
    Route::resource('test', 'TestController');
});
