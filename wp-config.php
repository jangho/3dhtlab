<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'htlab');

/** MySQL database username */
define('DB_USER', 'htlab');

/** MySQL database password */
define('DB_PASSWORD', 'htlab6622');

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
define('AUTH_KEY',         'bF.L<R69cX:XnGh&uHq7c!+ Bmmk@xvHjuJ@#-E,;tpXC#pS,.y]{qS6B5B)^lIa');
define('SECURE_AUTH_KEY',  'z,&!s8Y!mMsKh+]{FKPo-N6A@,w3Hq|iMX^&JN<h5e|dz[*sAB4ZYq1o-u)--D|,');
define('LOGGED_IN_KEY',    'QwS;ld++k{T$e#*nzL]zeye6qJ=`!qEV[;w:AiD>GJN5qnnlM!}T?YOS*FUy#%dd');
define('NONCE_KEY',        '?/)A_/bmHm(F_#duqw-R-~4q$R$4fy7Mn)/YrZ!3tlgy?`A|El/vgox|e]?Ka?f-');
define('AUTH_SALT',        'Q~b,r/S]vF!y.O|H`04|?~ ~3xNHyTo,Gy*g>13Gh:&C9VJ6EE50t}XlWMIL>Z|X');
define('SECURE_AUTH_SALT', '%;aBMV,IqM5N>l27j_{`d1Jfr*d}4N!Pz8_zs@&YB}{+:#qXbTsk7xCf8pX2,?ex');
define('LOGGED_IN_SALT',   'qL5%$vvirwGZ~>8Ts-/A;O:#ubcv,ovGpB:8V}`} wGlC3EPIPbns)>r^|5[-T=Z');
define('NONCE_SALT',       'b;JMZ76WFA9~V2XsavF*s54A3]^q+:m#J2 ]ty(~<zdu5+/bUOU>b7[$2u7#xpl2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

$_SERVER['SERVER_SOFTWARE'] = 'Apache';

define('WP_DEBUG', false);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
