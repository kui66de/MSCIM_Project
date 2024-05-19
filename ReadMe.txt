IT Star Phone & Repair Shop is a web application designed to provide an online storefront and repair booking system for a phone shop. The project includes several web pages, a database schema, and PHP scripts to handle various functionalities such as user authentication and product management.

Project Structure
The project consists of the following files:

index.html: 			The homepage of the website.\
shop.php: 			The main shop page displaying products.\
shopping-cart.html: 		The shopping cart page.\
account.html: 			The user account page for login and registration.\
appointment.html: 		The appointment booking page for repairs.\
contact.html: 			The contact page for customer inquiries.\
shop-single.html: 		The individual product detail page.\
phone_shop.sql: 		The SQL script for setting up the database.\
css folder: 			The style sheet and bootstrap style.\
js folder: 			The javaScript Library and jQuery for Ajax.\
php folder: 			The database connection file.\
threejs folder: 		The JavaScript for webXR and 3D object library.\


Setup and Configuration

Database Setup\
1. Create a database named phone_shop.\
Import the phone_shop.sql file into your database to create the necessary tables and insert initial data.\

2. Configure Database Connection\
Open the db_connection.php file (assumed to exist based on the typical structure of PHP projects) and configure it with your database credentials.\

$servername = "localhost";\
$username = "your_username";\
$password = "your_password";\
$dbname = "phone_shop";\

3. Configure PHP Scripts\
Ensure the form actions in account.html point to the correct PHP files (e.g., login.php, register.php).\


Testing the Features

Register a new account on the account.html page.\
Log in with the created account.\
Browse products on the shop.php page.\
Add products to the cart and view the cart on the shopping-cart.html page.\
Book a repair appointment on the appointment.html page.\
Contact the shop via the contact.html page.\
}