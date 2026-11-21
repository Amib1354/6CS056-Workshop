<header><div class="nav">
    <a class="brand" href="{{ route('students.index') }}">Training Institute</a>
    <nav aria-label="Main navigation">
        <a class="{{ request()->routeIs('students.*') ? 'active' : '' }}" href="{{ route('students.index') }}">Students</a>
        <a class="{{ request()->routeIs('courses.*') ? 'active' : '' }}" href="{{ route('courses.index') }}">Courses</a>
    </nav>
</div></header>
