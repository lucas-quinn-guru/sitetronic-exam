<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\SitetronicExam\Controllers'], function () {
    Route::name('admin.')->prefix('admin')->group(function () {
        Route::resource('exam', 'Admin\\ExamController');
        Route::resource('exam-section', 'Admin\\ExamSectionController');
        Route::resource('exam-topic', 'Admin\\ExamTopicController');

        Route::get( 'exam-topic/index/{section}', 'Admin\\ExamTopicController@index')->name( 'exam-topic.index' );
        Route::get( 'exam-topic/create/{section}', 'Admin\\ExamTopicController@create')->name( 'exam-topic.create' );
        Route::post( 'exam-topic/{section}', 'Admin\\ExamTopicController@store')->name( 'exam-topic.store' );
        Route::get( 'exam-topic/{topic}/edit', 'Admin\\ExamTopicController@store')->name( 'exam-topic.edit' );

        Route::resource('exam-question', 'Admin\\ExamQuestionController');
        Route::get( 'exam-question/index/{topic}', 'Admin\\ExamQuestionController@index' )->name( 'exam-question.index' );

        Route::resource('exam-answer', 'Admin\\ExamAnswerController');
        Route::get( 'exam-answer/index/{question}', 'Admin\\ExamAnswerController@index' )->name( 'exam-answer.index' );
    });

    Route::resource('exam', 'ExamController');
});
