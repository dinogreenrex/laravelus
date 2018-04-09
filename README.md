Laravelus - Laravel backend for application

To install follow these steps :
1. clone the repository
2. enter in the root dir
3. mv env.txt to .env
4. run `php artisan key:generate` and paste the
value in place of the existing value in .env file under APP_KEY
5. fill in database credentials in .env file
6. run php artisan migrate
7. run php artisan db:seed

Voila everything is up and running.

To run the application you need
1. react frontend with mysql 5.6 database installed. 
`https://github.com/dinogreenrex/laravelus`    
2. apache2.4 installed with the conf files from `https://github.com/dinogreenrex/apache-with-proxy`


