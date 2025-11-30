# YC Clone - Y Combinator Style CMS

A complete Content Management System built with Laravel 12, featuring a beautiful green theme inspired by Y Combinator. This project includes user authentication, role-based access control, and full CRUD functionality for managing companies and blog posts.

![Project Status](https://img.shields.io/badge/Status-Complete-success)
![Laravel](https://img.shields.io/badge/Laravel-12.x-red)
![PHP](https://img.shields.io/badge/PHP-8.2-blue)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-06B6D4)

## 🎯 Features

### Public Website
- ✅ **Home Page** - Hero section with green gradient, stats, and featured companies
- ✅ **Companies Page** - Grid display of all active companies
- ✅ **Blog Page** - Published blog posts with author and date
- ✅ **Apply Page** - Application form with FAQ section
- ✅ **Responsive Design** - Mobile, tablet, and desktop optimized
- ✅ **Green Theme** - Custom color palette throughout

### Admin Dashboard
- ✅ **Role-Based Access Control** - Admin and Editor roles
- ✅ **Company Management** - Create, read, update, delete companies
- ✅ **Blog Post Management** - Full CRUD for blog posts
- ✅ **Dashboard Analytics** - Stats cards showing counts
- ✅ **User-Friendly Interface** - Clean, modern admin panel
- ✅ **Form Validation** - Server-side validation on all forms

### Authentication & Security
- ✅ **User Registration & Login** - Laravel Breeze authentication
- ✅ **Password Reset** - Email-based password recovery
- ✅ **Middleware Protection** - Routes protected by role
- ✅ **CSRF Protection** - Built-in Laravel security
- ✅ **Session Management** - Secure user sessions

## 🎨 Color Palette
```
Green 50:  #e8f5e9  (Light backgrounds)
Green 100: #c8e6c9  (Subtle highlights)
Green 500: #4caf50  (Primary brand color)
Green 600: #43a047  (Hover states)
Green 700: #388e3c  (Active states)
```

## 🛠️ Tech Stack

- **Backend:** Laravel 12.40.1
- **Database:** MySQL 9.5.0
- **Frontend:** TailwindCSS 3.x, Blade Templates
- **Authentication:** Laravel Breeze
- **Build Tool:** Vite 7.2.4
- **Version Control:** Git & GitHub

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- PHP 8.2 or higher
- Composer 2.x
- Node.js 18+ and NPM
- MySQL 5.7+ or MySQL 9.x
- Git

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/Rpv1203/yc-clone.git
cd yc-clone
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies
```bash
npm install
```

### 4. Configure Environment
```bash
cp .env.example .env
```

Edit `.env` file and configure your database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yc_clone
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Create Database

Create a new MySQL database named `yc_clone`:
```sql
CREATE DATABASE yc_clone;
```

### 7. Run Migrations
```bash
php artisan migrate
```

### 8. Seed Test Users
```bash
php artisan db:seed --class=UserSeeder
```

### 9. Start Development Servers

**Terminal 1 - Vite (Frontend):**
```bash
npm run dev
```

**Terminal 2 - Laravel (Backend):**
```bash
php artisan serve
```

### 10. Access the Application

- **Public Website:** http://localhost:8000
- **Admin Dashboard:** http://localhost:8000/admin/dashboard
- **Login Page:** http://localhost:8000/login

## 🔐 Default Login Credentials

### Admin User (Full Access)
- **Email:** admin@test.com
- **Password:** password123

### Editor User (Limited Access)
- **Email:** editor@test.com
- **Password:** password123

## 📁 Project Structure
```
yc-clone/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   │   ├── DashboardController.php
│   │   │   │   ├── CompanyController.php
│   │   │   │   └── BlogPostController.php
│   │   │   ├── Editor/
│   │   │   │   └── DashboardController.php
│   │   │   ├── HomeController.php
│   │   │   ├── CompanyController.php
│   │   │   └── BlogController.php
│   │   └── Middleware/
│   │       └── CheckRole.php
│   └── Models/
│       ├── User.php
│       ├── Company.php
│       ├── BlogPost.php
│       ├── Testimonial.php
│       ├── Resource.php
│       └── HeroSection.php
├── database/
│   ├── migrations/
│   └── seeders/
│       └── UserSeeder.php
├── resources/
│   ├── css/
│   │   └── app.css
│   └── views/
│       ├── layouts/
│       │   ├── public.blade.php
│       │   └── admin.blade.php
│       ├── partials/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       ├── admin/
│       │   ├── dashboard.blade.php
│       │   ├── companies/
│       │   └── blog-posts/
│       ├── home.blade.php
│       ├── companies.blade.php
│       ├── blog.blade.php
│       └── apply.blade.php
└── routes/
    └── web.php
```

## 🎯 Database Schema

### Users Table
- id, name, email, password, role (admin/editor), timestamps

### Companies Table
- id, name, description, logo, website, batch, is_active, timestamps

### Blog Posts Table
- id, title, slug, excerpt, content, featured_image, author, is_published, published_at, timestamps

### Other Tables
- Testimonials, Resources, Hero Sections (ready for expansion)

## 🔒 User Roles & Permissions

### Admin Role
- Full access to all features
- Manage companies (CRUD)
- Manage blog posts (CRUD)
- Manage users
- Access to all admin routes

### Editor Role
- Limited access
- Edit blog posts only
- Cannot delete content
- Cannot manage companies
- Cannot manage users

## 🌐 Routes

### Public Routes
```
GET  /                    Home page
GET  /companies           Companies listing
GET  /blog                Blog posts
GET  /apply               Application form
```

### Authentication Routes
```
GET  /login               Login page
POST /login               Process login
GET  /register            Registration page
POST /register            Process registration
POST /logout              Logout user
```

### Admin Routes (Protected)
```
GET  /admin/dashboard                Admin dashboard
GET  /admin/companies                List companies
GET  /admin/companies/create         Create company form
POST /admin/companies                Store new company
GET  /admin/companies/{id}/edit      Edit company form
PUT  /admin/companies/{id}           Update company
DELETE /admin/companies/{id}         Delete company

GET  /admin/blog-posts               List blog posts
GET  /admin/blog-posts/create        Create post form
POST /admin/blog-posts               Store new post
GET  /admin/blog-posts/{id}/edit     Edit post form
PUT  /admin/blog-posts/{id}          Update post
DELETE /admin/blog-posts/{id}        Delete post
```

### Editor Routes (Protected)
```
GET  /editor/dashboard               Editor dashboard
GET  /editor/blog-posts              List blog posts
GET  /editor/blog-posts/{id}/edit    Edit post form
PUT  /editor/blog-posts/{id}         Update post
```

## 📸 Screenshots

### Home Page
Beautiful green gradient hero section with stats and featured companies.

### Companies Page
Grid layout displaying all active companies with batch information.

### Blog Page
Clean blog post cards with author, date, and excerpt.

### Admin Dashboard
Stats overview with recent companies and blog posts.

### Company Management
Full CRUD interface for managing startup companies.

### Blog Post Management
Create and edit blog posts with publish/draft status.

## 🧪 Testing

### Manual Testing Checklist

**Authentication:**
- [x] User can register
- [x] User can login
- [x] User can logout
- [x] Password reset works

**Admin Features:**
- [x] Create company
- [x] Edit company
- [x] Delete company
- [x] Create blog post
- [x] Edit blog post
- [x] Delete blog post
- [x] Publish/unpublish posts

**Editor Features:**
- [x] Can edit blog posts
- [x] Cannot delete posts
- [x] Cannot access company management

**Public Pages:**
- [x] Companies show on public page
- [x] Published posts show on blog
- [x] Responsive design works
- [x] Navigation works

## 🐛 Known Issues

None at this time. All major bugs have been fixed.

## 🚧 Future Enhancements

- [ ] File upload for company logos
- [ ] Rich text editor for blog posts
- [ ] Image upload for blog featured images
- [ ] Testimonials management
- [ ] Resources management
- [ ] Hero section management
- [ ] User management interface
- [ ] Search functionality
- [ ] Pagination for lists
- [ ] Email notifications
- [ ] API endpoints

## 📝 Development Notes

### Adding New Models

1. Create model and migration:
```bash
php artisan make:model ModelName -m
```

2. Define table structure in migration
3. Run migration:
```bash
php artisan migrate
```

4. Add $fillable array to model

### Adding New Routes

1. Create controller:
```bash
php artisan make:controller ControllerName
```

2. Add routes in `routes/web.php`
3. Create corresponding views

### Color Usage

Always use the custom green classes:
- `bg-yc-green-500` for backgrounds
- `text-yc-green-600` for text
- `hover:bg-yc-green-600` for hover states
- `border-yc-green-500` for borders

## 🤝 Contributing

This is a learning project. Feel free to fork and experiment!

## 📄 License

This project is open source and available for educational purposes.

## 👤 Author

**Vijay** (Rpv1203)
- GitHub: [@Rpv1203](https://github.com/Rpv1203)
- Project: [yc-clone](https://github.com/Rpv1203/yc-clone)

## 🙏 Acknowledgments

- Inspired by Y Combinator's design
- Built with Laravel and TailwindCSS
- Uses Laravel Breeze for authentication
- Green color palette for unique branding

## 📞 Support

For issues or questions, please open an issue on GitHub.

---

**Built with ❤️ using Laravel 12 & TailwindCSS**

**Project Completion Date:** November 2025  
**Total Development Time:** ~20 hours over 7 days  
**Lines of Code:** ~3,000+