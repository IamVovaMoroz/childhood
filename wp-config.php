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
define( 'DB_NAME', 'childhood' );

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
define( 'AUTH_KEY',         'd>itlf};H,`<{_#+m +Ihz-8v4beBf3srT9LINs{s(AwF:ml@$KGNAW%T/*Mce9X' );
define( 'SECURE_AUTH_KEY',  '~2eys:-<~dHOkmP]eV2mT3s+ZL=J_&</~eDOw]dIB|EY2;&qv=/.k%]rO{$q|[dU' );
define( 'LOGGED_IN_KEY',    'w2MP>3b4YVjJ[bL&J$-au_}V*-qfP5|iurEaAYneC~l]<iXu~9!+]iW$oOsPum^N' );
define( 'NONCE_KEY',        'n!+tDlm3uK1+P}*6awTVW(i-S2rh*Ig_EsAXG(sL|dFnnsQ#WH_O{k%tqUG#*otS' );
define( 'AUTH_SALT',        '><Bb%Oy9>ZA=$zccFv%W)? *!GP]qkGmZU;i-#GqFX3!(sa$@Igj)K,Xt[8f!=As' );
define( 'SECURE_AUTH_SALT', 'q`VDg0.T/@FCqI~ue.E#!_T|;Zzr)>?~zsf22jHE^EbCU}$~Q 1d#)`)~pK@l9(s' );
define( 'LOGGED_IN_SALT',   'vjR]6R?Ky=5D1Ie+Y1lhTqs$o#(|wB%>~zd/5#x)r@dOdTa-TO(g1}m[KI^u&?h<' );
define( 'NONCE_SALT',       'hd*|<zgz?pN3B6P>?Efo4>FK.;Zq/m!6 <M_5DA#T]m0TOH bH20IeEDN72/Lzyn' );

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
