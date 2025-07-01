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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'TImXTu+Wp4L B%Ogn1s^=-n)y:^{+=*IDZy_(R$2XUO_`}]VoO1|S:T1zZ[Pk$H.' );
define( 'SECURE_AUTH_KEY',   'W;!`5)]N{[Hjld{RGb<y|:B7(Ud_vp|s1lRH;-n`#uhNEQBD/l#@[+t!VZr(zFpd' );
define( 'LOGGED_IN_KEY',     'TDJmTswHh+~JQ.@Xs2jINAZP;*D!^2d!6#LZf<Jgb;kB2m2J(rS)wL)RJ_hKT&:!' );
define( 'NONCE_KEY',         'yp|_58/BY5$iS}jU3H+f@x]L?^7YH2G,Qg6xW.%,TU|>YXy%u`X96SgJ{{2sgWGS' );
define( 'AUTH_SALT',         '[Q8KmF71:>65n,S=tJ?P@DnG->EAH]6`x1LwZMPf4*yWQ>C+N|MtIOX?h:J_nQ/(' );
define( 'SECURE_AUTH_SALT',  'TuJ gJLOk6he%<v%uM4f<zxs#0>Tj6UT;3e6h;co$=b%[64z_]81K.W~AcN#gcd/' );
define( 'LOGGED_IN_SALT',    'Z^%Sx)lfj-K+i~6Zz0&Ho*)):p.`+u03HYUzoR x sbchPTCI`^C3fK%E.z?Zq6G' );
define( 'NONCE_SALT',        'P!5L~0B9JcC.oKkO6YTbjAUK[]bBW1_omt)L`<88TgRAB.Qj^K,Po.pnp%yv8/4y' );
define( 'WP_CACHE_KEY_SALT', 'cArq9MjGLvg$_<q+wW^E];*-pZO;d,oEj=%]TL6O0^XS~Q3zD:y(fCC1g#-WCGO ' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
