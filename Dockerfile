FROM php:8.3-apache

RUN a2enmod rewrite && \
    apt-get update && \
    apt-get install -y \
    nano \
    curl \
    zlib1g-dev \
    libzip-dev \
    unzip \
    git && \
    docker-php-ext-install zip pdo pdo_mysql mysqli && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
COPY . /var/www/html

COPY docker/apache-config.conf /etc/apache2/sites-available/000-default.conf
COPY docker/apache-port.conf /etc/apache2/ports.conf

EXPOSE 8080

CMD ["apache2-foreground"]
