## Setup 
copy .env.example to env

put .env
APP_URL=http://127.0.0.1:8000 #or your host domain

DB_DATABASE=db_name
DB_USERNAME=db_user_name
DB_PASSWORD=db_password

QUEUE_CONNECTION=database

php artisan key:generate

php artisan serve 
php artisan queue:work

use shared postman collection

make sure passed header
Accept=application/json

See logged messaged for successful submission
http://127.0.0.1:8000/log-viewer
