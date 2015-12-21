FROM dockerfiles/centos-lamp
MAINTAINER Gabe Marshall <gabemarshall@me.com>
RUN yum -y install unzip
WORKDIR /var/www/html
ADD 300.zip ./
RUN unzip 300.zip && rm 300.zip
EXPOSE 80
CMD ["supervisord", "-n"]
