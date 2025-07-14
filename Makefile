# Variables
COMPOSE = docker compose -f ./srcs/docker-compose.yml
NAME = inception

# Targets
.PHONY: all build up down fclean re logs certs

# Default target
all: build up

# Build images
build:
	@echo "🔧 Building Docker images..."
	$(COMPOSE) build

# Start containers
up:
	@echo "🚀 Starting containers..."
	$(COMPOSE) up -d

# Stop and remove containers (keep volumes)
down:
	@echo "🛑 Stopping containers..."
	$(COMPOSE) down

# Full clean (remove containers, networks, volumes)
fclean:
	@echo "🔥 Removing containers, networks, volumes..."
	$(COMPOSE) down -v --remove-orphans
	-docker volume rm wordpress mariadb 2>/dev/null || true

# Rebuild from scratch
re: fclean all

# View logs
logs:
	$(COMPOSE) logs -f

# Generate self-signed SSL certificate
certs:
	@echo "🔐 Generating self-signed SSL certificate..."
	mkdir -p ./requirements/nginx/certs
	openssl req -x509 -nodes -days 365 \
		-newkey rsa:2048 \
		-keyout ./requirements/nginx/certs/nginx-selfsigned.key \
		-out ./requirements/nginx/certs/nginx-selfsigned.crt \
		-subj "/C=MO/L=KH/O=1337/OU=student/CN=sahafid.42.ma"
