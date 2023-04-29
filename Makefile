build:
	docker compose build

up:
	docker compose up -d

down:
	docker compose down --remove-orphans

restart:
	@make down
	@make up

ps:
	docker compose ps

logs:
	docker compose logs

app:
	docker compose exec app bash
