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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '|yKn1ZG_V?w=T6Y$OR{1zwMww+T4@CRD/_[DjSh]GF>ofRmJ>|i2y[_GMm pmw&!' );
define( 'SECURE_AUTH_KEY',  '#n7EtA[y,7{?x=K}Fv(XI@t%^. 0;eOzt(.Xo<fOC&1&7f#l>ZZZdmPY%1fIT3G}' );
define( 'LOGGED_IN_KEY',    'LE9sg2oA SAb7sP9mRCauZj.{.Db$ax0pY]n6VKBLS7h7iJJ[d3~-&Qztv6_+<d9' );
define( 'NONCE_KEY',        'L/t(dYhm. 7&!6xB*1v#`HcS<<.+c21.z8mmpB%;Z$z_gSCgRejG*d-eOuBQ3$(t' );
define( 'AUTH_SALT',        'XeyvOEt!G+3-A#)!,Y!ff]l+,(]/k.VzMhJWeQotPE4w$R!n|~p&DWIs:!Y[*!s-' );
define( 'SECURE_AUTH_SALT', '@es_i.J]=8z.>9,Z75,6m b^mLgU:F,^*t0}>RF]L9wHP:n5:wup)rU|qkL<:I>W' );
define( 'LOGGED_IN_SALT',   '8:nM!*nGTrYFnEdfb]E1%eyquberu4U;^SWhKo!U[3U/0c-d4X<{`(=t8Y_yan1}' );
define( 'NONCE_SALT',       'As/4>2f^eYjykw_SiD_*WQsRc.,Kwn-f?m>M=Xg/M>Mw*.Qd.6&@iq9%XE&D7:s:' );

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
