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
define('AUTH_KEY',         'hn4eGbezoNPvhL+pzmqpdANHpY0+lPGRjDHwTOA0t4htJlGWPCH1gWODjg6ET2dnBbJuDuPCM3NF/IokmM72VQ==');
define('SECURE_AUTH_KEY',  'v6dALEQ+U9QVxAkx6Z+lTPD2SjHb5nAMTIML9xEOqYOAmFiK6r6dwRyzkZOT+NN25jWcAuyZQPqBY/MGpgJKFQ==');
define('LOGGED_IN_KEY',    'dD+0tRlg2cWu/qv7ir4exZ0TGNBIG9GqxjaKIdZW5t8+EZDrFGFNzu1GWMsRTxbkdD1CSoFBc6B8S2PXHuMXeQ==');
define('NONCE_KEY',        'f/RSmkYJhwbbmUMyREYSg9wZ60rvR/toG4RRHBZnk1rR6p+vKh/oI/qwlPxLqjB4l7Kd/NZb0MZN/5TohsIP4w==');
define('AUTH_SALT',        'mI/PadzAzU2fSZKCGxUeAcPzbmHBCHF62AE+Qt4Z8aNkA35RSvZ6hqMDaVJkZAaFrtFNRNaqfDGa0uzn+dYz+A==');
define('SECURE_AUTH_SALT', 'wdjbQ+s+Ia8cTv8rXbh9bC+S5JaaEOzQ/uJu7TUjViu6h+5SMIssBQcVU4lvZuw7RDJlQVHHCMSTqA4i6lgPLQ==');
define('LOGGED_IN_SALT',   'Q3SkCpqtFz4JMZEtKZwHM4IdM+DbxCVA88yUCapoMQmFwdFd9EA6D/xqvzb0z7zULGJB88jG7tTS1M9kbaHX/w==');
define('NONCE_SALT',       '1npRdxvmPVfCx3K6Sj+1PxA0fAALG1OKJASr36xp5h5cmK2tsspVPMDO1pV34JStc28bZ+MJzrdj4O3NqJ73AA==');

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
