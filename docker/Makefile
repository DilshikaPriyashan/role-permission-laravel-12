#!/usr/bin/make

SHELL = /bin/sh

UID := $(shell id -u)
GID := $(shell id -g)

COMPOSE_FILE := docker-compose.yml

down:
	UID=${UID} GID=${GID} docker compose -f $(COMPOSE_FILE) down --remove-orphans

shell:
	docker compose -f $(COMPOSE_FILE) exec -u ${UID}:${UID} app sh

up:
	UID=${UID} GID=${GID} docker compose -f $(COMPOSE_FILE) up --build --remove-orphans -d

up-f:
	UID=${UID} GID=${GID} docker compose -f $(COMPOSE_FILE) up --build --remove-orphans
