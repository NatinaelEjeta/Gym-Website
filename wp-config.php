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
define( 'DB_NAME', 'gym' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'l6#]3P0%!DnK?{)Y[>/WC%|={0`d}trQ?C?t%vy Fn)0o9?WTSl?xAnUc8-Q,$s$' );
define( 'SECURE_AUTH_KEY',  'p;N0K?}BHvGZwBWLor{;M.zWyq; Ae]ZH%5<5)<GRTf7;gbWQTyWqB3IY^?newSW' );
define( 'LOGGED_IN_KEY',    '}Zv!7laxbfF?K5[MjY}Miq.oixzDc6`,Tyx3^9c%c*N@t[`SQUQ2<+9>@yl21>Gc' );
define( 'NONCE_KEY',        '@._U7]:#Qc,yz3*}d4$?VLlgO>?}2m=iHe04i_|?Y~lS-Ref{vt9DiE1=m-k~x~D' );
define( 'AUTH_SALT',        'f:T;r8!6I(5_b;xge04U&atAwr;3H^o2ahqd2f&vtYD47#0&})qFe4- q/aR`0Wv' );
define( 'SECURE_AUTH_SALT', '+@?.TunLAr-tA5#(Q*b9 7>&Zy<EPJq0T9%DrLdVSZH~owM|S%cg_atYht9Fr-nZ' );
define( 'LOGGED_IN_SALT',   '.1!SB-eW!;}Ah,Rm4PmZTk]uL6&KPk{V+GaP`CN;aN?;NEFHAbCv E:]B6 nb$<^' );
define( 'NONCE_SALT',       'o~Vr*)2`:$2o.y:Dz`}L~(*.KSW+20litA$qT`J4<3+B~QcwK(]$#et9@F,N!gQz' );

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
