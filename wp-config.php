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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Dk}FnrH.8I){iz3q~YP)}3{9g*ELJkRn2&YntJ>FaqLZ25td&-B:PJ>G||]F2yis');
define('SECURE_AUTH_KEY', 'L@yuj]&,;sOO4,[cZ2WAgq{_1*kuU:Y^08]uCmD8R{KG@*V|_h){)j[h]Vad`+tf');
define('LOGGED_IN_KEY', ']AX!R<:3Q[i$!mhw`?j/)2};_YK*!q!QXBh QIHmdQ9R<)`H:Z*qHZkQCPc:X(uy');
define('NONCE_KEY', '^J~g.81FE/B69,bJ8u8 nnAqrqD*[+9aE)W~yZ S@9d8p8ggSd@u[t%a9gC(m5id');
define('AUTH_SALT', 'mS,siwkhhfcF1X,L3>jI!ON30qqj3pu@464yY VODxifp5e~~Y#c;x|m5ShQRSh(');
define('SECURE_AUTH_SALT', 'q0=Wf@o[gE7dnUQQi>=F.aN`)s7^i*<;,;+1Pq0PhLUVOf+Huo9dRKLtM$ YqKn5');
define('LOGGED_IN_SALT', 'l ^!77mPiqLn( 6AF*b(/|4WW5@b_4SgVN>$6]N#/}acP4iM}}}+UXB+tui=2RkH');
define('NONCE_SALT', '&2Y!]HW3#gL/7#/iyXC*7{oQik~Pt^[}<ok4k jiA };?9/E:P;Mp_rr&f_&cN1_');

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
define('WP_DEBUG', false);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');