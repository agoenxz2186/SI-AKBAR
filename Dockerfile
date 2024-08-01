FROM agoenxz21/php56 

RUN apk update && apk add --no-cache \
    apache2 \
    apache2-proxy \
    apache2-ssl \
    apache2-utils \
    && rm -rf /var/cache/apk/*

# Enable Apache modules
RUN sed -i '/^#LoadModule rewrite_module/s/^#//' /etc/apache2/httpd.conf

# Configure Apache to use .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/httpd.conf


WORKDIR /var/www/html
COPY . /var/www/html

RUN rm -rf docker-compose.yaml .github/ Dockerfile sekolah.sql

RUN mkdir -p /var/www/html/application/cache/sessions
RUN chmod 0777 /var/www/html/application/cache/sessions

EXPOSE 80
