.SILENT:
.DEFAULT_GOAL := start

install:
	composer install --ignore-platform-reqs
	php artisan key:generate
	yarn install

start:
	yarn build
	php artisan serve
