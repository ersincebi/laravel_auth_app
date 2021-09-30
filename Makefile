all: build install

build:
	@docker-compose build
	@docker-compose up -d
	@docker ps
install:
	@docker-compose exec -T php composer install
	@docker-compose exec php php /var/www/artisan migrate:refresh --seed
clean:
	@docker-compose down
	@docker system prune -af
	@docker volume prune -f
