<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'intelsoft' );

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
define( 'AUTH_KEY',         '9T Uu21t/%>T$txWji&yiU6`Qyk=rt4}%l /1KOw|m#HlyaD<.63:T}HaDx|qR3i' );
define( 'SECURE_AUTH_KEY',  'I{lKjCo*A^zGl,]AR^czFx%|^RY:fHIuCqenxo$u,u0wkWNO/:[;>ZcMQFi$v&1f' );
define( 'LOGGED_IN_KEY',    'Q<o<!P+_WAAl%3Pz+-eY7a@Lr0BbYUf=mQqDCc:7[2FpzqZu6YEJMtV4D|8Ipnwl' );
define( 'NONCE_KEY',        'mony}(Mut4,C>&vQXsmE-o6O/4buBW1]0MMV&f<Fh2!,{Yb2:ZP>3MX`(NxFwL(4' );
define( 'AUTH_SALT',        'JQ}oV73gU7E+p%Nqh.t9h%QkRYemNA#bo0Y#Esxn<]^OL.&}3v[p3&;GeOPK&Gr>' );
define( 'SECURE_AUTH_SALT', 'paOLT!%+5gw@zUGv}UU.H3jPtTf&,M_NXZ8(N&_4|KEY}/g@;hSfE>Dl7odaR2w ' );
define( 'LOGGED_IN_SALT',   'U+Nd4iRt|G?[_F`QJq!qy;B<XO2e^]8dD?09fNqK,^jJTklL(B%ur%gB~2:BNGp{' );
define( 'NONCE_SALT',       '-UqtV+h[sTqErS!z$+]}SW9u<Z/|4>7p7W>?{~5mMSScdJ}9VWtVq?JVb.4?hd!,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rz_23';

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
define( 'WP_MEMORY_LIMIT', '256M' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
