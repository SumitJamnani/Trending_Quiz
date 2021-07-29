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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk25/3444298/www/trendingquiz.cf/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '3444298_wpressb2cbc492' );

/** MySQL database username */
define( 'DB_USER', '3444298_wpressb2cbc492' );

/** MySQL database password */
define( 'DB_PASSWORD', '51dQKPBgRApoDjEm2wWPcBFLteCvDSCK' );

/** MySQL hostname */
define( 'DB_HOST', 'fdb26.runhosting.com' );

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
define( 'AUTH_KEY',         '42<Ni*KvK$:IhzUwoVZRFCR62PKXouR-O710rm~Ks/W2fJrdb={/J+{o|3xnsa7U' );
define( 'SECURE_AUTH_KEY',  'enY--~t2h{bfb2W#7Yy`1e_~`XmR(E-m+.Ty.4D7!#q1=%t91~9Xx]=I(_GN{9Jo' );
define( 'LOGGED_IN_KEY',    'iDT=gEv(6ho1CXN#nN8>C-svHy4h6kwi%)`2qll-En [oM t<sAI01U5/1ASdr01' );
define( 'NONCE_KEY',        'HT]B21~LhjqKKeY]VO+7D4%~F (1S-yrlkCV~g!)3y9X%G|GZTbWA7&5nR=q*MSt' );
define( 'AUTH_SALT',        '?vj7bL$&UQ9v}80,VYZdD11]cL)-,9s4grz^(5tx+ya__7}|44MzYD2L[Ub:uF/_' );
define( 'SECURE_AUTH_SALT', '`b~,>C%VT?PPOblSOt][yx{YruS*!v[*736JxUy.n?F`:#P]Y-s@0n%/}HkE.C8$' );
define( 'LOGGED_IN_SALT',   '-fkg=9<o[r_[S_KLK.$~X;3[vg$OBP@fgirgAXt7SV9%=!>r;=T3yQCs^-+ad*3r' );
define( 'NONCE_SALT',       '/oC])-t3B[|fIbfyi#xk%}^u|Cq)@H@1z1NGl9$8b!Ipuoi[P(Be(4{NG*?An|&Q' );

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
