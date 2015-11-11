<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'tema100');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '7UlK8RsfVNvceUGdoMfh');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p/eF2?f+m#I;DK0+v`3j|5P<@Qt&4C $%.oe|i7_+^2YMq=Bt|s%A#Jmu-Li{>E{');
define('SECURE_AUTH_KEY',  'ztqr}8;uNad4z#!K5^?HRv><SbhfS#(jD69l+U@Uue#vB8Wf-&!`~e]e854`@X8V');
define('LOGGED_IN_KEY',    'j;c0-/ma]N|7=k!T&PQul?Nrd51d5rBV-><iom 3jrNSWG6AzquGZ&h<@^_6$5;+');
define('NONCE_KEY',        'RQaK=k[Lu~B#=] `;#H^v}wgn5~a}8q*$C0p6p}DdTT)vn~ZW$77V,d?r4Z([deV');
define('AUTH_SALT',        'r|I[8kiF 1$pg&YUT*S7X/ceXL(vXB(u%n0odOvbhT_+P?UY]i78-iT;YAE!v`U:');
define('SECURE_AUTH_SALT', 'g)[%W2%?-:%c@uwN-5X2O6B^%_?NB.8uf!7adTLhfl2jIo)kF,do;$T;BA[aYKt|');
define('LOGGED_IN_SALT',   'ynVKD-|:2 L&>+)y<BM;Zz%kzBi|Sv/_+za-n{GW#X7 4vwq#a+,*75<%h^@Qk|N');
define('NONCE_SALT',       ')CfH!_U>j4u,AQu~Y HMg~Pp8zpTN=(ta$;)f ]]Chau)1Cim=fFtBpy[D[lMqXF');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
