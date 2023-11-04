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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word_db' );

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
define( 'AUTH_KEY',         'XEn2tF8gdYz&QXP+3T&O%0sN6ru<[h9zm=6^T;W<yFy@%0aKh#$~/y^aO4bS{,2 ' );
define( 'SECURE_AUTH_KEY',  '%y^_f<pMYsW8C!?;j}t-@<myC{/FihFSWZ0gIT55Sj.lhB3sh#*AeY358_?=>h4M' );
define( 'LOGGED_IN_KEY',    ',%F8uA>@Vma}akp+_gMe1oc&n+y|B}!.W$rWu3Tr~+;82br>[|;v7&Pxg)z2%~$v' );
define( 'NONCE_KEY',        '7b@z.](C_qo4WZ}[Lx$?Wb%Ymne4^>1+]G(hE/Ra3{9#}oDNkb(4s4-V#tVLYOX1' );
define( 'AUTH_SALT',        '&D>&O7!BuQ$f T7M=a/VEj@SO?>Ev8JvYz(JcQm}4yA!4^5{hO{Am_?[bEtPs86e' );
define( 'SECURE_AUTH_SALT', 'NUr}U@yrGTV-jI:BjrO-1TkR]7s%y<azST!*XshjH_SQ}J^[8$dO#Y>vta{~nH6r' );
define( 'LOGGED_IN_SALT',   'NiRlart)4sfF9rGSU=^YX_x5=FsdE=I[[ZBVzLA6[lT8^`wpM:hjie<_oN&Fx|1D' );
define( 'NONCE_SALT',       'iRbQkMbneEEGZ1F7uZjyX1QZ[|+T/,xECVK_}QL,kgE6^]B2vQup[=H;mF>f Ql&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
