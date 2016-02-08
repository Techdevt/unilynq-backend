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
define('DB_NAME', 'unilynqserver');

/** MySQL database username */
define('DB_USER', 'adminXxiNiBV');

/** MySQL database password */
define('DB_PASSWORD', 'xaZJGltL6chc');

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
define('AUTH_KEY',         ',%8a^oBoQA=wL~ejXxtE(;IJ[cpBVe1T1U9Y,5?`a+>rIs[C[$X63ro2dM^pJ,et');
define('SECURE_AUTH_KEY',  '++]%K>[~TLtv?k{[gQ$+n7q_[oeeTsi*5>cCT[uBqLG{ F4|uwzuG]*,l8J%<R]n');
define('LOGGED_IN_KEY',    '1p>i*N>+ft7|Qw+-NU;-_p+a>(![{=Cs5%gHPYqs_KU+-|#K|+2d.XyMYsn0<EaL');
define('NONCE_KEY',        '@*-#A<zWd0@@TQ7qq<WT+rsKp-7SU0H+TzrJ&+}A7+EebA(P09%0X: Ma;Yd,-B<');
define('AUTH_SALT',        'a@TL$)j[ZJG}v x+V+Z$5&.>T0gJ`}+E&4QXR;*KJ`=<8D8#=z(&T4~>kWO_-):r');
define('SECURE_AUTH_SALT', '.-hh{DVB+l|8^q5llTP}|A5pG(xn1,f0nHZWkmQ+1P-E@Bx?;JC7P)%cS4E?]^O,');
define('LOGGED_IN_SALT',   'W*|v&gk`[>?$> q(/tI;A5dek-gwG`E*G}{sP(7|}ORzrqFO[}A,JIy{%#/|l0Yo');
define('NONCE_SALT',       '<l1FW-,j|U{c%wJ-qqS PD*vvt]T|E<%Fcqs+;yCW{9MWL|sJ2TE]Btyrr6Mf11W');

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
