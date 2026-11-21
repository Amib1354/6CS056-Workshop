<x-layouts.app title="Edit course">
    <div class="page-heading"><div><h1>Edit course</h1><p class="muted">Update the course information.</p></div><a class="button secondary" href="{{ route('courses.show', $course) }}">Back to course</a></div>
    <div class="card"><x-alert type="error" />
        @include('components.courses.form', ['course' => $course, 'action' => route('courses.update', $course), 'method' => 'PUT', 'buttonText' => 'Update course', 'cancelUrl' => route('courses.show', $course)])
    </div>
</x-layouts.app>
