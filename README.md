## About Project
[BOOTCAMP LARAVEL](https://bootcamp.laravel.com/blade/creating-chirps)
1. composer create-project laravel/laravel chirper
2. cd chirper
3. php artisan serve
4. composer require laravel/breeze --dev
5. php artisan breeze:install blade
6. npm run dev
7. php artisan migrate
8. php artisan make:model -mcr Chirp
9. npm install cross-env
10. php artisan serve
11. npm run dev 
12. create folder chirps and file index.blade
13. update method store ChirpController
14. add relationships in class User with Chirp
15. add foreign id in the table chirps
16. php artisan migrate
17. create relationships in class Chirp with User.
18. add routes edit and update in file web.php
19. create file chirps/edit
20. php artisan make:policy ChirpPolicy --model=Chirp
21. update ChirpController for update and delete chirp
22. php artisan make:notification NewChirp
23. edit file Notifications/NewChirp(import model Chirp and Support str. Edit method __construct and toMail)
