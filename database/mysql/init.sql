CREATE DATABASE IF NOT EXISTS x2microservices_categories_service;

CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';

GRANT ALL PRIVILEGES ON *.* TO 'user'@'%' WITH GRANT OPTION;

FLUSH PRIVILEGES;
