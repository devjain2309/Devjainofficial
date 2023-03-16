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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<M(}*~3A4T4[=o7h!I.JjPd/)o[US)5Gs[IALn6u37) s|5)}:D#U2MV1/OtWPQ]' );
define( 'SECURE_AUTH_KEY',  'Br3wNsjNpwm#ZQ~?q,SjdY|tQLf6[0/R,=N6z6UJieBn<RCUgCbvGx*]R?=i7!QO' );
define( 'LOGGED_IN_KEY',    'AVu-w4:MK_8x>AT!,LBw*:B<ytcJDo/WLmP-f}6r?J5vvNzST+F|itmzVu9S<Jp0' );
define( 'NONCE_KEY',        '^j{G*m_F}m#*4uybt]auvUkoIkMY`rj_1v %(|7QwOjWSWaT&(B9&@jdMIulq[}h' );
define( 'AUTH_SALT',        '3<,%1>zFJ}wW=FcVA,KLH%z9ZF(_EW|bm;Xv!C~&`vDZ[c*.Ac&69JYN;Ta?X_pe' );
define( 'SECURE_AUTH_SALT', 'tD+MWq-FaDS*m 7_),5aa8SDS~D4O=fiM#n8-iMpjC<n=T4.&x7TG{Cj/At6m}P[' );
define( 'LOGGED_IN_SALT',   'HcUWSr&D_#(.*~FEZ&-sG&L2A^pS@wuM_T_JwvM^+i#z^=:{p?hy:5 YZ6xa}:g#' );
define( 'NONCE_SALT',       'hQQI<pa]4[UdGdFBN=PeH3-cn,pH5 lA8AkU/BH]60uq*1x8nGv?I3aVYQ]IhK0{' );

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
define('FS_METHOD','direct');

