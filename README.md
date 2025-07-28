## Installation Guide

### Prerequisites

| Software         | Version | Installation Guide                                              |
|------------------|---------|-----------------------------------------------------------------|
| PHP              | ≥ 8.2   | [php.net](https://www.php.net/download)                         |
| Composer         | Latest  | [getcomposer.org](https://getcomposer.org/download/)            |
| MySQL/PostgreSQL | ≥ 5.7   | [mysql.com](https://dev.mysql.com/downloads/)                    |

### 1. Clone Repository

```bash
git clone https://github.com/ezzyraouy/AboutMe.git
```

### 2. Environment Setup

```bash
cp .env.example .env
```

Configure these key variables in `.env`:

```ini
APP_URL=http://localhost:8000
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=

```

### 3. Install Dependencies

```bash
composer install
```

### 4. Application Setup

```bash
# Generate app key
php artisan key:generate

# Run migrations with seed
php artisan migrate --seed

# Clear the configuration and cache:
php artisan config:clear
php artisan cache:clear
```

_Default test user created:_
- **Email:** admin@admin.com
- **Password:** admin1234

### 5. Start Development Servers

**Termina**

```bash
php artisan serve
```