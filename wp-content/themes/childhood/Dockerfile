# Використовуйте офіційний образ PHP
FROM php:7.4-apache

# Додайте рядок для усунення повідомлення про ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Копіюйте файли проекту в контейнер
COPY . /var/www/html

# Встановіть необхідні розширення та пакунки
RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
    && docker-php-ext-install zip mysqli pdo_mysql

# Вказати робочий каталог
WORKDIR /var/www/html

# Вказати команду для виконання при запуску контейнера
CMD ["apache2-foreground"]
