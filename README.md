## Qurant- Work sample API

This repository contains a sample implementation of a RESTful API using Laravel for managing absence notifications to a payroll system.

**Prerequisites**
- PHP
- Composer
- Laravel CLI
- MySQL or SQLite database
- (Docker- devcontainer)

### To install and run this project, follow these steps:

1. Start the development container and navigate to the project directory in the terminal. 

2. Update all dependencies by running the following command:

```bash
composer update
```
3. Rename the .env.example file to .env (create a databse):

```bash
.env.example .env
```

4. Generate a unique application key:

```bash
php artisan key:generate
```

5. Run database migrations to create database tables:

```bash
php artisan migrate
```

6. Start the local development server:

```bash
php artisan serve
```

### Source

- For `api.php`:
  - [Stack Overflow - API route not found in Laravel](https://stackoverflow.com/questions/78195903/api-route-not-found-in-laravel)

- Inspiration:
  - [Building a RESTful API with Laravel: Best Practices and Tools](https://medium.com/@mukesh.ram/building-a-restful-api-with-laravel-best-practices-and-tools-907bdf4b5621)

### Documentation (Postman)

Explore and test the API using the provided Postman collection and documentation:

[Qurant-Sample API Documentation](https://documenter.getpostman.com/view/34481210/2sA3BrWpSL)

The API will be accessible at [http://localhost:8000](http://localhost:8000).

### Images 

![Insomnia](image.png)
<br></br>
![Adminer](<image copy.png>)
<br></br>
![Postman example response drodown](<image copy 2.png>)

### Previous Experience with Laravel

I have prior experience working with Laravel in a project where we developed an IMDb clone. In that project, I implemented features such as user authentication and authorization, including role-based access control (RBAC) to manage user permissions within the application.

[Imdb-clone-github](https://github.com/ShakerNasser/IMDB-Clone-U05.git)

