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
define( 'DB_NAME', 'myplugin' );

/** Database username */
define( 'DB_USER', 'myplugin' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'Ok=EA1P62;V)[^@V4GYK[Q!,w8`xM*v0`x<:bK9-u.6ha#=O AQ[gN?&(bif+C.=' );
define( 'SECURE_AUTH_KEY',  '7m9zYQ4StrA&(XtfI8Zk[]4aj: ;!#?S]!^S<hxY@|~Qm1:2=c$ Z?+Y[ioRM(]B' );
define( 'LOGGED_IN_KEY',    'K#sLyeI{*YmR^ZX,&W9Vv&M{W7imF<lVnzcr1F!eS{GDu@U57uWmd.0!QWkQ9yc-' );
define( 'NONCE_KEY',        'fDT .^vJceq]PNnz}MdvI>C3$=0Quao{C|X}/M14Ql8.as(LYs6i36J@IJ8{0G3{' );
define( 'AUTH_SALT',        'G4qJSFX4=O}{{w:k)()(s%aegfFd$PYb=o@B`+dHiVf;P@XN<Q|NEB;><MPx_yv ' );
define( 'SECURE_AUTH_SALT', 'im9F*iN%,t NS+Ht`g*l`#@5i0jM&)441Fvd%[oJXi[liBVT2#IJ*6A#y8IA|@G#' );
define( 'LOGGED_IN_SALT',   '?aW0.gwKx_a[UA8fIqZ!~;:69]Usj]d>=>&dQ@,Ir8>/K@hrnme-<j0PM^n SJ=*' );
define( 'NONCE_SALT',       'xK3ysck8o: |! 5eTCfn@d`NaKj,RMI0A>3ZaACJ((7JdY2U?h?[.gypD5*Se-|^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mp_';

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
