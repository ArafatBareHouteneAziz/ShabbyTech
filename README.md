# ShabbyTech - Professional Tech Services Website

A modern, responsive website built with Laravel 11 and Filament v3 for a computer science engineer offering software development, machine learning, IoT, and training services.

## Features

- Modern, responsive design using Tailwind CSS
- Multi-page website with Home, Services, About, Portfolio, and Contact pages
- Contact form with database storage
- Admin panel using Filament v3
- SQLite database for simplicity

## Tech Stack

- Laravel 11
- Filament v3
- Tailwind CSS
- Vite
- SQLite

## Installation

1. Clone the repository:
```bash
git clone https://github.com/ArafatBareHouteneAziz/ShabbyTech.git
cd ShabbyTech
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node.js dependencies:
```bash
npm install
```

4. Set up your environment:
```bash
cp .env.example .env
php artisan key:generate
```

5. Create SQLite database:
```bash
touch database/database.sqlite
```

6. Run migrations:
```bash
php artisan migrate
```

7. Build assets:
```bash
npm run dev
```

8. Start the development server:
```bash
php artisan serve
```

## Admin Panel

Access the admin panel at `/admin` after creating an admin user:

```bash
php artisan make:filament-user
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
