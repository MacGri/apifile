# apifile
1) На машине должен стоять докер и гит
2) Копируем проект: `git clone https://github.com/MacGri/apifile.git`
3) Переходим в директорию: `cd apifile`
4) Копированием делаем личные настройки: `cp .env.example .env`
5) Разрешаем всем изменять папку: `sudo chmod -R 777 storage/` 
5) Запускаем окружение: `docker-compose up -d`
6) Входим внутрь контейнера: `docker-compose exec phpfpm sh`
7) Генерируем ключ изнутри: `php artisan key:generate`
8) Выходим из контейнера: `exit`
9) Проект должен открываться на: http://127.0.0.1:8088/
10) Adminer открывается на: http://127.0.0.1:8080
