@extends('layouts.default.master')

@section('title', 'Edit Exam Topic')

@section('content')
<div class="container">
    {{ Breadcrumbs::render('sitetronic-exam-admin-topic-index', $section) }}
    <div class="col-lg-12">
        <h1>
            <i class="fa fa-users"></i> Exam Administration - Topics
        </h1>
        Section: {{$section->name}} <small class="text-muted"><a href='/admin/exam-section/{{$section->id}}/edit'><i class="fas fa-cog"></i></a></small>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Topic</th>
                        <th>Active</th>
                        <th>Date/Time Added</th>
                        <th>Operations</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($topics as $topic)
                    <tr>
                        <td>{{ $topic->id }}</td>
                        <td>{{ $topic->name }}</td>
                        <td class='text-center'>
                            @if( $topic->active == 1  )
                                <i class='fas fa-check'></i>
                            @endif
                        </td>
                        <td>{{ $topic->created_at->format('F d, Y h:ia') }}</td>
                        <td style='width:210px;'>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.exam-topic.destroy', $topic->id] ]) !!}
                            <a href="{{ route('admin.exam-question.index', $topic->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Questions</a>
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href='/admin/exam-topic/create/{{$section->id}}' class='btn btn-primary btn-lg btn-block'>Create New Topic</a>
    </div>
</div>
@endsection
