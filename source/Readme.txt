docker-compose exec app php artisan optimize:clear
docker-compose exec app php artisan migration:reset
docker-compose exec app php artisan migrate:install
docker-compose exec app php artisan migrate:refresh --seed


#import and export database
mysqldump -u username -p database_name > database_name.sql
mysql -u username -p password databasename < C:\file.sql


create new changes