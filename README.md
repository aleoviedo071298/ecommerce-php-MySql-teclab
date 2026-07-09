# eCommerce Teclab

> PHP + MySQL product catalog with MVC-inspired architecture, PDO prepared statements, and AJAX dynamic loading.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## About

Final project for the Teclab programming course (2026). A hardware product catalog built with PHP and MySQL, organized by categories and rendered dynamically. Uses PDO with prepared statements throughout and a modular structure inspired by MVC.

## Features

- **Product catalog** — dynamic hardware listing (CPU, GPU, RAM, etc).
- **Categories** — products linked via `categoria_id` for organized browsing.
- **OOP codebase** — reusable classes, clean separation of concerns.
- **Single-query listing** — products + category name via `LEFT JOIN`.
- **AJAX** — dynamic content loading without page reloads.
- **Responsive UI** — works on mobile and desktop.

## Project Structure

```
ecommerce-php-MySql-teclab/
├── index.php        Main router / content loader
├── /assets          CSS styles + product images
├── /backend         PHP AJAX endpoint handlers
├── /class           Core classes (database, productos, categorias, autoload)
└── /views           Frontend templates
```

## Setup

**Requirements:** PHP 8.x, MySQL 5.7+/8.x, Apache (XAMPP/Laragon).

```bash
git clone https://github.com/aleoviedo071298/ecommerce-php-MySql-teclab.git
```

1. Create a MySQL database named `miproyecto`.
2. Import the schema:
   ```bash
   mysql -u root -p miproyecto < miproyecto.sql
   ```
3. Check connection settings in `class/database.php` — defaults match a standard XAMPP setup (`host=localhost`, `user=root`, no password).
4. Open `http://localhost/ecommerce-php-MySql-teclab/`.

---

**Alejandro Oviedo** · [LinkedIn](https://www.linkedin.com/in/aleoviedo071298/) · [GitHub](https://github.com/aleoviedo071298)
