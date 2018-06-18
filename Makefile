initial:
	sudo curl -fsSL get.docker.com -o get-docker.sh
	sudo curl -L https://github.com/docker/compose/releases/download/1.21.2/docker-compose-` uname -s`-`uname -m` > /usr/local/bin/docker-compose
	sudo chmod +x /usr/local/bin/docker-compose
	sudo sh get-docker.sh
	sudo docker network create backend
	sudo mkdir neo_node

my-sql-build:
	docker-compose -f docker-compose.mysql.yml up -d --force-recreate

my-sql-build-delete:
	sudo docker rm mydatabase -f

my-sql-build-delete-complete:
	sudo docker rm mydatabase -f

	sudo docker volume rm vagrant_mysql_data

laravel-migrate:
	php ./project/artisan migrate


laravel-migrate-refresh:
	php ./project/artisan migrate:refresh --seed
#--------------------------------------------------------------------------------------------------------------------
