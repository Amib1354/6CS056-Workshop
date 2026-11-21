@extends('layouts.app')
@section('title', 'Edit student')
@section('content')
<div class="page-heading"><div><h1>Edit student</h1><p class="muted">Update the student's information.</p></div><a class="button secondary" href="{{ route('students.show', $student) }}">Back to student</a></div>
<div class="card">@include('partials.errors')
<form method="POST" action="{{ route('students.update', $student) }}">@csrf @method('PUT') @include('students.fields')
<div class="form-actions"><button type="submit">Update student</button><a class="button secondary" href="{{ route('students.show', $student) }}">Cancel</a></div></form></div>
@endsection