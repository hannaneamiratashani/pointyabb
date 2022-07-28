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
define( 'DB_NAME', 'pointyab' );

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
define( 'AUTH_KEY',         '3mcxDPCQ4$1u`tTg],2lz$*PY)*P /1/VjCD-uL-F@%6y># )E6D87G/rLudpj8o' );
define( 'SECURE_AUTH_KEY',  'nP-]9=m!Z{b:CN&xoqu/9Ngo0~|{||^+5et!@;1Ugm30?|pU;]aALxFW$75d(7nH' );
define( 'LOGGED_IN_KEY',    ']%[Z[,hUNw1:-+mU$p/1@:qhvfZjp{=X5;+lN!RI%Bn.NC)).=]b/r6jqjPH,%#K' );
define( 'NONCE_KEY',        ']s>Unp[0scCMtwu3nxq@gQ?5zq ^_}#%$C%wiUf*/K9|ZM[Roi2$TT:`_E+( EjO' );
define( 'AUTH_SALT',        'wMP`O($!q1Dj;Hat&Il+g*zQG&)9.Rghv5!jHVe]ni4Fe=J(W(y_mUcNFu^=-fYG' );
define( 'SECURE_AUTH_SALT', '+c6mqO=z_`Z6_P{P1XOj`G4DR37Z-Lue[og~0k5ym*/DB8AK[o,.,q~WVnl{wcZ7' );
define( 'LOGGED_IN_SALT',   ',2.xM7H!^[7TRnVh7yX7c>c[eD7jg3e{d [g aoQELu]w;8<FfhRU !K^R}>r10I' );
define( 'NONCE_SALT',       'i&Mnnmr%RKW7~Sd[}X<[-EdKJ}}]GF/$ z8IqsVF1X87vnFI(be1*yv5+c&i7|t9' );

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
