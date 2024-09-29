# Laravel Project with Companies and Employees Management

This Laravel application allows you to manage `Companies` and `Employees`. It includes basic CRUD (Create, Read, Update, Delete) functionality with pagination and form validation.

## Features

- User authentication via Laravel Breeze.
- Management of `Companies` and `Employees`.
- Pagination for `Companies` and `Employees`.
- CRUD operations for both entities.
- TailwindCSS for responsive design and styling.

## Installation

Follow these steps to set up the project on your local environment:

### Prerequisites

- PHP 8.0+
- Composer
- MySQL or any other supported database
- Node.js & NPM
- [Laravel](https://laravel.com/docs/10.x/installation)

### Steps

1. **Clone the repository:**

   ```bash
   git clone https://github.com/insanexxx/mini-crm.git
   cd mini-crm
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Set up the environment:**

    Copy the .env.example file and create a new .env file:
        
        cp .env.example .env

    Configure your database connection in the .env file:
        
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database
        DB_USERNAME=your_username
        DB_PASSWORD=your_password

4. **Set up the environment:**

    ```bash
    php artisan key:generate
    ```

5. **Run migrations to set up the database:**

    ```bash
    php artisan migrate
    ```

6. **Compile front-end assets:**

    ```bash
    npm run dev
    ```

7. **Run the development server:**

    ```bash
    php artisan serve
    ```

## Usage

### Authentication

This project uses Laravel Breeze for user authentication. To create a user, use the registration page or add a user manually via tinker:

    php artisan tinker

    $user = new App\Models\User();
    $user->name = 'Your Name';
    $user->email = 'your.email@example.com';
    $user->password = bcrypt('your-password');
    $user->save();

### Companies Management

- Create a new company: Click on the "Create Company" button in the Companies section of the dashboard.
- Edit or Delete a company: Use the links next to each company in the list.

### Employees Management

- Create a new employee: Click on the "Create Employee" button in the Employees section of the dashboard.
- Edit or Delete an employee: Use the links next to each employee in the list.

### Pagination

Both the Companies and Employees lists support pagination. By default, 10 records per page are displayed. You can change this value by modifying the paginate() method in the respective controller.

    $companies = Company::paginate(10);

### Form Validation

Both companies and employees have basic form validation when creating or updating records. If the validation fails, appropriate error messages are displayed.

### Tailwind CSS Styling

The project uses Tailwind CSS for styling. The Tailwind configuration is located in tailwind.config.js, and custom styles can be added in resources/css/app.css.

To recompile the assets after making changes:

    npm run dev


## Routes

### Web Interface

- **Home Page** — `GET /`  
  Redirects to the home page.

- **Dashboard** — `GET /dashboard`  
  Requires authentication.

- **List of Companies** — `GET /companies`  
  Displays a list of all companies.

- **Create Company** — `GET /companies/create`  
  Redirects to the page for creating a new company.

- **Edit Company** — `GET /companies/{company}/edit`  
  Redirects to the page for editing the selected company.

- **List of Employees** — `GET /employees`  
  Displays a list of all employees.

- **Create Employee** — `GET /employees/create`  
  Redirects to the page for creating a new employee.

- **Edit Employee** — `GET /employees/{employee}/edit`  
  Redirects to the page for editing the selected employee.

### REST API

- **List All Employees** — `GET /api/employees`  
  Returns JSON data of all employees. Requires API token authentication (Sanctum).

- **Create a New Employee** — `POST /api/employees`  
  Creates a new employee via the API.

- **Update Employee Data** — `PUT /api/employees/{id}`  
  Updates the employee's data.

- **Delete Employee** — `DELETE /api/employees/{id}`  
  Deletes the employee.

## Authentication

To work with secured routes through the API, you need to obtain a token using the Sanctum package:

1. Log in through the web interface.
2. Obtain an access token for the API using the following request:
    ```bash
    POST /login
    ```

## Contributing

Feel free to open issues or submit pull requests for any features, bugs, or improvements.

### License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
