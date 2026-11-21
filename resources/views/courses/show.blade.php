@extends('layouts.app')
@section('title', 'Course details')
@section('content')
<div class="page-heading"><div><h1>Course details</h1><p class="muted">Record #{{ $course->id }}</p></div>
<div class="form-actions"><a class="button secondary" href="{{ route('courses.index') }}">Back to courses</a><a class="button" href="{{ route('courses.edit', $course) }}">Edit course</a></div></div>
@if (session('success'))<div class="alert success" role="status">{{ session('success') }}</div>@endif
<div class="card"><dl class="detail-grid">
<div class="detail-item"><dt>Name</dt><dd>{{ $course->name }}</dd></div><div class="detail-item"><dt>Description</dt><dd>{{ $course->description ?: 'Not provided' }}</dd></div>
<div class="detail-item"><dt>Duration</dt><dd>{{ $course->duration }} {{ \Illuminate\Support\Str::plural('week', $course->duration) }}</dd></div><div class="detail-item"><dt>Fee</dt><dd>{{ number_format((float) $course->fee, 2) }}</dd></div>
<div class="detail-item"><dt>Difficulty</dt><dd>{{ ucfirst($course->difficulty) }}</dd></div><div class="detail-item"><dt>Status</dt><dd>{{ $course->is_active ? 'Active' : 'Inactive' }}</dd></div>
</dl></div>
@endsection