## **Informasi**
> LOGIN CREDENTIALS
```bash
EMAIL : admin@ytta.id
PASS  : Dimas007
```

## **Instalasi**
### Download dan Import [Data ini](https://github.com/syauqqii/Web-Programming-UTS/blob/main/laravel_portofolio.sql) ke MYSQL Database milik kalian.
```bash
git clone https://github.com/syauqqii/Web-Programming-UTS web
```
```bash
cd web
```
```bash
composer install
```
```bash
npm i vite
```
```bash
npm run build
```
### Setting file .env,
> buka file `.env` sesuaikan nama databasenya dengan nama database yang telah di import
```bash
php artisan key:generate
```
```bash
php artisan jwt:secret
```
```bash
php artisan serve
```
### Buka [PostMan](https://www.postman.com/downloads/) lalu import [Json Format](https://github.com/syauqqii/Web-Programming-UTS/blob/main/WEB-PORTOFOLIO.postman_collection.json) ke dalam PostMan.
```
Sekarang anda dapat melakukan CRUD melalui Website secara langsung ataupun melalui API.
```
