# Training Institute Management

Laravel application for managing students and courses. Workshop 1 implements CRUD; Workshop 2 organizes the same behavior with controllers, resource routes, reusable Blade components, and a shared layout.

## Requirements

- PHP 8.2 or later and Composer
- MySQL (XAMPP is suitable)
- Node.js and npm, if rebuilding frontend assets

## Setup

1. Start MySQL and create a database named `WorkshopDB` in DBeaver.
2. Copy `.env.example` to `.env` and set `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` for your local MySQL account. Keep `.env` private; it is ignored by Git.
3. Install PHP dependencies with `composer install`.
4. Generate the application key with `php artisan key:generate`.
5. Run database migrations with `php artisan migrate`.
6. Start Laravel with `php artisan serve` and open `http://127.0.0.1:8000`.

## Pages

- `/students` - search, list, view, create, edit, and delete students
- `/courses` - search, list, view, create, edit, and delete courses

The `Workshop1` branch contains the original CRUD implementation. The `Workshop2` branch refactors that implementation with `StudentController`, `CourseController`, `Route::resource`, route model binding, shared validation rules, reusable Blade components, and a responsive shared layout.
