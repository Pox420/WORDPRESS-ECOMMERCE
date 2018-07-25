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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'FPa-;tr[{8_:-Q[@Go2wzav_NfJfR&Qg:P:[#KPL^,SmGRqjW,*?NkcM4hu+4mxp');
define('SECURE_AUTH_KEY',  'f<#AU=cJ$yuId$%0Bm^j=D8Pq?N5Jw*~ARoqj>b9K16QS<%D]M$&OluQ#]e!]k+y');
define('LOGGED_IN_KEY',    '3={R~0i*pcnKj6V&b~Vq^M4mudqI2Ph<?b@by>vF^b#tVi!%W*?q;!*Py@:f9qs!');
define('NONCE_KEY',        'e,@/qaep4/hq5JgKi{8x~.MS0 npC2!F,zyywcTN%@hPVaF7yZHitsy]B=)vlF[U');
define('AUTH_SALT',        'W4<#l[?w)GqXT3y`&-alT@!GG5 |ddz!}SQ8T^fc0kF$`Tp$y!IZpDuwq3OU,hE$');
define('SECURE_AUTH_SALT', '{?HuASZjP.hM06x4z#dw_ooS5PZNcsb*EZ,,TFSb4!%JPB1>F{oc@{%f(!6E~<ez');
define('LOGGED_IN_SALT',   's-dQ%_%}e%b!.`)sL94;tcJdeXjM@=#9LXk@9Y0h{x%scfhcKK 8[q&jMO1u&>j`');
define('NONCE_SALT',       '@@27=qhRb4}?alCJis;Iyri~]=LXo>}-at%;)B/[/(i!sQBC7tx/o.df`|0mODa$');

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
