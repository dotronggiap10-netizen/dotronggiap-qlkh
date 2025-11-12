# Sử dụng image PHP có Apache
FROM php:8.2-apache

# Copy toàn bộ mã nguồn vào thư mục web của Apache
COPY . /var/www/html/

# Mở cổng 10000 (Render yêu cầu)
EXPOSE 10000

# Chạy server PHP
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
