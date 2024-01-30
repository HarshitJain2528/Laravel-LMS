# Laravel LMS (Learning Management System) Project

This is a Learning Management System (LMS) developed using Laravel.

## Project Overview

The project consists of three main panels:

1. **Teacher Panel**
   - Courses
   - Course Creation
   - Topic Creation
   - Assignment Creation
   - Submitted Assignment View
   - Student's Recent Activity
   - Attendence
   - Student's Reviews
   - Messages
   
![image](https://github.com/HarshitJain2528/Laravel-LMS/blob/main/public/screens/teacher.png)

2. **Admin Panel**
   - Dashboard
   - Course
   - Students
   - Teachers
   - Attendence Report
   - Assignment Report
   - Messages
  
![image](https://github.com/HarshitJain2528/Laravel-LMS/blob/main/public/screens/admin.jpeg)

3. **Student Panel**
   - Courses - Description (videos/notes)
   - Assignment Submission
   - Review Submission
   - Help Box
   - Attendence
   - Student's Activity
   
![image](https://github.com/HarshitJain2528/Laravel-LMS/blob/main/public/screens/student.png)

## Getting Started

Follow these steps to run the project locally:

### Prerequisites

- Make sure you have [Composer](https://getcomposer.org/) installed.
- Make sure you have [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/) installed.
- Set up a MySQL database and update the `.env` file with your database credentials.

### Installation

1. Clone the repository:

   git clone https://github.com/HarshitJain2528/Laravel-LMS.git
   

2. Navigate to the project directory:

   cd Laravel-LMS

3. Migrate the database:

   php artisan migrate
   
### Running the Application

Start the development server:

php artisan serve

Visit [http://127.0.0.1:8000](http://127.0.0.1:8000) in your web browser.

## Login Through

Here is the login page where username password needs to be entered:

![image](https://github.com/HarshitJain2528/Laravel-LMS/blob/main/public/screens/login.png)

### Teacher Panel

- **Username:** `teacher@gmail.com`
- **Password:** `12345678`

### Admin Panel

- **Username:** `admin@gmail.com`
- **Password:** `12345678`

### Student Panel

- **Username:** `himanshu@gmail.com`
- **Password:** `12345678`

### MySQL Database

- **Database Name:** `laravel_lms`
  
![image](https://github.com/HarshitJain2528/Laravel-LMS/blob/main/public/screens/database.png)

## License

This project is open-sourced under the [MIT License](LICENSE).
