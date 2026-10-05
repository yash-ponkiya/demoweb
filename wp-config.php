<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demoweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' -VSDmkl*BVH!~g#^.b8G wY-St120b=oN+djHK@~>PO(^vi+Hez|-+g*8hd9QX0');
define('SECURE_AUTH_KEY',  '_;n<Av0<9-gc-i7{ra2NPR0X6W1mK05P|Do<( <?X9K5aMWNcj -a%z^TBnMvCQ=');
define('LOGGED_IN_KEY',    'S?@/e8IZBs;7G*hgyE[:h<B_}hxitK!un0@|UiA=Z#tCU8.S-9&TL>$@e_(c5L?F');
define('NONCE_KEY',        'hx.enMH+Q4+tmWQ49w?_k_qNh>&1a{F8-WXpNzU>F4;y3`T$d?Yx.??#OV )b.RM');
define('AUTH_SALT',        'bb!&Ke92P1S)vd-Z4|L|@/#qXi2p@C>/n?_-D.RTLaXg`f;%Qhn|i&GTG@C]GhzG');
define('SECURE_AUTH_SALT', 'o;Ux$LQd-mm-djRY2onNOf,WjLo]fa1T`6}WPS{F~X#,CdijZ$F6dXw0-Z{<87Ra');
define('LOGGED_IN_SALT',   'Ro,Y!w{?*VVeTvC F=`I(89W|fw@UADl+{DLmA+m?Dt55^xTI=&lQz:*:o;eIccT');
define('NONCE_SALT',       'er{otL7 #jGI}2>Qj(b5+aUm{rn_4?/vpt_zK>vTfoMNs:a@c#A&lDpz]19DZHH.');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? 'https' : 'http';
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') { $_SERVER['HTTPS'] = 'on'; }
define('WP_HOME', $protocol . '://' . $_SERVER['HTTP_HOST'] . '/s24/demoweb');
define('WP_SITEURL', $protocol . '://' . $_SERVER['HTTP_HOST'] . '/s24/demoweb');
/* That's all, stop editing! Happy publishing. */

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

