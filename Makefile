export COMPOSER_VENDOR_DIR=/vendor

test:
	./vendor/bin/phpunit

console:
	php artisan tinker

start:
	php artisan migrate
	php artisan serve --host 0.0.0.0 --port 8080
