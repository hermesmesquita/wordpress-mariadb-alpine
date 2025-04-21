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
// define( 'DB_NAME', getenv('MYSQL_DATABASE') );
define( 'DB_NAME', 'wordpress' );

/** Database username */
// define( 'DB_USER', getenv('MYSQL_USER') );
define( 'DB_USER', 'wordpress' );

/** Database password */
// define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );
define( 'DB_PASSWORD', '102030' );

/** Database hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '<m24lgl*b*9.fv}d6qecf}j%ZlyG|PH|&]!jm8}5]MM|Viqg){!D62[-g$eUE{]1');
define('SECURE_AUTH_KEY',  '8PCUnmnk/)blVJ}H<|0A.t,V^V*+upJTbgg}qfxo6_D]c;A48Nun$l{y2eZdtikM');
define('LOGGED_IN_KEY',    '1L4*|/IG5!N9|WLzqYNL<?Q-WkFK.sAoR,a!*x:XnP7<O|).+&FS/+VvzG$1eICy');
define('NONCE_KEY',        'volv)na6NS5I+tjtOe_+sx:0XuzwX+oaN21u!I3|H=l#)*5#P(j-|DYZWW^p3%wN');
define('AUTH_SALT',        ':x&nlHl|-Ibk$+:[<AAj3cCnktXcho,[T9]k,z-(5=h22=L9;B7(LZ>O)<rk0hHc');
define('SECURE_AUTH_SALT', 'I<?4+]pnUh0z3DXi2J|Lu `[V2od=D_69pc|n97dDZ]hryl#c:}s{l.@]SM6(O/K');
define('LOGGED_IN_SALT',   'U|~.m/JUw92)sx<IU}%EaHhw`^Pa{9Gmh@EMq!y>|ZB@z-fZwIh#jQE9QUa;cO&J');
define('NONCE_SALT',       '9^a,Z)D&Q9ixb}MRrG.1`vl FM)qMba?r)?-GV=xd*?H0|++d[+76t1lh{P Y[h5');

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
