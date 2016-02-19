docker rm -f sqli_chal && docker run -d -p 8883:80 --name sqli_chal sqli
docker rm -f log_challenge && docker run -d -p 8000:80 --name log_challenge logviewer
docker rm -f tc_chal && docker run -d -p 8080:8080 --name tc_chal tcmanager
docker rm -f geddy_chal && docker run -d -p 40000:4000 --name geddy_chal geddy
