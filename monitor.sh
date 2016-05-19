# Monitor with tcpdump if necessary
tcpdump -A -s 0 'tcp dst port 8080 or tcp dst port 40000 tcp dst port 1337 or tcp dst port 8883 or tcp dst port 8000 and (((ip[2:2] - ((ip[0]&0xf)<<2)) - ((tcp[12]&0xf0)>>2)) != 0)'
