<div align="center">
  <h1>Micro Work Service</h1>
  <p><em>Launch, manage, and verify crowdsourced micro-jobs, gigs, and contests with built-in wallet flows.</em></p>

  <p>
    <img alt="Tech" src="https://img.shields.io/badge/Stack-Laravel%208%20%7C%20PHP%207.3%2B%20%7C%20Bootstrap%205-blue" />
    <img alt="License" src="https://img.shields.io/badge/License-MIT-green" />
    <img alt="Status" src="https://img.shields.io/badge/Status-Active-success" />
    <img alt="Version" src="https://img.shields.io/badge/Version-0.1.0-orange" />
  </p>
</div>

## Introduction
Micro Work Service is a Laravel-powered marketplace for short-term digital tasks. It lets requesters post jobs, gigs, or contests; collect participant proofs; and handle deposits or withdrawals through an in-app wallet. Admins manage catalog data through Backpack CRUD screens.

## Features
- 🚀 Browse featured and latest micro-jobs by category with pagination.
- 🧾 Submit proof for jobs and contests with file uploads for fast approvals.
- 🛠️ Create gigs with rich descriptions, images, and pricing from authenticated dashboards.
- 🧲 Promote campaigns by raising a job's priority to featured placement.
- 💰 Deposit or withdraw funds with tracked balances and transaction history.
- 🛡️ Admin CRUD for jobs, contests, categories, charges, and user wallets via Backpack.

## Use Cases & Examples
- **Launch a job campaign:** Authenticated users open `/add-job` to set category, payout, and availability. Posting deducts budget totals and optionally escalates the job as a featured campaign for higher visibility.
- **Submit task proof:** Workers visit `/job-details={id}` and upload screenshots or notes through `/submit-proof`; approvers can review, approve, or reject entries to update user earnings and job availability.
- **Run a gig storefront:** Creators add gigs via `/add-gig`, including media uploads. Visitors browse `/gigs` by category, view creator profiles, and leave ratings to build reputation.

## Tech Stack
- **Backend:** Laravel 8 (PHP 7.3+), Backpack CRUD, Bavix Laravel Wallet utilities, PHPMailer
- **Frontend:** Blade templates, Bootstrap 5, Vue 2, Laravel Mix, Axios
- **Data:** Eloquent ORM with MySQL/PostgreSQL-compatible migrations
- **Tooling:** Composer, NPM, PHPUnit

## Getting Started
### Prerequisites
- PHP 7.3+ with Composer
- Node.js 14+ with NPM or Yarn
- MySQL/PostgreSQL instance and `.env` configuration

### Installation
```bash
# Install PHP dependencies
composer install

# Install front-end tooling
npm install

# Environment and app key
cp .env.example .env
php artisan key:generate

# Build assets
npm run dev

# Run database migrations
php artisan migrate
```

### Configuration
Update `.env` with your database and mail settings:
```env
APP_NAME="Micro Work Service"
APP_ENV=local
APP_KEY=base64:generated-key
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=micro_work_service
DB_USERNAME=root
DB_PASSWORD=secret

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

## Project Structure
```
app/Http/Controllers/        # Web controllers for jobs, gigs, contests, wallets, and auth
app/Http/Controllers/Admin/  # Backpack CRUD controllers for catalog and wallet data
app/Models/                  # Eloquent models for marketplace entities
resources/views/             # Blade templates for public pages and user dashboards
routes/web.php               # Route definitions for public and authenticated flows
public/                      # Public assets and entry point (index.php)
```

## Contributing
1. Fork the repository and create a feature branch.
2. Follow PSR-12 coding standards and Laravel conventions.
3. Write unit or feature tests where applicable.
4. Open a pull request describing changes and test coverage.

## License
This project is open-sourced software licensed under the [MIT license](LICENSE).
