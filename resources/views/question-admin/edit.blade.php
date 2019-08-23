{{-- \resources\views\topic-admin\edit.blade.php --}}

@extends('layouts.default.master')

@section('title', 'Edit Exam Question')

@section('content')
<div class="container">
    <h1>
        <i class='fa fa-user-plus'></i> Edit Exam Question
    </h1>
    <hr>
    <div class='col-lg-6 col-lg-offset-4'>

        {{-- Form model binding to automatically populate our fields with user data --}}
        {{ Form::model($question, [ 'route' => [ 'admin.exam-question.update', "id"=>$question->id ], 'method' => 'PUT' ]) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <span class="form-control" id="slug">{{$question->slug}}</span>
        </div>

        <div class="form-group">
            {{ Form::label('active', 'Active') }}
            {{ Form::select('active', ['0' => 'No', '1' => 'Yes'], null, ['class'=>'form-control'] ) }}
        </div>

        {{ Form::submit('Update Question', array('class' => 'btn btn-success btn-lg btn-block')) }}
        <a href='/admin/exam-topic/{{ $topic->id }}' class='btn btn-primary btn-lg btn-block'>Back to Topic</a>
        {{ Form::close() }}

    </div>
    <br>
    @if( isset( $answers ) && $answers->count() > 0 )
    <div class="col-lg-12">
        <h1>
            <i class="fa fa-users"></i> Exam Administration - Answers
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Answer</th>
                        <th>Date/Time Added</th>
                        <th>Operations</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($answers as $answer)
                    <tr>
                        <td>{{ $answer->id }}</td>
                        <td>{{ $answer->name }}</td>

                        <td>{{ $answer->created_at->format('F d, Y h:ia') }}</td>
                        <td>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.exam-answer.destroy', $answer->id] ]) !!}
                            <a href="{{ route('admin.exam-answer.edit', $answer->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
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
