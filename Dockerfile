FROM php:8.0-fpm-alpine
COPY . src/ 

FROM nginx
COPY . /usr/share/nginx/html
