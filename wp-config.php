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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fictionalU' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eight8einstein&' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vMEIYuAHMlVCuJu9~htpya?VeR=#xs!1&-fBlr10znxQp8Vy*#MGTb]Wo2vznexZ' );
define( 'SECURE_AUTH_KEY',  'N920_A=NKxQKSS]zz!LJd|@b4RFEDF)3!:soG.<<HJ9hNNhOs%_#!.JsOxa7==$!' );
define( 'LOGGED_IN_KEY',    'gr^+[Xz`YiF[rEOT3E3)z2h?y<[#u~}AwCWl?>hAy*l#sh6NSxVW]D?HzO%UpBzI' );
define( 'NONCE_KEY',        'dS/=$)kN(KJ2Q2yi/],pZKFHCCW&n6)&g9=E~Lkn5W,kr6;q(=1U){[MXETIf{9!' );
define( 'AUTH_SALT',        '%b-8v_3;@>s`nLq<H1^~J~lFcW>Cq%gXsRf?O{Y~le+p `D.8x]QY]Mj&YmqsLr!' );
define( 'SECURE_AUTH_SALT', 'PO5w!3U`, 15rm0lB3T^vqCO#f1o&Hr7:4o#|vfWizjEQsArZIY md_N=OGoRxSS' );
define( 'LOGGED_IN_SALT',   'HojKRYkg3n!|-t`{wQeh:fd0B02+=5%V38qS#T2s}Fa4|$o<rM.}&z&E<=:7oOkK' );
define( 'NONCE_SALT',       'v?f`;ow,kqb`0ORc%%oUIk7B7Od$^uG_qK6[YU)g_crc1P%zxDdym#<l_*l_~uao' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
