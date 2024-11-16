Laravel RESTful API

This is a Laravel-based RESTful API designed for efficient customer and invoice management. The application demonstrates key Laravel features such as model factories, seeders, and queue systems for background task handling. While a robust backend is implemented, no front-end integration has been included in this project.

Features

    Customer Management: Manage customers with endpoints for creating, reading, updating, and deleting records.
    Invoicing System: Automatically generate invoices linked to customers.
    Database Seeding: Use model factories to populate the database with test data.
    RESTful API: Clean and structured endpoints for seamless integration.

Technologies Used

    Framework: Laravel
    Database: MySQL
    Testing: Factories and Seeders
    Development Server: PHP Artisan Serve

Installation
Prerequisites

    PHP >= 8.1
    Composer
    MySQL Database

    
Clone the repository:
git clone https://github.com/Kudastech/Laravel-Restful-Api.git
cd Laravel-Restful-Api

composer install

cp .env.example .env
php artisan key:generate

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<database_name>
DB_USERNAME=<username>
DB_PASSWORD=<password>


php artisan migrate --seed

php artisan serve

API Endpoints
Customers

    GET /api/customers: List all customers.
    POST /api/customers: Create a new customer.
    GET /api/customers/{id}: Retrieve a specific customer.
    PUT /api/customers/{id}: Update a customer.
    DELETE /api/customers/{id}: Delete a customer.

Invoices

    GET /api/invoices: List all invoices.
    POST /api/invoices: Create a new invoice.
    GET /api/invoices/{id}: Retrieve a specific invoice.
    PUT /api/invoices/{id}: Update an invoice.
    DELETE /api/invoices/{id}: Delete an invoice.


