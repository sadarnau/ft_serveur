FROM debian:buster

RUN apt-get update
RUN apt-get install -y wget
RUN apt-get install -y nginx
RUN apt-get install -y mariadb-server
RUN	apt-get install -y php &&\
	apt-get install -y php-cli php-fpm php-cgi &&\
	apt-get install -y php &&\
	apt-get install -y php-mysql &&\
	apt-get install -y php-mbstring

RUN apt-get purge -y apache2

COPY srcs/localhost.conf /etc/nginx/sites-available/
RUN	ln -s /etc/nginx/sites-available/localhost.conf /etc/nginx/sites-enabled/

RUN wget https://wordpress.org/latest.tar.gz &&\
	tar -xzvf latest.tar.gz
RUN	cp -r /wordpress /var/www/html

RUN chown -R www-data:www-data /var/www/* &&\
	chmod -R 755 /var/www/*

COPY srcs/init.sql /
COPY srcs/dump.sql /
COPY srcs/wp-config.php /var/www/html/wordpress

RUN service mysql start && mysql -uroot mysql < /init.sql
RUN service mysql start && mysql -uroot mysql < /dump.sql

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.4/phpMyAdmin-4.9.4-all-languages.tar.gz &&\
	tar -xzvf phpMyAdmin-4.9.4-all-languages.tar.gz &&\
	mv /phpMyAdmin-4.9.4-all-languages /var/www/html/wordpress/phpmyadmin
COPY srcs/config.inc.php /var/www/html/wordpress/phpmyadmin

RUN mkdir mkcert && cd mkcert &&\
	wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.1/mkcert-v1.4.1-linux-amd64 &&\
	mv mkcert-v1.4.1-linux-amd64 mkcert && chmod +x ./mkcert &&\
	./mkcert -install && ./mkcert localhost

COPY srcs/start_serveur.sh /
CMD	bash start_serveur.sh