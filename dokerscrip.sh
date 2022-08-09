#!/bin/bash

cd /var/lib/docker/volumes/app

docker run --name Web-server -bt -p 8080 --mount type=volume,src=app,dst=/app/ webdevops/php-apache:alpine-php7


docker ps
