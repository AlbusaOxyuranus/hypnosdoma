hostname
ls
cd beta.hypnosdoma.com/
ls
unzip -o *.zip
php artisan config:cache
php artisan key:generate
php artisan migrate:refresh --seed
php artisan config:cache
php artisan key:generate
php artisan migrate
php artisan db:seed --class=UsersTableSeeder
php artisan storage:link
crontab -l
