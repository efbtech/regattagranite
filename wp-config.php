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
define( 'DB_NAME', 'grn' );

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
define( 'AUTH_KEY',         'k[Ek{wU %2u0LtZ{?7_.mX]#mkGc`);j:=<22.(TMC/g9$ -7wE-z7$dd6+*.VQB' );
define( 'SECURE_AUTH_KEY',  'dsPbuK9~t+*=G-NIcPfxsTH0H%5e@3kivV5nW5~?XV0d3AEQN^v~>0JEDB5jWVpE' );
define( 'LOGGED_IN_KEY',    '] (-8[80nN0}qJBT%?F#1{CHFm^vwHhq`8PIGb@H& _64zD-N@/4KZRd~esM+b5]' );
define( 'NONCE_KEY',        'we-p_Jbwf51x f~IdcBdqxtx;gcHkZ u!qkNCJ5`j|@$]VDQlZ>UKV$)ncka+rP6' );
define( 'AUTH_SALT',        'J-1(|:oW-wHl.!ZM~~GX{?A,@I(pe sl;.bGruC(V+m>!uO3_7Pd`ui<PBfzcC%q' );
define( 'SECURE_AUTH_SALT', 'C!mIeIFo3W]NDXLuYnnfn5A2(Chl({Ep>fk2%!<^SE@4,A7of+[.^*I`57msJ@&B' );
define( 'LOGGED_IN_SALT',   'rX]qvIYoJ&]N!N=NU}< <{Vb#)@w;J$}p|2C&i)7Bwha#QbPz6q4(a<E?BlbwA^D' );
define( 'NONCE_SALT',       '^~0RRfPC&,T#T]+(7.4|#1vv0]a[3)9][g_g:MwmUAgqT-FKK^#ukG@m*+zamY($' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gr_';

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
