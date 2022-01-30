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
define('AUTH_KEY',         'JEIP6l3yZ6B+UtJLMbiqTt7Je0vOI25jjm8dptPuMOY6bkvi3/Wa84jv948CW64Dq4dm4fg0oMMwUJ3L7pbeDQ==');
define('SECURE_AUTH_KEY',  '2xL6sRGVEIaCUW/J39kg4MytImF1Etxa1v+8+t4nU9SBqu9xQMQ+pe32CiC4ub1rj5Fyr8vCQk/bxDyrtk4EJw==');
define('LOGGED_IN_KEY',    'ALHeVGA9GEnDydoKWB8YTzzC8qpCyjm5VwRBsg7TsLxX12STnlUOcIdTpH7PkaVqA0eWIaqppauYYhHHt6dwFQ==');
define('NONCE_KEY',        'XdJ/2FhJWUVbCGvHAqC5XbtXj4+itv8T9FziHu1uaV1molNbg+XVz2gof5ncTUo2kL2kyrdm12LBVB2Qe1jXxA==');
define('AUTH_SALT',        'sOFzs+jEdfApQQ3EgrTuESzxsyLD3KysI/0xrtK/WTkRiONCp0RKEOxr53hHWgUHmXtCefIBsgLPSy+ROqEpaw==');
define('SECURE_AUTH_SALT', 'wE9zjLU4N42DShKhUyKeEWs1vSG+RqfP4iD1A4h5H+ywjz0My+HtiXsPhVkyAlx+GpQuH2FMnUEZhJMdM9rbjw==');
define('LOGGED_IN_SALT',   'BgBXso2QBhBbHiTtZ1C2Lmq9luank/oIDJfrKVw6yzubEXSkkz0CIL0KVjZZ6DW6MS8dnV9g44R/gpwt+Kpuag==');
define('NONCE_SALT',       '+4OKG1Cowjm9ObzjiC4lSK0R7jZiiOogKgg7x9tA2qJ+ePiVLHTsLl131JqcDedhnHhKM5rTCwBfeOVBo9rFBw==');

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
