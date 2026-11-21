# Workshop 2: MVC in Laravel

This branch keeps the Workshop 1 student and course CRUD behavior and reorganizes it using Laravel MVC patterns.

## Run locally

1. Start MySQL in XAMPP and make sure the `WorkshopDB` database exists in DBeaver.
2. Check the local database settings in `.env`.
3. Run `php artisan migrate` if the tables have not been created yet.
4. Run `php artisan serve` and open `http://127.0.0.1:8000`.

## Workshop 2 structure

- `StudentController` and `CourseController` handle CRUD requests, searching, and validation.
- `routes/web.php` uses `Route::resource` and named routes.
- Route model binding provides each requested student or course to its controller action.
- `resources/views/components/layouts/app.blade.php` provides the shared page layout; the navbar and footer are separate components.
- Alert, delete form, input, and textarea components are reused across the views.
- Student and course create/edit pages each use one shared form partial.
- `Student` casts date of birth as a date and exposes the calculated age accessor.

The `Workshop1` branch is the starting CRUD implementation. `Workshop2` is based on it and contains the MVC refactor.
