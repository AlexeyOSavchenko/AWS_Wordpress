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
 * * Настройки MySQL
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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'wpassword' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'wordpressrds.chmf4puz6ffi.eu-west-1.rds.amazonaws.com');

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'n-*f+[N&2-EB_o*-|M{16PJ|Ox::F>TLAeJwo<5{ZC4sL*yJG&n[3&zF0dhx]|Fr');
define('SECURE_AUTH_KEY',  '0!c+i|*zQRwvt@s ,jYkf<}WX<6T+[9Jg?j3oj|A>`A~&;aH)TCJk|_1P4gX)R73');
define('LOGGED_IN_KEY',    'vp`LtSpl:2-)?yt.~b?3*L/X.k!~;m=]d|-&[;=v0OHb_P@lj<er1stT%!;hwJU+');
define('NONCE_KEY',        'wxnENw50?)Mx,!H>~ux~l{O}M`H*}jdU3c71gzluUsuZO+}lnA!_*k!=E^0Wv.PV');
define('AUTH_SALT',        'y/8fZhI|Y4<*Ef!B<q+ugLq[pfU4k3_l~|kt8?;!a]M5__~-+PzJCE~9}Hxv`%ni');
define('SECURE_AUTH_SALT', '[Jp->~m86dly<1| +~[Wn%yBOe^JU+WWDNT3+UZcf[0 |#:*kG!/-HD2S`xE8${(');
define('LOGGED_IN_SALT',   'U/-G+|5hNFkA@-|,8Z|CV/4N$:--8#B+n9S%.@0>@96^7P;Ys#fQiKI|vD1gY>N>');
define('NONCE_SALT',       'YF*<>9eFyF*j85X{Ab=mX*OebAlY)/-a7{||R(?l$*qq5/_]y1V>DY{N~*DCET?M');

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
