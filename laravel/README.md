## INSTALL

install PHP-7.4+,MySQL,composer ..

Execute commands
cd /var/www/ && git clone https://github.com/zDimaBY/Laravel && cd /Laravel/laravel && composer install && rename .env.example .env

define database, APP_KEY in .env !!

Execute commands
php artisan migrate && php artisan db:seed && php artisan db:seed --class=CategorySeeder && php artisan db:seed --class=ProductSeeder

php artisan serve
