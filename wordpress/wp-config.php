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
define( 'AUTH_KEY',         '?!5=g]Ek-7u|:sK4#%n!Mzmk>#6A`%+|rRs33*3;s?8byQH:2K4:h:aOo^8F%I5+' );
define( 'SECURE_AUTH_KEY',  'x!oGZfYGV<|mzLO%BCH@|%Y{P!:NB*O*qyH{#q>On4f1@8g.b]MYJZLCSs8,[wrS' );
define( 'LOGGED_IN_KEY',    'J%Kz{ln3P MCvF%)& +|p&GANW4;S_bmXki,N(|Rv&Qi~ihnc{#a5i`a1v8hL,6o' );
define( 'NONCE_KEY',        'U?Av<!rk(dB._7Ei&fr*8y_^wWlunf%H<$^ivc3f$7&/!{0,J37.zac(xnFlL;sz' );
define( 'AUTH_SALT',        '.t30&O,iJf&?FtB%UTSPqqQmVq3XWydzeJMY2pPz-*D8C&HpwZ`0 PxrtBv#/22V' );
define( 'SECURE_AUTH_SALT', 'w94b?S:j:7Wh%/#nb*x@Z/GfE[Om:TDSrhBW@p%Xd326R9adsy(<DIE&.{=zQr*}' );
define( 'LOGGED_IN_SALT',   'w303!P<&:CsR.}6/;V+8gH*K|zBB-*EW/]O:*&Fu$QSVkxOUh=qVP>.>d]>O>N0Q' );
define( 'NONCE_SALT',       '(LsOsZURFmaS@$V^#biz] @U_^9nil<gIHPV*$%Ow0=T)HYf. nhXh6W i]H4S6>' );

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
