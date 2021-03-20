
<?php

define( 'DB_NAME', 'wordpress' );

define( 'DB_USER', 'admin' );

define( 'DB_PASSWORD', 'admin' );

define( 'DB_HOST', 'mysql:3306');
define( 'WP_HOME', 'http://192.168.99.101:5050/' );
define( 'WP_SITEURL', 'http://192.168.99.101:5050/' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

$table_prefix = 'wp_';

define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';