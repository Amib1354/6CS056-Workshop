<x-layouts.app title="Edit student">
    <div class="page-heading"><div><h1>Edit student</h1><p class="muted">Update the student's information.</p></div><a class="button secondary" href="{{ route('students.show', $student) }}">Back to student</a></div>
    <div class="card"><x-alert type="error" />
        @include('components.students.form', ['student' => $student, 'action' => route('students.update', $student), 'method' => 'PUT', 'buttonText' => 'Update student', 'cancelUrl' => route('students.show', $student)])
    </div>
</x-layouts.app>
