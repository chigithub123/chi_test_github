<?php
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
define('DB_NAME', 'game_square');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`khwwv54Rg&f0Rx-.1h99WrE6)FOFVePO>c=<Kc3KPe0&gPVVeKf{uF=bNN:fx+#');
define('SECURE_AUTH_KEY',  'XC.]&@0$(}(55|qU#C28=.r<mr2Sq(n;3gV-`=#fwwW|fQi2Dgq4t37iK:Hei4b#');
define('LOGGED_IN_KEY',    '(R-xHtL+0]d+gd#ix^c/COQ`Wc9ysvz* 3] @3 =Y6HgETu#-&wrSjaG1#.W_/#B');
define('NONCE_KEY',        'fT?0L|Y^*3[S#oET*z@s*[gR]Pd|C}8=lM9WGr9NQvY,F_}r?Y$-jx:E&x9Babl}');
define('AUTH_SALT',        'Q,@&Bb7jgmf/tXz1_03Lr1=+BVf*w*,tBv0IJLDG1,x~6;v,v`d !A.1tS<aActi');
define('SECURE_AUTH_SALT', '}8}Wy-VpYeut*-^RF}zZh&,RhzGp&;d&7069K8a~By)dep52$F0Jo!g }6#@8{Fx');
define('LOGGED_IN_SALT',   '<Z$!p;PC$ko|`kG2rNAQ7EGXzV(+5w.]=UAXzD$x]15jU*~0kWXLTP$(|qi!}9]p');
define('NONCE_SALT',       '[t9?Sbbaq%>_$y@O6-7L`UY1wUr5{9Cr5r/od5YFgIy,GAEiRs0dN]T-Z})~AK #');

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
