# My Laravel App

A simple Laravel-based Task Manager application to manage daily tasks efficiently.  
---

## Features

- Laravel 10+ framework
- Clean and professional UI using Tailwind CSS
- User authentication (Login & Register)
- Minimal, modern landing page design

---

## Prerequisites

Before running this project, make sure you have:

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL or any supported database
- Git

---

## Installation

1. **Clone the repository**


git clone https://github.com/hashiniKaushalya2001/TaskManager.git
cd TaskManager
Install PHP dependencies using Composer


Copy code
composer install
Install frontend dependencies using NPM


Copy code
npm install
npm run dev
Copy .env file and configure environment variables


Copy code
cp .env.example .env
Set your database credentials:

ini
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
Generate application key


Copy code
php artisan key:generate
Run database migrations


Copy code
php artisan migrate
Serve the application


Copy code
php artisan serve
The application will be accessible at http://127.0.0.1:8000

Usage
Visit http://127.0.0.1:8000 to see the welcome page.

Use the Register button to create a new account.

Login to access authenticated pages.

---
## Screenshots
<img width="1306" height="555" alt="Welcome" src="https://github.com/user-attachments/assets/cd45c66a-93c2-4005-a08b-2283a122c006" />
<img width="1020" height="537" alt="Dashboard" src="https://github.com/user-attachments/assets/70400a7a-e1aa-4c3e-8804-669231307a92" />
<img width="1082" height="523" alt="Tasks" src="https://github.com/user-attachments/assets/ba89ad96-8d39-48d0-a8b3-f11f2eca6186" />
<img width="987" height="529" alt="Database1" src="https://github.com/user-attachments/assets/0026f6e1-a97b-492f-a1ab-1696be0e0eed" />
<img width="917" height="481" alt="Database2" src="https://github.com/user-attachments/assets/9cb6ec56-45ed-462c-ac80-251e5e391465" />


<<<<<<< HEAD
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Task-Manager

A simple Laravel-based Task Manager application.

## screenshots

### Welcome
![Welcome Screenshot](screenshots/Welcome.png)

### Dashboard
![Dashboard Screenshot](screenshots/Dashboard.png)

### Tasks
![Tasks Screenshot](screenshots/Task.png)

### Database1
![Database1 Screenshot](screenshots/Database1.png)

### Database2
![Database2 Screenshot](screenshots/Database2.png)
=======
>>>>>>> 16c6091b6f80bf470a60019b657ca2778309abeb
