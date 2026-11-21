@extends('layouts.app')
@section('title', 'Students')
@section('content')
<div class="page-heading"><div><h1>Students</h1><p class="muted">Manage student records for the training institute.</p></div><a class="button" href="{{ route('students.create') }}">Create student</a></div>
@if (session('success'))<div class="alert success" role="status">{{ session('success') }}</div>@endif
<div class="card">
<form class="search" method="GET" action="{{ route('students.index') }}">
    <label for="student-search">Search students</label><input id="student-search" type="search" name="search" value="{{ $search }}" placeholder="Search by name, email, or phone">
    <button type="submit">Search</button>@if ($search !== '')<a class="button secondary" href="{{ route('students.index') }}">Clear</a>@endif
</form>
<div class="table-wrap"><table><thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr></thead><tbody>
@forelse ($students as $student)
<tr><td>{{ $student->name }}</td><td>{{ $student->email }}</td><td>{{ $student->phone }}</td><td><div class="actions">
<a href="{{ route('students.show', $student) }}">View</a><a href="{{ route('students.edit', $student) }}">Edit</a>
<form method="POST" action="{{ route('students.destroy', $student) }}" onsubmit="return confirm('Delete this student?')">@csrf @method('DELETE')<button class="link-button" type="submit">Delete</button></form>
</div></td></tr>
@empty<tr><td colspan="4">No students found.</td></tr>@endforelse
</tbody></table></div><div class="pagination">{{ $students->links() }}</div>
</div>
@endsection