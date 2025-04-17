#!/usr/bin/env bash

 set -e
 role=${CONTAINER_ROLE:-app}
 env=${APP_ENV:-production}

cd /var/www/laravel;
php artisan migrate;

 if [ "$env" != "local" ]; then
     echo "Caching configuration..."
    (cd /var/www/laravel && php artisan config:cache && php artisan route:cache && php artisan view:cache)
fi

if [ "$role" = "fpm" ]; then
    exec php-fpm

elif [ "$role" = "queue" ]; then

    echo "Running the queue..."
    php /var/www/laravel/artisan queue:work --verbose --tries=3 --timeout=1000

elif [ "$role" = "scheduler" ]; then

    while [ true ]
    do
      php /var/www/laravel/artisan schedule:run --verbose --no-interaction &
      sleep 60
    done

else
    echo "Could not match the container role \"$role\""
    exit 1
fi
