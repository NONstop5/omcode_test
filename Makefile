install:
	composer install

run:
	php public/index.php

validate:
	composer validate

lint:
	composer exec -v phpcs src
	vendor/bin/phpstan analyse

lint-fix:
	composer exec -v phpcbf src

.PHONY: tests
