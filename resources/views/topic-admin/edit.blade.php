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
    <br>
    @if( isset( $questions ) && $questions->count() > 0 )
    <div class="col-lg-12">
        <h1>
            <i class="fa fa-users"></i> Exam Administration - Questions
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>#</th>
                        <th>Question</th>
                        <th>Review</th>
                        <th>Broker</th>
                        <th>Has Issue</th>
                        <th>Operations</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->question_number}}
                        <td>{{ $question->question }}</td>
                        <td class='text-center'>
                            @if( $question->is_review == 1  )
                                <i class='fas fa-check'></i>
                            @endif
                        </td>
                        <td class='text-center'>
                            @if( $question->is_broker == 1 )
                                <i class='fas fa-check'></i>
                            @endif
                        </td>
                        <td class='text-center'>
                            @if( $question->problem_notification == 1 )
                                <i class='fas fa-check'></i>
                            @endif
                        </td>
                        <td style="width:160px;">

                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.exam-question.destroy', $question->id] ]) !!}
                            <a href="{{ route('admin.exam-question.edit', $question->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
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
