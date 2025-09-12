# Medical Appointment Booking System

<p align="center">
<img src="https://img.shields.io/badge/Laravel-11.x-red.svg" alt="Laravel Version">
<img src="https://img.shields.io/badge/PHP-8.2+-blue.svg" alt="PHP Version">
<img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
</p>

A comprehensive medical appointment booking system built with Laravel 11, featuring doctor management, appointment scheduling, and user authentication.

![Alt text](https://drive.google.com/file/d/1tmv3ChvPs6vYv6otwpzxCj7TFyTemG1t/view?usp=sharing)

## Features

### 🏥 Core Functionality
- **Doctor Management**: Add, view, and manage doctor profiles with specialties and room assignments
- **Appointment Booking**: Patients can book appointments with available doctors
- **User Authentication**: Secure login system with Laravel Jetstream
- **Admin Dashboard**: Administrative interface for managing doctors and appointments
- **Responsive Design**: Mobile-friendly interface using Tailwind CSS

### 👨‍⚕️ Doctor Features
- Doctor profiles with images, specialties, and contact information
- Room assignment and availability management
- Doctor image upload and storage

### 📅 Appointment Features
- Online appointment booking
- Appointment status tracking
- User appointment history
- Email and phone contact information

### 🔐 Security Features
- Laravel Sanctum for API authentication
- Two-factor authentication support
- Protected admin routes
- CSRF protection

## Tech Stack

- **Backend**: Laravel 11.x
- **Frontend**: Livewire 3.0, Tailwind CSS
- **Authentication**: Laravel Jetstream with Sanctum
- **Database**: MySQL/PostgreSQL (configurable)
- **Asset Bundling**: Vite
- **Testing**: PHPUnit

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL/PostgreSQL
- Web server (Apache/Nginx)
## Installation

### 1. Clone the Repository
```bash
git clone <repository-url>
cd laravel_-master
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup
Configure your database in the `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run the migrations:
```bash
php artisan migrate
```

### 5. Storage Setup
```bash
# Create storage symlink for file uploads
php artisan storage:link
```

### 6. Build Assets
```bash
# Build frontend assets
npm run build

# Or for development with hot reload
npm run dev
```

### 7. Start the Application
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Usage

### For Patients
1. **Register/Login**: Create an account or login to access the system
2. **Browse Doctors**: View available doctors with their specialties
3. **Book Appointment**: Schedule appointments with preferred doctors
4. **View Appointments**: Check your appointment history and status

### For Administrators
1. **Access Admin Panel**: Login with admin credentials
2. **Add Doctors**: Register new doctors with their details and photos
3. **Manage Appointments**: View and update appointment statuses
4. **Doctor Management**: Edit doctor information and availability

## API Endpoints

### Public Routes
- `GET /` - Homepage
- `POST /appointment` - Book an appointment

### Authenticated Routes
- `GET /dashboard` - User dashboard
- `GET /myappointment` - User's appointments

### Admin Routes
- `GET /add_doctor_view` - Add doctor form
- `POST /upload_doctor` - Create new doctor
- `GET /showdoctor` - List all doctors

## Database Schema

### Users Table
- Authentication and user profile information
- Two-factor authentication support

### Doctors Table
- `name` - Doctor's full name
- `phone` - Contact phone number
- `speciality` - Medical specialty
- `room` - Assigned room number
- `image` - Profile photo

### Appointments Table
- `name` - Patient name
- `email` - Patient email
- `phone` - Patient phone
- `doctor` - Assigned doctor
- `date` - Appointment date
- `message` - Additional notes
- `status` - Appointment status
- `user_id` - Associated user

## File Structure

```
app/
├── Http/Controllers/
│   ├── AdminController.php    # Admin functionality
│   └── HomeController.php     # Public pages and appointments
├── Models/
│   ├── User.php              # User model with Jetstream
│   ├── Doctor.php            # Doctor model
│   └── Appointment.php       # Appointment model
resources/views/              # Blade templates
public/doctorimage/          # Doctor profile images
database/migrations/         # Database schema
```

## Testing

Run the test suite:
```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php
```

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Development Guidelines
- Follow PSR-12 coding standards
- Write tests for new features
- Update documentation for any changes
- Use meaningful commit messages

## Security

If you discover a security vulnerability, please send an email to the project maintainer. All security vulnerabilities will be promptly addressed.

### Security Features
- CSRF protection on all forms
- SQL injection prevention through Eloquent ORM
- Authentication via Laravel Sanctum
- File upload validation and sanitization

## Troubleshooting

### Common Issues

**Permission Errors**
```bash
sudo chmod -R 775 storage bootstrap/cache
sudo chown -R $USER:www-data storage bootstrap/cache
```

**Database Connection Issues**
- Verify database credentials in `.env`
- Ensure database exists and is accessible
- Check if database service is running

**Asset Compilation Issues**
```bash
npm cache clean --force
rm -rf node_modules package-lock.json
npm install
npm run build
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support and questions:
- Create an issue in the repository
- Check the Laravel documentation: [https://laravel.com/docs](https://laravel.com/docs)
- Visit Laravel community forums

---

Built with ❤️ using Laravel and modern web technologies.
