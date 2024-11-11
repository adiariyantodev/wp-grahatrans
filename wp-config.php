<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gra10004_wp77' );

/** Database username */
define( 'DB_USER', 'gra10004_wp77' );

/** Database password */
define( 'DB_PASSWORD', 'jH)4pS1[K9' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mrt7vifkjlr6azhgcryx0gcy06lwzfqntunke0dcu2f1msfr1vscnqgqnt2o1plx' );
define( 'SECURE_AUTH_KEY',  '9yl2qhkxpdyxzdkezi9dckkohhvywrimcy5raereuuizwnporxpij6dqln1igoye' );
define( 'LOGGED_IN_KEY',    'qkefjq4mic0typdd5yrkrcgm3l2ck8l7pgujmvrz65q83hdw83aqu2lbgtxface0' );
define( 'NONCE_KEY',        '4zfpfpvsap2tsspyt54xtdhn0b0bzzuwyvevlulifqdxgxobcjkmoetolsvt9y6z' );
define( 'AUTH_SALT',        'oumevm4bz3vdc4jzzneaew3chqzhgx3p2k5cd3pi6fcfzebzv7ympriyovrgmxqg' );
define( 'SECURE_AUTH_SALT', 'gg7oxb1wlsgaduusuotghpjkc2squbm0zcuik09gaaeo67kwqfzvxbgq9rmsmco6' );
define( 'LOGGED_IN_SALT',   'a0zkficgzckhbnbkwzjiky9lxbmcy7lewhcw2yn9eobmx7z3chkt6fhx6pfjdwrv' );
define( 'NONCE_SALT',       'oeibv57wr8vmqyoq00yliksf91vmcaiuvavqgpc7jnomakaeixak3f3d2zpjftuc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphy_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
