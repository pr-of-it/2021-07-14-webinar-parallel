ifndef ENV
	ENV = dev
endif

clean:
	@echo "Stop all"
	docker stop $$(docker ps -a -q)
	yes | docker system prune

up:
	@echo "Project up"
	docker-compose up -d --build

down:
	@echo "Project down"
	docker-compose down
