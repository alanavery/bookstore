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
define('AUTH_KEY',         '+WWq397r6DbwZXI+B1Lm3mlfRYlMNd4RU1Blx5vqqbPsMo8cRQWZfBlOKC57SLECLwAbafo2nhnEwTa52GBxhA==');
define('SECURE_AUTH_KEY',  '3IhhStFiPsnmDoMmftX6FgwGMqz59MXo2Z7h//fVnvhYn/I2qYLWArLqLMvHs95AlcoiAcVvNcuVAWkpcxuZIA==');
define('LOGGED_IN_KEY',    't8KReFa9ecvlh4pHSB2xI8CTU8QJBZg5BA/Fl4swmh6xxxkxZjiKK2aDBntSo3C3IVDNM8JTMcjAaDooSeLMCg==');
define('NONCE_KEY',        '77mMjibR2CRWIqGxUVKV5M4eTbH96c5nAsyJOZRZHWv07HecXVJMKmCCIYbM6Z7WPwm8P4E9dwem1xwpSQQ4Eg==');
define('AUTH_SALT',        'T0N8rzsO5rdV/NfTVWW/oqLckwJhUZkJYoIqT60ilBikUytbCIX8dXWdNWKh/NzygwRGDfr0LfH9XLu4OhiG/g==');
define('SECURE_AUTH_SALT', 'PV6JDUlI2Ldjno4ZFu531/I2RAUJ2lHyVteXuDMiqe3zRSUOBuDNNNx0lKwZPQTwUL/OJjFMTDmE/clSI3QCEA==');
define('LOGGED_IN_SALT',   '0VoL18jc+ZM8osF+Sm8MQQaHtE4yDAs2QDFK3BwCEp37sMaTTThSW0bipaowhtG/sUQJsOUsnJ3sGVJ6jVHDSg==');
define('NONCE_SALT',       'srUeIinrn71VJwgKu4zSn8L3GNNLteV0V0weGvKTKLbBZGt9jUDfjgVO8znsuzLjNZoQsyTTUKOGKF/PjIXmKw==');

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
