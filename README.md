Laravel Project Setup Guide

Prerequisites

Make sure you have the following installed on your system:

PHP
Composer
Laravel
Node.js & npm



Installation Steps:

1. Clone the repository: 
  git clone <repository-url>
  cd <project-directory>
  
3. Install dependencies:
  composer install
  npm install
  
4. Set up environment file:
  cp .env.example .env
  php artisan key:generate
  
5. Update the .env file with your database credentials.

6. Run database migrations (if applicable):
     php artisan migrate
   
8. Start the application:
    php artisan serve

9. Compile frontend assets:
   npm run dev
