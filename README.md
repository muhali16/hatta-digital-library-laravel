## Hatta Digital Library

### Tech Stack
1. Laravel 9
2. TailwindCSS
3. MySql
4. maatwebsite/excel
5. yaza/laravel-repository-service

### How to Run?
1. Clone or download the project from repository https://github.com/muhali16/hatta-digital-library-laravel
2. Open project to the code editor
3. Run ``composer install && npm install`` for installing the vendor adn javascript dependencies
4. Run ``php artisan key:generate`` for generating the application key
5. Run ``php artisan storage:link`` for linking the public storage so that can be accessible on url
6. Duplicate ``.env.example`` file into ``.env`` and configure the database config use mysql.
7. To migrating the database run ``php artisan migrate --seed`` or you can import the database from ``digital_library_db`` file into your database.
8. Run the application ``php artisan serve``
9. Try to login admin
```text
username: admin
email: admin@admin.com
password: password
```
### There is anu question?
Email: [muhammadali55214@gmail.com](mailto:muhammadali55214@gmail.com)
