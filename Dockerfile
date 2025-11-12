# Sử dụng image PHP có Apache
FROM php:8.2-apache

# Cài extension PHP để kết nối MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy toàn bộ mã nguồn vào thư mục web của Apache
COPY . /var/www/html/

# Mở cổng 10000 (Render yêu cầu)
EXPOSE 10000

# Chạy server PHP
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
