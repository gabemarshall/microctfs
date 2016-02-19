docker run -d -p 8000:80 --name log_challenge logviewer
docker run -d -p 8888:80 --name sqli_chal sqli
docker run -d -p 8080:8080 --name tc_chal tcmanager
docker run -d -p 4000:4000 --name geddy_chal geddy
