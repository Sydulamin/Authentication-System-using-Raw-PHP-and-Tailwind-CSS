
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
- MySQL
- Web Server XAMPP
- A browser
- Code editor


### 2. Clone or Download

```bash
# Clone the repo
git clone https://github.com/Sydulamin Authentication-System-using-Raw-PHP-and-Tailwind-CSS.git
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


```

## 📄 License

MIT — free to use, clone, and modify for personal or educational purposes.

---

## 🙌 Acknowledgements

- [Tailwind CSS](https://tailwindcss.com/)
- [XAMPP](https://www.apachefriends.org/)
- [PHP Manual](https://www.php.net/manual/en/)

---

Happy Coding! 💻🎉
