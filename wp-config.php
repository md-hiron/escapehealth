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
define( 'DB_NAME', 'escapehealth' );

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
define( 'AUTH_KEY',         '3R<,#]oi7{Y/~?vI%[Ww/@p@`I[zW6W+1FFs$l/)=R5p+*ieS;O7s|,Of-0][; I' );
define( 'SECURE_AUTH_KEY',  '6,o%l{XQA9(Ki/eP)hz[z?e|1=*UMN(W_V@*$>gC$@lZ)x&~C8f:(l&kp$t2y.7X' );
define( 'LOGGED_IN_KEY',    '[.WgA{EersMnW-Os#QZR/P5p eUX#7|&S&=a9CxG(7{zoM?bZiQ.C<RvP{m)6_#!' );
define( 'NONCE_KEY',        'G*c=lt%KnF>%!{/PZ$EDI~[jm?+c%y-;mE;FlHo=C}O387yug1Ud1AZ_GiMRCmUi' );
define( 'AUTH_SALT',        'sW+Tqv,H7h.!Qo^AF~&4ybc*e/@9`%ulD5v*=D|.,OnHQhOI1_]Ru[o}JUESzUle' );
define( 'SECURE_AUTH_SALT', '0f/mc9*l1W;x1T <!G,Rn-zl)% E8qCHg)|^)^v]5a{/TXq]?._6`v+tfYI#ty?e' );
define( 'LOGGED_IN_SALT',   'ohtm94r)lk4P{1Vyft4tI_u-%1tU{p*,w1Bd{T*B9)*&t8,k4v*}5E&27kDj(AaM' );
define( 'NONCE_SALT',       '<`bN@A1VY`oN|@DE_!1.pzk(Fs8VC_v:sYcM04o8$-1~0BTF]&X1uoG0@5seG~`d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eh_';

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
