{{-- \resources\views\users\edit.blade.php --}}

@extends('layouts.default.master')

@section('title', 'Edit Exam Section')

@section('content')
<div class="container">
    <h2>
        <i class='fa fa-user-plus'></i> Edit Section - {{$section->name}}
    </h2>
    <hr>
    <div class='col-lg-6 col-lg-offset-4'>


        {{-- Form model binding to automatically populate our fields with user data --}}
        {{ Form::model($section, array('route' => [ 'admin.exam-section.update', $section->id ], 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <span class="form-control" id="slug">{{$section->slug}}</span>
        </div>

        <div class="form-group">
            {{ Form::label('active', 'Active') }}
            {{ Form::select('active', ['0' => 'No', '1' => 'Yes'], null, ['class'=>'form-control'] ) }}
        </div>

        {{ Form::submit('Update', array('class' => 'btn btn-success btn-lg btn-block')) }}
        <a href='/admin/exam-section' class='btn btn-primary btn-lg btn-block'>Back to Sections</a>
        {{ Form::close() }}

    </div>
</div>

@endsection
