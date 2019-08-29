@extends('layouts.default.master')

@section('title', 'Answer Admin')

@section('content')
<div class="container">
    <div class="col-lg-12">
        <h1>
            <i class="fa fa-users"></i> Exam Administration - Answers
        </h1>
        Question: {{$question->question}} <small class="text-muted"><a href='/admin/exam-question/{{$question->id}}/edit'><i class="fas fa-cog"></i></a></small>
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
                        <td>{{ $answer->number}}</td>
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
</div>
@endsection
