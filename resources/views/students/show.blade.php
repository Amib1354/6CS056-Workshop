@extends('layouts.app')
@section('title', 'Student details')
@section('content')
<div class="page-heading"><div><h1>Student details</h1><p class="muted">Record #{{ $student->id }}</p></div>
<div class="form-actions"><a class="button secondary" href="{{ route('students.index') }}">Back to students</a><a class="button" href="{{ route('students.edit', $student) }}">Edit student</a></div></div>
@if (session('success'))<div class="alert success" role="status">{{ session('success') }}</div>@endif
<div class="card"><dl class="detail-grid">
<div class="detail-item"><dt>Name</dt><dd>{{ $student->name }}</dd></div><div class="detail-item"><dt>Email</dt><dd>{{ $student->email }}</dd></div>
<div class="detail-item"><dt>Phone</dt><dd>{{ $student->phone }}</dd></div><div class="detail-item"><dt>Date of birth</dt><dd>{{ $student->date_of_birth?->format('F j, Y') ?? 'Not provided' }}</dd></div>
<div class="detail-item"><dt>Address</dt><dd>{{ $student->address ?: 'Not provided' }}</dd></div><div class="detail-item"><dt>Created</dt><dd>{{ $student->created_at?->format('F j, Y g:i A') }}</dd></div>
</dl></div>
@endsection