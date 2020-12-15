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
define( 'DB_NAME', 'eShop' );

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
define( 'AUTH_KEY',         'CFtd/F K0 1&|G<:pT!.tLpFUCw;/9gzj9J1J%!ZoV}L-NT1j:s#Cz@M<-DeR#O_' );
define( 'SECURE_AUTH_KEY',  '#&;Le8z.`wa/W&]cp*B^zWR{wz%]Mm_7IhtibdbJNaz!+(O@(Nw#792gF5X|_n.V' );
define( 'LOGGED_IN_KEY',    'OM_n*lPM94QdJ>j:wrZ =G0,Ys}&>Cl_dykN[jyA0@7_g:O!YGCq#BTh >ddy~jd' );
define( 'NONCE_KEY',        'p7FJpCS_8YbNI#kx!!!uVK6x5^qr_V8WVLmFd&s.1:@cjtC[uyHrgNk2_h#`(sB1' );
define( 'AUTH_SALT',        's@gNIIlzl!z&xLjua!(k}p#8d@[+7ZLdCfauLV2KGA!neEBm0xYk!jqH&RF Jup9' );
define( 'SECURE_AUTH_SALT', '^662re)/NKz2m6714uoZDrNG(Z(K;bXx-zYbAE,Ol!j^+UY+,}Kg|<$P4>@=:@qr' );
define( 'LOGGED_IN_SALT',   'kyb;Bf:}A*1VfWYY49%AXLaiZ7}^QTc*dWLkh^)HP_05g*zyEY|XWq.z.hmR@%!M' );
define( 'NONCE_SALT',       'Z+6BA}6t)2YF>okZ9>B1zgQXEmgHT0X1j%!>`1<IQd8ZZ=y/Q6N5$y#8ZO2#@]Q|' );

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
