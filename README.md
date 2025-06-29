# Student Login Web Portal

🔗 **Project Repository:** [https://github.com/YOKESHKS/student-portal-using-db](https://github.com/YOKESHKS/student-portal-using-db)

This project is a **Student Login Web Portal** built using **PHP**, **HTML**, **CSS**, and **MySQL**, intended to be run on a **XAMPP server**. It provides student-level access to various functionalities like attendance, fee details, assignments, and general information.

## 🔧 Features

- Student Login and Dashboard
- Attendance Management
- Fee Details Display
- Assignments Overview
- Image and Multimedia Assets for User Interface
- Simple and clean UI for ease of use

## 📁 Project Structure

web project -student login/
│
├── Firstpage.php # Main login page
├── home.php # Student dashboard after login
├── home2.php / home3.php # Additional dashboard variations
├── att.php # Attendance details page
├── fee.php # Fee details page
├── db_conn.php # Database connection configuration
├── *.jpeg / *.jpg # UI images used in front-end
├── fees_files/ # Extra files used in fee module
├── .vscode/ # Editor configuration (optional)
└── ...

markdown
Copy
Edit

## 🛠️ Requirements

- XAMPP (Apache + MySQL)
- PHP (>=7.x)
- Web Browser (Chrome, Firefox, etc.)

## 🚀 How to Run the Project

1. **Download or Clone this Repository**
    ```bash
    git clone https://github.com/YOKESHKS/student-portal-using-db.git
    ```

2. **Move the Project Folder**
   Copy or move the folder `web project -student login` to your XAMPP `htdocs` directory:
C:\xampp\htdocs\web project -student login

markdown
Copy
Edit

3. **Start XAMPP**
- Open XAMPP Control Panel
- Start **Apache** and **MySQL**

4. **Setup the Database**
- Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
- Create a new database (e.g., `student_db`)
- Import the database structure using the SQL file provided (if available). If not, create tables according to the structure in `db_conn.php`.

5. **Access the Web Portal**
Open your browser and go to:
http://localhost/web%20project%20-student%20login/Firstpage.php

php
Copy
Edit

## 🗃️ Database Configuration

Edit the `db_conn.php` file to match your local MySQL setup:


Make sure the database student_db and its tables exist.

📸 Screenshots
![WhatsApp Image 2024-03-17 at 08 43 14_ac194944](https://github.com/user-attachments/assets/b5a2706a-4abb-4d8f-b82e-60dfbc94ee63)
![WhatsApp Image 2024-03-17 at 09 04 46_f5ae78a8](https://github.com/user-attachments/assets/dc2f3a13-43b8-4c16-80b6-fd9e3ce54503)
![WhatsApp Image 2024-03-17 at 09 04 32_701d1122](https://github.com/user-attachments/assets/bf9df9ad-f094-4f73-82b5-b43da490327b)


👨‍💻 Author
Yokesh K S
Final Year Computer Science Student, MVJ College of Engineering

For any queries, Feel free to ask....
