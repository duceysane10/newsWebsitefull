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
define( 'DB_NAME', 'tabaarak' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'w/3Zas2ekjM:~[Qd0Yd?x~!&2Bsh6n>Hh3T8{i9;gT7Qq`AZ*;H5sDI5%Jd(Xye[' );
define( 'SECURE_AUTH_KEY',  '}srbj3ii1c7H<<WV<4!<(j:JgViS?#$mW6?o;DG8pqI|`sncaT>IY`7;$d<wo9j`' );
define( 'LOGGED_IN_KEY',    '*&Q85KlB`#qSz0]p7OuoO3!R83>jeZH2^_aj+l7J,O^K7D0VO2LrdrP,.003E8%!' );
define( 'NONCE_KEY',        'C o@Y|gbZo+`,OC0e68G]096t%PT>ovJK=iA5|oT;3q[+|$fPu7K05X*Sw+fMiB:' );
define( 'AUTH_SALT',        '!^U?++U4Ay wRNVH1%6K}0F,[7K!gOj%(_NHtSALzi(#GSYC!kd*|r;[`BN}d0vY' );
define( 'SECURE_AUTH_SALT', 'Cims]Zwi3(N|8|s9iw{03(^:jk1b>M%r0b*[PuVJ>@7#8M*-V;}sNF.GruUAxZ0P' );
define( 'LOGGED_IN_SALT',   'j.2?=pwXI1aN9bp.Fa?f(L*B1gsR~EER^OWAxQ@5xKW,hx,7br&H;2)=VF3@7E$l' );
define( 'NONCE_SALT',       'd$tIbRnx Y.uw*Y,n*h*K$~P@G|swyt?aXC{syav)9vr6jl<$)Z1d8RBT2yL&X_g' );

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
