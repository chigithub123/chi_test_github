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
define('DB_NAME', 'test_wordpress');

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
define('AUTH_KEY',         'cI(NM?)?sI*_jJ$)f|3Un_|sP(3 toph.Si=0kNZ6qCXbJyc6wCSRC`b4ReR~hGM');
define('SECURE_AUTH_KEY',  'IcE/~D|2p,M2]0ar&$h$miX&pj~dp{~/O<*$|J$i3*Y?$0wrvsn<J(_{A#Mz<ksF');
define('LOGGED_IN_KEY',    'ZyeR,$mskIJ;7fU<%sLxl0ND;/?LLUbBindDCH20M&L-R(6Ffo%[$ebaS^48B3*H');
define('NONCE_KEY',        '|HM/73HXVFdA-PoGH3q(aQO(($c6^?znQHE@5:5j[!dxO756C_T;i};iB.eetCEN');
define('AUTH_SALT',        '<`)>lX]+8pl$zT1cPSOq=*p02IA2i`:0/3<wjCA@$`q6LJHr|&~3`s&878EVA@{0');
define('SECURE_AUTH_SALT', '6^:HxneE+2q*4Q=7D%NOV^Q,kYrQqkgO+@S3$Ufxe9 ou?Wy)Z:n?Nv:Pv*Gnl*P');
define('LOGGED_IN_SALT',   '^u|ca{`5C]soC!sj4jtH;1A*iX88dXaMC6TsZCq_ ac,@f|YNr)K&SG.>QH7BB9;');
define('NONCE_SALT',       'lxr:5%b}Z8q~}wZyiCCKp(mX{ 2T0]M}b=9Y1:M*aTM+fCMb}8`Q*wUYV7KZ}pF3');

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
