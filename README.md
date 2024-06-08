## Setup 
git clone https://github.com/davitbek/test-subsription.git

then go folder

```
cd test-subsription
composer install
```

copy .env.example to env

put .env
```
APP_URL=http://127.0.0.1:8000 #or your host domain

DB_DATABASE=db_name
DB_USERNAME=db_user_name
DB_PASSWORD=db_password

QUEUE_CONNECTION=database

```
php artisan key:generate
php artisan serve
php artisan queue:work

use shared postman collection

or make your new postman call 
Header: Accept=application/json
Method: POST
Endpoint: http://127.0.0.1:8000/api/submit
Body: like row json
examples with validation:
```json
{
    "name": "test"
}
```
```json
{
    "name": "test",
    "email": "test"
}
```
```json
{
    "name": "test",
    "email": "test@gmail.com"
}
```
```json
{
    "name": "test",
    "email": "test@gmail.com",
    "message" : "text message"
}
```
success example:
```json
{
    "name": "test",
    "email": "test@gmail.com",
    "message" : "text message"
}
```

See logged messaged for successful submission
http://127.0.0.1:8000/log-viewer
