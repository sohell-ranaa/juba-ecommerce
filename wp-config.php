<?php
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
define( 'DB_NAME', 'ecom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'isqoS5OW7cTz9h4syEBWnF1YYPW5RudObJMrlE0MiS5Zbk5sDosUH5LM0HDh1vZv' );
define( 'SECURE_AUTH_KEY',  'UYJFabJxA3N5NgWiIa1AgWE54HLQ7ZwkcTFTjgKkhvsDHMiDyQaSdPAdOwGVW9k6' );
define( 'LOGGED_IN_KEY',    'KLucu8ARJtSGbM1xAvAYumzMXb492q9ISUssnowQcdP1N9CO35FYXxbNkxfPJG1W' );
define( 'NONCE_KEY',        'reSqds4mFinUvp8hFeXT9i95c7e7836cUYrWRLvT7u76eprvLUya4M2XROlALl9i' );
define( 'AUTH_SALT',        'DNbtdD8dwXugklaiM7JQ3d4mYb4mxa8aMW3IepWliqczVAvvz1r7lhjrD6b31g0n' );
define( 'SECURE_AUTH_SALT', 'ohCMnrmRlrFl1dqxZitsASy5JIW29Wab6DiNJXPXwNGl8xlFgp1z4jZjQ0cIAb8M' );
define( 'LOGGED_IN_SALT',   'gZASCr2SYyhGtXFla61Tk7Kpu4YXvyaHCdlTv00lBIUQiACCGQEy4AlVjg2YZJUt' );
define( 'NONCE_SALT',       'lq5X8xBTxeu43eAzEG2fJwnXKCwS4B8TB8LzJNsPyhrMJ3XLFRkr5bskNJxcg5Gm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
