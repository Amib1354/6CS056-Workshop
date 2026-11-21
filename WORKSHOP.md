# Workshop 1: Training Institute Management

This Laravel application implements the Week 1 Student and Course CRUD exercise with MySQL and Blade views.

## Database setup

1. Start MySQL from the XAMPP Control Panel.
2. In DBeaver, create a MySQL database named WorkshopDB if it does not already exist. The SQL is: CREATE DATABASE WorkshopDB;
3. Open .env and set DB_USERNAME and DB_PASSWORD to the account used by your MySQL connection. The example defaults to root with an empty password; keep the password local and do not commit .env.
4. Run the migrations with: php artisan migrate

## Run the application

Run: php artisan serve

Open http://127.0.0.1:8000. The root page redirects to Students.

- Students: /students
- Courses: /courses

Both resources include create, list, view, edit, and delete operations, validation, search, and pagination. The student-course many-to-many relationship is intentionally deferred to a later workshop, as the Week 1 guide specifies.