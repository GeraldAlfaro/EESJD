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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eesjd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&j5[q`t}O_*X)WKO]9*{KPlnErsyz)A3b0X@dKr]uch5%.S!=9^p)6k^JQkf;?&z' );
define( 'SECURE_AUTH_KEY',  '&HeBN/2k76mwt422EFM4O{;5k*(fR;H 3f,[SR,9-id]yD(ZT#cT7I#KDHFjO)C4' );
define( 'LOGGED_IN_KEY',    'VH.ytU9V1*ERbWM ]Cr0C$X: zVrdUCW*9/a;eg1>0i)XYjzpTl%tg._ikVKGVNM' );
define( 'NONCE_KEY',        '<1,?oySJN$yKt|:J~d0k>;%?;.Q+k/A-&}z2J]:h?.Vzrc0dMPGm0VB{#p9=nuo!' );
define( 'AUTH_SALT',        'ZoJ|ZI0]:>x:@mQs,tNpfx?.p@.&o8^!!X9c8R3_oQ^R>2B!5O.!Rb|Z;5L}**<>' );
define( 'SECURE_AUTH_SALT', 'ltzb#pdL>sW khd2~?G:cDuo-Nwrg_*5cdp=sJI0nu5_RHtAb6^2ABq.;)sE-{Dx' );
define( 'LOGGED_IN_SALT',   'TG0J::^/dXLrGOL|Mw)zWN:4u;uwsb14v(yN;HGBCaW|P7!6Zh3#)TL0B+x8)bG:' );
define( 'NONCE_SALT',       'Zg}|{z@)-wz44Cia:oeI.o-qd.!68)I}m!)w8s!wk5,Oe 8V9$|QzKQNGf[zBZ&=' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
