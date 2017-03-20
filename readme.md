# LaravelRUS Skeleton
[![Packagist Version](https://img.shields.io/packagist/v/laravelrus/skeleton.svg)](https://packagist.org/packages/laravelrus/skeleton)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://packagist.org/packages/laravelrus/skeleton)
[![Gitter Chat](https://img.shields.io/badge/Laravel-RUS-red.svg)](https://gitter.im/LaravelRUS/chat)

<p align="center">
    <img src="https://avatars3.githubusercontent.com/u/5966874?v=3&s=200"><br><br>
    <strong>Скелет приложения на базе Laravel 5.4 от сообщества LaravelRUS.</strong><br>
</p>

--

#### Изменения:

* режим ротации логов `daily` вместо `single`;
* закомментированны все алиасы фасадов.

#### Добавлено:

* type hints в разных местах;
* русские языковые файлы;
* базовая модель `App\Core\Model`, от которой можно наследовать свои модели;
* ключ `app.local_providers` для провайдеров, которые будут загружаться только в среде `local`;
* пакеты [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) и [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper), подключаются в `app.local_providers`.
