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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'l`@%.EA?c%J]3-Y1FTDgm>a`.^YK>hCt|j20h/5-0gIAvVAwTsz*)!(GR1~2!fzt' );
define( 'SECURE_AUTH_KEY',   '|C3f3!q@jx`SlJsP@y-/kOn>dA-lG,HC-x6HZzBk04d04uZ~!$m +kS7}@n>V>Js' );
define( 'LOGGED_IN_KEY',     '#31yT-2f[2s8-7s;||AhiHx|WsbhiKcgV3n3^F s/an=>B_5% Kl>/dqvURnxrc/' );
define( 'NONCE_KEY',         'wXjIg}Dzuox->Yw@kz*+)DUr+{?$)7RT:T4G|`!nv4?fo|[Z8S6;GT?{ce3haeGz' );
define( 'AUTH_SALT',         '<AvAWxYMI`;F-CS~ m%)D|^p+EHLSTpe66[Ll8QweC)QdsyYX@g^{<zCy^f}F*O}' );
define( 'SECURE_AUTH_SALT',  'v~wJ$_vl&ad=F:P7Nc6-^@Vn)f8><v1l%rtObsr5)y.8lY6{d:EootN[gl}pt_5-' );
define( 'LOGGED_IN_SALT',    '2j0l5BEOW?6P]09%m`g/QrmA0>UU[7?$C/H5Csb?dmJ6KR7k|^];.Yx6!^AYgJ$F' );
define( 'NONCE_SALT',        ' GWrH2F6w-zQn;iRQ|oN=.SWZ:-:jt*,~E`-&yr:(a,tMAtZKm>gx/pM_{LR!Go+' );
define( 'WP_CACHE_KEY_SALT', 'B$IlRWx1VA,.q0oU[M`mb}v.QR1*gqO;Sr Z;O2VDw,|0n-Ys~8Wkd?4HYFR[JXa' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
