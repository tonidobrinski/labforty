# LabForty

A Laravel app — mostly simple HTML/CSS(Tailwind CSS 4). These notes explain how to get it running locally.

## Quick start

-   Clone the repo:

```bash
git clone <repo-url>
cd labforty
```

-   Copy the environment file and install PHP dependencies:

```bash
copy .env.example .env       # on Windows (CMD)
# or on macOS / Linux
cp .env.example .env
composer install
```

-   Create the app key and set up the database:

```bash
php artisan key:generate
php artisan migrate --seed
```

```bash
npm install
npm run dev
```

-   Start the app locally:

```bash
php artisan serve
# Visit http://127.0.0.1:8000
```

If you're using XAMPP, point your browser to `http://localhost/labforty/public` or add a virtual host for nicer URLs.

## Running tests

```bash
php artisan test
# or
./vendor/bin/phpunit
```

## Troubleshooting tips

-   If `npm` is blocked in PowerShell, run it from CMD or enable script execution.
-   If `php artisan serve` reports a port conflict: `php artisan serve --port=8080`.
