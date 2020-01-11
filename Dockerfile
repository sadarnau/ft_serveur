FROM debian:buster

COPY srcs/wordpress /etc/nginx/sites-available/
COPY srcs/start.sh .
CMD bash start.sh
