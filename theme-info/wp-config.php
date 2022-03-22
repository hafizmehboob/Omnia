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
define( 'DB_NAME', 'omnia' );

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
define( 'AUTH_KEY',         'U%wCw6uMA5rhHTcZ]OwT>hSOA#U$3]y#yLKJzf+}C<AZAu N{|3f{.A5%!lb_8_H' );
define( 'SECURE_AUTH_KEY',  ',kB,@dPS1]3ys%-a+VS?o!y_f<>$UX<QaYE$q:Rw];,D?}aJBc&NOas?X?}&eEwK' );
define( 'LOGGED_IN_KEY',    'tXLZhc~a aETBPsNOyXB9!e00:<eN;xXs5UAA)SH{CywcWi+_<D?!s-8`#FmA}{4' );
define( 'NONCE_KEY',        'xYv=(.5;A^-^8&y*pngs_l{;y1m6z)j[2-[i&!I4h~eNSLQ}~<@-Q mG?15lTssW' );
define( 'AUTH_SALT',        '5N!LM_+0xp-vy1CDA]Ns6z/:FO5g8yO7<k3O6>;M5u|=`7Ml4w4.E#[/E3doY2;8' );
define( 'SECURE_AUTH_SALT', 'b,X?p_NP9gA&r>,Ae5)Hf^~ 3wR(O:j4E09$-ye&X_(p2fnsAxTob1HzyDZK9qgi' );
define( 'LOGGED_IN_SALT',   'Z)[}]ncILDT6[IW@WeSq5UNu,AhqKgOHz7Fx nDBX)wK%,2wJ[hr~-up.66[gizr' );
define( 'NONCE_SALT',       'fz_<0^(?+qvV[n$bJp7<&CuP1j6Td8^/sb`:%m-572D;]Vo,|COgJ<1JdTvMZej|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'om_';

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
