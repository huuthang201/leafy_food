# Đồ án môn học: Thương mại điện tử

## Yêu cầu môi trường
```
PHP 8.2 (Xampp cho mau) | Laravel 10.0
```

## Composer
```
https://getcomposer.org/download/
```

## Cài đặt
```
composer install
```

## Cấu hình
```
cp .env.example .env 
```
* nhớ đổi tên _DB_DATABASE, DB_USERNAME, DB_PASSWORD_ cho đúng

```
php artisan key:generate
```

```
php artisan migrate
```

## Không chạy câu này nếu không muốn tạo dữ liệu mẫu
```
php artisan db:seed
```

## Chạy web
```
php artisan serve
```