{{-- \resources\views\topic-admin\edit.blade.php --}}

@extends('layouts.default.master')

@section('title', 'Edit Exam Question')

@section('content')
<div class="container">
    <h1>
        <i class='fa fa-user-plus'></i> Edit Exam Question
    </h1>
    Topic: {{$question->topic->name}}
    <hr>
    <div class='col-lg-6 col-lg-offset-4'>

        {{-- Form model binding to automatically populate our fields with user data --}}
        {{ Form::model($question, [ 'route' => [ 'admin.exam-question.update', "id"=>$question->id ], 'method' => 'PUT' ]) }}
        <div class="form-group">
            {{ Form::label('question', 'Question') }}
            {{ Form::textarea('question', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('question_number', 'Question Number') }}
            {{ Form::text('question_number', null, [ 'class' => 'form-control' ]) }}
        </div>

        <div class="form-group">
            {{ Form::label('is_review', 'Is Review Question') }}
            {{ Form::select('is_review', ['0' => 'No', '1' => 'Yes'], null, ['class'=>'form-control'] ) }}
        </div>

        <div class="form-group">
            {{ Form::label('is_broker', 'Is Broker Question') }}
            {{ Form::select('is_broker', ['0' => 'No', '1' => 'Yes'], null, ['class'=>'form-control'] ) }}
        </div>

        <div class="form-group">
            {{ Form::label('problem_notification', 'Has Problem') }}
            {{ Form::select('problem_notification', ['0' => 'No', '1' => 'Yes'], null, ['class'=>'form-control'] ) }}
        </div>

        {{ Form::submit('Update Question', array('class' => 'btn btn-success btn-lg btn-block')) }}
        <a href='/admin/exam-question/index/{{ $topic->id }}' class='btn btn-primary btn-lg btn-block'>Back to Questions</a>
        {{ Form::close() }}

    </div>
    <br>
</div>

@endsection
