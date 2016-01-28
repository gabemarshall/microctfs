FROM ubuntu:trusty
MAINTAINER Gabe Marshall <gabemarshall@me.com>

# Install packages
ENV DEBIAN_FRONTEND noninteractive
# ENV http_proxy http://10.33.50.14:8000
# ENV https_proxy http://10.33.50.14:8000

RUN apt-get update && \
  apt-get -y install supervisor zip unzip ruby git apache2 libapache2-mod-php5 mysql-server php5-mysql pwgen php-apc php5-mcrypt && \
  echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Add image configuration and scripts
ADD start-apache2.sh /start-apache2.sh
ADD start-mysqld.sh /start-mysqld.sh
ADD run.sh /run.sh
RUN chmod 755 /*.sh
ADD my.cnf /etc/mysql/conf.d/my.cnf
ADD supervisord-apache2.conf /etc/supervisor/conf.d/supervisord-apache2.conf
ADD supervisord-mysqld.conf /etc/supervisor/conf.d/supervisord-mysqld.conf

# Remove pre-installed database
RUN rm -rf /var/lib/mysql/*

# Add MySQL utils
ADD create_mysql_admin_user.sh /create_mysql_admin_user.sh
RUN chmod 755 /*.sh

# config to enable .htaccess
ADD apache_default /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Configure /app folder with sample app
RUN git clone https://github.com/fermayo/hello-world-lamp.git /app
RUN mkdir -p /app && rm -fr /var/www/ecustomers && ln -s /app /var/www/ecustomers
ADD index.php /var/www/ecustomers/
ADD 404.php /var/www/ecustomers/
RUN chmod 777 -R /var/www/ecustomers
#Enviornment variables to configure php
ENV PHP_UPLOAD_MAX_FILESIZE 10M
ENV PHP_POST_MAX_SIZE 10M
RUN rm -r /app/.git
ADD sys-auto.zip ./
ADD README_.txt /var/www/ecustomers/
ADD flag.txt /root/
ADD sudoers /etc/sudoers
RUN mkdir /evrs
ADD sys-auto /evrs
RUN chmod +x /evrs/sys-auto/sys-auto
RUN chmod 755 -R /evrs/ && chmod 750 /evrs/sys-auto/tasks
RUN mkdir -p /root/sys-auto/tasks/
ADD crontab /etc/cron.d/sysauto-cron
RUN chmod 0644 /etc/cron.d/sysauto-cron
RUN cron

EXPOSE 80 3306
CMD ["/run.sh"]
