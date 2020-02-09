# How to run the application

#### Firstly, clone the repository

```sh
git clone https://github.com/winn92/pizza-app.git
```

#### Enter project and install dependencies, you will need to install PHP version 7.2 or greater and composer

```sh
cd pizza-app && composer install
```

#### Next copy .env.example into .env

```sh
cp .env.example .env
```

#### Now config the mysql database credentials into .env file

```sh
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

#### Generate laravel project's key

```sh
php artisan key:generate
```

#### Execute migrations to create tables

```sh
php artisan migrate
```

#### Finally, the easiest way to run the project is running the next command

```sh
php artisan serve --port=8080
```

#### UI pizza app

```sh
http://127.0.0.1:8080/pizzas
```

#### Create pizzas using the api, the rest can be created by using the UI
