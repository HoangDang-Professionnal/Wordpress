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
define( 'DB_NAME', 'QLBanHang' );

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
define( 'AUTH_KEY',         'a(M!(T&3 @KFQ`I<rLC:te3bH`DUGiH)aR{pU]XI4T*?!pcwL{=h2A.e1):jx^o)' );
define( 'SECURE_AUTH_KEY',  '=i(?{1i:]:Sxc3qyVhIlTt(]..a@QGhwkh8GoF({ombA[<>]K/[1=Q}vsTgF/j:B' );
define( 'LOGGED_IN_KEY',    'f@|77TK,#dy2r6EHX]5yzu|JLsI-mFi6IBES7X(jyM_0$E_vFrkJGb1sSZ,Is[aw' );
define( 'NONCE_KEY',        '3ULq>3{T2m[j9<ZK@kORS~5Oo%|5j1hQ{Z&FKZk2)h>xC1l*%/p=JK,#Z@|g<t9{' );
define( 'AUTH_SALT',        'M8*0p}AuDo0R>zHpP^PwD<#;l^Nu_a6nYd]B):>b64Uu]D[w})hi|Z:J*z`]TP_4' );
define( 'SECURE_AUTH_SALT', 'E*dV&B5WS>D02~fqc}IU8|3hp|Y5-*)qw|;Y?9jSuih`}W/p@)}*UgHCq]/Go=&r' );
define( 'LOGGED_IN_SALT',   'ROxxRNe~yqHvnE$b$:No#cgPS{OI:cC=fz3PZHQFYuqF5If,x3X8@3M$.U0@r*+{' );
define( 'NONCE_SALT',       'v$?&.#c8pFh8u;RHQ2X!y0)Z3L]Wy0s.hJon=q,Bf:PS#G%4ureV^e(+}}~+&$!`' );

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
