FROM dockerfiles/centos-lamp
MAINTAINER Gabe Marshall <gabemarshall@me.com>
RUN yum -y update
RUN yum -y install unzip nodejs npm sudo
RUN useradd evrs
RUN echo 'evrs:@pplekfkljsdfkj' | chpasswd
RUN usermod -a -G wheel evrs
RUN mkdir -p /home/evrs/
RUN npm cache clean -f
RUN npm install -g n
RUN n stable
ADD lol.txt /root/
ADD evrclient /
RUN chmod +x /evrclient
RUN chown root /evrclient
RUN chmod 4755 /evrclient
RUN chown -R evrs /home/evrs

WORKDIR /var/www/html
ADD 300 /var/www/html/
EXPOSE 80
CMD ["supervisord", "-n"]
