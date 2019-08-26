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
            {{ Form::label('question', 'Question') }}
            {{ Form::textarea('question', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('question_number', 'Question Number') }}
            <span class="form-control" id="question_number">{{$question->question_number}}</span>
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
                        <th>#</th>
                        <th>ID</th>
                        <th>Answer</th>
                        <th>Correct</th>
                        <th>Operations</th>
                    </tr>
                </thead>

                <tbody>
                    @php
                    $answer_count = 0;
                    @endphp
                    @foreach ($answers as $answer)
                    @php
                    $answer_count++;
                    @endphp
                    <tr>
                        <td>{{ $answer_count}}</td>
                        <td>{{ $answer->id }}</td>
                        <td>{{ $answer->answer }}</td>

                        <td class='text-center'>
                            @if( $answer->correct== 1  )
                                <i class='fas fa-check'></i>
                            @endif
                        </td>
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
