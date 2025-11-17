# LabLog

A modern PHP/MySQL application for digitising laboratory attendance, providing a polished single‑color UI with light/dark mode, dynamic form logic, and administrator dashboards.

## Table of Contents

1. [Overview](#overview)
2. [Features](#features)
3. [Architecture](#architecture)
4. [Technology Stack](#technology-stack)
5. [Project Structure](#project-structure)
6. [Prerequisites](#prerequisites)
7. [Setup & Installation](#setup--installation)
8. [Configuration](#configuration)
9. [Usage Guide](#usage-guide)
10. [Light & Dark Theme](#light--dark-theme)
11. [Development Notes](#development-notes)
12. [Troubleshooting](#troubleshooting)
13. [Authors](#authors)

---

## Overview

LabLog replaces paper registers with a responsive web portal. Students log their lab presence via structured forms, while admins gain full visibility over attendance records, all backed by a MySQL database and served through Apache (XAMPP/LAMP environments).

## Features

- **Student Login Dashboard**: Collects name, course, semester, section and group with contextual validation.
- **Dynamic Select Fields**: Semesters auto-populate per course. Groups populate per section.
- **Digital Signature Confirmation**: Checkbox ensures intentional submissions.
- **Logout Panel**: Lists active sessions with server-side timestamps and action buttons.
- **Admin Console**: Search, sort and delete records in a clean, responsive table.
- **About Page**: Communicates workflow, benefits, tech stack, icons and CTAs.
- **Single Color Palette**: Warm gray/sage palette for consistency, with CSS variables.
- **Light / Dark Mode**: Theme toggle persists preference via `localStorage`.
- **Shared Layout Components**: Navbar and footer reused across pages.
- **Responsive Design**: Grid and flex layouts adjust down to 320px width.

## Architecture

```
Browser (HTML/CSS/JS)
        │
        ▼
PHP Pages ── include navbar/footer + business logic
        │
        ▼
MySQL Database (lablog schema)
```

- `index.php` handles student submissions (POST to insert DB records).
- `logout.php` updates logout timestamp per record.
- `admin.php` queries and filters attendance table.
- `navbar.php` + `footer.php` are included everywhere to maintain consistent UI.

## Technology Stack

| Layer      | Technology                         |
|----------- |------------------------------------|
| Language   | PHP 7.4+ (compatible with PHP 8)   |
| Database   | MySQL / MariaDB                    |
| Frontend   | HTML5, CSS3 (custom responsive)    |
| Server     | Apache (XAMPP recommended)         |
| Theme      | CSS custom properties + JS toggle  |

## Project Structure

```
LabLog/
├── index.php        # Student login dashboard
├── admin.php        # Attendance admin panel
├── logout.php       # Active session tracker
├── about.php        # Marketing / info page
├── navbar.php       # Shared navigation bar
├── footer.php       # Shared footer
├── db.php           # Database connection helper
├── style.css        # Global styles & theming
└── README.md        # Documentation (this file)
```

## Prerequisites

- XAMPP / WAMP / LAMP environment
- PHP 7.4+ (PDO extensions enabled if you use prepared statements)
- MySQL or MariaDB server
- Modern browser (Chrome, Firefox, Edge, Safari)

## Setup & Installation

1. **Clone or Copy**
   ```bash
   git clone <repo-url> LabLog
   mv LabLog /Applications/XAMPP/xamppfiles/htdocs/
   ```
2. **Start Services**
   - Launch Apache and MySQL via XAMPP control panel.
3. **Create Database**
   ```sql
   CREATE DATABASE lablog CHARACTER SET utf8mb4;
   ```
   Import your `lab_logs` table schema as needed.
4. **Configure `db.php`**
   ```php
   $servername = "localhost";
   $username   = "root";
   $password   = "";
   $database   = "lablog";
   ```
5. **Access in Browser**
   ```
   http://localhost/LabLog/
   ```

## Configuration

- **db.php**: Contains connection credentials. Consider environment variables for production.
- **style.css**: Houses CSS variables for color palette and dark mode.
- **Sessions**: Ensure `session_start()` is called where login logic is implemented (if authentication added later).

## Usage Guide

### Student Flow
1. Open `index.php`.
2. Fill in form fields:
   - Student name
   - Course → automatically loads valid semesters
   - Section & Lab Group
   - Signature checkbox
3. Submit to log attendance record (timestamp stored via PHP `date()`).

### Logout Flow
1. Navigate to `logout.php`.
2. Locate record.
3. Click “Logout” to auto-fill logout timestamp.

### Admin Flow
1. Visit `admin.php`.
2. Use search bar to filter by name, course, semester, section, group.
3. Delete entries if needed (currently hard delete; consider soft delete for production).

## Application Pages

| Page        | Description                                                |
|-------------|------------------------------------------------------------|
| `index.php` | Hero section + login form with animations and validations  |
| `logout.php`| Table of active sessions with logout actions               |
| `admin.php` | Full attendance table, includes search + delete controls   |
| `about.php` | Explains LabLog workflow, tech stack, CTA buttons          |
| `navbar.php`| Includes nav links and theme toggle                        |
| `footer.php`| Four-column footer with quick links, features, contact info|

## Light & Dark Theme

- Toggle button sits on the navbar.
- Selection stored in `localStorage` and applied on load.
- CSS variables (`--bg-primary`, `--text-primary`, etc.) defined in `:root` and `[data-theme="dark"]`.
- Cards use `--bg-overlay` to ensure consistent shading across themes.

## Development Notes

- **Form Enhancements**: JavaScript populates semesters/groups dynamically.
- **Animations**: Keyframe `slideUp` + hover effects on hero text and buttons.
- **Accessibility**: Labels uppercase for readability, focus styles include box shadows.
- **Responsive**: Media queries at 768px and 480px adjust paddings, columns, and hero typography.

## Troubleshooting

| Issue                          | Resolution                                            |
|--------------------------------|-------------------------------------------------------|
| Blank page / errors            | Check `php_error_log`, ensure display_errors enabled during dev |
| Cannot connect to DB           | Verify credentials in `db.php` and MySQL service status |
| CSS not updating               | Clear browser cache / disable cache in DevTools       |
| Theme toggle not working       | Ensure JS runs after DOM load and localStorage reachable |

## Authors

- Vratika Mathur
- Tanmay Soni
- Punit Soni
- Rohit Assudani

---

Feel free to extend LabLog with authentication, audit logs, CSV export, or API endpoints. Contributions are welcome! With clear architecture and styling, the project is a solid base for campus-wide lab attendance systems.

