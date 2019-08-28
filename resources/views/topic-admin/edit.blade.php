{{-- \resources\views\topic-admin\edit.blade.php --}}

@extends('layouts.default.master')

@section('title', 'Edit Exam Topic')

@section('content')
<div class="container">
    <h1>
        <i class='fa fa-user-plus'></i> Edit Exam Topic
    </h1>
    <hr>
    <div class='col-lg-6 col-lg-offset-4'>

        {{-- Form model binding to automatically populate our fields with user data --}}
        {{ Form::model($topic, [ 'route' => [ 'admin.exam-topic.update', "id"=>$topic->id ], 'method' => 'PUT' ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <span class="form-control" id="slug">{{$topic->slug}}</span>
        </div>

        <div class="form-group">
            {{ Form::label('active', 'Active') }}
            {{ Form::select('active', ['0' => 'No', '1' => 'Yes'], null, ['class'=>'form-control'] ) }}
        </div>

        {{ Form::submit('Update Topic', array('class' => 'btn btn-success btn-lg btn-block')) }}
        <a href='/admin/exam-section/{{ $section->id }}' class='btn btn-primary btn-lg btn-block'>Back to Section</a>
        {{ Form::close() }}

    </div>

</div>

@endsection
