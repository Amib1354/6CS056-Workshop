@extends('layouts.app')
@section('title', 'Create course')
@section('content')
<div class="page-heading"><div><h1>Create course</h1><p class="muted">Enter the course information.</p></div><a class="button secondary" href="{{ route('courses.index') }}">Back to courses</a></div>
<div class="card">@include('partials.errors')
<form method="POST" action="{{ route('courses.store') }}">@csrf @include('courses.fields')
<div class="form-actions"><button type="submit">Create course</button><a class="button secondary" href="{{ route('courses.index') }}">Cancel</a></div></form></div>
@endsection