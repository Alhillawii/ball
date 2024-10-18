<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WP' );

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
define( 'AUTH_KEY',         'S}$z4zSZHMm,&z9Rs.l>eAC)Jy4J6zy.w0X Ak@^>:7,G0Wsh$a=<!R;]gHZTtzS' );
define( 'SECURE_AUTH_KEY',  '!H.`-p>Y;qyS05`e]Aj<X!Rz)9Z(*c&CEZVyl$$pPT0BRQ`d1&9`)b!eo-bO3uYa' );
define( 'LOGGED_IN_KEY',    '%L+DVs+r`_?:dJ{Aq|<M,h/F}cbEJ)l~-@+u}(a{ddiN<O9QxdX^STNHv[]npeAH' );
define( 'NONCE_KEY',        '[v_A>2}0nf!!Xs%nLB^ob.v]=0)aNZ`*oPfa8vgO_p+-78ZN/4g]MAr^<Vp}-PH9' );
define( 'AUTH_SALT',        's?_~]w/F%8pjs5CUT]0j6Hc^h7F3hvn$6eaWzawtpJ7ZI.FyORBw7TbugSdxFv`y' );
define( 'SECURE_AUTH_SALT', 'UB70*+djG+ahD4<}x~`H6;$IP6 T6O.*S7?vk6xD<?Uvkspsu4:>Ca7n^D06s~;e' );
define( 'LOGGED_IN_SALT',   'yR0mJyr}s}_t><#1l=Gh{4{Th`Ug%aB4y&pr<TpL~bu}wKh$d8@V0t>ta>#=:_No' );
define( 'NONCE_SALT',       'P4AJ,W,BayncGFqlLD&=:04(QnM7!lA;cQ-0V=~%Vc3OxAgK(@Y2}@`u`3=,(5Q`' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
