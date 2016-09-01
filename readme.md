# LaravelRUS Skeleton
[![Gitter Chat](https://img.shields.io/badge/Laravel-RUS-red.svg)](https://gitter.im/LaravelRUS/chat)
![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)
[![Packagist Version](https://img.shields.io/packagist/v/laravelrus/skeleton.svg)](https://packagist.org/packages/laravelrus/skeleton)

<p align="center">
    <img src="https://avatars3.githubusercontent.com/u/5966874?v=3&s=200"><br><br>
    <strong>Базовый Skeleton-проект сообщества LaravelRUS.</strong><br>
    Ранняя альфа.
</p>

--


#### Изменения:

* `APP_DOMAIN` вместо `APP_URL`, используется в настройках `app.url` и `session.domain`;
* режим ротации логов `daily` вместо `single`;
* закомментированны все алиасы фасадов.

#### Добавлено:

* type hints в разных местах;
* русские языковые файлы;
* базовая модель `App\Core\Model`, от которой можно наследовать свои модели;
* ключ `app.local_providers` для провайдеров, которые будут загружаться только в среде `local`;
* пакет [laravel/socialite](https://github.com/laravel/socialite) и дополнительные провайдеры для ВКонтакте, Яндекс, Маил.ру и Одноклассников;
* пакеты [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) и [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper), подключаются в `app.local_providers`.

#### Планы:

* удалить `routes/console.php` и возможность создавать консольные команды через анонимные функции.
