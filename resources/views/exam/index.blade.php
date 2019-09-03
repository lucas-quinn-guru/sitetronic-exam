@extends('layouts.default.master')

@section('title', 'Exams')

@section('content')
<div class="container">

    {{ Breadcrumbs::render('sitetronic-exam-index') }}
    <h2>Practice Exams</h2>
    <div class="row">
			<div class="col-sm-4">
				<a class="btn btn-lg btn-success" href="/exam/create">Create New Exam</a>
				<p>

				</p>
			</div>
			<div class="col-sm-4">
				<a class="btn btn-lg btn-success" href="/exam/list">Resume Exam in Progress</a>
				<p>

				</p>

			</div>
			<div class="col-sm-4">
				<a class="btn btn-lg btn-success" href="/exam/review">Exam History and Review</a>
				<p>

				</p>
			</div>
		</div>

</div>
@endsection
