FROM php:7.4-alpine3.14

# Add repos
RUN echo "http://dl-cdn.alpinelinux.org/alpine/v3.14/community/" >> /etc/apk/repositories

# Add basics first
RUN apk update && apk upgrade && apk add \
	bash apache2 php7-apache2 curl ca-certificates openssl openssh git php7 \
    php7-phar php7-json php7-iconv php7-openssl tzdata openntpd nano \
    apache2-proxy \
    apache2-ssl \
    apache2-utils \
    oniguruma-dev \
    icu-dev \
    libzip-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev 

# Add Composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Setup apache and php
RUN apk add \
	php7-ftp \
	php7-xdebug \
	php7-mcrypt \
	php7-mbstring \
	php7-soap \
	php7-gmp \
	php7-pdo_odbc \
	php7-dom \
	php7-pdo \
	php7-zip \
	php7-mysqli \
	php7-sqlite3 \
	php7-pdo_pgsql \
	php7-bcmath \
	php7-gd \
	php7-odbc \
	php7-pdo_mysql \
	php7-pdo_sqlite \
	php7-gettext \
	php7-xml \
	php7-xmlreader \
	php7-xmlwriter \
	php7-tokenizer \
	php7-xmlrpc \
	php7-bz2 \
	php7-pdo_dblib \
	php7-curl \
	php7-ctype \
	php7-session \
	php7-redis \
	php7-exif \
	php7-intl \
	php7-fileinfo \
	php7-ldap \
	php7-apcu

# Problems installing in above stack
RUN apk add php7-simplexml

RUN cp /usr/bin/php7 /usr/bin/php \
    && rm -f /var/cache/apk/*

	
RUN sed -i '/^#LoadModule rewrite_module/s/^#//' /etc/apache2/httpd.conf

RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/httpd.conf

# Add apache to run and configure
RUN sed -i "s/#LoadModule\ rewrite_module/LoadModule\ rewrite_module/" /etc/apache2/httpd.conf \
    && sed -i "s/#LoadModule\ session_module/LoadModule\ session_module/" /etc/apache2/httpd.conf \
    && sed -i "s/#LoadModule\ session_cookie_module/LoadModule\ session_cookie_module/" /etc/apache2/httpd.conf \
    && sed -i "s/#LoadModule\ session_crypto_module/LoadModule\ session_crypto_module/" /etc/apache2/httpd.conf \
    && sed -i "s/#LoadModule\ deflate_module/LoadModule\ deflate_module/" /etc/apache2/httpd.conf
    # && printf "\n<Directory \"/app/public\">\n\tAllowOverride All\n</Directory>\n" >> /etc/apache2/httpd.conf

    # && sed -i "s#^DocumentRoot \".*#DocumentRoot \"/app/public\"#g" /etc/apache2/httpd.conf \
    # && sed -i "s#/var/www/localhost/htdocs#/app/public#" /etc/apache2/httpd.conf \
RUN mkdir /app && mkdir /app/public && chown -R apache:apache /app && chmod -R 755 /app && mkdir bootstrap
  
WORKDIR /var/www/localhost/htdocs
RUN rm -rf /var/www/localhost/htdocs/index.html
COPY . /var/www/localhost/htdocs

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mysqli mbstring intl zip gd


RUN mkdir -p /var/www/html/application/cache/sessions
RUN chmod 0777 /var/www/html/application/cache/sessions

EXPOSE 80

# Start Apache
CMD ["httpd", "-D", "FOREGROUND"]
# CMD ["apache2-foreground"]

# FROM agoenxz21/php56 

# RUN apk update && apk add --no-cache \
#     apache2 \
#     apache2-proxy \
#     apache2-ssl \
#     apache2-utils \
#     && rm -rf /var/cache/apk/*

# # Enable Apache modules
# # Configure Apache to use .htaccess
# RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/httpd.conf


# WORKDIR /var/www/html
# COPY . /var/www/html

# # RUN rm -rf docker-compose.yaml .github/ Dockerfile sekolah.sql

# RUN mkdir -p /var/www/html/application/cache/sessions
# RUN chmod 0777 /var/www/html/application/cache/sessions

# EXPOSE 80
