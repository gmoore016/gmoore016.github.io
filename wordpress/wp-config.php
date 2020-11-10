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
define( 'DB_NAME', 'gmoore016.github.io' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'K>cNq{Ha|G #fld6vlWk[Aql&_RzP@=Vy}:Cqk=Co+<w%bKr<AwuJD(fYFE%!uY/' );
define( 'SECURE_AUTH_KEY',  'qYL=9-=3q@E*pLcmSQA|.~kFXy)af2by3P~b5C|UQ:x,9&X+@/-8Kuu;F;og#c`a' );
define( 'LOGGED_IN_KEY',    '?0pA+W5Tmm!tYV%Q1<g5R:@@}v}BViaaOPi `?2]HOut<OXELD!Q@U;,/wPs8sY;' );
define( 'NONCE_KEY',        ',4ln59lh1Wzgs-0~x|oiHI{BlL!,/=&yxkKC0}!t 1FHs/-Z|Dlxv2lxcb739%~%' );
define( 'AUTH_SALT',        'y^yW-UYAvM_?;nim9$DTU?_y@OT(;&VPZ0R(fZ!5`bkhK7;CyoP@qU!|r)#<_#=Q' );
define( 'SECURE_AUTH_SALT', 'qZ*z2CZhd1X~tLjI2_hLwq5GY?dgUT&d~Q|t2;l:oxSTCr=BUG+?YLQV#us7`:8a' );
define( 'LOGGED_IN_SALT',   'pGsm#W}]3Etddwk;wq*>aU%@*74[{7{!K$Pto%+hx^vK]W;w3BvAqjKqh5).U[zh' );
define( 'NONCE_SALT',       'K*y~wp>Xhk&($Mlx;7z9F5I^yt`=%~^MgnWaONBQ:z3u/(bLt u<bQ*F.]YMKOZ=' );

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
