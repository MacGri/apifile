# apifile
1) На машине должны стоять docker-compose и git
2) Копируем проект: `git clone https://github.com/MacGri/apifile.git`
3) Переходим в директорию проекта: `cd apifile/project`
4) Копированием делаем личные настройки: `cp .env.example .env`
5) Разрешаем всем изменять папку: `sudo chmod -R 777 storage/`
6) Возврат на уровень назад `cd ..`
7) Запускаем окружение: `docker-compose up -d`
8) Входим внутрь контейнера: `docker-compose exec phpfpm sh`
9) Генерируем ключ изнутри: `php artisan key:generate` (может сразу на сработать, собирается папка vendor)
10) Выходим из контейнера: `exit`
11) Проект должен открываться на: http://127.0.0.1:8088/
12) Adminer открывается на: http://127.0.0.1:8080
