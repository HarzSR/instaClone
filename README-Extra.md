For command "php artisan make:auth" if you encounter the following error
"Command "make:auth" is not defined."

Please follow these steps to fix them

For Laravel >=6
1. composer require laravel/ui
2. php artisan ui vue --auth
3. php artisan migrate
