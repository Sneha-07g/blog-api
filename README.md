# Laravel Blog API

This is a simple RESTful API built using Laravel 10 for managing blog posts.

-> create blog-api project using command----
 composer create-project laravel/laravel:10 blog-api

 -> After that changes in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_api
DB_USERNAME=root
DB_PASSWORD

create database in PhpMyAdmin
then Run migration command
'php artisan migrate' 

After that add columns in Post table

->Changes in Api.php for route call

And then add CRUD functions in PostController
 
## 🚀 Features

- Create a blog post
- View all blog posts
- View a single blog post by ID
- Update a blog post
- Delete a blog post

## 🛠️ Tech Stack

- PHP 8.x
- Laravel 10
- MySQL
- Postman (for API testing)

API Endpoints

| Method | Endpoint        | Description       |
| ------ | --------------- | ----------------- |
| GET    | /api/posts      | List all posts    |
| GET    | /api/posts/{id} | Get a post by ID  |
| POST   | /api/posts      | Create a new post |
| PUT    | /api/posts/{id} | Update a post     |
| DELETE | /api/posts/{id} | Delete a post     |

