<x-layouts.app title="Create course">
    <div class="page-heading"><div><h1>Create course</h1><p class="muted">Enter the course information.</p></div><a class="button secondary" href="{{ route('courses.index') }}">Back to courses</a></div>
    <div class="card"><x-alert type="error" />
        @include('components.courses.form', ['course' => $course, 'action' => route('courses.store'), 'method' => 'POST', 'buttonText' => 'Create course', 'cancelUrl' => route('courses.index')])
    </div>
</x-layouts.app>
