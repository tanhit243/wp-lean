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
define( 'DB_NAME', 'learn_wp' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'DWI3pCb[{StbMmfEB[KyYb aW8RbJ0Q9F*3sT(X*oG0qLw3ow=A~!SY7^S`(vyt`' );
define( 'SECURE_AUTH_KEY',  'vvImS9x$NAe>bB`K_@B.WD+|3WM?v#.yn6LJqBqC-g-ilY~C<@v&fJ8*dY+p:WZ>' );
define( 'LOGGED_IN_KEY',    ';4Ze1$@y(__<<wj|LshUF7&9d5C~vFqT1=>96L0W nCUQc`X]CV0[<t[/mXO^a+m' );
define( 'NONCE_KEY',        'l4%n5O?~$c%&fBI5PySY&e{`/L+F.g>W>#HK~BgZ/ZRhfR+~R:!~Ig7sy9IhIx*`' );
define( 'AUTH_SALT',        'qQoi|lx@X^f ~ghx3Q.>E23-8ahiKelxSdo}R~-l)r8ge!kyk1-dYk00,>B~kfXD' );
define( 'SECURE_AUTH_SALT', '4pnnS{UU-`!:$vdA%q.d.U2n3Nhj6:_a;M6LmgXcx{R9aB=u_TUa?kKd.l,Q.bPb' );
define( 'LOGGED_IN_SALT',   'XVG3q.9%P%06Z-{N9t~r/*9OR*s|+;0YrQ6~xOuk}e:-(@dfMN/SGy~}chnD{+?.' );
define( 'NONCE_SALT',       'sygP@D!%S_.kL>t]&w9uY2lr&4>Z)!:xT<)fO9D |MW2!IWQoj?{d.#2Vq+*MY&p' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lwp_';

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
