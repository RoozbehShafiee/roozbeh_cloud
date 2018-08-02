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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'roozbeh');

/** MySQL database password */
define('DB_PASSWORD', 'h3tbcmqL6i&39=LA');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'Gg2Zfe,<eH;T&|K)*/)/LHSyZABP;S<w?cl:kN;&`Lf}$JXr@h4UK~$^ :Dm=oaL');
define('SECURE_AUTH_KEY',  'V]!X<T! #c:L(/,C5V`__Ll=)Sj*)PZc@V&FH8>DNkB=nzj/-,H<tn^~HBEgj%|5');
define('LOGGED_IN_KEY',    '4~ A:~uJATI:R9@$kw3Qr##F}@7PvOf)I)Pm4-@zjsYF||kM0vn@[RZ7iBI6,%S:');
define('NONCE_KEY',        '(aNbw_d?`qwW>dnFbO_aU^Hwx~(jd4XY%Jz.leqLpp.8=tb+_8Z2[N8(U<T9A20$');
define('AUTH_SALT',        '&8l;VJ6Qg8<CG{c*]+?Qh.:)M/3f!c3g4UsB`2$EZ6OlADu ~Y}|GG0OOe: /O)=');
define('SECURE_AUTH_SALT', 'zDYw,il d/4jP2v5q;:C3{/z:)E2<WQ7>9X+q][2?_NrTg:$H|^5Jjr>,AWwhR/@');
define('LOGGED_IN_SALT',   ':-l8|X::q#HB}(kfe/C{|V zQMiqHWi5}/:;,X7U<8sdv#arxfVd~KX^f@<F]lt.');
define('NONCE_SALT',       'yd6vmre|se,QB]f%#|[!HWG*Q>V3{BX?K7_bOU;@$#}KiPa LwcHxK%RHY&!V@SL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


