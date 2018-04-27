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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'hopever' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sleep-123' );

/** MySQL hostname */
define( 'DB_HOST', '115.28.238.211' );

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
define( 'AUTH_KEY', '*Tfb45y:i9p<~?UO[iCKmQBLC*O1HKM4IP6M,Lk](O%v!P^+c>g@F2ku2$H+F{qT' );
define( 'SECURE_AUTH_KEY', 'IG{*G;<Xh_Y+X:)1F%Tt/.RmCWMfU#5^`<=4QP@SPv>6Ov!g8KVum~4*nuYrs<m6' );
define( 'LOGGED_IN_KEY', 'l&Wtv.RfG>|YpjY-bj!<LrCX)ei#K/>l}XgD/Z$ahm|QII$pR+=A;_%er1:T~J7B' );
define( 'NONCE_KEY', 'Y+PBenfRaMVF%8M]+O+}c04kuRx7DtpcU8/^/(@QD~^A&eJ<}d rgZ?t;nG==~Ap' );
define( 'AUTH_SALT', '&8`bNmw t|zJw_aq7~gKFEp*YLdu!3Zf=?xv<$pDR!;:2xts_itcA&C`epJow!z_' );
define( 'SECURE_AUTH_SALT', '-@sFJ[E<;9Y_dv97gC6nIQP*j#}|g^f~~#)>v%C|Yh*<2M|YK- uK5]86m~$S$VO' );
define( 'LOGGED_IN_SALT', '=]hovwjPoy^-{V/3;s.m;J] v0|ZrDiz,^M5?mU12=Z2PQq;/Df#ezC?~C4z}yTL' );
define( 'NONCE_SALT', 'Or25Tq9@#$sD^#bwuv]:aSKC85:=/C:kGe-1;HEyVT8ZYrnnH%8NQ36`e?.xrNRX' );

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
ini_set( 'display_errors', 'Off' );
ini_set( 'error_reporting', E_ALL );
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );

/* add smtp server*/
define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'sleep123' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

