# microctfs
Small CTF challenges running on Docker

## logviewer

#### Build and Start logviewer challenge exposed on port 8000

```
cd logviewer
docker build -t logviewer . 
docker run -d -p 8000:80 --name log_challenge logviewer
```

#### Restart logviewer challenge

```
docker rm -f log_challenge && docker run -d -p 8000:80 --name log_challenge logviewer
```

#### Stop logviewer challenge

```
docker rm -f log_challenge
```

## sqli

#### Build and Start sqli challenge exposed on port 8883

```
cd sqli
docker build -t sqli . 
docker run -d -p 8883:80 --name sqli_chal sqli
```

#### Restart sqli challenge

```
docker rm -f sqli_chal && docker run -d -p 8883:80 --name sqli_chal sqli
```

#### Stop sqli challenge

```
docker rm -f sqli_chal
```


## tcmanager

#### Build and Start tcmanager challenge exposed on port 8080

```
cd tcmanager
docker build -t tcmanager . 
docker run -d -p 8080:8080 --name tc_chal tcmanager
```

#### Restart tcmanager challenge

```
docker rm -f tc_chal && docker run -d -p 8080:8080 --name tc_chal tcmanager
```

#### Stop tcmanager challenge

```
docker rm -f tc_chal
```


## geddy

#### Build and Start geddy challenge exposed on port 40000

```
cd geddy
docker build -t geddy . 
docker run -d -p 40000:4000 --name geddy_chal geddy
```

#### Restart geddy challenge

```
docker rm -f geddy_chal && docker run -d -p 40000:4000 --name geddy_chal geddy
```

#### Stop geddy challenge

```
docker rm -f geddy_chal
```

## printf

#### Build and Start printf challenge exposed on port 1337

```
cd printf
docker build -t printf .
docker run -d -p 1337:1337 --name printfchal printf
```

#### Restart printf challenge

```
docker rm -f printfchal && docker run -d -p 1337:1337 --name printfchal printf
```

#### Stop geddy challenge

```
docker rm -f printfchal
```
