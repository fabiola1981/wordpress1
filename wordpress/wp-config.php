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
define('DB_NAME', 'Fotografias y viajes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1Ae7!g1@%rmuC1[MB1>$s)h8H(@hlL36q/yX+TSq$h7BsFc-5$)9:NnH.@l8u1q@');
define('SECURE_AUTH_KEY',  'm]M@K<6q<XCl?XQxN;2,C6$j)^Oz$=V?hlGd~:kqv|M.JgT*w )uG3{wE) L/]v6');
define('LOGGED_IN_KEY',    'Ny9maN`KxNadcgiA>.#)jvq;. 1=WPhDF)eiF]ef7b`TE7,<iuMV8%[EqsE/Y/n8');
define('NONCE_KEY',        'hfV^467:9@^Gz]k18ZoPiSNNAG<ietnM2:y<W~p!yh3tO0l? HC=6iw^gB}t87+k');
define('AUTH_SALT',        '1 ]Z.{nL8*pXe:9K7WecwllZm^ry<V?DnqGrx}YLV+9.T}3V_,]fG(EQdX3ZY(-!');
define('SECURE_AUTH_SALT', ']L9U>VsfhvLKSk){)=Zo%hZ~[DhZsY 5n/UOB mgK8{UqB$!/C4+6NBoIgG.8J+s');
define('LOGGED_IN_SALT',   'dS6oqRLyE&JTm~.VS5ZItbdFK0czemu`gudyEg8)g?N~uZk)#NsPh;!Y`K<b^Y>+');
define('NONCE_SALT',       'xfrX+.hbgJL_tM]wG41h6@[NN=$ZVIOTT?Cjax7ow8JFnR0BH:):&{0I61sn75ao');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
