<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j2y H|P8ooi!789hYZ&8HBbL@b?Eky9pNR1p_?^lG7A{c6b9&1*q]@Lh8c3+9%Yv' );
define( 'SECURE_AUTH_KEY',  '174m!tW`!KP>}aDti!f>NF}@8N]b+e1*p`MH_G0dU6uCI0wH8oV&;MV%Fs-C |~J' );
define( 'LOGGED_IN_KEY',    '39k5yt=b03K0^&5[r4Uc}4[a%kzN9/(g5tMkB^%0BfHE#)31-er=cN!4_&&;x2Ih' );
define( 'NONCE_KEY',        'G8;m0io<6YsP+I/jr8#H)5F$3Hq}{oJm!y99cjXW~7jQVr!3Vvb4#{V]b]wR>Vh?' );
define( 'AUTH_SALT',        'a2^$[oX|w5=nZKgRa1$Kank`05pv;qivl^)kc4Lzc_^`^qS?UG!E>&NzfydA:*jV' );
define( 'SECURE_AUTH_SALT', 'S8,)1N{B!@(HI$jRtmIBsge4qE?374Os~~RIYnzPUa&K4uhTJ:@YPkB*J|EH=u,3' );
define( 'LOGGED_IN_SALT',   'g/6VlB~1~J!PXqEOL$6!XfU.=[I,wPBuKTGy2f<1+TO}90Db0JB@^I#f~rYAi.sd' );
define( 'NONCE_SALT',       'CQ+>i!.qDC P+lET0?Twlkmr/WxQR)[=mj  9L6=01Y*W@CFhpkjWeX#(IN,:1z?' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
