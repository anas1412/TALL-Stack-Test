<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Overview

This project utilizes the TALL (Tailwind CSS, Alpine.js, Laravel, and Livewire) stack to create a dynamic web application with various components.

## Components

### 1. Counter

#### Description

The Counter component provides a simple counter feature with the ability to increment, decrement, and reset the counter value.

#### Implementation

-   **Livewire Component:** `Counter`
-   **View:** `counter.blade.php`
-   **Livewire Class:** `App\Livewire\Counter`

#### Usage

```html
@livewire('counter')
```

### 2. Counter

#### Description

The Calculator component allows users to perform basic arithmetic operations such as addition, subtraction, multiplication, and division.

#### Implementation

-   **Livewire Component:** `Calculator`
-   **View:** `calculator.blade.php`
-   **Livewire Class:** `App\Livewire\Calculator`

#### Usage

```html
@livewire('calculator')
```

### 3. User Count

#### Description

The UserCount component displays the total number of users in the database.

#### Implementation

-   **Livewire Component:** `UserCount
-   **View:** `user-count.blade.php`
-   **Livewire Class:** `App\Livewire\UserCount`

#### Usage

```html
@livewire('user-count')
```

### 4. User Dynamic Live Search

#### Description

The UserSearch component allows users to search for users in the database using a dynamic live search feature based on their names or emails.

#### Implementation

-   **Livewire Component:** `UserSearch`
-   **View:** `user-search.blade.php`
-   **Livewire Class:** `App\Livewire\UserSearch`

#### Usage

```html
@livewire('user-search')
```

### How to Run the Project

1. Clone the repository:

```bash
git clone https://github.com/anas1412/TALL-Stack-Test.git
```

2. Navigate to the project directory:

```bash
cd TALL-Stack-Test
```

3. Install the project dependencies:

```bash
composer install
npm install
```

4. Create a new `.env` file:

```bash
cp .env.example .env
```

5. Generate a new application key:

```
php artisan key:generate
```

6. Create a new database and update the `.env` file with the database credentials:

```
DB_CONNECTION=mysql
DB_DATABASE=<your-database-name>
DB_USERNAME=root   // or your database username
DB_PASSWORD=      // or your database password
```

7. Migrate the database:

```bash
php artisan migrate
```

8. Serve the application:

```bash
php artisan serve
```

9. Visit the application in your browser:

```
http://127.0.0.1:8000
```

#### Screenshots

![image](https://raw.githubusercontent.com/anas1412/TALL-Stack-Test/main/LaravelTest01.png)

#### Additional Notes

-   The project is built using Laravel 8 and PHP 7.4.
-   The project uses the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Livewire).
-   The project includes a simple counter component, a calculator component, a user count component, and a user search component.
-   The project includes a simple database with a `users` table to demonstrate the user count and user search components.
-   The project includes a simple layout with a navigation bar and a footer.

#### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
