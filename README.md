# laravel-todo
This is a simple todo implementation in Laravel 5.5

Here a user can add, edit and delete todo and additionally check 
a todo as completed. He can undo/uncheck completed todo into 
incomplete todo.

A pagination is added by default.

# Instalation
Create a .env file (like .env.example) and fill it with correct db 
info.

Then run the following commands for getting started

<pre>
<code>
composer update
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
</code>
</pre>


<b>Feel free to contribute</b>