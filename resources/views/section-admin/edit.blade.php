{{-- \resources\views\users\edit.blade.php --}}

@extends('layouts.default.master')

@section('title', 'Edit Exam Section')

@section('content')
<div class="container">
    <h1>
        <i class='fa fa-user-plus'></i> Edit {{$section->name}}
    </h1>
    <hr>
    <div class='col-lg-4 col-lg-offset-4'>


        {{-- Form model binding to automatically populate our fields with user data --}}
        {{ Form::model($section, array('route' => array('admin.exam-section.update', $section->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
        <a href='/add/exam-topic/{{$section->id}}/create' class='btn btn-primary'>Create Topic</a>
        {{ Form::close() }}

    </div>
</div>

@endsection
