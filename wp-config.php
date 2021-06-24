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
if($_SERVER['SERVER_NAME'] === 'myportfolio.local'){

	define( 'DB_NAME', 'local' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
} else{

	define( 'DB_NAME', 'kmmkcamy_portfoliov2' );

	/** MySQL database username */
	define( 'DB_USER', 'kmmkcamy_mrrymer' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'Dora0411!?!' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}


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
define('AUTH_KEY',         'guDm2/vwiEjHDHXlca5yeHA0XfKZjQoqQy8NmXIFVZMetXgSMqPS9iPQAOqBpW5TgAwaHQT9ZZaIcavX8LJ1fw==');
define('SECURE_AUTH_KEY',  '87twNo5ritbhAddVRo0/47hmSoqdnwdPTrcF6pLQofhmr70jAMxYPcb1jqpQNCZNzcJTXxPkU73Jy785lzL7jA==');
define('LOGGED_IN_KEY',    'PwFVmx+s95PgzH1eAKG0/+SFJG2dOMxbWxcCs+/Ez78PRmH3QCKaR9jKWYWbI/HQZwOmSf63PqJRTVSx/OXBGg==');
define('NONCE_KEY',        's9jIWCbgdoq3T7iE6tn2fLVVbXGtuvOm6vbvn6B+saG+MF0uqwKqAxELcJjddQs4DvF9pMGGrjKH+JidcmWQVg==');
define('AUTH_SALT',        'xhF6MDXKbuFXIhQ3uUiiC8zjA1NsKLudN63eKBGnswvIKo/P/DpoVDG9WAVL26Nq09Mp7LV+Hispf+IKgr07SA==');
define('SECURE_AUTH_SALT', '9kjYM8eccmlwPb9Sr85i4/8fYWI4GltInH9hHH+2PawFRJYpfN2raBvD21IjeXQy6LUpA3QrVkehSTyBKZCZBA==');
define('LOGGED_IN_SALT',   'dMwlj8Mfe/tw5c2aaI9x0bg+S/Y7yQwD2hyTUj6KXIbXs9TMlmn6vZbpokVFPof647PcLWtn0RxX8dqDt7V69Q==');
define('NONCE_SALT',       'jsvEFMyxkf66eUXcoQRWPob7LCQE449OYIk1hykjgFPc3dzqDCQJq/c3QKV4r7XeEVB76FOGN6L398tnY63XJA==');

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
