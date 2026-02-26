# eCommerce Teclab

This is the final project for the Teclab course. It is a web application developed with PHP and MySQL for managing and viewing a product catalog.

## Table of Contents
- [Features](#features)
- [Technical Architecture](#technical-architecture)
- [Project Structure](#project-structure)
- [Logic Explanation](#logic-explanation)
- [Requirements](#requirements)
- [Installation](#installation)
- [Author](#author)

## Features

- **Product Catalog**: Dynamic display of hardware products.
- **Category System**: Products are organized by specific categories (CPU, GPU, RAM, etc.).
- **Responsive Design**: Modern and fluid interface for mobile and desktop.
- **OOP Structure**: Clean code using Object-Oriented Programming principles.

## Technical Architecture

The project follows a modular structure inspired by the MVC (Model-View-Controller) pattern:

- **Classes (Models)**: Encapsulate data and business logic.
- **AJAX/Controllers**: Handle requests and interact with classes to return dynamic content.
- **Frontend (Views)**: HTML and CSS for the user interface.

## Project Structure

- `/assets`: CSS styles and product images.
- `/backend`: PHP scripts for administrative actions (categories/products).
- `/class`: Core logic classes (`database.php`, `productos.php`, `categorias.php`).
- `/views`: HTML templates for the frontend.
- `index.php`: Main entry point and dynamic content handler.

## Logic Explanation

### 1. Database Management (`database.php`)
Uses **PDO (PHP Data Objects)** for secure database interactions. It implements generic methods for CRUD operations using prepared statements to prevent SQL Injection.

### 2. Autoload System (`autoload.php`)
Implements `spl_autoload_register`, allowing the application to load classes automatically without requiring multiple `include` or `require` statements throughout the project.

### 3. Product Logic (`productos.php`)
The `productos` class handles the lifecycle of a product:
- `save()`: Inserts a new product into the database.
- `listarConCategorias()`: Executes a `LEFT JOIN` query to fetch products along with their category names in a single database call.

### 4. Categorized Filtering
The system maps each product to a `categoria_id`, allowing the frontend to display data organized by hardware type.

## Author

- **Alejandro Oviedo**

---
Final Project - Teclab - 2026
