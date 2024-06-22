# BanPIM - A Mini Product Information Management System

## Introduction
BanPIM is a Mini Product Information Management System developed using Laravel. It includes features such as user registration, login, product management, media file uploads, and more.

## Features
- User Registration and Login
- Product Management
- Media File Uploads and Management
- Categories and Tags Management
- Dashboard with Metrics

## Requirements
- PHP >= 7.4
- Composer
- Node.js & npm
- A web server like Apache or Nginx

## Installation

1. **Clone the Repository:**
    ```bash
    git clone https://github.com/your-repo/banpim.git
    cd banpim
    ```

2. **Install PHP Dependencies:**
    ```bash
    composer install
    ```

3. **Install Node Dependencies:**
    ```bash
    npm install
    ```

4. **Set Up Environment File:**
   Copy the `.env.example` file to `.env` and configure your environment variables.
    ```bash
    cp .env.example .env
    ```

5. **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

6. **Run Migrations:**
    ```bash
    php artisan migrate
    ```

7. **Create Storage Link:**
    ```bash
    php artisan storage:link
    ```

## Usage

1. **Run the Development Server:**
    ```bash
    php artisan serve
    ```

2. **Access the Application:**
   Open your browser and go to `http://localhost:8000`.

## Routes

### Public Routes
- `/`: Welcome page with a list of all products
- `/login`: User login page
- `/register`: User registration page

### Authenticated Routes
- `/dashboard`: Dashboard with metrics
- `/products`: Product management (CRUD)
- `/media`: Media management (CRUD)
- `/categories`: Category management (CRUD)
- `/tags`: Tag management (CRUD)

## Models and Controllers

### Models
- `Product`: Manages product data
- `Media`: Manages media file data
- `Category`: Manages category data
- `Tag`: Manages tag data
- `User`: Manages user data

### Controllers
- `ProductController`: Handles product-related operations
- `MediaController`: Handles media-related operations
- `CategoryController`: Handles category-related operations
- `TagController`: Handles tag-related operations
- `Auth\LoginController`: Handles user login
- `Auth\RegisterController`: Handles user registration
- `DashboardController`: Handles dashboard operations

## Media File Uploads

1. **File Upload:**
   Media files are uploaded via the media management interface. Files are stored in the `public` disk, which maps to `storage/app/public`.

2. **Serving Files:**
   Ensure the storage link is created (`php artisan storage:link`). Media files can be accessed via URLs generated using `Storage::url()`.

