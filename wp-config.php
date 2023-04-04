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
define( 'DB_NAME', 'profissionaliza_rh' );

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
define( 'AUTH_KEY',         'pZ:k)~3R(m>A8psLbdrE}w8X+wdWW|$gME1c6v;+I#Owf`?dzAOdDQ|W{,DD1gp/' );
define( 'SECURE_AUTH_KEY',  '^{jf:-9jJ:/7t7MXO|]aV:aQ2pJ>ay&CVi30%vK>@PfTvVKW?!A[,mWc5>?H=i9}' );
define( 'LOGGED_IN_KEY',    ')wuM$&%pHITH*xNu9?m#^8*ugR{)?X+B_zD5y@_1S}oe1GWw}vT~O1E&5R^4GRRD' );
define( 'NONCE_KEY',        'NArAlYZh))]n`zV/i] /CBher_MIj2=c!l3HS~=zwG9lCba&v wI:{5AC?[vf9:b' );
define( 'AUTH_SALT',        'n2[NpprQ)N:UC{$naJVz9.<l|B:ECN;cH;v@=Sw2T)Nz+NB>t4]lBHk0X u>#aMw' );
define( 'SECURE_AUTH_SALT', 'h+&HAE>.I@D!HwS5,I-}YUvU0M[6eZ~=f4s b!:pl^<%)1hwa]ZZ`y)ADD_F;H+L' );
define( 'LOGGED_IN_SALT',   ':Kr:fJo}%B,K5>ABaaig%s.o5fUJaJH0a1!O_7)/nVd&R0!(w02x`TYq/>_gzKIU' );
define( 'NONCE_SALT',       '1rf7rr-fSxU=b?Q<Y#AFtSoRR+WaU*13jnAsB@fd/N~s]~_OXbCZ#@*=k]1QUfaz' );

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
