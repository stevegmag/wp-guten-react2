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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8pSzesbhWSxGcWsve7z008Ivg7VLD9CILPdXBipAMtQQIkJQKPuge4j1QSZa4u2M283s57gt8IP9BTKzNXh24A==');
define('SECURE_AUTH_KEY',  'zTmvaUuKCzMH/7JOtaA1gq9l6bAmlzhAC6NWvl3DxjOvHr3xQhC5nqkK4pFKEXSd6Kz8u3G1eLjGSMMIY4iBew==');
define('LOGGED_IN_KEY',    'K3wNPphOHOxTZHHpz0vK12/07KyDGHWhga9QQvu9R6r7QRgE2LjN5Vy9F6fsj2Msjm9UbMMizaBqH6IrS4AddQ==');
define('NONCE_KEY',        'DM8LlpsAJwjJYaZXmSsLK25GG7euvAvGhVLsYo6DqC0KiFdP+vC994loj/+qZeADDzh7YRvK0SS9bLjUsSAupA==');
define('AUTH_SALT',        'GKebVHp8SzPQ8usG3oHm/KshHdCokLWXtR9LgFCJYFytqZDjipMBWVj2gVIsnE7tN2gcS0FIyo46WdEN91c2zw==');
define('SECURE_AUTH_SALT', 'ajri0sRxr1x09UKm7CBovgFDZmgbeF/vixQcA2p8kW1tYn0LR4RQPdfPQsIoIgaS7Gnzm70jMHfrhDTxX4nsgw==');
define('LOGGED_IN_SALT',   'XVJlFJBIvozRVVUQlXqmoSlnZ4Z8Sgstb86JEqtqa2E6vfFbu+Jwf9EaOR9i1DZHnEX8DovZqtfEa90nEqUrBg==');
define('NONCE_SALT',       'flXnOqWi9nOrKhUkEF3orIQQT2TPceZiUTSTB/qRyUp1xhJGyrhl6nHX20VdfTTbC2zJqc3RX79bh0HjNC7u2Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
