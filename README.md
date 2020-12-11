# Shift Challenge

> ### Shift Challenge Code


----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone git@github.com:leereal/shift_final.git

Switch to the repo folder

    cd shift_final

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations and seed at the same time (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed

Install node modules

    npm install 

Run npm

    npm run hot

Start the local development server

    php artisan serve

You can now access the server at http://127.0.0.1:8000

**TL;DR command list**

    git clone git@github.com:leereal/shift_final.git
    cd shift_final
    composer install
    cp .env.example .env
    php artisan migrate:fresh --seed
    php artisan key:generate
    npm install
    npm run hot
    php artisan serve

    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)
