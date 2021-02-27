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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpforaeternum' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Temu4777' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Art07112005' );

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
define( 'AUTH_KEY',         '{)c[LKJ8P%UB`LH>F<BL3.4]-Ryp;^,XHfG2$aB-tQ}nl,o[lWFF5}q&|Abr6^K>' );
define( 'SECURE_AUTH_KEY',  'I_GA4b 4%8jk JQc+,C=L-&wjTKT%|ph0&t,{ji11yR6SDv{).^q ?Ed@WXA)[1?' );
define( 'LOGGED_IN_KEY',    'j&ddsd44S/xi;FyNv[}|9|G|R&n1Bdb?Ew^XeNZ6R!6H-~,5C{u;k5=CDbBXI^#w' );
define( 'NONCE_KEY',        '`2e]@G*AA,LB7e6 B~,6*i Ly[`)fDGF7W1)tyzH^KX+/N^Jem*H3%Z]*^UgaU5r' );
define( 'AUTH_SALT',        '9;=-Sm5&RPCxW(I^[{Lgu:QTX,=P7<jl]+aqY^x6Mt@N4s]H_|S&xe]$l|/pB|NF' );
define( 'SECURE_AUTH_SALT', '7r lQDN7mBfn7BbYuW?+hR5:?isgM!P;5,W=%XNa4oQ; :e$4dsnW<bUM<H;(,Q5' );
define( 'LOGGED_IN_SALT',   '?VD;1w-]iu{I:)rKF$}+$PpS5de|_$(>dCJ,Tu:9].j_BE/l$z=xq*L#)FP0]W(<' );
define( 'NONCE_SALT',       'IX|T0) ;-@#E|tQd,5O%h_trir{-e{v!_;cQGN(~Ep7-l>cNfF5! J!V]WFO!$n-' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
