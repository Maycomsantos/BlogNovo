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
define('AUTH_KEY',         'btmFGkc;#TJu;Ay#{!yRC5cW{{Md`Z3&zb!$nB&yH+1y=t5?52_(Lh bd^VW:#BX');
define('SECURE_AUTH_KEY',  '{nh,%??[,_V7Ts//G16<(gd_X<Yo4}Fct&SmqTr_|HdVa`w|8[g:ZBgTw NnuzG:');
define('LOGGED_IN_KEY',    'Vm]G5o~q*36`knw!xY`e PSR7QB#S1`=bP*>u.]_n Ew^_{gAT/u43p<f8i]WZE*');
define('NONCE_KEY',        '#U1F80GN3]a}aC;[_v7k68F<6T<Q,k)%*dgmQ_Xv<5wyM[1ozTH1)!dk<bP-sMfB');
define('AUTH_SALT',        ' 5xj&orx!jsr-[_bxh$qtrr::>4NE2*1gi$!+>_>U6Rk/b %9ffIi{h2LLO{5[LE');
define('SECURE_AUTH_SALT', 'f_/@QsI$t>g`]Y|tiAz[>x$WB?J.S^vjP%M-W)B)SNAG+7hTI3Yz3V+*V#n)G(zO');
define('LOGGED_IN_SALT',   '7p7F}P`wAkAe!6^d7LBQKA9j+T|]dvFx` 0O{?._Yzzk<L/|HoaE/I4^B|su/3,+');
define('NONCE_SALT',       '#Dr LNPCdaJR@fmrZY,~vV;+nLR^o43-z%oE#vQj&zPZPvRSUc&5YqhJ7XAMQ;&H');

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
