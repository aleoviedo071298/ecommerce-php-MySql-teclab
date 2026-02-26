## Improved README (drop-in replacement) 🚀🛒

```md
# eCommerce Teclab 🛒

Final project for the Teclab course (2026).  
A PHP + MySQL web application to **manage and display a hardware product catalog**, organized by categories and rendered dynamically.

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Architecture](#architecture)
- [Project Structure](#project-structure)
- [Database](#database)
- [Setup & Installation](#setup--installation)
- [Usage](#usage)
- [Security Notes](#security-notes)
- [Author](#author)

---

## Overview
This project implements a modular structure inspired by **MVC**, using **OOP** and **PDO** to keep the code clean, reusable, and safe for database operations.

---

## Features
- **Product Catalog**: Dynamic hardware listing (CPU, GPU, RAM, etc.).
- **Categories**: Products linked via `categoria_id` for organized browsing.
- **Responsive UI**: Works smoothly on mobile and desktop.
- **OOP Codebase**: Separation of concerns and reusable classes.
- **Single-query listing**: Products + category name via `LEFT JOIN`.

---

## Tech Stack
- **Backend**: PHP (OOP) + PDO
- **Database**: MySQL
- **Frontend**: HTML + CSS
- **Async**: AJAX (for dynamic content loading)

---

## Architecture
MVC-inspired modular design:

- **Models (`/class`)**  
  Business logic and database access (`database.php`, `productos.php`, `categorias.php`).

- **Controllers (`/backend`)**  
  Request handlers (AJAX endpoints) that call model methods and return results.

- **Views (`/views`)**  
  UI templates and rendering logic.

- **Entry point (`index.php`)**  
  Main router / content loader for the frontend.

---

## Project Structure
```

/assets     -> CSS styles + product images
/backend    -> PHP endpoints for actions (products/categories)
/class      -> Core classes (database, productos, categorias, autoload)
/views      -> Frontend templates
index.php   -> Main entry point

````

---

## Database
The app uses **PDO + prepared statements** to reduce SQL Injection risk.

### Key concepts
- Products reference categories using `categoria_id`.
- Product listing uses `LEFT JOIN` to fetch category names in the same query:
  - `listarConCategorias()` returns `p.*` + `categoria_nombre`.

---

## Setup & Installation

### Requirements
- PHP 8.x (recommended)
- MySQL 5.7+ / 8.x
- Apache (XAMPP/Laragon) or similar local server

### 1) Clone repository

### 2) Create the database

### 3) Import SQL

### 4) Configure connection

---

## Usage

* Start your local server (Apache + MySQL).
* Open the project in your browser:

  * `http://localhost/<project-folder>/`

---

## Security Notes

* Database access via **PDO prepared statements**.
* Avoid committing secrets:

---

## Author

**Alejandro Oviedo**
Final Project — Teclab — 2026

```
