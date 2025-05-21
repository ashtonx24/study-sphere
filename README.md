# Study-Sphere

**Study-Sphere** is a collaborative academic platform project developed by Ashar Parvez Chougle and Bobby Dsouza. It aims to centralize study materials and resources, making it easier for students to access and manage their academic content.

## Project Overview
This web application is built following the XAMPP stack hierarchy with PHP as the backend language. It is designed to be deployed on a local server environment like XAMPP or similar, which supports Apache and MySQL.

## Key Features
- Centralized access to academic resources
- Basic email notifications via PHPMailer
- User authentication and OTP verification for secure access (see note below)
- Modular codebase for easy expansion and maintenance

## Important Notes
- **Group Project**: This was a group effort with Bobby Dsouza contributing alongside Ashar Parvez Chougle.
- **Critical File**: The project depends heavily on `otp_request.php`. Without modifications in this file to suit your environment (SMTP settings, etc.), the OTP feature and email functionality will not work.
- **Database Integration**: The project follows a MySQL database architecture consistent with XAMPP setups. The database schema and queries are embedded within the PHP files. Any tech-savvy user should be able to infer the database structure by reviewing the PHP source code.

## Setup Instructions
1. Install XAMPP or any compatible AMP stack.
2. Place the project files inside the `htdocs` directory.
3. Create a MySQL database using phpMyAdmin or CLI.
4. Import the provided database schema or manually create tables as inferred from the PHP code.
5. Update the `otp_request.php` file with your SMTP credentials and database connection details.
6. Start Apache and MySQL services from XAMPP control panel.
7. Open your browser and navigate to `http://localhost/[project-folder-name]` to run the application.

## Security Notice
Sensitive credentials such as SMTP passwords are not included in this repository and must be added locally for the email functionality to work.

---
