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
define( 'DB_NAME', 'art_portfolio' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'N/Kdp>F|R1]#(k&xj39TC^}Jw{N]Y?:]48Q+]ZWD(2MS,7VwE8V0Ky|Hsh4DCg~Z' );
define( 'SECURE_AUTH_KEY',  '{gYNRhs[`=4{ial6R9A+JNWF 8nrCX3Sm~==TOiX8 L:3 ~;g}6j4w0V0zE,v#hH' );
define( 'LOGGED_IN_KEY',    'W7;%azmxLM8@/Q:@-px!wtn0GVa})>I3c huU4qe16<`}>C+_=7WX1(Mb%WayBhw' );
define( 'NONCE_KEY',        'rs,KO|ZJ#R$GPP}H~if.p~B~xLK/aeT%|hB2hxP@sOz2A:-(4P407bE LW7^`3%g' );
define( 'AUTH_SALT',        'VEL4=A$Tl3z-U;,G7m2p<oJy6lO)P>~?h80]jg&k~%t8MEQOGwJf.zPTEBnwnb+B' );
define( 'SECURE_AUTH_SALT', '#YAHq_,5Mb(w1jV!PrNEgUbUEWwM,2Zsh$Zh8Zzfj3|=wx`Qeq6vxQ )G[_}`^)`' );
define( 'LOGGED_IN_SALT',   'TB}+}/9~7lBfq^qX$J ,r{wQ}`tji36W5:@TtSQr7T75f7F:gS^;tw+DA1.0skb6' );
define( 'NONCE_SALT',       '`I6Om@7ccl@,zPND^.z1o7vmbZCJG#eY;n]=d4=mbeW1T%Nl1ATdalqYqurt/sE7' );

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
