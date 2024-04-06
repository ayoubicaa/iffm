<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'iffm_db' );

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
define( 'AUTH_KEY',         'Z?_ Y`f`SN8^bTM[m6e747Wq}zf<D*IL62&9yAt9<`.C11&$SWc6 d=|z!Fp@!rD' );
define( 'SECURE_AUTH_KEY',  'u2w7/rP5tS=F[=t!P/77RWyn#/9^$QE3S`ko-~s9xy*o-$E{<]|4&JWyA=)KsWj}' );
define( 'LOGGED_IN_KEY',    'p#>y#l+;oMwBJ_a.%p^tF6K<(.sya+G%~aQ~rs%1ewTgC!/b|?]YbO_|8GVrWsw6' );
define( 'NONCE_KEY',        '}IMZZr_R+bJi+~HDcV;2mpj-td^*+5>!l*zdTW#^J?[P#-Xa*X&MG`o8miR``r`Q' );
define( 'AUTH_SALT',        ':ro$}r<h4{dD4Ifph?7u.~N06~4(rq1Xo<eJoq dA]f^)-Cb08z455)8xZ4lQ):_' );
define( 'SECURE_AUTH_SALT', 'vvwS+{QGK-It~Yge-~6!#R9p}mH{S]&EbSjB`U c+n+n-IDOK&|@Z:*HXc.r.3|s' );
define( 'LOGGED_IN_SALT',   'haZ-tOVcXS&mm=gP(aZ##q8l5VX~@WmPC$2|iJlJ$r[-uWQtot!qA*>i;E3Nx3d^' );
define( 'NONCE_SALT',       'en9:+JCI&x9&%9Vigb^X>bilN7W}k00n?0j]]*M9/PM &&]aMVTZPfr)*Px+H7:(' );

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
