@extends('layouts.app')
@section('title', 'Courses')
@section('content')
<div class="page-heading"><div><h1>Courses</h1><p class="muted">Manage the courses offered by the training institute.</p></div><a class="button" href="{{ route('courses.create') }}">Create course</a></div>
@if (session('success'))<div class="alert success" role="status">{{ session('success') }}</div>@endif
<div class="card">
<form class="search" method="GET" action="{{ route('courses.index') }}">
<label for="course-search">Search courses</label><input id="course-search" type="search" name="search" value="{{ $search }}" placeholder="Search by course, description, or difficulty">
<button type="submit">Search</button>@if ($search !== '')<a class="button secondary" href="{{ route('courses.index') }}">Clear</a>@endif
</form>
<div class="table-wrap"><table><thead><tr><th>Course</th><th>Duration</th><th>Fee</th><th>Difficulty</th><th>Status</th><th>Actions</th></tr></thead><tbody>
@forelse ($courses as $course)
<tr><td>{{ $course->name }}</td><td>{{ $course->duration }} {{ \Illuminate\Support\Str::plural('week', $course->duration) }}</td><td>{{ number_format((float) $course->fee, 2) }}</td><td>{{ ucfirst($course->difficulty) }}</td><td>{{ $course->is_active ? 'Active' : 'Inactive' }}</td>
<td><div class="actions"><a href="{{ route('courses.show', $course) }}">View</a><a href="{{ route('courses.edit', $course) }}">Edit</a>
<form method="POST" action="{{ route('courses.destroy', $course) }}" onsubmit="return confirm('Delete this course?')">@csrf @method('DELETE')<button class="link-button" type="submit">Delete</button></form></div></td></tr>
@empty<tr><td colspan="6">No courses found.</td></tr>@endforelse
</tbody></table></div><div class="pagination">{{ $courses->links() }}</div>
</div>
@endsection