-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 06:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assignment_title` varchar(255) NOT NULL,
  `assignment_question` text NOT NULL,
  `total_marks` int(11) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `assignment_title`, `assignment_question`, `total_marks`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Assignment 1', '{\"question_0\":\"What is the purpose of \\u2018<head>\\u2019 and \\u2018<body>\\u2019 tags in HTML?\",\"question_1\":\"Create a nested list in HTML?\",\"question_2\":\"Create a simple login form of Facebook?\",\"question_3\":\"Create a table using html tags?\",\"question_4\":\"Insert an image or audio using html tags ?\"}', 30, 1, '2024-01-17 03:25:30', '2024-01-17 03:25:30'),
(4, 'Assignment 1', '{\"question_0\":\"give evolution of C language?give strucure or syntax of c programming?\",\"question_1\":\"how to give comments for single line and multiple lines in c programming?How many types of statements are there in C?\",\"question_2\":\"Define datatypes and constants?\",\"question_3\":\"How many types of operataor are there in C programming?what is asignment operator give a program to explain it?\",\"question_4\":\"What is boolean?Explain types and give example or each?\"}', 30, 4, '2024-01-19 01:11:08', '2024-01-19 01:11:08'),
(5, 'Assignment 2', '{\"question_0\":\"What are variables is C programming?What is Formatting in C?How to define variables in C?\",\"question_1\":\"What is if statement?give a program to explain if,else if?\",\"question_2\":\"Give an example for nested if else and nested if with the help of program?\",\"question_3\":\"How many types of loops are there in C programming?expalin every loop with the help of examples?\",\"question_4\":\"What is short and if explain with program?what is switch statement explain using example?\"}', 30, 4, '2024-01-19 01:13:48', '2024-01-19 01:13:48'),
(6, 'Assignment 3', '{\"question_0\":\"What is break statement?give syntax?\",\"question_1\":\"What is continue statement in C?explain with the help of example?\",\"question_2\":\"Explain the concept of arrays?\",\"question_3\":\"What is multidimentional and two dimentional array explain with the help of example?\",\"question_4\":\"Explain functions in C?Give types of function and explain any two with the help of program?\"}', 30, 4, '2024-01-19 01:15:23', '2024-01-19 01:15:23'),
(7, 'Assignment 1', '{\"question_0\":\"How can you implement a complete CRUD (Create, Read, Update, Delete) system using Ajax and JSON in a web application, ensuring seamless communication between the client and server for efficient data manipulation and retrieval?\",\"question_1\":\"Build a basic Laravel application with a form that allows users to submit their names. Implement Ajax functionality to asynchronously send the form data to the server, and upon successful submission, display a welcome message without refreshing the page. Ensure that the application provides user-friendly error messages if the submission fails.\",\"question_2\":\"Create a simple PHP web page that includes a button. When the button is clicked, use Ajax to send a request to a PHP script that returns a random quote. Display the quote on the web page without refreshing it. Additionally, handle any potential errors and provide a user-friendly message if the request fails.\",\"question_3\":\"Develop a PHP web page with a text input field. Implement an autocomplete feature using Ajax to suggest country names as users type into the input field. Create a PHP script that dynamically fetches and returns relevant country names from a predefined list. Ensure that the autocomplete suggestions are displayed in real-time below the input field, and clicking on a suggestion fills the input field with the selected country name. Handle potential errors gracefully and provide a smooth user experience.\",\"question_4\":\"Explain the concept of Ajax (Asynchronous JavaScript and XML) in the context of web development. Provide a brief overview of how Ajax enables asynchronous communication between a web page and a server, enhancing the user experience. Additionally, describe a simple scenario where Ajax could be beneficial and outline the key components involved in making an Ajax request.\"}', 30, 10, '2024-01-19 01:17:55', '2024-01-19 01:17:55'),
(8, 'Assignment 1', '{\"question_0\":\"Is CSS a lanuage?Why we use css?\",\"question_1\":\"What are selctors?make a form with a submit button appling css on submit button giving blue bg-color and color as white with font weight-bold?\",\"question_2\":\"What are properties give 5 propertirs in css and apply it in your form?\",\"question_3\":\"How to apply background image?what is bg-url?\",\"question_4\":\"what is media query?\"}', 30, 2, '2024-01-19 01:27:48', '2024-01-19 01:27:48'),
(9, 'Assignment 2', '{\"question_0\":\"How would you create a horizontal linear gradient background for a webpage element with colors #3498db (blue) on the left side and #e74c3c (red) on the right side?\",\"question_1\":\"Create a simple horizontal navigation menu using HTML and CSS. The menu should consist of three items: Home, About Us, and Contact. Apply a different background color when hovering over each menu item.\",\"question_2\":\"Create a simple webpage with three div elements having different positions. The first div should be positioned absolutely at the top right corner of the page, the second div should be fixed at the bottom center, and the third div should be relatively positioned at the center of the page. Provide a different background color for each div.\",\"question_3\":\"Create a CSS rule using the :hover pseudo-class to change the text color of a hyperlink to red when the user hovers over it. Assume the HTML structure already has an anchor (<a>) element with the class name \\\"nav-link\\\".\",\"question_4\":\"You have a list of items (<li>) inside an unordered list (<ul>). Apply a different background color to the even-numbered list items using the :nth-child pseudo-class. Assume the list has the class name \\\"item-list.\\\"\"}', 30, 2, '2024-01-19 01:29:48', '2024-01-19 01:29:48'),
(10, 'Assignment 3', '{\"question_0\":\"Create a CSS rule to add a box shadow to a div with the class name \\\"box.\\\" Apply a box shadow with a horizontal offset of 5 pixels, a vertical offset of 5 pixels, a blur radius of 10 pixels, and use the color #555555.\",\"question_1\":\"You have two div elements with the class names \\\"box1\\\" and \\\"box2.\\\" Apply CSS rules to position \\\"box1\\\" on top of \\\"box2\\\" using the z-index property. Assume that both divs are positioned absolutely, and \\\"box1\\\" should appear visually above \\\"box2.\\\"\",\"question_2\":\"Create menus and give goole fonts in front of it.\",\"question_3\":\"Create a CSS animation using keyframes to make a div with the class name \\\"animated-box\\\" move from left to right. The animation should take 4 seconds to complete, and the div should return to its original position after the animation ends. Assume the initial position of the div is at left: 0.\",\"question_4\":\"Create a webpage layout with the following specifications:  A header with a background color of #333333, containing a centered logo (100px x 100px) with the class \\\"logo.\\\" A navigation menu with three list items: Home, About Us, and Contact. Style the menu to be horizontally aligned, have a background color of #555555, and change to a darker color (#777777) when hovered. A main content area with two sections: one with a width of 70% and another with a fixed width of 300px. Apply a box shadow to the section with the fixed width. Apply a smooth transition effect to the navigation menu items when hovered over, lasting 0.3 seconds.\"}', 30, 2, '2024-01-19 01:31:40', '2024-01-19 01:31:40'),
(11, 'Assignment 1', '{\"question_0\":\"What is Javascript? explain its key features.\",\"question_1\":\"What are variables and data-types in javascript? how to declare a variable in js.\",\"question_2\":\"What are functions? make a function in javascript\",\"question_3\":\"Show how to link an external file in javascript ?\",\"question_4\":\"What are looping , jumping and conditional statements in javascript? explain each of them using examples.\"}', 30, 3, '2024-01-19 01:34:43', '2024-01-19 01:34:43'),
(12, 'Assignment 2', '{\"question_0\":\"How does button_click() function and window.location() function works in javascript? explain with example.\",\"question_1\":\"How to take user input in javascript ? explain with the help of a form\",\"question_2\":\"Practically explain the difference between setInterval() and setTimeout() function.\",\"question_3\":\"What are different dialog boxes in javascript ? give examples of each.\",\"question_4\":\"Create a form and perform form validations on it in javascript\"}', 30, 3, '2024-01-19 01:36:05', '2024-01-19 01:36:05'),
(13, 'Assignment 1', '{\"question_0\":\"Perform arithematic operations using 2 numbers in jQuery\",\"question_1\":\"Make a custom image slider in jQuery using fadeIn fadeOut methods.\",\"question_2\":\"Make a progress bar in jQuery\",\"question_3\":\"What are different types of selectors in jQuery ? explain any two selectors using examples.\",\"question_4\":\"Make multiple textbox using button click in jQuery.\"}', 30, 9, '2024-01-19 01:38:27', '2024-01-19 01:38:27'),
(14, 'Assignment 2', '{\"question_0\":\"What are different event methods ? give practical examples of hover() and click() methods.\",\"question_1\":\"Give examples of various jQuery effects such as toggle() ,fadeIn(), fadeOut(), slideUp(), slideDown(), animate(), delay(), stop().\",\"question_2\":\"Explain and perform different traversing and chaining methods in jQuery ?\",\"question_3\":\"Make an example of hover images in jQuery using hover() event.\",\"question_4\":null}', 30, 9, '2024-01-19 01:39:16', '2024-01-19 01:39:16'),
(15, 'Assignment 1', '{\"question_0\":\"What is sql and where is it used ?\",\"question_1\":\"Describe the basic syntax of sql ? What are various data types available in sql ?\",\"question_2\":\"Write a MySQL query to create a simple table countries including columns country_id, country_name and region_id.\",\"question_3\":\"Write a MySQL query to create a table named countries including columns country_id,country_name and region_id and make sure that no duplicate data against column country_id will be allowed at the time of insertion.\",\"question_4\":\"How do you use the INSERT statement in MySQL to add a new record to a table named \'employees\' with values \'John Doe\' for the \'name\' column and \'30\' for the \'age\' column?\",\"question_5\":null}', 30, 6, '2024-01-19 01:41:35', '2024-01-19 01:41:35'),
(16, 'Assignment 2', '{\"question_0\":\"If you want to insert multiple records at once using a single INSERT statement, how can you achieve this in MySQL?\",\"question_1\":\"Suppose you have a table named \'students\' and you want to update the \'grade\' column to \'A\' for a student with \'student_id\' equal to 101. How would you write the UPDATE statement for this scenario?\",\"question_2\":\"If you want to update multiple columns in a table simultaneously, how can you structure the UPDATE statement in MySQL?\",\"question_3\":\"How do you use the DELETE statement in MySQL to remove a record from the \'products\' table where the \'product_id\' is 123?\",\"question_4\":\"If you want to delete all records from a table without deleting the table itself, what is the appropriate DELETE statement in MySQL?\",\"question_5\":\"Write a simple SELECT statement to retrieve all columns for records in the \'customers\' table where the \'city\' is \'New York\'.\",\"question_6\":\"If you only want to select distinct values from a column named \'category\' in the \'products\' table, how would you structure the SELECT statement?\",\"question_7\":\"Explain the difference between the INT and VARCHAR data types in MySQL. Provide an example scenario where you would use each of them.\",\"question_8\":\"When designing a database, why would you use the FOREIGN KEY constraint? Provide a practical example of its application.\",\"question_9\":\"Explain the purpose of the CHECK constraint in MySQL, and provide an example of a situation where you might use it to restrict data input\"}', 50, 6, '2024-01-19 01:44:24', '2024-01-19 01:44:24'),
(17, 'Assignment 3', '{\"question_0\":\"When creating a new table in MySQL, how do you specify a default value for a column, and in what situations might this be beneficial?\",\"question_1\":\"When creating a new table in MySQL, how do you specify a default value for a column, and in what situations might this be beneficial?\",\"question_2\":\"In a \'students\' and \'grades\' table with columns \'student_id\' and \'grade,\' write a LEFT JOIN statement to display all students and their grades, including those who haven\'t received a grade yet.\",\"question_3\":\"Assume you have a \'departments\' table and an \'employees\' table. Write a RIGHT JOIN statement to retrieve all department names and the employees who belong to each department, including departments without employees.\",\"question_4\":\"Explain the concept of a FULL OUTER JOIN in MySQL. How would you use it to retrieve all records from two tables, including matching and non-matching rows?\",\"question_5\":\"Explain the purpose of the COUNT() aggregate function in MySQL. Provide an example of a scenario where you might use COUNT().\",\"question_6\":\"In a \'products\' table with a column \'price,\' write a query using both MIN() and MAX() functions to find the lowest and highest prices\",\"question_7\":\"Suppose you have a \'sales\' table with a column \'sales_amount.\' Write a query using the SUM() function to calculate the total sales amount.\",\"question_8\":\"Describe the role of the AVG() function in MySQL. Provide an example of a scenario where you might use AVG().\",\"question_9\":\"If you have a \'orders\' table with columns \'customer_id\' and \'order_amount,\' how would you use GROUP BY to calculate the total order amount for each customer?\"}', 50, 6, '2024-01-19 01:48:02', '2024-01-19 01:48:02'),
(18, 'Assignment 1', '{\"question_0\":\"Do CRUD operations along with search in php.\",\"question_1\":\"Insert image \\/ file in php?\",\"question_2\":\"Print 10 \\u2013 1 in 3 different loops in php?\",\"question_3\":\"Perform 3 different types of pagination.\",\"question_4\":\"Perform CRUD using oop\\u2019s.\",\"question_5\":\"Perform file handling in oop\\u2019s?\"}', 36, 5, '2024-01-19 03:14:47', '2024-01-19 03:14:47'),
(19, 'Assignment 2', '{\"question_0\":\"Explain session-cookies in php by performing practically.\",\"question_1\":\"Explain the concept of multidimensional array in php ?\",\"question_2\":\"Make a working admin panel in  php  ?\",\"question_3\":\"Make an e-commercial(shopping cart) website in php ?\",\"question_4\":\"What are APIs? Try CRUD in api using postman?\"}', 30, 5, '2024-01-19 03:16:03', '2024-01-19 03:16:03'),
(20, 'Assignment 1', '{\"question_0\":\"Explain the significance of the routes\\/web.php file in Laravel. How can you define a named route in this file?\",\"question_1\":\"Explain the role of a controller in a Model-View-Controller (MVC) architecture.\",\"question_2\":\"Define what a model is in the context of software development.\",\"question_3\":\"Discuss the role of middleware in handling authentication and authorization.\",\"question_4\":\"Define mutators and accessors in the context of Laravel\'s Eloquent models.\",\"question_5\":\"Provide examples of how dynamic content and date formatting can be localized in Laravel.\",\"question_6\":\"Explain the significance of logging in Laravel applications.\"}', 40, 8, '2024-01-19 03:34:13', '2024-01-19 03:34:13'),
(21, 'Assignment 2', '{\"question_0\":\"What is the role of Eloquent in Laravel, and how does it simplify database operations?\",\"question_1\":\"Explain the role of Eloquent models in the MVC architecture of Laravel.\",\"question_2\":\"How does Eloquent handle database table naming conventions by default?\",\"question_3\":\"Do CRUD operations along with search in laravel.\"}', 20, 8, '2024-01-19 03:35:52', '2024-01-19 03:35:52'),
(22, 'Assignment 3', '{\"question_0\":\"Differentiate between a one-to-one and a many-to-many relationship in Laravel. Provide examples of scenarios where each type of relationship would be appropriate.\",\"question_1\":\"Discuss the concept of polymorphic relationships in Laravel Eloquent. Provide an example of when you might use a polymorphic relationship in a database schema.\",\"question_2\":\"Provide examples of scenarios where each type of relationship is most suitable.\",\"question_3\":\"How are inverse relationships defined in Eloquent?\",\"question_4\":\"Provide an example scenario where a many-to-many relationship would be suitable.\"}', 30, 8, '2024-01-19 03:38:18', '2024-01-19 03:38:18'),
(23, 'Assignment 4', '{\"question_0\":\"Explain the steps involved in sending an email in a Laravel application.\",\"question_1\":\"How does Postman help in testing Laravel API endpoints, and what are the key features that make it a valuable tool for API development?\",\"question_2\":\"Explain the process of creating and sending requests using Postman to test a Laravel application\'s RESTful API. How can you set up environment variables for different environments?\",\"question_3\":\"In Postman, what is the purpose of the Postman Collection Runner, and how can it be used to automate the testing of multiple API requests?\",\"question_4\":\"Describe the steps involved in implementing the Repository Pattern in Laravel. How can you use it to abstract away database operations from the rest of your application?\"}', 30, 8, '2024-01-19 03:44:13', '2024-01-19 03:44:13'),
(24, 'Assignment 5', '{\"question_0\":\"How can you create a custom Artisan command in Laravel, and what is the purpose of the handle method within a custom command class?\",\"question_1\":\"What are Laravel Artisan tasks, and how can you schedule them to run at specific intervals using the scheduler?\",\"question_2\":\"Why is it necessary to compile assets in Laravel, and what role does Laravel Mix play in the asset compilation process?\",\"question_3\":\"Discuss the use of event broadcasting in Laravel. How does it enable real-time communication between the server and clients, and what components are involved in the process?\",\"question_4\":\"What is Laravel Query Builder, and how does it differ from raw SQL queries?\",\"question_5\":\"Do CRUD operations along with search in Laravel Query Builder.\"}', 36, 8, '2024-01-19 03:48:11', '2024-01-19 03:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_reviews`
--

CREATE TABLE `assignment_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assignment_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `obtained_marks` int(11) DEFAULT NULL,
  `total_marks` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `std_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignment_reviews`
--

INSERT INTO `assignment_reviews` (`id`, `assignment_name`, `course_name`, `obtained_marks`, `total_marks`, `pdf`, `std_id`, `created_at`, `updated_at`) VALUES
(1, 'Assignment 1', 'HTML', 30, 30, 'student/assignment/1705661106.pdf', 2, '2024-01-19 05:15:06', '2024-01-23 12:07:04'),
(2, 'Assignment 2', 'CSS', 10, 30, 'student/assignment/1705661260.pdf', 2, '2024-01-19 05:17:40', '2024-01-24 00:20:50'),
(3, 'Assignment 1', 'HTML', 30, 30, 'student/assignment/1705663233.pdf', 5, '2024-01-19 05:50:33', '2024-01-29 01:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `std_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `status`, `std_id`, `created_at`, `updated_at`) VALUES
(1, 'present', 2, '2023-12-01 02:30:00', '2023-12-01 02:30:00'),
(2, 'present', 2, '2023-12-04 02:30:00', '2023-12-04 02:30:00'),
(3, 'present', 2, '2023-12-05 02:30:00', '2023-12-05 02:30:00'),
(4, 'present', 2, '2023-12-06 02:30:00', '2023-12-06 02:30:00'),
(5, 'present', 2, '2023-12-07 02:30:00', '2023-12-07 02:30:00'),
(6, 'absent', 2, '2023-12-08 02:30:00', '2023-12-01 03:00:00'),
(7, 'present', 2, '2023-12-11 02:30:00', '2023-12-11 02:30:00'),
(8, 'present', 2, '2023-12-12 02:30:00', '2023-12-12 02:30:00'),
(9, 'present', 2, '2023-12-13 02:30:00', '2023-12-13 02:30:00'),
(10, 'present', 2, '2023-12-14 02:30:00', '2023-12-14 02:30:00'),
(11, 'present', 2, '2023-12-15 02:30:00', '2023-12-15 02:30:00'),
(12, 'present', 2, '2023-12-18 02:30:00', '2023-12-18 02:30:00'),
(13, 'present', 2, '2023-12-19 02:30:00', '2023-12-19 02:30:00'),
(14, 'present', 2, '2023-12-20 02:30:00', '2023-12-20 02:30:00'),
(15, 'present', 2, '2023-12-21 02:30:00', '2023-12-21 02:30:00'),
(16, 'absent', 2, '2023-12-22 02:30:00', '2023-12-01 03:00:00'),
(17, 'present', 2, '2023-12-26 02:30:00', '2023-12-26 02:30:00'),
(18, 'present', 2, '2023-12-27 02:30:00', '2023-12-27 02:30:00'),
(19, 'present', 2, '2023-12-28 02:30:00', '2023-12-28 02:30:00'),
(20, 'present', 2, '2023-12-29 02:30:00', '2023-12-29 02:30:00'),
(21, 'present', 2, '2024-01-01 02:30:00', '2024-01-01 02:30:00'),
(22, 'present', 2, '2024-01-02 02:30:00', '2024-01-02 02:30:00'),
(23, 'present', 2, '2024-01-03 02:30:00', '2024-01-03 02:30:00'),
(24, 'present', 2, '2024-01-04 02:30:00', '2024-01-04 02:30:00'),
(25, 'present', 2, '2024-01-05 02:30:00', '2024-01-05 02:30:00'),
(27, 'absent', 2, '2024-01-08 02:30:00', '2023-12-01 03:00:00'),
(28, 'present', 2, '2024-01-09 02:30:00', '2024-01-09 02:30:00'),
(29, 'present', 2, '2024-01-10 02:30:00', '2024-01-10 02:30:00'),
(30, 'present', 2, '2024-01-11 02:30:00', '2024-01-11 02:30:00'),
(31, 'present', 3, '2023-12-01 02:30:00', '2023-12-01 02:30:00'),
(32, 'present', 3, '2023-12-04 02:30:00', '2023-12-04 02:30:00'),
(33, 'present', 3, '2023-12-05 02:30:00', '2023-12-05 02:30:00'),
(34, 'present', 3, '2023-12-06 02:30:00', '2023-12-06 02:30:00'),
(35, 'present', 3, '2023-12-07 02:30:00', '2023-12-07 02:30:00'),
(36, 'absent', 3, '2023-12-08 02:30:00', '2023-12-01 03:00:00'),
(37, 'present', 3, '2023-12-11 02:30:00', '2023-12-11 02:30:00'),
(38, 'present', 3, '2023-12-12 02:30:00', '2023-12-12 02:30:00'),
(39, 'present', 3, '2023-12-13 02:30:00', '2023-12-13 02:30:00'),
(40, 'present', 3, '2023-12-14 02:30:00', '2023-12-14 02:30:00'),
(41, 'present', 3, '2023-12-15 02:30:00', '2023-12-15 02:30:00'),
(42, 'present', 3, '2023-12-18 02:30:00', '2023-12-18 02:30:00'),
(43, 'present', 3, '2023-12-19 02:30:00', '2023-12-19 02:30:00'),
(44, 'present', 3, '2023-12-20 02:30:00', '2023-12-20 02:30:00'),
(45, 'present', 3, '2023-12-21 02:30:00', '2023-12-21 02:30:00'),
(46, 'absent', 3, '2023-12-22 02:30:00', '2023-12-01 03:00:00'),
(47, 'present', 3, '2023-12-26 02:30:00', '2023-12-26 02:30:00'),
(48, 'present', 3, '2023-12-27 02:30:00', '2023-12-27 02:30:00'),
(49, 'present', 3, '2023-12-28 02:30:00', '2023-12-28 02:30:00'),
(50, 'present', 3, '2023-12-29 02:30:00', '2023-12-29 02:30:00'),
(51, 'present', 3, '2024-01-01 02:30:00', '2024-01-01 02:30:00'),
(52, 'present', 3, '2024-01-02 02:30:00', '2024-01-02 02:30:00'),
(53, 'present', 3, '2024-01-03 02:30:00', '2024-01-03 02:30:00'),
(54, 'present', 3, '2024-01-04 02:30:00', '2024-01-04 02:30:00'),
(55, 'present', 3, '2024-01-05 02:30:00', '2024-01-05 02:30:00'),
(57, 'absent', 3, '2024-01-08 02:30:00', '2023-12-01 03:00:00'),
(58, 'present', 3, '2024-01-09 02:30:00', '2024-01-09 02:30:00'),
(59, 'present', 3, '2024-01-10 02:30:00', '2024-01-10 02:30:00'),
(60, 'present', 3, '2024-01-11 02:30:00', '2024-01-11 02:30:00'),
(61, 'present', 4, '2023-12-01 02:30:00', '2023-12-01 02:30:00'),
(62, 'present', 4, '2023-12-04 02:30:00', '2023-12-04 02:30:00'),
(63, 'present', 4, '2023-12-05 02:30:00', '2023-12-05 02:30:00'),
(64, 'present', 4, '2023-12-06 02:30:00', '2023-12-06 02:30:00'),
(65, 'present', 4, '2023-12-07 02:30:00', '2023-12-07 02:30:00'),
(66, 'absent', 4, '2023-12-08 02:30:00', '2023-12-01 03:00:00'),
(67, 'present', 4, '2023-12-11 02:30:00', '2023-12-11 02:30:00'),
(68, 'present', 4, '2023-12-12 02:30:00', '2023-12-12 02:30:00'),
(69, 'present', 4, '2023-12-13 02:30:00', '2023-12-13 02:30:00'),
(70, 'present', 4, '2023-12-14 02:30:00', '2023-12-14 02:30:00'),
(71, 'present', 4, '2023-12-15 02:30:00', '2023-12-15 02:30:00'),
(72, 'absent', 4, '2023-12-18 02:30:00', '2023-12-01 03:00:00'),
(73, 'present', 4, '2023-12-19 02:30:00', '2023-12-19 02:30:00'),
(74, 'present', 4, '2023-12-20 02:30:00', '2023-12-20 02:30:00'),
(75, 'present', 4, '2023-12-21 02:30:00', '2023-12-21 02:30:00'),
(76, 'absent', 4, '2023-12-22 02:30:00', '2023-12-01 03:00:00'),
(77, 'present', 4, '2023-12-26 02:30:00', '2023-12-26 02:30:00'),
(78, 'present', 4, '2023-12-27 02:30:00', '2023-12-27 02:30:00'),
(79, 'present', 4, '2023-12-28 02:30:00', '2023-12-28 02:30:00'),
(80, 'present', 4, '2023-12-29 02:30:00', '2023-12-29 02:30:00'),
(81, 'present', 4, '2024-01-01 02:30:00', '2024-01-01 02:30:00'),
(82, 'present', 4, '2024-01-02 02:30:00', '2024-01-02 02:30:00'),
(83, 'absent', 4, '2024-01-03 02:30:00', '2023-12-01 03:00:00'),
(84, 'present', 4, '2024-01-04 02:30:00', '2024-01-04 02:30:00'),
(85, 'present', 4, '2024-01-05 02:30:00', '2024-01-05 02:30:00'),
(87, 'absent', 4, '2024-01-08 02:30:00', '2023-12-01 03:00:00'),
(88, 'present', 4, '2024-01-09 02:30:00', '2024-01-09 02:30:00'),
(89, 'present', 4, '2024-01-10 02:30:00', '2024-01-10 02:30:00'),
(90, 'present', 4, '2024-01-11 02:30:00', '2024-01-11 02:30:00'),
(91, 'present', 5, '2023-12-01 02:30:00', '2023-12-01 02:30:00'),
(92, 'present', 5, '2023-12-04 02:30:00', '2023-12-04 02:30:00'),
(93, 'present', 5, '2023-12-05 02:30:00', '2023-12-05 02:30:00'),
(94, 'present', 5, '2023-12-06 02:30:00', '2023-12-06 02:30:00'),
(95, 'present', 5, '2023-12-07 02:30:00', '2023-12-07 02:30:00'),
(96, 'present', 5, '2023-12-08 02:30:00', '2023-12-08 02:30:00'),
(97, 'present', 5, '2023-12-11 02:30:00', '2023-12-11 02:30:00'),
(98, 'present', 5, '2023-12-12 02:30:00', '2023-12-12 02:30:00'),
(99, 'present', 5, '2023-12-13 02:30:00', '2023-12-13 02:30:00'),
(100, 'present', 5, '2023-12-14 02:30:00', '2023-12-14 02:30:00'),
(101, 'present', 5, '2023-12-15 02:30:00', '2023-12-15 02:30:00'),
(102, 'present', 5, '2023-12-18 02:30:00', '2023-12-18 02:30:00'),
(103, 'present', 5, '2023-12-19 02:30:00', '2023-12-19 02:30:00'),
(104, 'present', 5, '2023-12-20 02:30:00', '2023-12-20 02:30:00'),
(105, 'present', 5, '2023-12-21 02:30:00', '2023-12-21 02:30:00'),
(106, 'present', 5, '2023-12-22 02:30:00', '2023-12-22 02:30:00'),
(107, 'present', 5, '2023-12-26 02:30:00', '2023-12-26 02:30:00'),
(108, 'present', 5, '2023-12-27 02:30:00', '2023-12-27 02:30:00'),
(109, 'present', 5, '2023-12-28 02:30:00', '2023-12-28 02:30:00'),
(110, 'present', 5, '2023-12-29 02:30:00', '2023-12-29 02:30:00'),
(111, 'present', 5, '2024-01-01 02:30:00', '2024-01-01 02:30:00'),
(112, 'present', 5, '2024-01-02 02:30:00', '2024-01-02 02:30:00'),
(113, 'present', 5, '2024-01-03 02:30:00', '2024-01-03 02:30:00'),
(114, 'present', 5, '2024-01-04 02:30:00', '2024-01-04 02:30:00'),
(115, 'present', 5, '2024-01-05 02:30:00', '2024-01-05 02:30:00'),
(117, 'present', 5, '2024-01-08 02:30:00', '2024-01-08 02:30:00'),
(118, 'present', 5, '2024-01-09 02:30:00', '2024-01-09 02:30:00'),
(119, 'present', 5, '2024-01-10 02:30:00', '2024-01-10 02:30:00'),
(120, 'present', 5, '2024-01-11 02:30:00', '2024-01-11 02:30:00'),
(121, 'present', 6, '2023-12-01 02:30:00', '2023-12-01 02:30:00'),
(122, 'present', 6, '2023-12-04 02:30:00', '2023-12-04 02:30:00'),
(123, 'present', 6, '2023-12-05 02:30:00', '2023-12-05 02:30:00'),
(124, 'present', 6, '2023-12-06 02:30:00', '2023-12-06 02:30:00'),
(125, 'present', 6, '2023-12-07 02:30:00', '2023-12-07 02:30:00'),
(126, 'absent', 6, '2023-12-08 02:30:00', '2023-12-01 03:00:00'),
(127, 'present', 6, '2023-12-11 02:30:00', '2023-12-11 02:30:00'),
(128, 'present', 6, '2023-12-12 02:30:00', '2023-12-12 02:30:00'),
(129, 'present', 6, '2023-12-13 02:30:00', '2023-12-13 02:30:00'),
(130, 'present', 6, '2023-12-14 02:30:00', '2023-12-14 02:30:00'),
(131, 'present', 6, '2023-12-15 02:30:00', '2023-12-15 02:30:00'),
(132, 'present', 6, '2023-12-18 02:30:00', '2023-12-18 02:30:00'),
(133, 'present', 6, '2023-12-19 02:30:00', '2023-12-19 02:30:00'),
(134, 'present', 6, '2023-12-20 02:30:00', '2023-12-20 02:30:00'),
(135, 'present', 6, '2023-12-21 02:30:00', '2023-12-21 02:30:00'),
(136, 'present', 6, '2023-12-22 02:30:00', '2023-12-22 02:30:00'),
(137, 'present', 6, '2023-12-26 02:30:00', '2023-12-26 02:30:00'),
(138, 'present', 6, '2023-12-27 02:30:00', '2023-12-27 02:30:00'),
(139, 'present', 6, '2023-12-28 02:30:00', '2023-12-28 02:30:00'),
(140, 'present', 6, '2023-12-29 02:30:00', '2023-12-29 02:30:00'),
(141, 'present', 6, '2024-01-01 02:30:00', '2024-01-01 02:30:00'),
(142, 'present', 6, '2024-01-02 02:30:00', '2024-01-02 02:30:00'),
(143, 'present', 6, '2024-01-03 02:30:00', '2024-01-03 02:30:00'),
(144, 'present', 6, '2024-01-04 02:30:00', '2024-01-04 02:30:00'),
(145, 'present', 6, '2024-01-05 02:30:00', '2024-01-05 02:30:00'),
(147, 'present', 6, '2024-01-08 02:30:00', '2024-01-08 02:30:00'),
(148, 'present', 6, '2024-01-09 02:30:00', '2024-01-09 02:30:00'),
(149, 'present', 6, '2024-01-10 02:30:00', '2024-01-10 02:30:00'),
(150, 'present', 6, '2024-01-11 02:30:00', '2024-01-11 02:30:00'),
(151, 'present', 7, '2023-12-01 02:30:00', '2023-12-01 02:30:00'),
(152, 'present', 7, '2023-12-04 02:30:00', '2023-12-04 02:30:00'),
(153, 'present', 7, '2023-12-05 02:30:00', '2023-12-05 02:30:00'),
(154, 'present', 7, '2023-12-06 02:30:00', '2023-12-06 02:30:00'),
(155, 'present', 7, '2023-12-07 02:30:00', '2023-12-07 02:30:00'),
(156, 'absent', 7, '2023-12-08 02:30:00', '2023-12-01 03:00:00'),
(157, 'present', 7, '2023-12-11 02:30:00', '2023-12-11 02:30:00'),
(158, 'present', 7, '2023-12-12 02:30:00', '2023-12-12 02:30:00'),
(159, 'present', 7, '2023-12-13 02:30:00', '2023-12-13 02:30:00'),
(160, 'present', 7, '2023-12-14 02:30:00', '2023-12-14 02:30:00'),
(161, 'present', 7, '2023-12-15 02:30:00', '2023-12-15 02:30:00'),
(162, 'present', 7, '2023-12-18 02:30:00', '2023-12-18 02:30:00'),
(163, 'absent', 7, '2023-12-19 02:30:00', '2023-12-01 03:00:00'),
(164, 'present', 7, '2023-12-20 02:30:00', '2023-12-20 02:30:00'),
(165, 'present', 7, '2023-12-21 02:30:00', '2023-12-21 02:30:00'),
(166, 'present', 7, '2023-12-22 02:30:00', '2023-12-22 02:30:00'),
(167, 'present', 7, '2023-12-26 02:30:00', '2023-12-26 02:30:00'),
(168, 'present', 7, '2023-12-27 02:30:00', '2023-12-27 02:30:00'),
(169, 'present', 7, '2023-12-28 02:30:00', '2023-12-28 02:30:00'),
(170, 'present', 7, '2023-12-29 02:30:00', '2023-12-29 02:30:00'),
(171, 'present', 7, '2024-01-01 02:30:00', '2024-01-01 02:30:00'),
(172, 'present', 7, '2024-01-02 02:30:00', '2024-01-02 02:30:00'),
(173, 'present', 7, '2024-01-03 02:30:00', '2024-01-03 02:30:00'),
(174, 'present', 7, '2024-01-04 02:30:00', '2024-01-04 02:30:00'),
(175, 'present', 7, '2024-01-05 02:30:00', '2024-01-05 02:30:00'),
(177, 'present', 7, '2024-01-08 02:30:00', '2024-01-08 02:30:00'),
(178, 'present', 7, '2024-01-09 02:30:00', '2024-01-09 02:30:00'),
(179, 'present', 7, '2024-01-10 02:30:00', '2024-01-10 02:30:00'),
(180, 'present', 7, '2024-01-11 02:30:00', '2024-01-11 02:30:00'),
(181, 'present', 3, '2024-01-11 02:30:00', '2024-01-11 02:30:00'),
(182, 'present', 5, '2024-01-11 02:30:00', '2024-01-11 02:30:00'),
(183, 'present', 4, '2024-01-21 04:30:34', '2024-01-21 04:30:34'),
(184, 'present', 3, '2024-01-16 04:30:34', '2024-01-16 04:30:34'),
(185, 'present', 4, '2024-01-16 04:30:34', '2024-01-16 04:30:34'),
(186, 'present', 2, '2024-01-22 00:34:16', '2024-01-22 00:34:16'),
(187, 'present', 6, '2024-01-22 00:58:19', '2024-01-22 00:58:19'),
(188, 'present', 4, '2024-01-22 00:58:42', '2024-01-22 00:58:42'),
(189, 'present', 5, '2024-01-22 00:59:28', '2024-01-22 00:59:28'),
(190, 'present', 3, '2024-01-22 01:00:03', '2024-01-22 01:00:03'),
(191, 'present', 6, '2024-01-23 00:44:15', '2024-01-23 00:44:15'),
(192, 'present', 4, '2024-01-23 00:44:35', '2024-01-23 00:44:35'),
(193, 'present', 3, '2024-01-23 00:45:07', '2024-01-23 00:45:07'),
(194, 'present', 3, '2024-01-24 03:22:34', '2024-01-24 03:22:34'),
(195, 'present', 2, '2024-01-24 09:30:05', '2024-01-24 09:30:13'),
(196, 'present', 4, '2024-01-25 01:14:16', '2024-01-25 01:14:16'),
(197, 'present', 3, '2024-01-29 04:46:12', '2024-01-29 04:46:12'),
(198, 'present', 5, '2024-01-30 03:41:38', '2024-01-30 03:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_description` text NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `course_description`, `course_duration`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 'HTML, which stands for HyperText Markup Language, is the standard markup language used to create and design documents on the World Wide Web. It is the backbone of web development and is used to structure content on the web. HTML uses a system of tags to define elements within a document, indicating how content should be displayed.', '2 weeks', 'teacherassets/img/1705468233.png', '2024-01-16 23:40:33', '2024-01-16 23:40:33'),
(2, 'CSS', 'CSS, or Cascading Style Sheets, is a stylesheet language used for describing the presentation of a document written in HTML or XML (including XML dialects such as SVG or XHTML). CSS describes how elements should be displayed on the screen, in print, or in other media.', '2 weeks', 'teacherassets/img/1705553805.png', '2024-01-17 23:26:45', '2024-01-17 23:26:45'),
(3, 'JAVASCRIPT', 'JavaScript is a versatile programming language commonly used for web development. It allows developers to add dynamic content, interactivity, and other features to websites. Here are some key aspects and features of JavaScript:', '2 weeks', 'teacherassets/img/1705553893.png', '2024-01-17 23:28:13', '2024-01-17 23:28:13'),
(4, 'C ', 'C programming is a powerful and widely used programming language. It was created by Dennis Ritchie in the early 1970s at Bell Labs for the development of the UNIX operating system. Here\'s a brief overview of some key concepts in C programming:', '4 weeks', 'teacherassets/img/1705554699.png', '2024-01-17 23:41:39', '2024-01-17 23:41:39'),
(5, 'PHP', 'PHP (Hypertext Preprocessor) is a widely-used open-source server-side scripting language that is especially suited for web development. It is embedded in HTML and runs on the server, enabling the creation of dynamic web pages. Here are some key aspects of PHP:', '8 weeks', 'teacherassets/img/1705554962.png', '2024-01-17 23:46:02', '2024-01-17 23:46:02'),
(6, 'MYSQL', 'MySQL is an open-source relational database management system (RDBMS) that is widely used for managing and organizing data. It is a popular choice for web applications and is often used in conjunction with PHP to create dynamic and interactive websites.', '1 week', 'teacherassets/img/1705555051.png', '2024-01-17 23:47:31', '2024-01-17 23:47:31'),
(7, 'GIT & GITHUB', 'Git is a distributed version control system that allows multiple developers to work on a project simultaneously. It keeps track of changes to the codebase, making collaboration more manageable.\n\nGitHub, on the other hand, is a web-based platform that uses Git for version control. It provides additional features like project management, issue tracking, and collaboration tools. GitHub allows developers to host their Git repositories and work together on projects.', '1 week', 'teacherassets/img/1705555197.png', '2024-01-17 23:49:57', '2024-01-17 23:49:57'),
(8, 'LARAVEL', 'Laravel is a popular open-source PHP web framework designed for web application development. It was created by Taylor Otwell and was first released in 2011. Laravel follows the Model-View-Controller (MVC) architectural pattern and provides elegant syntax and tools for tasks such as routing, authentication, caching, and more. Here are some key features and concepts associated with Laravel:', '12 weeks', 'teacherassets/img/1705555265.png', '2024-01-17 23:51:05', '2024-01-17 23:51:05'),
(9, 'JQUERY', 'jQuery is a fast, small, and feature-rich JavaScript library. It simplifies things like HTML document traversal and manipulation, event handling, and animation. jQuery is widely used to create interactive and dynamic websites. Here are some key aspects and features of jQuery:', '2 weeks', 'teacherassets/img/1705558890.webp', '2024-01-18 00:51:30', '2024-01-18 00:51:30'),
(10, 'AJAX', 'Ajax, which stands for Asynchronous JavaScript and XML, is a set of web development techniques used to create asynchronous web applications. It allows parts of a web page to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This enables web pages to load and update content without requiring a full page refresh.', '2 weeks', 'teacherassets/img/1705559054.png', '2024-01-18 00:54:14', '2024-01-18 00:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `message_content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message_content`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 'hlo', '2024-01-29 13:20:15', '2024-01-29 13:20:15'),
(2, 5, 1, 'hii', '2024-01-29 23:42:44', '2024-01-29 23:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_01_04_175503_create_courses_table', 2),
(4, '2024_01_05_110354_create_courses_table', 3),
(5, '2024_01_08_071334_create_messages_table', 4),
(6, '2024_01_11_070611_create_courses_table', 5),
(7, '2024_01_11_084602_create_topics_table', 6),
(8, '2024_01_11_091839_create_topics_table', 7),
(9, '2024_01_15_102623_create_courses_table', 8),
(10, '2024_01_15_103438_create_users_table', 9),
(11, '2024_01_16_053215_create_topics_table', 10),
(12, '2024_01_17_061350_create_assignments_table', 11),
(13, '2024_01_19_092459_create_reviews_table', 12),
(14, '2024_01_19_100706_create_assignment_reviews_table', 13),
(15, '2024_01_28_124209_create_recent_activities_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recent_activities`
--

CREATE TABLE `recent_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_activities`
--

INSERT INTO `recent_activities` (`id`, `user_id`, `course_id`, `topic_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 9, '2024-01-28 08:05:59', '2024-01-28 08:05:59'),
(2, 2, 2, 14, '2024-01-28 08:08:18', '2024-01-28 08:08:18'),
(3, 5, 1, 11, '2024-01-28 08:09:14', '2024-01-28 08:09:14'),
(4, 2, 1, 10, '2024-01-29 00:09:01', '2024-01-29 00:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review` text NOT NULL,
  `std_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `std_id`, `created_at`, `updated_at`) VALUES
(1, 'Learning from Nishant Sir was a  great experience as I was a fresher and unfamiliar to this field. I gained a lot of  knowledge and many life lessons from sir which helped me to learn, grow and to work hard.\r\n                  All Thanks To Nishant Sir .....', 2, '2024-01-19 04:11:05', '2024-01-19 04:11:05'),
(2, 'I had an exceptional experience during my training period with Nishant Sir. Their expertise and teaching style made learning web development an enriching journey. Their in-depth knowledge, combined with a clear and engaging teaching approach, made complex concepts easy to grasp.\r\n\r\nThank You Sir.', 5, '2024-01-19 11:12:05', '2024-01-19 11:12:05'),
(3, '“First of all thank you so much to “Yorex Infotech” and Nishant sir for this wonderful journey of 8 months...\r\nActually I just completed my 12th and i was worried for my carrier, but after meeting Nishant sir my mind is clear that what to do and why...\r\nI started form zero, everyday tasks helped me to  improve day by day. Sir taught from basic to advance level and today I feel confident in my programming field.I refer to all those student who are confused and worried  for their carrier, you must meet Nishant sir once...', 6, '2024-01-21 11:12:33', '2024-01-21 11:12:33'),
(4, 'I had a great experience here along with Nishant Sir.\r\nWorks on practical knowledge rather than theoretical.\r\nDuring my training months, the best guide for learning web development. l have learned more extra things like confidence and problem-solving skills.\r\nThank you, sir.', 3, '2024-01-18 11:13:08', '2024-01-18 11:13:08'),
(5, 'It was such a great experience to learn and actually get a practical exposure under the guidance of Nishant Sir. I got to learn so much from my mistakes which helped me in becoming skillfull in programming. Thank you sir, for your  valuable guidance and direction.', 4, '2024-01-16 11:13:57', '2024-01-16 11:13:57'),
(6, 'Thanks to Nishant Sir, I feel confident in my web development skills and I\'m excited to apply what I\'ve learned. He is nice educator and mentor.\"', 7, '2024-01-16 11:13:57', '2024-01-16 11:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic` varchar(255) NOT NULL,
  `video` text NOT NULL,
  `notes` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `topic`, `video`, `notes`, `course_id`, `created_at`, `updated_at`) VALUES
(7, 'Introduction To Html', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/TeZdo8mx0gc?si=v5xRtas4Sq-6tQhH\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/IA8JWGP13dI?si=N90Br3i1mYq_t-zK\"}', 'teacherassets/notes/1705468391.pdf', 1, '2024-01-16 23:43:11', '2024-01-16 23:43:11'),
(8, 'Tables', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/RGJkOztXUvc?si=_hqt_DX7SqTleSNU\"}', 'teacherassets/notes/1705555716.pdf', 1, '2024-01-17 23:58:36', '2024-01-17 23:58:36'),
(9, 'Lists', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/N69xumSjg5Q?si=LuQR3Yf7kVjt7U0D\"}', 'teacherassets/notes/1705555792.pdf', 1, '2024-01-17 23:59:52', '2024-01-17 23:59:52'),
(10, 'Forms', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/LhWQlBdqaeM?si=52uYqByaRhjZbFsE\"}', 'teacherassets/notes/1705555869.pdf', 1, '2024-01-18 00:01:09', '2024-01-18 00:01:09'),
(11, 'Images', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/tJaAWmYPPmg?si=OX-jgw6tlCDb6ran\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/ie-1uU31VTw?si=RSZ9kcOdHfi5zmpn\"}', 'teacherassets/notes/1705555961.pdf', 1, '2024-01-18 00:02:41', '2024-01-18 00:02:41'),
(12, 'Introduction', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/ua24185-rcw?si=d2SzT6EZFj-JHLD2\"}', 'teacherassets/notes/1705556090.pdf', 2, '2024-01-18 00:04:50', '2024-01-18 00:04:50'),
(14, 'Selector', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/oPPym7UaSIo?si=rE6c9P5N0XMpJyHv\"}', 'teacherassets/notes/1705556271.pdf', 2, '2024-01-18 00:07:51', '2024-01-18 00:07:51'),
(15, 'Properties', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/YJtlXrzXXFk?si=-6-y9qm0n_bDr_FP\"}', 'teacherassets/notes/1705556327.pdf', 2, '2024-01-18 00:08:47', '2024-01-18 00:08:47'),
(16, 'Background Image', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/BoSQX9_bKSA?si=leiAF9Vb_Sqkw7uc\"}', 'teacherassets/notes/1705557228.pdf', 2, '2024-01-18 00:23:48', '2024-01-18 00:23:48'),
(17, 'Linear-gradient', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/4kWHW7da4U8?si=xBom2IJMMYOfSBLI\"}', 'teacherassets/notes/1705557452.pdf', 2, '2024-01-18 00:27:32', '2024-01-18 00:27:32'),
(18, 'Shadows', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/D0vA_R8lVLw?si=ZaWB2yX88kjH7nE-\"}', 'teacherassets/notes/1705557543.pdf', 2, '2024-01-18 00:29:03', '2024-01-18 00:29:03'),
(19, 'Positions', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/MwGHiVl-gqk?si=EElcAAhq0vndCGM1\"}', 'teacherassets/notes/1705557615.pdf', 2, '2024-01-18 00:30:15', '2024-01-18 00:30:15'),
(20, 'Z-index', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/Uzuq2FGxgK4?si=aHu1bIJ1xAJNhUOc\"}', 'teacherassets/notes/1705557690.pdf', 2, '2024-01-18 00:31:30', '2024-01-18 00:31:30'),
(21, 'Keyframes', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/jiK6Mf-ILSg?si=pleuaJiEfO32udFL\"}', 'teacherassets/notes/1705557908.pdf', 2, '2024-01-18 00:35:08', '2024-01-18 00:35:08'),
(22, 'Pseudo Class', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/x0prF61CpHY?si=_eEyhGfHYsMWm3Sy\"}', 'teacherassets/notes/1705557965.pdf', 2, '2024-01-18 00:36:05', '2024-01-18 00:36:05'),
(23, 'Google-Fonts', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/A3n1-lCK2QQ?si=qua6b4bS_DFdVqY7\"}', 'teacherassets/notes/1705558039.pdf', 2, '2024-01-18 00:37:19', '2024-01-18 00:37:19'),
(24, 'Introduction', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/B7wHpNUUT4Y?si=ft82WqK56NDfUItp\"}', 'teacherassets/notes/1705559924.pdf', 3, '2024-01-18 01:08:44', '2024-01-18 01:08:44'),
(25, 'Variables Declaration', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/WQrktHGxoYo?si=hDjIpWHAH30JM0__\"}', 'teacherassets/notes/1705560128.pdf', 3, '2024-01-18 01:12:08', '2024-01-18 01:12:08'),
(26, 'Conditional statements', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/wT-1T7Ws5qY?si=3AJtZ6LkR2bb0BD1\"}', 'teacherassets/notes/1705560316.pdf', 3, '2024-01-18 01:15:16', '2024-01-18 01:15:16'),
(27, 'Jumping Statement', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/eITYb9ljz0U?si=FAhFkK_fCN_-w2NU\"}', 'teacherassets/notes/1705560407.pdf', 3, '2024-01-18 01:16:47', '2024-01-18 01:16:47'),
(28, 'Looping Statements', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/7xgJmIOG8GE?si=o92nggCQFMS0rEYn\"}', 'teacherassets/notes/1705560458.pdf', 3, '2024-01-18 01:17:38', '2024-01-18 01:17:38'),
(29, 'Linking-External file', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/CRRcYpxb_bY?si=foYwv1ncyT653yRQ\"}', 'teacherassets/notes/1705560602.pdf', 3, '2024-01-18 01:20:02', '2024-01-18 01:20:02'),
(30, 'Functions', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/a_gwOwkbhZ0?si=VWKtRoAZD7PkhM4O\"}', 'teacherassets/notes/1705560648.pdf', 3, '2024-01-18 01:20:48', '2024-01-18 01:20:48'),
(31, 'Window Location Function', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/KTeuJxbopnU?si=qAWDKJHjqhEHhwbr\"}', 'teacherassets/notes/1705560754.pdf', 3, '2024-01-18 01:22:34', '2024-01-18 01:22:34'),
(32, 'Set-Interval Function', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/7cVrKTQPaHY?si=n1FgRUGezc5pMcyy\"}', 'teacherassets/notes/1705560813.pdf', 3, '2024-01-18 01:23:33', '2024-01-18 01:23:33'),
(33, 'Set-timeout Function', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/o83Z3ORQBrU?si=BR-MxgBH99eNK1C7\"}', 'teacherassets/notes/1705560894.pdf', 3, '2024-01-18 01:24:54', '2024-01-18 01:24:54'),
(34, 'Taking User Input', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/aEj0Wu33hJM?si=YPrt8oxB-bym1-uW\"}', 'teacherassets/notes/1705560993.pdf', 3, '2024-01-18 01:26:33', '2024-01-18 01:26:33'),
(35, 'Dialog Box', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/xUQDi30_Lok?si=xEOhxACQoDyHwIjE\"}', 'teacherassets/notes/1705561033.pdf', 3, '2024-01-18 01:27:13', '2024-01-18 01:27:13'),
(36, 'Button Click', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/nCvhEzHiFrw?si=xg4RBk-F8V1ODFXh\"}', 'teacherassets/notes/1705561343.pdf', 3, '2024-01-18 01:32:23', '2024-01-18 01:32:23'),
(37, 'Introduction', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/uaeKhfhYE0U?si=oXIH8lgavYIogMeX\"}', 'teacherassets/notes/1705561595.pdf', 7, '2024-01-18 01:36:35', '2024-01-18 01:36:35'),
(38, 'Git Commands', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/PSJ63LULKHA?si=voApH-PsM9JUOzyd\"}', 'teacherassets/notes/1705561641.pdf', 7, '2024-01-18 01:37:21', '2024-01-18 01:37:21'),
(39, 'Add New Files', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/tFAPuaeQqu4?si=qHnw6WSU0jQLyw1b\"}', 'teacherassets/notes/1705561957.pdf', 7, '2024-01-18 01:42:37', '2024-01-18 01:42:37'),
(40, 'Git push/pull/merge/branch', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/Ez8F0nW6S-w?si=XEO8fSDixpo-Z8DQ\"}', 'teacherassets/notes/1705562045.pdf', 7, '2024-01-18 01:44:05', '2024-01-18 01:44:05'),
(41, 'Introduction', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/QvaFeU0LWnc?si=RqTLz1yzXLLvCXC8\"}', 'teacherassets/notes/1705562251.pdf', 9, '2024-01-18 01:47:31', '2024-01-18 01:47:31'),
(42, 'Syntax', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/wjFfyqEutYE?si=DCN0JOSdyoO52-9J\"}', 'teacherassets/notes/1705562295.pdf', 9, '2024-01-18 01:48:15', '2024-01-18 01:48:15'),
(43, 'Selectors', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/yyVHXIciUtg?si=_-FK5FH2UEYCKYkQ\"}', 'teacherassets/notes/1705562337.pdf', 9, '2024-01-18 01:48:57', '2024-01-18 01:48:57'),
(44, 'Event-Method', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/FgLLA9fE2_E?si=8_KgzyIyREAlgWGc\"}', 'teacherassets/notes/1705562444.pdf', 9, '2024-01-18 01:50:44', '2024-01-18 01:50:44'),
(45, 'Effects', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/_4xuig0pRRA?si=ylm9V9_oqxioHOg6\"}', 'teacherassets/notes/1705562497.pdf', 9, '2024-01-18 01:51:37', '2024-01-18 01:51:37'),
(46, 'Jquery-Html', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/_hWW2nxcUJk?si=rewmsUPY_rx3KlsI\"}', 'teacherassets/notes/1705562797.pdf', 9, '2024-01-18 01:56:37', '2024-01-18 01:56:37'),
(47, 'Traversing & Chaining methods', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/-JEMRV3mXLA?si=_jUPhYRG1oDKOr2M\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/b_EVovod_Mk?si=FbBQK6TKTmW6eQZn\"}', 'teacherassets/notes/1705562944.pdf', 9, '2024-01-18 01:59:04', '2024-01-18 01:59:04'),
(48, 'Introduction', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/Wa-kgmSLls4?si=EGzJbfkSRpRO1V10\"}', 'teacherassets/notes/1705563203.pdf', 4, '2024-01-18 02:03:23', '2024-01-18 02:03:23'),
(49, 'Data-types', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/NyT9vvSBoeo?si=eOP_NU1VrbBvw8K4\"}', 'teacherassets/notes/1705564654.pdf', 4, '2024-01-18 02:27:34', '2024-01-18 02:27:34'),
(50, 'Variables', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/dhh5lrXXXYw?si=sz2eYL0rfLb_hLdP\"}', 'teacherassets/notes/1705568747.pdf', 4, '2024-01-18 03:35:47', '2024-01-18 03:35:47'),
(51, 'Operator and Booleans', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/WGQRInmOBM8?si=IT8Pphh2c1byap6H\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/CX_w9lXIzq0?si=1fFSqdQLeDIgl9e3\"}', 'teacherassets/notes/1705568918.pdf', 4, '2024-01-18 03:38:38', '2024-01-18 03:38:38'),
(52, 'Conditional Statements', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/D0ACZ0uU_2g?si=j_c5MsmMygskD5MV\"}', 'teacherassets/notes/1705568988.pdf', 4, '2024-01-18 03:39:48', '2024-01-18 03:39:48'),
(53, 'Loops', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/wYvrBXUfFfw?si=DT3lfMjBE9gk2Dr9\"}', 'teacherassets/notes/1705569020.pdf', 4, '2024-01-18 03:40:20', '2024-01-18 03:40:20'),
(54, 'Functions', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/mIY3QVktHU8?si=c47J7Tvvdr1oaqJm\"}', 'teacherassets/notes/1705569220.pdf', 4, '2024-01-18 03:43:40', '2024-01-18 03:43:40'),
(55, 'Arrays', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/qKFBtCPwjgI?si=5xxk3yTZlDc5fqch\"}', 'teacherassets/notes/1705569264.pdf', 4, '2024-01-18 03:44:24', '2024-01-18 03:44:24'),
(56, 'Introduction', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/44-D08_d-c8?si=cCdSOeDzIUAIyjZu\"}', 'teacherassets/notes/1705569653.pdf', 10, '2024-01-18 03:50:53', '2024-01-18 03:50:53'),
(57, 'Insert-Data', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/DqYbcjj9M2U?si=gHVbfiLwlru_RLOn\"}', 'teacherassets/notes/1705569803.pdf', 10, '2024-01-18 03:53:23', '2024-01-18 03:53:23'),
(58, 'Select-Data', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/CXHhAUWLRrA?si=WbfZ9ZMPKHB0D2En\"}', 'teacherassets/notes/1705569874.pdf', 10, '2024-01-18 03:54:34', '2024-01-18 03:54:34'),
(59, 'Update-Data', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/x3OYLQFPfd0?si=8e9CnumZDXxSp-2k\"}', 'teacherassets/notes/1705570304.pdf', 10, '2024-01-18 04:01:44', '2024-01-18 04:01:44'),
(60, 'Delete-data', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/2gmx0lI9caQ?si=A3v2tPFhduNFwg07\"}', 'teacherassets/notes/1705570378.pdf', 10, '2024-01-18 04:02:58', '2024-01-18 04:02:58'),
(61, 'Ajax-PHP', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/ACitNEo8sKw?si=VqeoPO5RYIHQoz7p\"}', 'teacherassets/notes/1705570453.pdf', 10, '2024-01-18 04:04:13', '2024-01-18 04:04:13'),
(62, 'Ajax-JSON', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/iCat5oEcX6k?si=ggQoyKw1DznucDMQ\"}', 'teacherassets/notes/1705570530.pdf', 10, '2024-01-18 04:05:30', '2024-01-18 04:05:30'),
(63, 'Ajax-LARAVEL', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/5DxckXHBG6c?si=yY84o3SPY71IzKyL\"}', 'teacherassets/notes/1705570592.pdf', 10, '2024-01-18 04:06:32', '2024-01-18 04:06:32'),
(64, 'Introduction', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/a_qREkJ78f4?si=sCcUEBEP5xn8fKn3\"}', 'teacherassets/notes/1705570941.pdf', 5, '2024-01-18 04:12:21', '2024-01-18 04:12:21'),
(65, 'Basics of PHP', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/eLBDf7U4DfQ?si=GNpO_-ZXZ6fhMoY-\"}', 'teacherassets/notes/1705570993.pdf', 5, '2024-01-18 04:13:13', '2024-01-18 04:13:13'),
(66, 'Data-Types', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/oXX2SJKijig?si=b-CkGKLsFUIO6UEi\"}', 'teacherassets/notes/1705571029.pdf', 5, '2024-01-18 04:13:49', '2024-01-18 04:13:49'),
(67, 'Operators', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/xLc70TTz88Q?si=J309W3zIayFkJ7Co\"}', 'teacherassets/notes/1705571103.pdf', 5, '2024-01-18 04:15:03', '2024-01-18 04:15:03'),
(68, 'Variables', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/L2kwYV_paRE?si=lqMjaCsH1_CUmL8e\"}', 'teacherassets/notes/1705571147.pdf', 5, '2024-01-18 04:15:47', '2024-01-18 04:15:47'),
(69, 'If-Statement', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/D5U0764ynQU?si=V_WTBWX496cCUZH6\"}', 'teacherassets/notes/1705571207.pdf', 5, '2024-01-18 04:16:47', '2024-01-18 04:16:47'),
(70, 'Switch', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/3KARgG9t62w?si=XCFPgdCX67TAgduF\"}', 'teacherassets/notes/1705571569.pdf', 5, '2024-01-18 04:22:49', '2024-01-18 04:22:49'),
(71, 'Loops', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/y4BayRnGmTM?si=-v2gzUuI8PlX2blM\"}', 'teacherassets/notes/1705571617.pdf', 5, '2024-01-18 04:23:37', '2024-01-18 04:23:37'),
(72, 'Session-Cookies', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/NL20n0x0raI?si=mgpOWNhv9cLkXQmu\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/QfKFijweO64?si=b0rT_7P6PuiZUYmO\"}', 'teacherassets/notes/1705571680.pdf', 5, '2024-01-18 04:24:40', '2024-01-18 04:24:40'),
(73, 'Function-Arrays', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/hDMg-NCGLfQ?si=GlvVPKhuV-TJYopi\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/SLqF77h6HLY?si=FUNjCrhpGjnHHJte\"}', 'teacherassets/notes/1705571738.pdf', 5, '2024-01-18 04:25:38', '2024-01-18 04:25:38'),
(74, 'OOPs-1', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/MVEAYafrgKM?si=ouRPSb-EzXdHD30h\"}', 'teacherassets/notes/1705571931.pdf', 5, '2024-01-18 04:28:51', '2024-01-18 04:28:51'),
(75, 'OOPs-2', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/JSX0HMYgtvc?si=HZ1R4y7Hi53MaN9o\"}', 'teacherassets/notes/1705572007.pdf', 5, '2024-01-18 04:30:07', '2024-01-18 04:30:07'),
(76, 'Introduction', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/KlWOr2RwqM4?si=SZ94jilIm45Asbb6\"}', 'teacherassets/notes/1705572260.pdf', 6, '2024-01-18 04:34:20', '2024-01-18 04:34:20'),
(77, 'Installation', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/20nqvXrHS0M?si=hpZeLEAgHNlMDfUk\"}', 'teacherassets/notes/1705572308.pdf', 6, '2024-01-18 04:35:08', '2024-01-18 04:35:08'),
(78, 'Basics & Syntax', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/cWMCHbxMiMI?si=DR2-lw_F8R_iVJDy\"}', 'teacherassets/notes/1705572386.pdf', 6, '2024-01-18 04:36:26', '2024-01-18 04:36:26'),
(79, 'Data-types', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/s1Nn1Dcn0Jk?si=0FWmzKE-lKmg0wT9\"}', 'teacherassets/notes/1705572556.pdf', 6, '2024-01-18 04:39:16', '2024-01-18 04:39:16'),
(80, 'TCL-Commands', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/W0dJ8e_IIZI?si=o1jAa9PhkPUQ_4LQ\"}', 'teacherassets/notes/1705572616.pdf', 6, '2024-01-18 04:40:16', '2024-01-18 04:40:16'),
(81, 'Conditional statements', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/azkZI3uA71I?si=xlEqsksQT_5R-1h5\"}', 'teacherassets/notes/1705572668.pdf', 6, '2024-01-18 04:41:08', '2024-01-18 04:41:08'),
(82, 'Closure', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/DxoRUmW44JE?si=im73-Chz7elx-Yp0\"}', 'teacherassets/notes/1705572785.pdf', 6, '2024-01-18 04:43:05', '2024-01-18 04:43:05'),
(84, 'Introduction', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/0yVDMcGp97g?si=c64nGg0fSzZW5nUm\"}', 'teacherassets/notes/1705573797.pdf', 8, '2024-01-18 04:59:57', '2024-01-18 04:59:57'),
(85, 'Laravel-Setup', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/YGp_-4xDBNs?si=KZq6M0pgcT7velML\"}', 'teacherassets/notes/1705573850.pdf', 8, '2024-01-18 05:00:50', '2024-01-18 05:00:50'),
(86, 'Basics', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/P1vLmaZ2JLI?si=PU6dV3yT1_Nf1uc5\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/FQnhpuYldes?si=06s5I2di9fnnhA5_\",\"video_2\":\"https:\\/\\/www.youtube.com\\/embed\\/m1L9pTir4mo?si=fGWBlYWCRf2NiMtB\",\"video_3\":\"https:\\/\\/www.youtube.com\\/embed\\/ejOWLTUIo8w?si=Zbljk1rehfAeDh8s\",\"video_4\":\"https:\\/\\/www.youtube.com\\/embed\\/LmVBdYjfR0Q?si=v29U5-AhVSCEKrAB\",\"video_5\":\"https:\\/\\/www.youtube.com\\/embed\\/najrEQjOWEA?si=z4OliNAhLwfQKYco\",\"video_6\":\"https:\\/\\/www.youtube.com\\/embed\\/Y8crm7oULds?si=NLPbCFjLJVGbzMj9\",\"video_7\":\"https:\\/\\/www.youtube.com\\/embed\\/z0_dIGlHSvg?si=HqDTm9kZC6feXkcu\",\"video_8\":\"https:\\/\\/www.youtube.com\\/embed\\/PAYF4mvb2Ws?si=FVApyCZUu0Ge7S7I\",\"video_9\":\"https:\\/\\/www.youtube.com\\/embed\\/GFl9treG81g?si=3bVxPxHMmRwArVX9\",\"video_10\":\"https:\\/\\/www.youtube.com\\/embed\\/Q24bbCFPTDo?si=SsGQQMIS68Wubxne\"}', 'teacherassets/notes/1705574337.pdf', 8, '2024-01-18 05:08:57', '2024-01-18 05:08:57'),
(87, 'Artisan Console Commands', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/CXsJ-LGKjpE?si=7D860s9G6WQw_VqR\"}', 'teacherassets/notes/1705574438.pdf', 8, '2024-01-18 05:10:38', '2024-01-18 05:10:38'),
(88, 'Compile Assets', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/0QbLhAYsbqA?si=lV7zwEokyEd0hRav\"}', 'teacherassets/notes/1705574505.pdf', 8, '2024-01-18 05:11:45', '2024-01-18 05:11:45'),
(89, 'Mails', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/D8CCivAJBLk?si=u823Ap3SBzhExR_3\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/XCQHqoV-tnc?si=rdj_3xRn6oxktv3S\"}', 'teacherassets/notes/1705574591.pdf', 8, '2024-01-18 05:13:11', '2024-01-18 05:13:11'),
(90, 'Events', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/dWSPG-iKOVc?si=5iMxzc-X8NEOv1ra\"}', 'teacherassets/notes/1705574623.pdf', 8, '2024-01-18 05:13:43', '2024-01-18 05:13:43'),
(91, 'Query-Builder', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/uq4NXqc14v0?si=5WwvIYbUYCcqR00q\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/YBLni0HJbXI?si=oGkviG9H9AkCuvYb\",\"video_2\":\"https:\\/\\/www.youtube.com\\/embed\\/BR_aUGC9hMI?si=HX-4fx3vhVg-_E7H\",\"video_3\":\"https:\\/\\/www.youtube.com\\/embed\\/6U1mGD2RBWU?si=sN_Zitie6RG61UY5\",\"video_4\":\"https:\\/\\/www.youtube.com\\/embed\\/8Uzkyao9WBs?si=VcOgqUE_8JYVQ7Tu\",\"video_5\":\"https:\\/\\/www.youtube.com\\/embed\\/Qg8-dgYBmKE?si=ho200wsvxW1U3DK_\"}', 'teacherassets/notes/1705574823.pdf', 8, '2024-01-18 05:17:03', '2024-01-18 05:17:03'),
(92, 'Model Observer', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/KcpXkHIciys?si=KvmgDMYrdhDgGIlk\"}', 'teacherassets/notes/1705574863.pdf', 8, '2024-01-18 05:17:43', '2024-01-18 05:17:43'),
(93, 'Error Handling', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/dHYce4YzTjo?si=_gpsw4MxuzJgwenn\"}', 'teacherassets/notes/1705574911.pdf', 8, '2024-01-18 05:18:31', '2024-01-18 05:18:31'),
(94, 'Relationships', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/_LyEayVdqUM?si=xr6K6uN22fKBO5LE\",\"video_1\":\"https:\\/\\/www.youtube.com\\/embed\\/nC8oS9IB8QE?si=Fljpia37VQluuy9-\",\"video_2\":\"https:\\/\\/www.youtube.com\\/embed\\/dlbY5PRnv-s?si=113X6452vlR0p47Z\"}', 'teacherassets/notes/1705574988.pdf', 8, '2024-01-18 05:19:48', '2024-01-18 05:19:48'),
(95, 'Postman', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/aiD9j8fDeUQ?si=mtIpvW2pPbTQLvk8\"}', 'teacherassets/notes/1705575035.pdf', 8, '2024-01-18 05:20:35', '2024-01-18 05:20:35'),
(96, 'Repository Pattern', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/6xzGBH2jgOY?si=5n5i-fWzOmRmfD-h\"}', 'teacherassets/notes/1705575081.pdf', 8, '2024-01-18 05:21:21', '2024-01-18 05:21:21'),
(97, 'Rest-Api', '{\"video_0\":\"https:\\/\\/www.youtube.com\\/embed\\/w_PheXsEg0c?si=zNBiQvK-09KUTWlN\"}', 'teacherassets/notes/1705575124.pdf', 8, '2024-01-18 05:22:04', '2024-01-18 05:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'student',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'teacher', 'teacher@gmail.com', NULL, '$2y$10$CZWIu.larEqINY8QyUuF0e1Ka9TszkvefvfWx0/zVnXaLIPSNNgOO', '6280707445', 'teacher', NULL, NULL, NULL),
(2, 'harbans', 'harbans@gmail.com', NULL, '$2y$12$lB9ubCeLdI9ffd7/3SePtukZEc7lF1aLHaqElIf5kYijlJ8A57wR2', '6280707445', 'student', NULL, '2024-01-17 04:19:44', '2024-01-17 04:19:44'),
(3, 'himanshu', 'himanshu@gmail.com', NULL, '$2y$12$cOEMrGXBrK4ZqDZlRnw.5eVoSBh3cF1cLBYXrmWzwk1bW.6gzlKDW', '1234567891', 'student', NULL, '2024-01-19 05:36:10', '2024-01-19 05:36:10'),
(4, 'dushyant', 'dushyant@gmail.com', NULL, '$2y$12$OnoebTvAp4biyCTn9mQoA.IykUbJ.utIC.OUE.EnJgm0YWTP7WYPa', '7814961412', 'student', NULL, '2024-01-19 05:38:59', '2024-01-19 05:38:59'),
(5, 'harshit', 'harshit@gmail.com', NULL, '$2y$12$eqC4d4DhO5AtDxvmyaeeqOecWX6.ZDqQWWhSgr5c1Ru1AA6kDAMHa', '6280707442', 'student', NULL, '2024-01-19 05:40:24', '2024-01-19 05:40:24'),
(6, 'richa', 'richa@gmail.com', NULL, '$2y$12$yNKAyjXwxBAXPxHRpyEM..BG4K.9BUIl84d4qXaJh7l3QH.sST1yC', '6280707334', 'student', NULL, '2024-01-19 05:41:07', '2024-01-19 05:41:07'),
(7, 'kanan', 'kanan@gmail.com', NULL, '$2y$12$JDkYPkgrlkBoDkyBOzieUOxa8t/Z8T2tsStsQ1zX8LfIAAqnFHohO', '6280707554', 'student', NULL, '2024-01-19 05:41:47', '2024-01-19 05:41:47'),
(8, 'admin', 'admin@gmail.com', NULL, '$2y$10$cesKYPdu3T/nFUPCSAjgUuK23R5Obitt.YzSgHUbKPS3g8KXg5Zf2', '6280707456', 'superadmin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignments_course_id_foreign` (`course_id`);

--
-- Indexes for table `assignment_reviews`
--
ALTER TABLE `assignment_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignment_reviews_std_id_foreign` (`std_id`);

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendences_std_id_foreign` (`std_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recent_activities`
--
ALTER TABLE `recent_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recent_activities_user_id_foreign` (`user_id`),
  ADD KEY `recent_activities_course_id_foreign` (`course_id`),
  ADD KEY `recent_activities_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_std_id_foreign` (`std_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_course_id_foreign` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `assignment_reviews`
--
ALTER TABLE `assignment_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recent_activities`
--
ALTER TABLE `recent_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assignment_reviews`
--
ALTER TABLE `assignment_reviews`
  ADD CONSTRAINT `assignment_reviews_std_id_foreign` FOREIGN KEY (`std_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attendences`
--
ALTER TABLE `attendences`
  ADD CONSTRAINT `attendences_std_id_foreign` FOREIGN KEY (`std_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recent_activities`
--
ALTER TABLE `recent_activities`
  ADD CONSTRAINT `recent_activities_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recent_activities_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recent_activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_std_id_foreign` FOREIGN KEY (`std_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
