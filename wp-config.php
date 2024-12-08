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
define( 'DB_NAME', 'Sql1564153_2' );

/** MySQL database username */
define( 'DB_USER', 'Sql1564153' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SlFa95fede!' );

/** MySQL hostname */
define( 'DB_HOST', '31.11.39.58' );

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
define( 'AUTH_KEY',         'lh2zpc1ytpyrfx3vjaabnesvfqai2vyjfeomgd5os4uc2ksu5ccjsrx5r7kzsqbi' );
define( 'SECURE_AUTH_KEY',  'fb6w8uwelnglzqo3mzdqwmq51z903n8v6usg36te9ulu7g1ghaacnskfhabsrp5b' );
define( 'LOGGED_IN_KEY',    'xggx91ijyxvwfzux5xgkyw8nvuehtveiaj0gq272y8e749x3cizlkecgfcn52lqn' );
define( 'NONCE_KEY',        'hs1k7yru8wkzwi6w0v7zh1i6giyxfoxgntdawypzohdjjhngcr40qm7onptcirzi' );
define( 'AUTH_SALT',        'rq9jdvvxqqsx187h9qatxzhzxwudmmkz3b8qydihhavs0ucsvmmxnkckonh9gaoz' );
define( 'SECURE_AUTH_SALT', 'rxi66zu3w6j2h3h94nsg6t1bqfbczwg8vi3ubd5cemkuphhrzawbbwzg7qabljvu' );
define( 'LOGGED_IN_SALT',   'akldwsij9aezubbcvnvuaucnivpmr8vcetpud3knpjp8ck7ho5mwnzkk9avpdmwg' );
define( 'NONCE_SALT',       'l3n2uuqvdbfdufhyj7tpusaijrsmxdj3xpdnfpyesplkowjnwfr2ivbqkxjg1e5m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp536_';

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

define( 'AUTOMATIC_UPDATER_DISABLED', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';