<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\SitetronicExam\Controllers'], function () {
    Route::prefix('admin')->group(function () {
        Route::resource('exam', 'ExamAdminController');
        Route::resource('exam-section', 'ExamSectionAdminController');
        Route::resource('exam-topic', 'ExamTopicAdminController');
    });
});
