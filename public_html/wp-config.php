<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '120-20_Ticketsdb' );

/** Database username */
define( 'DB_USER', '120-20_Ticketsbduser' );

/** Database password */
define( 'DB_PASSWORD', 'uKVyt5nodUvFTsVG' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'l36%z?HDY z=I$edwg*`C;pP`u_%RrkZv;+]$@<`3>kacp^i[}vpii(1&,gSen' );
define( 'SECURE_AUTH_KEY',  'j%]H-y jDDYOlqgd^!TC_oLRDxv_K~#jt~)(l*MBgqDRx.KRo1n_F!pu@() RtD%' );
define( 'LOGGED_IN_KEY',    'E,q2[72tRg?Dq@B ;_MxC)={ yGybWIa%aUABkYDCy*Jy FzDo;o 1{6t63W;' );
define( 'NONCE_KEY',        'wEJp-(P&v3tKG#p(,~)7~rYY9%o$ih2r5P;=^#ApQ`eT5A8-^U/EnqEVwm.=kx]7' );
define( 'AUTH_SALT',        ';Am[#]0o1;Qrp]iN)kbbaYRW-Qu27L6z5|hJQEoOy#4q~F7;1=~>T+)AI6P#j6(f' );
define( 'SECURE_AUTH_SALT', 'PD_t-6jn8*N8P2]nw(O:{#cAQdzC:gGO+p1l_A[n2YX6Nrm5L)mZuFE~1[B6E)U&' );
define( 'LOGGED_IN_SALT',   '3gx#@]S)G/:[^b<mbc%DrRU+rh(ZpuH7[)3I1x$UXA{LBwW^Y]qSR<7b;k551y4A' );
define( 'NONCE_SALT',       ']Lf7GN|A4W5/a#YNfCn=uM5I b:idA_;+Nm0Fw_#d5w1Ek.ys[A36?7OnPK`ABW}' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';