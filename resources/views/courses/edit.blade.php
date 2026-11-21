@extends('layouts.app')
@section('title', 'Edit course')
@section('content')
<div class="page-heading"><div><h1>Edit course</h1><p class="muted">Update the course information.</p></div><a class="button secondary" href="{{ route('courses.show', $course) }}">Back to course</a></div>
<div class="card">@include('partials.errors')
<form method="POST" action="{{ route('courses.update', $course) }}">@csrf @method('PUT') @include('courses.fields')
<div class="form-actions"><button type="submit">Update course</button><a class="button secondary" href="{{ route('courses.show', $course) }}">Cancel</a></div></form></div>
@endsection