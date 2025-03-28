docker-compose cli

```sh
docker-compose down --rmi all -v
docker-compose up -d
```

docker cli
```sh
cd /var/www/html/x2microservices-categories-service

docker logs categories_service_mysql_container

docker network inspect categories_service_network

docker exec -it categories_service_php_container /bin/sh
docker exec -it categories_service_nginx_container /bin/sh

docker exec -it categories_service_mysql_container /bin/sh
docker exec -it categories_service_mysql_container mysql -u user -p
```
