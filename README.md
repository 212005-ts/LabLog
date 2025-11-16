# LabLog

A comprehensive laboratory management and logging system built with PHP and MySQL.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Project Structure](#project-structure)
- [Technology Stack](#technology-stack)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Authors](#authors)

## Overview

LabLog is a web-based application designed to facilitate efficient management and tracking of laboratory activities. The system provides a user-friendly interface for logging experiments, managing lab data, and administering user accounts.

## Features

- **User Authentication**: Secure login system with session management
- **Lab Activity Logging**: Record and track laboratory experiments and activities
- **Admin Panel**: Administrative interface for system management
- **Responsive Design**: Mobile-friendly interface that works on all devices
- **Database Integration**: Persistent data storage with MySQL
- **Navigation System**: Intuitive navigation bar for easy access to features
- **User Profile Management**: View profile information and manage account settings

## Project Structure

```
LabLog/
├── index.php          # Home page and main dashboard
├── admin.php          # Administrative panel
├── about.php          # About page with project information
├── navbar.php         # Navigation bar component (included in pages)
├── footer.php         # Footer component (included in pages)
├── db.php             # Database configuration and connection
├── logout.php         # User logout handler
├── style.css          # Global styling and CSS framework
└── README.md          # Project documentation
```

## Technology Stack

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML5, CSS3
- **Server**: Apache (XAMPP)

## Installation

1. **Prerequisites**
   - XAMPP installed on your system
   - PHP 7.0 or higher
   - MySQL Server

2. **Setup Steps**
   ```
   1. Clone or download the project to your XAMPP htdocs directory:
      /Applications/XAMPP/xamppfiles/htdocs/LabLog/
   
   2. Start XAMPP services:
      - Start Apache web server
      - Start MySQL database server
   
   3. Create the required MySQL database
   
   4. Configure database connection in db.php with your credentials
   
   5. Access the application in your browser:
      http://localhost/LabLog/
   ```

## Configuration

### Database Configuration (db.php)

Update the database connection parameters in `db.php`:

```php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lablog";
```

Ensure the database and required tables are created before running the application.

## Usage

### Getting Started

1. Navigate to the home page (`index.php`)
2. Log in with your credentials
3. Use the navigation bar to access different sections:
   - **Home**: View dashboard and recent activities
   - **About**: Learn more about the project
   - **Admin**: Access administrative functions (admin users only)
   - **Logout**: End your session

### Logging Activities

- Use the main interface to log laboratory activities
- Fill in required information about your experiments
- Submit logs for record-keeping and tracking

### Admin Functions

- Access the admin panel to manage users and system settings
- View and manage all laboratory logs
- Generate reports and statistics

## Authors

- Vratika Mathur
- Tanmay Soni
- Rohit Assudani
- Punit Soni

## License

[Add your license information here]

## Support

For issues or questions about the project, please contact the development team.

---

**Last Updated**: November 2025
