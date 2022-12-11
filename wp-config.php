<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'dwdetSb*7eg=[y 3HIFk,KnnT}MRxPvW0!8} |(}-gY[O}*2HG2|P<Y?LOQIh8|*');
define('SECURE_AUTH_KEY',  '=BT#wUg`){c<!7N]bYz]n&e:g.Kmz-Z@oW|Qr}E6g,3>H?*6`|Q[`ZmnDWP295wf');
define('LOGGED_IN_KEY',    'Cy<}/_,v$A8^{1qhoZj!~u!sz8M|e|yLU-IC=<f?]&b&m!!VZgjzi<k=/ZkT]{{@');
define('NONCE_KEY',        '47[jj2 - ZE?IAk7SN~i]9ju#rOKWaY[lTbV1+fz0gdYf!+)<btu}Z0xl0Z9myxX');
define('AUTH_SALT',        '4<Z0?+)3OQikSnd(!3K| 4V-m4@__/YUk&U#`T/n3tm>$$o7F~Ya8tv,{IV+ShFL');
define('SECURE_AUTH_SALT', 'GpJ=(um2%5i^Gk6K!6d)?MvK2)],6yvYUL?In=j;S`Ep31~[LO/;1YSX>rOBqtG^');
define('LOGGED_IN_SALT',   'Whg{qEH||z>V@]k/x!OY4Q|=8[d|{s*`K|A%pTM>cB+genD fLW+0Sd|V|.gic$K');
define('NONCE_SALT',       'T7EN>> .btiM=Fg/0Yq c7{Iu<J%<)?v#=#),bxfFM)$$hK*%<MNtS{mZ4s>A$H%');

/**#@-*/

/**
 * WordPress database table prefix.
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
