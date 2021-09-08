FROM php:8.0
COPY . src/ 

FROM nginx
COPY . /usr/share/nginx/html
