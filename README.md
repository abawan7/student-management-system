
# Student Management System

## Overview

The Student Management System is a project designed to manage student information. It includes functionalities such as adding new students, updating student information, deleting students, and viewing student details. The project is developed using PHP for server-side scripting and SQL for database interactions.

## Setup Instructions

### Prerequisites

- PHP (version 7.4 or higher recommended)
- MySQL (or any compatible database server)
- A web server (such as Apache or Nginx)
- Composer (for managing PHP dependencies)

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/yourusername/student-management.git
   cd student-management
   ```

2. **Install Dependencies**

   If you have any dependencies managed by Composer, install them:

   ```bash
   composer install
   ```

3. **Database Setup**

   - Create a new MySQL database.
   - Import the SQL files to create the necessary tables and insert initial data.

   ```sql
   -- Example commands to run in your MySQL environment
   source path/to/your/sql/file.sql;
   ```

4. **Configure the Project**

   - Update the database configuration in the project files where necessary (usually in a configuration file like `config.php` or directly in the script files).

5. **Run the Project**

   - Place the project files in your web server's root directory.
   - Access the project through your web browser (e.g., `http://localhost/student-management/students.php`).

## Project Structure and Description

### Files

1. **students.php**
   
   Displays the list of students and provides options to add, update, or delete student information.

2. **delete-student.php**

   Handles the deletion of student records from the database.

3. **add-new-student.php**

   Handles the addition of new student records to the database.

4. **Update-student.php**

   Handles the updating of existing student records in the database.

5. **add-new-student-form.php**

   Displays the form to add a new student. Collects input from the user and submits it to `add-new-student.php`.

6. **delete-student-form.php**

   Displays the form to delete a student. Collects input from the user and submits it to `delete-student.php`.

7. **student-view.php**

   Displays detailed information about a specific student.

8. **Student.php**

   Defines the `Student` class. This class includes properties and methods related to student information, such as name, ID, and courses enrolled.

9. **Course.php**

   Defines the `Course` class. This class includes properties and methods related to course information, such as course name, ID, and students enrolled.

## Project Flow

1. **Initialization:**
   - The project starts with `students.php`, which displays the list of students and provides options to add, update, or delete students.

2. **Student Management:**
   - New students are added through `add-new-student-form.php` and processed by `add-new-student.php`.
   - Existing students are updated through forms processed by `Update-student.php`.
   - Students are deleted through `delete-student-form.php` and processed by `delete-student.php`.

3. **Viewing Details:**
   - Detailed information about a specific student can be viewed using `student-view.php`.

## Developed By

Abdullah Awan  
GitHub: [abawan7](https://github.com/abawan7)  
Email: [mlkabawan336@gmail.com](mailto:mlkabawan336@gmail.com)
