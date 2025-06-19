
# 🔐 Simple Authentication System with PHP, MySQL & Tailwind CSS

This is a beginner-friendly authentication system built from scratch using:

- 🐘 PHP (no framework)
- 🛢 MySQL Database
- 🎨 Tailwind CSS (via CDN)
- 📦 XAMPP or any local PHP environment

---

## 🚀 Features

- ✅ User Registration with hashed password
- ✅ User Login
- ✅ Session-based Dashboard (protected route)
- ✅ Logout functionality
- ✅ Tailwind CSS design via CDN

---

## 📁 File Structure

```
auth-system/
├── db.php            
├── register.php      
├── login.php         
├── logout.php        
├── dashboard.php     
└── tailwind.html     
```

## 🛠️ Requirements

- PHP 7+
- MySQL or MariaDB
- Web Server (Apache via XAMPP, Laragon, etc.)
- A browser (Chrome/Firefox)
- Code editor (VS Code recommended)

---

## 🧰 Setup Instructions

### 1. Install Local Server

Download and install [XAMPP](https://www.apachefriends.org/) or [Laragon](https://laragon.org/).

Start Apache and MySQL from the control panel.

---

### 2. Clone or Download

```bash
# Clone the repo
git clone https://github.com/your-username/auth-system.git
```

Place it inside your XAMPP `htdocs` folder:

```
C:\xampp\htdocs\auth-system
```

---

### 3. Create Database

1. Visit: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Create a database called: `auth_db`
3. Run this SQL to create a `users` table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

### 4. Configure Database (`db.php`)

```php
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "auth_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

---

## 🌐 Usage

- Go to: [http://localhost/auth-system/register.php](http://localhost/auth-system/register.php) → Register a user
- Login via: `login.php`
- You’ll be redirected to a protected `dashboard.php`
- Click logout to end the session

---

## 📸 Screenshots

| Page         | Preview                        |
|--------------|---------------------------------|
| Register     | ![Register](screens/register.png) |
| Login        | ![Login](screens/login.png)     |
| Dashboard    | ![Dashboard](screens/dashboard.png) |

*(Add screenshots in a `screens/` folder for GitHub)*

---

## 🧠 Author Note

This project is built for **educational purposes** to understand the basics of authentication using pure PHP and MySQL. It's not suitable for production without proper security measures like:

- Input validation/sanitization
- CSRF protection
- SQL prepared statements
- HTTPS and secure session handling

---

## 📄 License

MIT — free to use, clone, and modify for personal or educational purposes.

---

## 🙌 Acknowledgements

- [Tailwind CSS](https://tailwindcss.com/)
- [XAMPP](https://www.apachefriends.org/)
- [PHP Manual](https://www.php.net/manual/en/)

---

Happy Coding! 💻🎉
