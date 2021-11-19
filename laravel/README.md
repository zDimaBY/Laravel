## INSTALL

установить PHP-7.4+

установить MySQL

установить composer

cd /var/www/

git clone https://github.com/zDimaBY/Laravel

cd /Laravel/laravel

composer install

define database, APP_KEY in .env

php artisan db:seed && php artisan db:seed --class=CategorySeeder && php artisan db:seed --class=ProductSeeder

php artisan serve
