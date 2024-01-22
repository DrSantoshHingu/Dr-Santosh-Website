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
define( 'AUTH_KEY',         'h4SeOBu2&h=`CdXZz^<D^*/:%o&VABNR|)S*U|gV;qkAELAafQ?8XU9+9Vq:azzy' );
define( 'SECURE_AUTH_KEY',  'PWGI3UbFZq]24|m*T+3~[h6ak-nA/8^D~7ur$12zebveL^vw?dBA`4g :<f+;9zW' );
define( 'LOGGED_IN_KEY',    'oS#+(qZ@d`Qmg=FS._zL&Ur#-*;*#6R#7zPB[;u+^DmuOTe4&4%:!63C:A9QNQ%~' );
define( 'NONCE_KEY',        '[}-h,Pd|_}WJ3 A9)jGtJO|B@gwc`m.^{jDR{;k=(cH_CojW|}p/,@;T#bh/L~A~' );
define( 'AUTH_SALT',        ')^EfxI(2$K.9D-x}+l=~M>B=hVcN9}jg@p57;6e7-T~U%&FPl4#[j]5d1=$bH4fe' );
define( 'SECURE_AUTH_SALT', 'JkmtBfI<LL&Wp*Rer%T5n.1!AaSwbg*GYs-J@D!Ei N#G,Y+AgIm82^#D|Tm^(+J' );
define( 'LOGGED_IN_SALT',   'xQvSGu9Kv$w_Fo/g&4-1VUP[?J(,9OI=X{q8O{ :Ks[-Mdon?8$0k_DYj(j341dD' );
define( 'NONCE_SALT',       'dS@TEt8c&5k(/vBDUFF5~Z|@nuW#:zDE&/_`H_o,sE^[3y|h+,^IV>sk.tZ1#.Wd' );

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
