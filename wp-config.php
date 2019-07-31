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
define( 'DB_NAME', 'u4607_2' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u4607_2' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'bY6/rX4-' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eb-uTLaO3XvA4x_)l=6t/:!+j <u;w*67#Wd,jSA?I9g}Ojt9wJ?NcJK|%Wa3nKf' );
define( 'SECURE_AUTH_KEY',  '>}xxh459mtyeEGEWC[+wSLpg(wn~Z]gOvojRCiJXG+@87B;fxPbanj8&IZ5ys%G:' );
define( 'LOGGED_IN_KEY',    '^e?T*G,GxVs&x}%~J^~D=S3*D)y.^T*VaeNmI7Ost?a0v32I_g3Nesj?,W*x}-rB' );
define( 'NONCE_KEY',        'L?YQGfPS63u5vtW~Sa<Y*R|?vzseBR&e1,<#6T^/9c1/j*/&ly5c{989B~nzIC!N' );
define( 'AUTH_SALT',        'S}Bw:p*XzHMi9}!725HK]OWd7%Rcs0(MX/d64W x+5o|lqOni$@*(vxqFa7YM? ]' );
define( 'SECURE_AUTH_SALT', '6Hk,zw%subfT~IE^-Tq<XvWsQHaJCtI+?if!Gc7npU@czRT)2xxC*TdRc~E-OvyQ' );
define( 'LOGGED_IN_SALT',   'I(V@ gDyaAxz+w}KwSn5}+`(U%Os5e[$nqb?,tO]&6yf2f^dvCr8Ey$Ja*W?D%K9' );
define( 'NONCE_SALT',       'B5l{qI&{t*8/w}]7q=HGt+aDq(t_#Y`B9q=y>)Y8TLPx=ED/uiMx?M !F>n5{7MB' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
