# microctfs
Small CTF challenges running on Docker

## logviewer

#### Build and Start logviewer challenge exposed on port 8000

```
cd logviewer
docker build -t logviewer . 
docker run -d -p 8000:80 --name log_challenge logviwewer
```

#### Restart logviewer challenge

```
docker rm -f log_challenge && docker run -d -p 8000:80 --name log_challenge logviwewer
```

#### Stop logviewer challenge

```
docker rm -f log_challenge
```
