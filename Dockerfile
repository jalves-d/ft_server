FROM debian:buster

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get -y install wget
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server
RUN apt-get -y install php7.3 php-mysql php-fpm php-pdo php-gd php-cli php-mbstring

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-english.tar.gz
RUN tar -xf phpMyAdmin-5.0.1-english.tar.gz -C /var/www/html/ && rm -rf phpMyAdmin-5.0.1-english.tar.gz
COPY ./srcs/config.inc.php /var/www/html/phpMyAdmin-5.0.1-english/

RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz -C /var/www/html/ && rm -rf latest.tar.gz
COPY ./srcs/wp-config.php /var/www/html/wordpress/
COPY ./srcs/ ./

RUN wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.3/mkcert-v1.4.3-linux-amd64 && \ 
mv mkcert-v1.4.3-linux-amd64 mkcert && chmod +x mkcert && \
./mkcert -install && ./mkcert localhost

COPY ./srcs/init.sh ./
COPY ./srcs/auto_index.sh ./
CMD bash init.sh
