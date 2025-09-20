# Medicare Medicine Store

A comprehensive web-based medicine store management system built with Laravel framework. This application provides a complete solution for managing medicines, users, and administrative operations in a pharmacy setting.

## Features

### Admin Features
- **Medicine Management**: Add, view, update, and delete medicines from inventory
- **User Management**: Manage user accounts with role-based permissions
- **Inventory Control**: Track medicine quantities and stock levels
- **User Role Management**: Promote users to admin status or maintain as regular users

### User Features
- **User Registration**: New users can create accounts with email verification
- **User Authentication**: Secure login system with password protection
- **Medicine Catalog**: Browse available medicines and their quantities
- **Dashboard Access**: Personalized dashboard showing available medicines

### Security Features
- Role-based access control (Admin/User)
- Secure authentication system
- Password protection and validation
- Session management

## Technology Stack

- **Backend**: Laravel PHP Framework
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Server**: Apache (XAMPP)
- **Architecture**: MVC (Model-View-Controller)

## Prerequisites

Before running this application, make sure you have the following installed:

- PHP >= 7.4
- Composer
- MySQL
- Apache Server (XAMPP recommended)
- Node.js (for frontend dependencies)

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/medicare-medicine-store.git
   cd medicare-medicine-store
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Configuration**
   - Create a MySQL database named `medicare`
   - Update your `.env` file with database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=medicare
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run Database Migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the Database (Optional)**
   ```bash
   php artisan db:seed
   ```

8. **Start the Development Server**
   ```bash
   php artisan serve
   ```

The application will be available at `http://127.0.0.1:8000`

## Application Structure

### Database Tables
- **Users**: Store user information and roles
- **Medicines**: Medicine inventory with names and quantities
- **User Roles**: Role management system

### Key Routes
- `/` - Homepage
- `/login` - User login
- `/register` - User registration
- `/home` - User dashboard
- `/admin/dashboard` - Admin dashboard

## Screenshots

### Admin Dashboard
The admin dashboard provides complete control over the medicine inventory and user management.

### User Dashboard
Regular users can view available medicines and their quantities.

### Authentication
Secure login and registration system with form validation.

## User Roles

### Admin Users
- Full access to medicine management
- Can add, edit, and delete medicines
- User management capabilities
- Can promote users to admin status

### Regular Users
- View medicine catalog
- Access to user dashboard
- Limited to read-only operations

## Configuration

### Admin Account Setup
Default admin credentials (change after first login):
- Email: `admin@example.com`
- Password: `password`

### Medicine Management
Admins can manage the following medicine attributes:
- Medicine Name
- Quantity in Stock
- Actions (Edit/Delete)

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/` | Homepage |
| POST | `/login` | User authentication |
| POST | `/register` | User registration |
| GET | `/home` | User dashboard |
| GET | `/admin/dashboard` | Admin panel |
| POST | `/admin/medicines` | Add new medicine |
| DELETE | `/admin/medicines/{id}` | Delete medicine |

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📈 Future Enhancements

- [ ] Payment gateway integration
- [ ] Email notifications for low stock
- [ ] Advanced reporting and analytics
- [ ] Mobile application
- [ ] Medicine search and filtering
- [ ] Order management system
- [ ] Prescription management

---

**Stay Healthy** - Professionals At The Service Of Your Health
