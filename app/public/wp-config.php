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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '0(aUD#+xq`t.W|Ebx]$&63VS31_Q6U|_[z{-Du?7Beyj}*B*4sC6i`{IE*xy%Lcl' );
define( 'SECURE_AUTH_KEY',   'XW;6vu P6sa+d-m*&OYw($*xr}K;&4n]$rT{9$s/B)fBlONp5|3Rg&`b~QYsosTq' );
define( 'LOGGED_IN_KEY',     '0nj.1E$FsWh%83x&<YydrX@Zrs2{wdkBHJyTRhq~3 t@qiaW*H/7zM-gC(=W6r{j' );
define( 'NONCE_KEY',         '&oGeXOD_bHVhWwt@wBTj1gy9n.QWfHB,ky`6>a|TJAAt|ZleZ@zfI9!-d5d7k}81' );
define( 'AUTH_SALT',         ':!V=96EnvI5E]Vtp~xgK`Us}SKB2=S ;D)++cN706^[Ygr^B]H!%QmF;+PV{TvJ`' );
define( 'SECURE_AUTH_SALT',  'LDN[xl{gWx$Vo)f_%Fb^gCib8,d26jjh}6)Zg>Y_iKy!K{-~.TMMDbX39$Yo9KN0' );
define( 'LOGGED_IN_SALT',    'iBb*7[v%v8b#4f!I2Quz=[W+$J$#DbrpD$O:6.Cq%>AgI*xg]p;1on.Q!`~1g-(M' );
define( 'NONCE_SALT',        'TWD`<.u;)dEji?Hfo@BitIk^v/4]DipEI.I+&a?t%~%~ gQu(N@:kn0A>Yf7EJad' );
define( 'WP_CACHE_KEY_SALT', '`+~W hn~oY}44bK!hMG6el+e*Pm&[T=i(pEeY```/pp%-6&uw,)hvFqQV#zqp-4:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
