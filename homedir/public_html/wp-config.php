<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dependablelc_wp226' );

/** MySQL database username */
define( 'DB_USER', 'dependablelc_wp226' );

/** MySQL database password */
define( 'DB_PASSWORD', '4I9S!(8fpG' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nnsv0cpqhc2ohyt6j6dsbutwae298iqg74sgnvj7bv8lghr7plcn0k1dcirefhqn' );
define( 'SECURE_AUTH_KEY',  'wg2kselh0gz5ynzmcnjoarunhpvbjhxcidvrb6gbhdwauvtvbbe3z2bzwmd8vv8c' );
define( 'LOGGED_IN_KEY',    'tyauypqwgxhv3ewdr45a8ga6i6u101ln2bvariwjpuxzvjapvlabgtexng4cqcot' );
define( 'NONCE_KEY',        'jpmc1onsp0w8d8ymwy488ojgm3gw9be9gy4vqaztitmt7tmlrkr3olvsxwxi3lvw' );
define( 'AUTH_SALT',        'vqltpf2gmjitnd9qufxeqn7etxqdscz66jqmhe0goawnxlpgcyramlyoodrc4oo0' );
define( 'SECURE_AUTH_SALT', 'mearla4qlnjsfelt1krpbenwimtstegglolp1asxad7hrhi52mc454f4lox6fwjf' );
define( 'LOGGED_IN_SALT',   'ykw7qm5wgt8h699le60ai5epzxmwaj6kvycgtor7oconehdxgomaj1bkl7twdibl' );
define( 'NONCE_SALT',       'b6hguo6no5e4eupripdetiswwg9y7kkpwjr00s90gjbli5outvk5ifedyrenvhdv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp07_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
