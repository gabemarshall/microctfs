#!/bin/bash

cd geddy && docker build -t geddy .
cd ..
cd logviewer && docker build -t logviewer .
cd ..
cd tcmanager && docker build -t tcmanager .
cd .. 
cd printf && docker build -t printf .
cd ..
cd sqli && docker build -t sqli .
