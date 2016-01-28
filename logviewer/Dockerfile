FROM dockerfiles/centos-lamp
MAINTAINER Gabe Marshall <gabemarshall@me.com>
RUN yum -y install unzip nodejs npm
RUN useradd evrs
RUN echo 'evrs:@pplekfkljsdfkj' | chpasswd
RUN sudo adduser evrs sudo
RUN mkdir -p /home/evrs/
RUN npm cache clean -f
RUN sudo npm install -g n
RUN n stable
ADD lol.txt /root/
ADD evrclient /
RUN chmod +x /evrclient
RUN chown root /evrclient
RUN chmod 4755 /evrclient
ADD cmd-ctf /home/evrs/hosts
RUN chown -R evrs /home/evrs

WORKDIR /var/www/html
ADD 300 /var/www/html/
EXPOSE 80
CMD ["supervisord", "-n"]
