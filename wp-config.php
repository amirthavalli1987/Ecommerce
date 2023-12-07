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
define( 'DB_NAME', 'Ecommerce_db' );

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
define( 'AUTH_KEY',         'lv(,*Dn2_EYHHx)dC}8A#:s# r(xgx>+(T/ej@@nnNnUi-R0@s; )[YxdP`v* 4)' );
define( 'SECURE_AUTH_KEY',  'Rsaw)&S#~ kTT:j/[_N4zj#iOVh$)-M_:{!g=~]g%K*n55(ezxh[ fKa<9n.L&Ad' );
define( 'LOGGED_IN_KEY',    'Ye,gYj)dc)F:bwg=OQqhN$3j/-~-U>N*|tRN%%h^*`_$eeen(--n_K0YntS26n=P' );
define( 'NONCE_KEY',        '7qI|v?p+6eVtp^5LQ`N$ icsVhu.F5ekv{qfMMM)S;oZLx1UxP_)Rp9-.;FOgSgp' );
define( 'AUTH_SALT',        '9!&E~@venm{>0|4ZFQdL1E6;b|v4q6eW-Dx||d.E$[~Fbd/:)}v(vFqKZVf11N&b' );
define( 'SECURE_AUTH_SALT', 'g5sv&_ASSXpL|QJ`U?b-v(JT|9a5`K>PRZ ;=DQ32H1?B`Igj+lXpovvAoMKMlW/' );
define( 'LOGGED_IN_SALT',   '@s]R7U{]]a)9+7,XKyB!xMoM~ ^mZhf.mn|AbJ]4FI!>[zaT=lVhNA-dH,N%O/LZ' );
define( 'NONCE_SALT',       'fG2fOl-Ycqa: %H?Ae_?!u2NEpT.z4%k&~yD01,}e{Fw)Y!=73i[|9MkW0l! a9g' );

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
