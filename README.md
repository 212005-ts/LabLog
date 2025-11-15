# LabLog - Computer Lab Attendance Management System

A modern web-based application for managing student attendance in computer laboratories. LabLog provides an intuitive interface for students to log in and out, while administrators can track and manage attendance records efficiently.

## Features

- **Student Login System**: Students can log in with their details including name, course, semester, section, and lab group
- **Dynamic Form Fields**: Semester options update based on selected course, and lab groups update based on selected section
- **Logout Management**: Track and manage student logouts with timestamps
- **Admin Panel**: Comprehensive admin interface to view all attendance records
- **Modern UI**: Professional, responsive design with smooth animations and transitions
- **Real-time Tracking**: Monitor currently logged-in students in real-time

## Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP (Apache, MySQL)

## Installation

### Prerequisites

- XAMPP (or any PHP/MySQL server environment)
- Web browser (Chrome, Firefox, Safari, Edge)

### Setup Instructions

1. **Clone or download the project**
   ```bash
   # Place the LabLog folder in your XAMPP htdocs directory
   # Path: /Applications/XAMPP/xamppfiles/htdocs/LabLog
   ```

2. **Database Setup**
   - Start XAMPP and ensure Apache and MySQL services are running
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `lab_register`
   - Create the `lab_logs` table with the following structure:

   ```sql
   CREATE TABLE `lab_logs` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `student_name` varchar(255) NOT NULL,
     `course` varchar(50) NOT NULL,
     `semester` varchar(50) NOT NULL,
     `class` varchar(10) NOT NULL,
     `group_name` varchar(10) NOT NULL,
     `login_time` datetime NOT NULL,
     `logout_time` datetime DEFAULT NULL,
     `signature` varchar(50) NOT NULL,
     PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
   ```

3. **Database Configuration**
   - Update `db.php` with your database credentials if different from default:
     ```php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $db = "lab_register";
     ```

4. **Access the Application**
   - Open your web browser and navigate to:
     ```
     http://localhost/LabLog/
     ```

## Usage

### For Students

1. **Login**
   - Navigate to the login page
   - Enter your name
   - Select your course (BCA, BSc, BCom, or MCom)
   - Select your semester (options update based on course)
   - Select your section/class (A, B, or C)
   - Select your lab group (options update based on section)
   - Check the confirmation checkbox
   - Click "Submit Login"

2. **Logout**
   - Navigate to the logout page
   - Find your name in the list of currently logged-in students
   - Click the "Logout" button

### For Administrators

1. **View All Records**
   - Navigate to the Admin Panel
   - View all attendance records with login and logout times
   - Delete records if needed

2. **Monitor Active Students**
   - Use the Logout page to see all currently logged-in students
   - Track login times and manage logouts

## Project Structure

```
LabLog/
├── index.php          # Student login page
├── logout.php         # Student logout page
├── admin.php          # Admin panel for viewing all records
├── db.php             # Database connection configuration
├── style.css          # Stylesheet with modern UI design
└── README.md          # Project documentation
```

## Supported Courses

- **BCA**: 6 semesters (Sem 1 - Sem 6)
- **BSc**: 4 semesters (Sem 1 - Sem 4)
- **BCom**: 6 semesters (Sem 1 - Sem 6)
- **MCom**: 2 semesters (Sem 1 - Sem 2)

## Sections and Groups

- **Sections**: A, B, C
- **Lab Groups**: Automatically generated based on section (e.g., A1, A2, A3 for Section A)

## Authors

- **Vratika Mathur**
- **Rohit Assudani**
- **Punit Soni**
- **Tanmay Soni**

## License

This project is developed for educational purposes.

## Notes

- Ensure MySQL service is running before using the application
- The application uses prepared statements are recommended for production use to prevent SQL injection
- Default database credentials are set for XAMPP localhost environment

