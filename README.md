# Simple-Jwt-Laravel

Just laravel api with jwt already configured.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

- None

### Installing

1) Get the project files with:
```
git clone https://github.com/silva2626/Simple-Jwt-Laravel.git
```
2) Open project folder
```
cd Simple-Jwt-Laravel/
```
3) Install dependencies 
```
composer install
```
4) Create configuration .env file
```
cp .env.example .env
```
5) Setup your database, see more in https://laravel.com/docs/master/database#configuration.

6) Generate your jwt secret key
```
php artisan jwt:secret
```
7) Run your database migration
```
php artisan migrate --seed
```
8) Now you can test with a test user, created with the seed command before.
- Login Route : /login
- email : admin@gmail.com
- password : 1234

PS: You can test with the php server: `php artisan serve`
