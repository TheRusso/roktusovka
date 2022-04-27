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
define( 'DB_NAME', 'rok' );

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
define( 'AUTH_KEY',         '+XWt/Cn:q&mVvZ4pK*0I4k/%Yy[[E[O6KoUI9#+0Kne[a%pwt/LZ-qVl)#AW(<1H' );
define( 'SECURE_AUTH_KEY',  'YEv&]]I MLoBya<bpY%=p:x$~Fa}OBfqRug=HM0@9W<g5c2blADi@uAx2N1/.3xP' );
define( 'LOGGED_IN_KEY',    'aqRzeKu[e9&o*[hjG3K~C0#>WyQ16?2,Rp (/1#)9v8x7d36<#H*=uNDxk)Q4k1J' );
define( 'NONCE_KEY',        '>O>u@hihbplRmKa8-}`+_!u!c,)p1WwFj cs.R8D6u{hq!CG_/i(_#l{Bs`it[Z~' );
define( 'AUTH_SALT',        'T=u1--i7R[Bs{QJ5hrddr(K?S4[3|PXNu$K4ts(a6a1s{Q@}G$c/i+&zTT]AAmjS' );
define( 'SECURE_AUTH_SALT', 'W`en8{w&0c.qyW~D`TqElq*F+;YM]Op0K]^5mL?CnL4uoJ_.<PO ;cs}~2#LB*}a' );
define( 'LOGGED_IN_SALT',   'D7+$WXaa0YfE@DE)!4e:]Y}[[ls^d(Da}M2(d=Ij18V7fss.;fveh!m|6SxTY*gO' );
define( 'NONCE_SALT',       '6LMZY?f/dxW3.Oq2Kup5GBNozYS@s#V.bgLd&o7~dpI1%qT.abm?<b>e+K->#]GX' );

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
