@extends('layouts.default.master')

@section('title', 'Exams Administration')

@section('content')
<div class="container">

    {{ Breadcrumbs::render('sitetronic-exam-admin-index') }}

    <a href='/admin/exam-section'>Exam Sections</a>
</div>
@endsection
