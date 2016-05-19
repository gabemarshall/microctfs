FROM ubuntu:trusty
MAINTAINER Gabe Marshall <gabemarshall@me.com>

# Install packages
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update && apt-get -y install xinetd nano gcc
RUN useradd evrs -p 'firptart1999'

ADD flag__.txt /root/
ADD sudoers /etc/sudoers
ADD services /etc/services
ADD elogin /etc/xinetd.d/
ADD chal.c ./
RUN gcc chal.c -o /usr/bin/elogin
RUN chmod +x /usr/bin/elogin
CMD ["/usr/sbin/xinetd", "-dontfork", "-stayalive"]

# the -dontfork -stayalive options were required in order to get xinetd to work