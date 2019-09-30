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
define( 'AUTH_KEY',         '{kmeIJOWc2h3tsE9p-tE##x6uPN[Cd) Sg4[qR,#z}Vigdogfn{$VDNFzO~#] }8' );
define( 'SECURE_AUTH_KEY',  'uW)`ODIl|d_[V[=y &]XuCs8YJ/6R;6$5D2{BG.H|r x6W_#U^w&>i.tZKeB&J5q' );
define( 'LOGGED_IN_KEY',    ',^LN9$G!`zv_g6(`x3Rg|VHm)q/k6/$(`7 0BvN0ocXAr$,ne.ZNIN/x`w _Konm' );
define( 'NONCE_KEY',        'Z9yW)R.Nn@K6~bh:+0DJ)MWL%~r6ty?vx%4{_JKB>3$@.u&I?{e|595WiS!iw5E^' );
define( 'AUTH_SALT',        'k^w{p/v8V-JYw7CXCURuVo4D?+he7i)[}C|wu{wBm*Q.Iw6Keo<,WhR)(1<jP .2' );
define( 'SECURE_AUTH_SALT', '&`(.G}o-pb0 U;A.U|S4Dgwr0A%dB=bbp^o[(EWbv&9eK+` ;MNu[AsIwp)zftKQ' );
define( 'LOGGED_IN_SALT',   'p`~U|jrw1$ORL! Iw5`SkrYICR<B6fy !N:G!*G|=qtLz+qWPlziu|`K&xFemReH' );
define( 'NONCE_SALT',       'w_Nt3#gW?%)??ouO0[6&%jFV_cLJmpCH+O X[u*WT7dlsp~|Y?W?pyv7gRjr`]{-' );

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
