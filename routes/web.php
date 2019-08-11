<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\SitetronicExam\Controllers'], function () {
    Route::resource('exam-administration', 'ExamAdminController');
    Route::resource('admin/exam-section', 'ExamSectionAdminController');
});
