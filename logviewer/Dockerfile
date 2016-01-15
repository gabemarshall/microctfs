FROM dockerfiles/centos-lamp
MAINTAINER Gabe Marshall <gabemarshall@me.com>
RUN yum -y install unzip
WORKDIR /var/www/html
ADD 300 /var/www/html/
EXPOSE 80
CMD ["supervisord", "-n"]
