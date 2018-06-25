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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/www/locomotion/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'locomotion' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-SDk&Od-1,#.t<8`xDR#lXwq6m_M|+^IeU~g0IH!0F?!Rd&,mupIT,PSMprn/|FD' );
define( 'SECURE_AUTH_KEY',  'dP};uo.L$9->!=IMawEf_6U3KO+YJsH&4nuwg%kHffLZY}-LIM<d|XJN?o<N7Y*?' );
define( 'LOGGED_IN_KEY',    'BFu^d4=a9OrG@2S)L &KbJx%u;2VJxj^I8q%=}tT47QqS10AXe1zSbw9u,GmQNV3' );
define( 'NONCE_KEY',        'l+O0;SxhuN)?BX_<>_8:B.BQ7,[AX&~YK+f(wLrbW|aG]2J62Xy9M,1Ici_85}>Q' );
define( 'AUTH_SALT',        '1n]8~+?EWe^:*{(L4mqD%Ve_`Koz+c0(o4tD)qqJY#_gkPBL)$[Z&3* J$t}-U7%' );
define( 'SECURE_AUTH_SALT', '$3{k{8qxo<>XmOIW:{(5}0gBkRn6DCB3uyEx@~=a^g>f~-mmf.rNfDg13?9kuh<S' );
define( 'LOGGED_IN_SALT',   'z0sC#s ;iSZr.UbH2qH2?4^9%R_g:z_wr:% t7Of`Eb{CM3:4=XcogxD]TCO-fvn' );
define( 'NONCE_SALT',       '$Y3CaSb?vH g_a9=5Qu,B>?.hyij6~pfZE$G.T6G)?UPi6!Q?KKP>6n=B``8C^l~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
