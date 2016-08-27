# LaravelRUS Skeleton

Ранняя альфа.


Изменения:

* `APP_DOMAIN` вместо `APP_URL`, используется в настройках `app.url` и `session.domain`.
* режим ротации логов `daily` вместо `single`.

Добавлено:

* type hints в разных местах;
* русские языковые файлы;
* базовая модель `App\Core\Model`, от которой можно наследовать свои модели;
* ключ `app.local_providers` для провайдеров, которые будут загружаться только в среде `local`;
* пакет [laravel/socialite](https://github.com/laravel/socialite) и дополнительные провайдеры для ВКонтакте, Яндекс, Маил.ру и Одноклассников;
* пакеты [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) и [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper), подключаются в `app.local_providers`.

Планы:

* удалить `routes/console.php` и возможность создавать консольные команды через анонимные функции.
