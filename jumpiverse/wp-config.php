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
define( 'DB_NAME', 'jumpiverse' );

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
define( 'AUTH_KEY',         'sq8*#BK9uusbMxF4/|EGJ9J.+h/Cx%?$GH+7z{ZWC8-5fNUlpt/R[$$QO,Z)&`)/' );
define( 'SECURE_AUTH_KEY',  '#Wj*3}Me*qX#J[JOVTSIT-ax!8>9xGErjh&5j]XPja$:w20b~_Xm~*w,#fd}-J.z' );
define( 'LOGGED_IN_KEY',    '+W_V*)bK!yv9f`;cx$5dW<TOj]9)FEA,dqvCAk%}iwn`vN&7h0,2J3c00{l5m;C%' );
define( 'NONCE_KEY',        'DS&Y.$gJuHR_H;bGeW@aUbnp*$xctSRcBDsG`0X;*{ysE-XXk.Q3G;[gpv5[5-w5' );
define( 'AUTH_SALT',        ':tih*;{dcn^1,;T*)D`qnn9Jz2^;OIa7qS{gUpm47a%0p)q1 9a6e%:Cx3GSRvP*' );
define( 'SECURE_AUTH_SALT', 'Ujy[>$.3YL9tC+(@Fw>ZfE1k!pibm.,q~^?S|N#p.M_-8`f<soMj ro:3XL!.KoH' );
define( 'LOGGED_IN_SALT',   '.toz0_/bz;_cMmwOtEkVfyP}TwV[#GM4hXYkIz*WeS?H|NN.LC1:d#U6iXjfhRgt' );
define( 'NONCE_SALT',       'yifN.HzP+5XKfo](yH/UrH#Q4TNE^KwLN7a4E&v]aU.#j(ne #u7T0Y8pQE5N3$H' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
