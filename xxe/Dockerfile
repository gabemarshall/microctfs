FROM ubuntu:trusty

MAINTAINER Gabe Marshall <gabemarshall@me.com>

RUN apt-get -yqq --force-yes update
RUN apt-get -yqq --force-yes install openjdk-6-jdk 
RUN apt-get -yqq --force-yes install maven gopher

RUN useradd deployme
RUN echo 'deployme:firptart?' | chpasswd

RUN mkdir /home/deployme
WORKDIR /home/deployme

RUN mkdir .m2
ADD settings.xml /home/deployme/.m2/
ADD pom.xml /home/deployme/
ADD sample.xml /home/deployme/
COPY src /home/deployme/src
COPY target /home/deployme/target

RUN chown -R deployme /home
RUN chmod -R 777 /home
RUN chown -R deployme /usr/share/maven/
RUN echo 'the_flag_is_the_hash:04424970a080389399483afa9ff16fe1' >> /etc/passwd
USER deployme

CMD ["mvn", "jetty:run"]
