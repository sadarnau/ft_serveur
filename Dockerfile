FROM debian:buster

COPY srcs/localhost /etc/nginx/sites-available/
COPY srcs/dump.sql /
COPY srcs/wp-config.php /var/www/html/wordpress/
COPY srcs/conf.sql /

RUN apt-get update &&\
	apt-get install -y wget

RUN	apt-get install -y nginx &&\
	apt-get install -y mariadb-server
	
RUN	apt-get install -y php &&\
	apt-get install -y php-cli php-fpm php-cgi &&\
	apt-get install -y php-mysql &&\
	apt-get install -y php-mbstring

RUN	apt-get purge -y apache2

RUN cd ~ &&\
	wget http://wordpress.org/latest.tar.gz &&\
	tar xzvf latest.tar.gz &&\
	cp -r ~/wordpress /var/www/html &&\
	ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/

RUN chown -R www-data:www-data /var/www/* &&\
	chmod -R 755 /var/www/*

RUN service mysql start && mysql -uroot mysql < /conf.sql
RUN service mysql start && mysql -uroot -ppassword mysql < /dump.sql