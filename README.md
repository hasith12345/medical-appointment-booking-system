# Medical Appointment Booking System

A Laravel-based medical appointment booking system with doctor management and patient scheduling.

![App Screenshot](public/project6.png)

## Features

- 🏥 Doctor Management (Add, Edit, Delete)
- 📅 Appointment Booking System
- 👥 User & Admin Authentication
- 🖼️ Doctor Image Upload
- 📱 Responsive Design

## Requirements

- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL
## Installation

```bash
# 1. Install dependencies
composer install && npm install

# 2. Setup environment
cp .env.example .env
php artisan key:generate

# 3. Configure database in .env
# Set DB_DATABASE, DB_USERNAME, DB_PASSWORD

# 4. Create database
mysql -u root -p -e "CREATE DATABASE hospital;"

# 5. Run migrations
php artisan migrate

# 6. Create storage link
php artisan storage:link

# 7. Build assets
npm run build
```

## Running the Application
///////////////////////////////////////////////////////////////////////////////////////
```bash
php artisan serve
```

Access at: **http://localhost:8000**

## Create Admin User

```sql
mysql -u root -p
USE hospital;
UPDATE users SET usertype = '1' WHERE email = 'your@email.com';
```

Or insert directly:
```sql
INSERT INTO users (name, email, password, usertype, created_at, updated_at) 
VALUES ('Admin', 'admin@test.com', '$2y$12$LQv3c1yqBWVHxkd0LHAkCOYz6TtxMQJqhN8/LewY5lQA.oBWuTEqW', '1', NOW(), NOW());
```
Login: `admin@test.com` | Password: `password`

## Routes

- `/` - Homepage
- `/login` - Login
- `/register` - Register
- `/dashboard` - Admin dashboard
- `/add_doctor_view` - Add doctor
- `/showdoctor` - Manage doctors
- `/myappointment` - User appointments

## Doctor Images

Upload images to `public/doctorimage/` via admin panel or manually:
```bash
cp image.jpg public/doctorimage/
```

## Troubleshooting

**Port in use:**
```bash
kill -9 $(lsof -ti:8000)
```

**Clear cache:**
```bash
php artisan cache:clear && php artisan config:clear && php artisan view:clear
```

**Permission errors:**
```bash
chmod -R 775 storage bootstrap/cache
```

**Database issues:**
- Check `.env` credentials
- Verify database exists: `mysql -u root -p -e "SHOW DATABASES;"`

## License

MIT License
