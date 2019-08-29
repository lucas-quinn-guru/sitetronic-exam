@extends('layouts.default.master')

@section('title', 'Sections')

@section('content')
<div class="container">
    {{ Breadcrumbs::render('sitetronic-exam-section-index') }}
    <div class="col-lg-10 col-lg-offset-1">
        <h1>
            <i class="fa fa-users"></i> Exam Administration - Sections
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date/Time Added</th>
                        <th>Operations</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($sections as $section)
                    <tr>
                        <td>{{ $section->id }}</td>
                        <td>{{ $section->name }}</td>

                        <td>{{ $section->created_at->format('F d, Y h:ia') }}</td>
                        <td>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.exam-section.destroy', $section->id] ]) !!}
                            <a href="{{ route('admin.exam-topic.index', $section->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Topics</a>

                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('admin.exam-section.create') }}" class="btn btn-success">Add Section</a>

    </div>
</div>

@endsection
