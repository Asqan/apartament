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

 require_once "config.php";

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'cDRf=:fy&F8EN@]+ZLD]W}(Yz|!x0Se#QY&)E8^`A~:i,v# -m1e|t[+#yM|@896');
 define('SECURE_AUTH_KEY',  ';`*Gb!S)^fHc0,|Jispkcg6fSlR;7phUxByYVQ2)v=!bA&Xe#61abEQ|i)kSd<v4');
 define('LOGGED_IN_KEY',    'QS`d!F?|-<t#fT+r&QzRpF||syDRW-vi4[PSx5vW@^|4wewv}plw3}?}=+|qP9-b');
 define('NONCE_KEY',        '+C!17r|}My^Crt+J,whu>)+cI^<g-d,8 9g{O5^-U{<ujdXVnGA,s{*N9W-mF+_)');
 define('AUTH_SALT',        'f+0V53o)tZg-17an`+[HDwg*_g.!skd+<m*|F,)xSd)P,mQ<3ZK>V [naF*GE|,i');
 define('SECURE_AUTH_SALT', 'u.<CQ+1RkFq$ra@5oL3`raFrnfs</.g[af,:Z_yu4X4{ My}3`;X_I~kpB>.|W|~');
 define('LOGGED_IN_SALT',   '[GMENbbt7Bn++%|r45jmQ||z12(@3Pj3+Wm/$g%Yn>bY|A(pw4I9aci|2CM99]@N');
 define('NONCE_SALT',       'WD%w~M$wWDKH;mv5b9Mw.-[-yBGn5ZszjVI|m2eDrj1VcT7s|qM;/8vTY?_RxQg&');

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

 if ( ! WP_DEBUG ) {
	 ini_set('display_errors', 0);
 }

 define('DISALLOW_FILE_EDIT', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
