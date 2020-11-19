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
define( 'DB_NAME', 'online_store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5vBW3|:dZ#Y1gV4,V+^XV 4.&]^Zkt7T*:3J3R>6-.t]EaODuka-X_0BnMBdEt-t' );
define( 'SECURE_AUTH_KEY',  'qN4X%zjPWBdU*$;TSP/nMW$@,[&,ax=3 hwPHxY.4bmn+A_Xl(r7`c4P;8e9dR|z' );
define( 'LOGGED_IN_KEY',    'wC:!_^oMx{otdubMh72=/^eQTG$^M(?b]J_PAsqHD%l1seC#&8-(IS2Ay3M&Zp8R' );
define( 'NONCE_KEY',        'oNZPfOu/O`SmU-q&x{Bwt;6 p7V&ihoD_G(q?x>=fw*i3@q)!#97%]!Sk)`xj8%p' );
define( 'AUTH_SALT',        'FX^|@tn9n+w0soDjPP|,ZN$PGQ/MA]!.2wrt*F#QZg7#onO8wm.<i*o=zKu4}O%,' );
define( 'SECURE_AUTH_SALT', '/rzWpkf5q4FN73v_:w1n8p/Cd:h:_VAEJC {4_WK.U:{Nn7fx}R5wPqIq]>YV_Br' );
define( 'LOGGED_IN_SALT',   'XkH^{Z)^:i7H{$6` 7fP%34f{Ybr>d}z$g!:j;jsbmaa0w[9y:o&*:JDf-fWW>rM' );
define( 'NONCE_SALT',       't2NS=?ke2[&Z P>`E>O*qc?zV(o<4`vkJ;8y3T; j(Z&e;c$5j-^E4js[{vC5Q 1' );

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
