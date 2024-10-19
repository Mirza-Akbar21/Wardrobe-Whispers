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
define( 'DB_NAME', 'ecommerce-website' );

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
define( 'AUTH_KEY',         '20G6;ge$3F}_OpF:iQc8E@snA@~z#BX}t$ SF@xD5{1gEq5[PeJ9R?x-GIOUnbum' );
define( 'SECURE_AUTH_KEY',  'HP;mnlkTh97~PgXaf9*AB*zI3&@e2l}PY*u2&4ni-5X.E&a,v?(?=/5MD1R  Sk#' );
define( 'LOGGED_IN_KEY',    '|{LGIsiajRF?xpZ,wm.w>+e0=AERf>Dj}gz>LF@QNtrbnyp3xV~]9],Mzw~b@eMK' );
define( 'NONCE_KEY',        'QaQe^(b&1$5ZNwSxG)+vk+:;t&dR<1*( ~~CH ^jt*o84-pP#{f)w~xEVvFJB^>j' );
define( 'AUTH_SALT',        'exO|NlOa{rTy<p6k,pM2*Wj<nxS8aeR#inKIg|z=ux)*!jeC+fgT#hLX}qCqUBFe' );
define( 'SECURE_AUTH_SALT', '0$8%)vu%E1tphEFd8j(mF?//B9|US= @]E8]@q+l`Z aE.Bvt*Zy+ {A|Cn0dlIt' );
define( 'LOGGED_IN_SALT',   '.@-CVhZHuG5Fylf$lgI,J?Lf~PK=C594]vJN4<=@(#Ug{LSuF:T9??CO-L=8Ls-r' );
define( 'NONCE_SALT',       ' +Y+7%#jt_F! lj[S(,,f>Gl$iN8t@qI2(yz+%hJA__m<qrUfibq:b{[KvcGrDLa' );

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
