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
define('DB_NAME', 'grahatrans');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/L{p&ioLO=vY#WQjX6vi?]e@s2iXHChv[z#{[}MT:4!p]@R{de1a~y}omm!4J5)+');
define('SECURE_AUTH_KEY',  't{t#h{3(2*C82N%e;gX.ar9tUY{buu-C^].K}[1^!O#!iu2wEA_1vbXANbh`E~D5');
define('LOGGED_IN_KEY',    'jU5)pB!DL>/LGnh84U||x7J:S$GH<92+ Yenvj<ke?vPg#QA~*F^nXkp5Xx4uxn{');
define('NONCE_KEY',        '<4_W/ahiR6y >hO^-qZb_m`nJt7/)m3-bMrW~grE_RJAtY:Hu/pU];0,N~$b~BZp');
define('AUTH_SALT',        'ISjIbFgZ,-*`LEYo5J})HdgQ(51Dbf4q_k2?|ws<IuMBo~E[RV?r,]{$ P/(XUVZ');
define('SECURE_AUTH_SALT', '$:MlogH|Hlk9Bb/+QHME5Z9gA#x|=K@g,p}V#gl-0#]U+z#:(S*jfC9:=oH@xEGA');
define('LOGGED_IN_SALT',   'rrEeOaKjb`t>c*> AzpV|yu2EJ~hx+62yWHX}mi4#d1HHa/s4YQr!]:85jQQV#xe');
define('NONCE_SALT',       '&%X&x#r=&00*bxTgUs^a|PatL:HB;A!/$`}LJ[|5bdq)!CD7:1$vnJv};3Y(GAX1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
