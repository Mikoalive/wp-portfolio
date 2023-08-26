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
define( 'DB_NAME', 'wp-portfolio_db' );

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
define( 'AUTH_KEY',         '.Z(/<nLVi[_Jza$2#qgvJiEO-*!,c-$`E? Gt*efSk_v=tFYjg0qP187I`rz}y;p' );
define( 'SECURE_AUTH_KEY',  'ni5OR{z`%Oz65!^NJa/4q;!tK<IX<<D+*I`o[Y]LRS(?/,) v_(H<m%%Xc5X0&TL' );
define( 'LOGGED_IN_KEY',    'kVR~X?0n5/:2YRPHog1ksq7K1*aZ`h^Z-?,tM3!Y1u1FDaMDvE&.-t!c}R^Fw&DH' );
define( 'NONCE_KEY',        '*,?VlSkF`io.:20kD.q^+0)H%U&MQ9[U[K`31p6ik^X&v`?XS+T]tf_l1Q}^1edg' );
define( 'AUTH_SALT',        '7ZJ5V8H!nc`rz]rv1cE:7PenMcuRB++hnsiMn! [^K)T$T(Qsw2X]OXr:_uWtpok' );
define( 'SECURE_AUTH_SALT', 'Oq[B2U>3s>4%iwCEc{mGES{!xF/fCAFq<!])`JdFQb5w!YcN<D%Mt-J1O)_[H4i`' );
define( 'LOGGED_IN_SALT',   'j#DhPcKd#e9KoF.{^7`|/PM?$/OqzrCCM=,ha(mwt$e//[Ac6u2q/~69fIm#g])h' );
define( 'NONCE_SALT',       '*yoy04ts7u=fKNR$Y{h:FURAx9h4@V]cKlw#.1re50|9i`F)4={f7_:~`(]GbWnD' );

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
