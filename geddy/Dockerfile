FROM ubuntu:trusty

MAINTAINER Gabe Marshall <gabemarshall@me.com>

#ENV http_proxy http://10.33.50.14:8000
#ENV https_proxy http://10.33.50.14:8000

RUN apt-get -yqq --force-yes update --fix-missing
RUN apt-get -yqq --force-yes install npm wget curl
RUN npm cache clean -f
RUN npm install -g n
RUN n stable

RUN useradd deployme
RUN echo 'deployme:firptart????' | chpasswd

USER root
RUN mkdir -p /home/deployme
RUN chown -R deployme:deployme /home/deployme/
RUN npm install -g geddy@13.0.7
RUN echo 'nice_job_submit_the_hash_for_points:8ed2abafebafd16dcc1ab05e06199a39f7170a08' >> /etc/passwd
USER deployme
WORKDIR /home/deployme/
 
RUN geddy app eversec
ADD run.sh ./
CMD ["./run.sh"]
