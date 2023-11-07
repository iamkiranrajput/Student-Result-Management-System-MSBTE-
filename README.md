
# Student Academic Record Management Project
![scorecard](https://github.com/iamkiranrajput/Student-Result-Management-System-MSBTE-/assets/68410560/6ade31ed-3e69-4a06-9027-cda7b85008e5)


This is a Student Academic Record Management project that allows students to generate their MSBTE clone marksheet. The project is developed using HTML, CSS, JavaScript, jQuery, Bootstrap, PHP, and MySQL, and it is intended to be run on the XAMPP web server.

## Prerequisites

Before you can run this project, you need to ensure that you have the following software and tools installed on your computer:

1. [XAMPP](https://www.apachefriends.org/index.html): XAMPP is a web server package that includes Apache, MySQL, PHP, and phpMyAdmin. You can download and install XAMPP from their official website.

## Installation

Follow these steps to set up and run the project:

1. **Install XAMPP**:
   - Download and install XAMPP on your computer.
   - Start the Apache and MySQL services from the XAMPP control panel.

2. **Database Setup**:
   - Import the project database schema by following these steps:
     - Create a database named "form" using phpMyAdmin.
     - Import the database schema from the `form.sql` file provided with the project.

3. **Project Files**:
   - Place the project files in the `htdocs` folder of your XAMPP installation directory. You can usually find this folder at `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS.

4. **Access the Project**:
   - Open your web browser and access the project using the following URL: `http://localhost/marksheet/index.php`.
   - Replace `marksheet` with the actual name of the folder where you placed the project files.

5. **Run the Project**:
   - You can now interact with the project by creating, updating, and deleting student records and generating MSBTE marksheets.

## Project Details

This project includes the following files:

- `index.php`: The main page that displays a list of student records and allows you to perform CRUD operations on them.

- `memo.php`: The page for generating MSBTE marksheets for individual students.

- `update.php`: The page for updating student records.

- `delete.php`: A PHP script for deleting student records.

- `connection.php`: A PHP script for establishing a database connection.

- `css/memo.css`: The CSS file for styling the MSBTE marksheets.

- `vendor`: The folder containing Bootstrap and jQuery libraries.

## Usage

1. Access the project by opening your web browser and navigating to the project's URL.

2. On the main page (`index.php`), you can fill the student record and submit.
3.  click on the marksheet button you will see the list of student records and perform actions like checking out marksheets, deleting records, and updating records.

4. Clicking on "Cheackout" for a student will take you to the MSBTE marksheet page (`memo.php`) where you can generate the marksheet for that specific student.

5. Use the provided forms to add new student records or update existing ones.

6. To delete a student record, click the "Delete" button.

## Project Structure

The project is organized with a clear separation of HTML, CSS, and PHP. files You can further customize and extend the project to meet your specific needs.

This README file is intended to guide you in setting up and running the project. Feel free to make any necessary modifications or improvements as required.

Thank you for using this Student Academic Record Management Project!
