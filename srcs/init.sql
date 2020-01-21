DROP USER 'root'@'localhost';
CREATE USER 'root'@'localhost';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
CREATE DATABASE wordpress;