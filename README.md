# ToDoList App

## Overview
The **ToDoList App** is a task management application built with **Laravel**, **MySQL**, and **Livewire**. The app allows users to create, update, and manage tasks in real-time. It includes user authentication, role-based access control, and provides a smooth experience with Livewire components for dynamic user interactions.

## Features
- **User Authentication**: Secure user login and registration.
- **Task Management**: Add, update, delete, and mark tasks as complete/incomplete.
- **Real-time Interactions**: Uses Livewire to handle frontend updates without full page reloads.
- **User-specific Task Lists**: Each user has their own list of tasks.

## Requirements
- PHP 8.0+
- Composer
- Laravel 9.x
- MySQL 8.x
- Node.js and npm
- Livewire

## Installation

2. **Install Dependencies**
   ```bash
   composer install
   npm install

3. **Configure Enviroment**
   ```bash
   cp .env.example .env
   php artisan key:generate

4. **Configure Database**
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password

5. **Run the Database Migration**
   ```bash
   php artisan migrate
   npm run dev

6. **Start Application**
   ```bash
   php artisan serve
