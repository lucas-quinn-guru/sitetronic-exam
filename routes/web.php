<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\SitetronicExam\Controllers'], function () {
    Route::name('admin')->resource('admin/exam', 'ExamAdminController');
    Route::name('admin')->resource('admin/exam-section', 'ExamSectionAdminController');
});
