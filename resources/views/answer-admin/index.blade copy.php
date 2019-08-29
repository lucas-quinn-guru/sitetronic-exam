@extends('layouts.default.master')

@section('title', 'Answer Admin')

@section('content')
<div class="container">

    <div class="col-lg-12">
        <h1>
            <i class="fa fa-users"></i> Exam Administration - Questions
        </h1>
        Topic: {{$question->question}} <small class="text-muted"><a href='/admin/exam-topic/{{$topic->id}}/edit'><i class="fas fa-cog"></i></a></small>
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
</div>
@endsection
