@extends('layouts.app')
@section('title', 'Create student')
@section('content')
<div class="page-heading"><div><h1>Create student</h1><p class="muted">Enter the student's information.</p></div><a class="button secondary" href="{{ route('students.index') }}">Back to students</a></div>
<div class="card">@include('partials.errors')
<form method="POST" action="{{ route('students.store') }}">@csrf @include('students.fields')
<div class="form-actions"><button type="submit">Create student</button><a class="button secondary" href="{{ route('students.index') }}">Cancel</a></div></form></div>
@endsection