<?php

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

Route::get('/', fn () => redirect()->route('students.index'));

Route::get('/students', function (Request $request) {
    $search = trim((string) $request->query('search', ''));
    $students = Student::query()
        ->when($search, fn ($query) => $query->where(function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('phone', 'like', "%{$search}%");
        }))
        ->orderBy('name')
        ->paginate(10)
        ->withQueryString();

    return view('students.index', compact('students', 'search'));
})->name('students.index');

Route::get('/students/create', fn () => view('students.create', ['student' => new Student()]))->name('students.create');

Route::post('/students', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:students,email',
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string|max:500',
        'date_of_birth' => 'nullable|date',
    ]);

    $student = Student::create($validated);

    return redirect()->route('students.index')
        ->with('success', "Student {$student->name} created successfully!");
})->name('students.store');

Route::get('/students/{student}', function (Student $student) {
    return view('students.show', compact('student'));
})->name('students.show');

Route::get('/students/{student}/edit', function (Student $student) {
    return view('students.edit', compact('student'));
})->name('students.edit');

Route::put('/students/{student}', function (Request $request, Student $student) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => ['required', 'email', 'max:255', Rule::unique('students', 'email')->ignore($student->id)],
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string|max:500',
        'date_of_birth' => 'nullable|date',
    ]);

    $student->update($validated);

    return redirect()->route('students.show', $student)
        ->with('success', 'Student updated successfully!');
})->name('students.update');

Route::delete('/students/{student}', function (Student $student) {
    $name = $student->name;
    $student->delete();

    return redirect()->route('students.index')
        ->with('success', "Student {$name} deleted successfully!");
})->name('students.destroy');

Route::get('/courses', function (Request $request) {
    $search = trim((string) $request->query('search', ''));
    $courses = Course::query()
        ->when($search, fn ($query) => $query->where(function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhere('difficulty', 'like', "%{$search}%");
        }))
        ->orderBy('name')
        ->paginate(10)
        ->withQueryString();

    return view('courses.index', compact('courses', 'search'));
})->name('courses.index');

Route::get('/courses/create', fn () => view('courses.create', ['course' => new Course()]))->name('courses.create');

Route::post('/courses', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:2000',
        'duration' => 'required|integer|min:1|max:520',
        'fee' => 'required|numeric|min:0|max:99999999.99',
        'difficulty' => ['required', Rule::in(['easy', 'medium', 'hard'])],
    ]);
    $validated['is_active'] = $request->boolean('is_active');

    $course = Course::create($validated);

    return redirect()->route('courses.index')
        ->with('success', "Course {$course->name} created successfully!");
})->name('courses.store');

Route::get('/courses/{course}', function (Course $course) {
    return view('courses.show', compact('course'));
})->name('courses.show');

Route::get('/courses/{course}/edit', function (Course $course) {
    return view('courses.edit', compact('course'));
})->name('courses.edit');

Route::put('/courses/{course}', function (Request $request, Course $course) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:2000',
        'duration' => 'required|integer|min:1|max:520',
        'fee' => 'required|numeric|min:0|max:99999999.99',
        'difficulty' => ['required', Rule::in(['easy', 'medium', 'hard'])],
    ]);
    $validated['is_active'] = $request->boolean('is_active');

    $course->update($validated);

    return redirect()->route('courses.show', $course)
        ->with('success', 'Course updated successfully!');
})->name('courses.update');

Route::delete('/courses/{course}', function (Course $course) {
    $name = $course->name;
    $course->delete();

    return redirect()->route('courses.index')
        ->with('success', "Course {$name} deleted successfully!");
})->name('courses.destroy');