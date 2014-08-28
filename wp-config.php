<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define( 'WPCACHEHOME', '/home/pavanrat/public_html/wordpress/selebrations/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
 //Added by WP-Cache Manager

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pavanrat_applications');

/** MySQL database username */
define('DB_USER', 'pavanrat_app');

/** MySQL database password */
define('DB_PASSWORD', '9vPh_v_S~cOi');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'qxIwUb]u>;|vH-R?(e[MHIVR 54*zIS|EaG-[_vI7jL7+=n:qSMqIC%498YT4]WK');
define('SECURE_AUTH_KEY',  'F +cF;{9+D3.tCTM<{Kmv:`aT|j`xu#v<{+|)$kFSO0FM<j-D9HVop{pAL-*O`l2');
define('LOGGED_IN_KEY',    '0s,?=_9pe,FzTOuS/@J9^nLmO+|J%Tq{q[R/_j<[7F#>W.G}|GE <?Z-{oZW|j9Y');
define('NONCE_KEY',        's/)aH>k)%u+}US!;:WGbyJ)`e_,6@+Z30+eB+1.2Zg>HuSyd?lbvNbZ%M%??SjLC');
define('AUTH_SALT',        'f1Z:ybhC-6mM-0FLxLHwy~Lv75t3qv+)3i{9HruV_UxG/9|j hue|4y3Q{Zp@m!x');
define('SECURE_AUTH_SALT', '{+:H#)t`geA~aF=O,7K~X[`TW:ZXd]]iGn4?2z4pA_+Fh?,19pL$D[uFH<>CdPzG');
define('LOGGED_IN_SALT',   'VV<_R=%H+qJ(eNq5Q}L<0nK80rl+kY(xj1L{hlHGOx2~I -Dz>H>^@ WO~aBd=*W');
define('NONCE_SALT',       'c;d3!ocw;}&?Un?:`8m /7ym0]eND]TLqmV=Bn@w`f]y;exy|;{C|q%+ZI4<OJA(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
