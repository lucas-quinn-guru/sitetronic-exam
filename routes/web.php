<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\SitetronicExam\Controllers'], function () {
    Route::name('admin.')->prefix('admin')->group(function () {
        Route::resource('exam', 'ExamAdminController');
        Route::resource('exam-section', 'ExamSectionAdminController');
        Route::resource('exam-topic', 'ExamTopicAdminController');



        Route::get( 'exam-topic/index/{section}', 'ExamTopicAdminController@index')->name( 'exam-topic.index' );
        Route::get( 'exam-topic/create/{section}', 'ExamTopicAdminController@create')->name( 'exam-topic.create' );
        Route::post( 'exam-topic/{section}', 'ExamTopicAdminController@store')->name( 'exam-topic.store' );
        Route::get( 'exam-topic/{topic}/edit', 'ExamTopicAdminController@store')->name( 'exam-topic.edit' );

        Route::resource('exam-question', 'ExamQuestionAdminController');
        Route::get( 'exam-question/index/{topic}', 'ExamQuestionAdminController@index' )->name( 'exam-question.index' );

        Route::resource('exam-answer', 'ExamAnswerAdminController');
        Route::get( 'exam-answer/index/{question}', 'ExamAnswerAdminController@index' )->name( 'exam-answer.index' );

    });




});
