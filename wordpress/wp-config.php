<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'VbcGBfkP1tZFCTS>I8jGs3tATV?SOE`+9ATUu5<96ymmR-I5ehTmTnr1YtZT.t~R' );
define( 'SECURE_AUTH_KEY',  '|]?T$k+8]!?bz1_#vHK-L~>3)O18GQPrJwlLl9H*EjpvH}Up9ul_<aW*)fZ;!+E:' );
define( 'LOGGED_IN_KEY',    '.<p4r5*Pd=2`#XsY%vsdFy;21U5nSM@ha:1V)WD|;cpR{)~dE#oo/<s==>5[#A{d' );
define( 'NONCE_KEY',        'F[GYr7!O@<h@G@#d;9M:];V9f@:zN3}uU43uMyME;LKm`^] `SSF,_+wRns*Fx2:' );
define( 'AUTH_SALT',        '|^Z/N).baA5%a*BXX6Npx>l6Q #-^5oBRJO^G?yD$oN.i};-h(XpsCNH:vz<_Icn' );
define( 'SECURE_AUTH_SALT', '&xj^|cMb.22!@A?na8LwuvI6{auL2$K>-I{&2t122#|Q}B~[`99Z+/39B.WX(nJ2' );
define( 'LOGGED_IN_SALT',   'B[!+$i(QZW0l0`O{#p,-:vqQt79NYAY(^VCq~N,arPRfD/#]W_*P$ep2O(`v7ah0' );
define( 'NONCE_SALT',       'havC9`i<Nb4:LUGIftG~MFRDk]6lfza)M+MujrF{*h.H#H=[@bYU?4`XM! y9~N?' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
