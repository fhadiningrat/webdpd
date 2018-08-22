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
define('DB_NAME', 'wp_webdpd');

/** MySQL database username */
define('DB_USER', 'fhadiningrat');

/** MySQL database password */
define('DB_PASSWORD', 'g4ruda354');

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
define('AUTH_KEY',         'qb|~:qalOt;U>D*r{~+-2/vDtj7<!lZ@kx#>1M| 3CLx<qm^pTkA8)L6Y5|HP>$2');
define('SECURE_AUTH_KEY',  'rkoEpNJ}xucCbcb]9#URKidDj|$*/s*m&Ep9zs.9n11)!>Hx >ZWS@A`yS7BnLKK');
define('LOGGED_IN_KEY',    '(gE;k1(3doM2)|M4Aq[p5ePuu[D:3|pNJdz-@Sl+R WUeA}dtLBZBA%T2{ulJ~`+');
define('NONCE_KEY',        'V]6,~hHKpSM(YETVsyJ<@K/hHzRd&t^8| ~#bJmW#}|BY6MpIC:m4nxncwa<G%+V');
define('AUTH_SALT',        '=x2MSaG!-21r0&xXzcafl/zpy_@vb<r=`iVc9x5Tg,jo eZ!-pq#D.j[Em[~Mg=d');
define('SECURE_AUTH_SALT', '|g:w7Fcl2P|c%~_WB2gT(wsYE,gLB|/fKJPqzcF(I<p?vBF9-+J>Qp`%:kD+d@t,');
define('LOGGED_IN_SALT',   'Lh]6a Pw>>+W@bEc{fOSVU%&Uo4lpW#9`P&-T$]Za]]vx5y4i`/eN%#nGKS6^!GL');
define('NONCE_SALT',       'x/l@=S%L*UcF%~3buw8&*MfQ0FZhQ3m#Kr9q$VFuugr`4,R3}32MRN#Kft^aO685');

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
