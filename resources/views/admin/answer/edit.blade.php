{{-- \resources\views\answer-admin\edit.blade.php --}}

@extends('layouts.default.master')

@section('title', 'Edit Exam Answer')

@section('content')
<div class="container">
    {{ Breadcrumbs::render('sitetronic-exam-answer-admin-edit', $answer, $question, $section, $topic) }}
    <h1>
        <i class='fa fa-user-plus'></i> Edit Exam Answer
    </h1>
    Question: {{$answer->question->question}}
    <hr>
    <div class='col-lg-6 col-lg-offset-4'>
        {{-- Form model binding to automatically populate our fields with user data --}}
        {{ Form::model($answer, [ 'route' => [ 'admin.exam-answer.update', "id"=>$answer->id ], 'method' => 'PUT' ]) }}
        <div class="form-group">
            {{ Form::label('answer', 'Answer') }}
            {{ Form::textarea('answer', null, array('class' => 'form-control', 'rows' => 4,)) }}
        </div>

        <div class="form-group">
            {{ Form::label('correct', 'Correct') }}
            {{ Form::select('correct', ['0' => 'No', '1' => 'Yes'], null, ['class'=>'form-control'] ) }}
        </div>

        <div class="form-group">
            {{ Form::label('definition', 'Definition') }}
            {{ Form::textarea('definition', null, [ 'class' => 'form-control', 'rows' => 4, ]) }}
        </div>

        {{ Form::submit('Update Anwser', [ 'class' => 'btn btn-success btn-lg btn-block' ]) }}
        <a href='/admin/exam-question/{{ $question->id }}/edit' class='btn btn-primary btn-lg btn-block'>Back to Question</a>
        {{ Form::close() }}

    </div>
</div>

@endsection
