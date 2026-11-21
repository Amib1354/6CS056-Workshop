<x-layouts.app title="Students">
<div class="page-heading"><div><h1>Students</h1><p class="muted">Manage student records for the training institute.</p></div><a class="button" href="{{ route('students.create') }}">Create student</a></div>
<x-alert :message="session('success')" />
<div class="card">
<form class="search" method="GET" action="{{ route('students.index') }}">
    <label for="student-search">Search students</label><input id="student-search" type="search" name="search" value="{{ $search }}" placeholder="Search by name, email, or phone">
    <button type="submit">Search</button>@if ($search !== '')<a class="button secondary" href="{{ route('students.index') }}">Clear</a>@endif
</form>
<div class="table-wrap"><table><thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr></thead><tbody>
@forelse ($students as $student)
<tr><td>{{ $student->name }}</td><td>{{ $student->email }}</td><td>{{ $student->phone }}</td><td><div class="actions">
<a href="{{ route('students.show', $student) }}">View</a><a href="{{ route('students.edit', $student) }}">Edit</a>
<x-delete-form :action="route('students.destroy', $student)" item="student" />
</div></td></tr>
@empty<tr><td colspan="4">No students found.</td></tr>@endforelse
</tbody></table></div><div class="pagination">{{ $students->links() }}</div>
</div>
</x-layouts.app>
