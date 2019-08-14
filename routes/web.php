<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\SitetronicExam\Controllers'], function () {
    Route::resource('admin/exam', 'ExamAdminController');
    Route::resource('admin/section', 'ExamSectionAdminController');
});
