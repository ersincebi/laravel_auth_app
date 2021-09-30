# laravel_auth_app
Implementation of an API application using the Laravel Framework [https://laravel.com/docs/8.x](https://laravel.com/docs/8.x)

### Installation
- Clone the project
- In the project folder run `make all` or `php artisan serve`
- Seeder is set but, if the database not loads, run `php artisan migrate:refresh --seed`


### Requerinments
- docker
- docker-compose
- make
### without docker
- php
- composer
### Usage

- The MAIL credentials must be filled in to /.env 
```bash
	MAIL_MAILER=xxx
	MAIL_HOST=YOURMAILHOST
	MAIL_PORT=MAILHOSTPORT
	MAIL_USERNAME=MAILUSERNAME
	MAIL_PASSWORD=MAILPASSWORD
	MAIL_ENCRYPTION=xxx
```

- The base will be `http://localhost:8081/login` or `http://127.0.0.1:8000/login`
