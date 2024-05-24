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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '2X&B7S8-*+wE`3)7k]),:BIj57?>$pg1ccONlDL(kusq::X4I6:y:m|8boX`!<Yi' );
define( 'SECURE_AUTH_KEY',  ',tXG)vG>uk$lVibpSb2tdHk/TgwJj1Q{}]#EnPk&KE,h(njRN6===/w5c{NqY!*7' );
define( 'LOGGED_IN_KEY',    ')`nzMNS&$6+2_~CV~`.VVK#hW9NNeiK4;WNV!t;ekHc:+|=4x[[jcaw2)[;F!drf' );
define( 'NONCE_KEY',        'N!*=aF?v?SPEKBVhGB{Mu=XU8*i[vkN33K:[FDS=W~w?7FfCP}(&o3qr4](8foa%' );
define( 'AUTH_SALT',        'Oj}3Lqkwz457oMplf52phfDQ@s!7KFa]qX)3<16Tn_`7^UIB3Wkzl7D,_[fK=;P3' );
define( 'SECURE_AUTH_SALT', '0(xzrHT.JOmrBM,n:9g: $>5Y5h<pD?I|n=H#i2]!]Cyn_;mM~dseQ:Q08}naa.~' );
define( 'LOGGED_IN_SALT',   'H)Q.l7<)EUAAiNXC}hQhEP?.yYs`7S|ZKU^3W,I][yleb62!H+k(;kbV8m5q3hX$' );
define( 'NONCE_SALT',       '9t}:Rnne-:.+9H`uCiYc~{71ni8@QNMw:B{,&d$fA(QRii%nHYB(SU`;abO!5ZpL' );

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
