<x-layouts.app title="Create student">
    <div class="page-heading"><div><h1>Create student</h1><p class="muted">Enter the student's information.</p></div><a class="button secondary" href="{{ route('students.index') }}">Back to students</a></div>
    <div class="card"><x-alert type="error" />
        @include('components.students.form', ['student' => $student, 'action' => route('students.store'), 'method' => 'POST', 'buttonText' => 'Create student', 'cancelUrl' => route('students.index')])
    </div>
</x-layouts.app>
