FROM tifayuki/java:7
MAINTAINER Gabe Marshall <gabemarshall@me.com>

ENV TOMCAT_MAJOR_VERSION 7
ENV TOMCAT_MINOR_VERSION 7.0.55
ENV CATALINA_HOME /tomcat
RUN useradd deployme -p 'YjBlMzQyZg'

# INSTALL TOMCAT
RUN wget --no-check-certificate -q https://archive.apache.org/dist/tomcat/tomcat-${TOMCAT_MAJOR_VERSION}/v${TOMCAT_MINOR_VERSION}/bin/apache-tomcat-${TOMCAT_MINOR_VERSION}.tar.gz && \
    wget --no-check-certificate -qO- https://archive.apache.org/dist/tomcat/tomcat-${TOMCAT_MAJOR_VERSION}/v${TOMCAT_MINOR_VERSION}/bin/apache-tomcat-${TOMCAT_MINOR_VERSION}.tar.gz.md5 | md5sum -c - && \
    tar zxf apache-tomcat-*.tar.gz && \
    rm apache-tomcat-*.tar.gz && \
    mv apache-tomcat* tomcat

ADD create_tomcat_admin_user.sh /create_tomcat_admin_user.sh
ADD run.sh /run.sh
ADD moar /usr/bin/moar
RUN echo 'flag:8ed5c4b19ff02acabe01b0e342fe3016' > flag.txt
RUN chmod 600 flag.txt
RUN chmod 4755 /usr/bin/moar
RUN chmod +x /*.sh

EXPOSE 8080
USER deployme
CMD ["/run.sh"]
