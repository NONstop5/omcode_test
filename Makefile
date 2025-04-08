install:
	composer install

validate:
	composer validate

lint:
	composer exec -v phpcs src
	vendor/bin/phpstan analyse

lint-fix:
	composer exec -v phpcbf src

.PHONY: tests
