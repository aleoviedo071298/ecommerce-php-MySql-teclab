# eCommerce Teclab

Final project for the Teclab course (2026): a PHP + MySQL web application to manage
and display a hardware product catalog, organized by categories and rendered
dynamically.

## Overview

Implements a modular structure inspired by MVC, using OOP and PDO to keep the code
clean, reusable, and safe for database operations.

## Features

- **Product catalog** — dynamic hardware listing (CPU, GPU, RAM, etc).
- **Categories** — products linked via `categoria_id` for organized browsing.
- **Responsive UI** — works on mobile and desktop.
- **OOP codebase** — separation of concerns, reusable classes.
- **Single-query listing** — products + category name via `LEFT JOIN`.

## Tech Stack

- **Backend**: PHP (OOP) + PDO
- **Database**: MySQL
- **Frontend**: HTML + CSS
- **Async**: AJAX for dynamic content loading

## Architecture

MVC-inspired modular design:

- **Models** (`/class`) — business logic and database access (`database.php`, `productos.php`, `categorias.php`).
- **Controllers** (`/backend`) — AJAX endpoint handlers that call model methods.
- **Views** (`/views`) — UI templates and rendering logic.
- **Entry point** (`index.php`) — main router / content loader.

## Project Structure

```
/assets     CSS styles + product images
/backend    PHP endpoints for actions (products/categories)
/class      Core classes (database, productos, categorias, autoload)
/views      Frontend templates
index.php   Main entry point
```

## Database

Uses PDO with prepared statements to reduce SQL injection risk. Products reference
categories via `categoria_id`; product listing uses a `LEFT JOIN` to fetch the
category name in a single query (`listarConCategorias()` returns `p.*` +
`categoria_nombre`).

## Setup & Installation

### Requirements
- PHP 8.x (recommended)
- MySQL 5.7+ / 8.x
- Apache (XAMPP/Laragon) or a similar local server

### Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/aleoviedo071298/ecommerce-php-MySql-teclab.git
   ```
2. Create a MySQL database named `miproyecto`.
3. Import the included schema:
   ```bash
   mysql -u root -p miproyecto < miproyecto.sql
   ```
4. Check connection settings in [`class/database.php`](class/database.php). Defaults match a typical local XAMPP/Laragon setup (`host=localhost`, `user=root`, no password).

## Usage

Start your local server (Apache + MySQL), then open `http://localhost/<project-folder>/`.

## Security Notes

- Database access goes through PDO prepared statements.
- If you switch `class/database.php` to real credentials, keep them out of version control (environment variables or a git-ignored local config).

## Author

**Alejandro Oviedo**
Final Project — Teclab — 2026
