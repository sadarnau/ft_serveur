FROM debian:buster

COPY srcs/wordpress /etc/nginx/sites-available/
COPY srcs/start.sh .
RUN apt-get update &&\
	apt-get install -y wget &&\
	apt-get install -y nginx &&\
	apt-get install -y mariadb-server &&\
	apt-get install -y php &&\
	apt-get install -y php-cli php-fpm php-cgi &&\
	apt-get install -y php-mysql &&\
	apt-get install -y php-mbstring
RUN cd ~ &&\
	wget http://wordpress.org/latest.tar.gz &&\
	tar xzvf latest.tar.gz &&\
	cd ~/wordpress &&\
	cp wp-config-sample.php wp-config.php &&\
	mkdir -p /var/www/html &&\
	rsync -avP ~/wordpress/ /var/www/html/ &&\
	cp /etc/nginx/sites-available/default /etc/nginx/sites-available/wordpress &&\
	ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/ &&\
	rm /etc/nginx/sites-enabled/default