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

    @if( $topics->count() > 0 )
    <div class="col-lg-12">
        <h1>
            <i class="fa fa-users"></i> Exam Administration - Topics
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Topic</th>
                        <th>Date/Time Added</th>
                        <th>Operations</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($topics as $topic)
                    <tr>
                        <td>{{ $topic->id }}</td>
                        <td>{{ $topic->name }}</td>

                        <td>{{ $topic->created_at->format('F d, Y h:ia') }}</td>
                        <td>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.exam-topic.destroy', $topic->id] ]) !!}
                            <a href="{{ route('admin.exam-topic.edit', $topic->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
</div>

@endsection
