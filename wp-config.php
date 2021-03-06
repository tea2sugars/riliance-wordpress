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
define('DB_NAME', 'riliance-wp');

/** MySQL database username */
define('DB_USER', 'r1');

/** MySQL database password */
define('DB_PASSWORD', 'riliance');

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
define('AUTH_KEY',         'kQae<8X#p^(hbV1RM7yNcG5a;tDq|^VE8o#Po$hh@Un|\`/iO!U6URt1R/|mlL4Y)tg?!w_b)n2mp?i');
define('SECURE_AUTH_KEY',  'fESz\`a4oyxCw8Q\`VF@ah?t13#dgqp75$Kdb*F|QkUhx(^9!/BXlgv>$CUo4VjEOCAdm');
define('LOGGED_IN_KEY',    'NO$LXOJ1zy8R|_7ai:zD^I5Wbf~3/yHliF=E>l(0Dq4/w#D59~C5CDq;UX*l3Xps1SLjEK|?E');
define('NONCE_KEY',        'Tm:Z^IWRWULfwAXzA$A4XhY4U:q9)c$=fdSZeiOhaR4y^YmfNz6wqZ-/!SzP02>bmBlR');
define('AUTH_SALT',        'h(E)Wg\`12##?:f=9ZyH0\`x(Y?svR#_v\`LCk*W>5KJSneXUPZj^BZU|gK>@/;5');
define('SECURE_AUTH_SALT', 'Ood0eGCdmf7x*g:*L|y_2t3>NXER1#/;a?B9MNTobM4hFtNcuZQCG#)8#)!oAErJ6jUG9');
define('LOGGED_IN_SALT',   'eXcC(qf_)WRN!Cq;UhIy)S@FmN6\`Xc#AWPv\`K431?5mpGZ3bEarhqREAK*UITYRAZfSv/_z9@_');
define('NONCE_SALT',       'd<_RM=x)JT)b^1A\`io@7gD?X>xDW)YZ<q$kpmsgqgT~uBDabx@UyF5:d>dpl8?@f4^~YZ<~s');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
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
define('WP_DEBUG', true);
/** define( 'WP_ALLOW_MULTISITE', true );  proably too much! **/

define('MULTISITE', false);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'riliance.theteapot.me.uk');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
//add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
