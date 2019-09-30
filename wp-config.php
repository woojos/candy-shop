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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '%Y7uD#usXFZW5qP>uhs9^P)]0`,umr9=BM{x)5<pnQ%g(DE7gmUnN`EnVle{M[ z' );
define( 'SECURE_AUTH_KEY',  '=po%k c~|2f[Y;?8U/J-6a6$m>o o7//u8S5Q#M%#]5];O]]q2-{.]b[e3f6TKp9' );
define( 'LOGGED_IN_KEY',    'REO giLjvjebXNB#(7knqKp%^Z.jOWY.41s6lXM#.{zd_5qeS~mxy@63ER)V]-_T' );
define( 'NONCE_KEY',        'TjHAH},jTO2dqjvM0)r0W})[5KM|)u&5|wW*YQG]Bdv*;6CebH2+#yD/0cJ?#%YN' );
define( 'AUTH_SALT',        'DV#Hz02;w 6fJOP)m/bp+2F3V`!V6ia3J H&bZ#_X~!?L3!_3C_xT4)nfET(mxtm' );
define( 'SECURE_AUTH_SALT', 'gxC4uH&dj]T*rn3YY336>j.Qb2yO{_k8(YniJBaAaL^CoK9O|l*?mMRg7r;Dwiia' );
define( 'LOGGED_IN_SALT',   'Do!Y=$F>w?46+ eK1/1T1(grdVWejTZ&9.&7`q<duBE%!.|7cmoO=-A|vHZF02z[' );
define( 'NONCE_SALT',       '7ZpU;n&H6Ar+jp9R;|fj~U>#CSt-S}&|auS%ye7kxOs,a$L[!G(x*QR,,Mk:d8GU' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
