#!/bin/sh

php artisan key:generate
php artisan migrate --seed

exec "$@"
