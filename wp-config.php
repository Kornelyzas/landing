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
define( 'DB_NAME', 'landing_base' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '3306' );

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
define( 'AUTH_KEY',         '-hQghMd/59UWja~@2>J>$Izjr_BiOS!N.VG]0F!</b`UY5]+MDLf(*|rIRc!.52E' );
define( 'SECURE_AUTH_KEY',  'A?<i>,nmWp|cNnN#w>[EDTrgLg:/:sj{-,rA-1CV{EO{}xYG4p67GvJbm<SqnzT/' );
define( 'LOGGED_IN_KEY',    'eg@:B4?Xxhda#FxC7p:r&Gr+FVw9kOOED.Z=vj6@RjG)WcTP[u> aj%HIG`B^aXZ' );
define( 'NONCE_KEY',        'Q+/J~&Umt=w[rBT`Gx4Hc}9#WTUN4f)E|V<!llRzJ{R}6)03 T=cMM_coH rZ%nJ' );
define( 'AUTH_SALT',        '+TX!<u@sw9]KqckpUKx:04N4.Wv%Vhn`z$]Zt`GK:JsvBDzO K+BP@d,ei1:JW!t' );
define( 'SECURE_AUTH_SALT', '&r H}5:RqZdz6_)RB*7XClb|gqmS7U4|~Odxh<[ Yi,hXvLmQ/zRwT>s!R_|}Yn(' );
define( 'LOGGED_IN_SALT',   'gXNI?fljf{CwDNYP8Ms)T7t~?d=ke-oanxX~.>y=u{)R~ 7mwzB|nNq2|*W:.GcG' );
define( 'NONCE_SALT',       't0z%,%jAT>)&4 s3vy=%0WU5Bmf>3j}1@Yp$la|7vl_`]ECvJU$27%CEZD/zOp<u' );

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
