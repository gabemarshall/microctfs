sudo docker build -t sqli .
sudo docker run -d -p 8084:80 --name sqlichal sqli
sudo sed -e 's/<\/VirtualHost>/\tProxyPass \/customers http:\/\/127.0.0.1:8084\/index.php\r\n\tProxyPassReverse \/customers http:\/\/127.0.0.1:8084\/index.php \r\n\<\/VirtualHost>/' $APACHE_SITES -i
sudo service apache2 stop
sudo service apache2 start
