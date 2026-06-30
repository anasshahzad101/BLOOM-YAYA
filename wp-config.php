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
define( 'DB_NAME', 'u793100010_Ssfha' );

/** Database username */
define( 'DB_USER', 'u793100010_S9JsM' );

/** Database password */
define( 'DB_PASSWORD', 'csrCVhwpKP' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          ')M(fy4+Grk8IKw8xtJU$Te 6f!Q7+(v1h0wFwt?njura1y6zA1[#*@2!|TQTmcOI' );
define( 'SECURE_AUTH_KEY',   '?fnvE^9R6#U1/F:`2*SMpotUgw{V9#HiDN3X_^M>IzuMH9{VEWEx,% FSs^<VIN}' );
define( 'LOGGED_IN_KEY',     '-eF#c:w_>eB3AV#[*[u}1M#kY}S|(z7Ey7ft~+a~PeRPF^Rc}$#7o`n>Zs,QK+|$' );
define( 'NONCE_KEY',         '$a3*~L9bv]R5O>:Df:/5z{4[[fH;oK8YcYXqkiRp`W&)1Y>gd)|0)Y9j+vdprUpI' );
define( 'AUTH_SALT',         'zBG)n:Oo2?e;9q1H]cdT!UA[OsrmHs!l=y7rDeb.7kOXWrrS:1Kxe]M6GrV7apv.' );
define( 'SECURE_AUTH_SALT',  '=-l/{1gw|ZG7&CH^-3)JX9/,rJ?O)O=^u?BpWXYTygBR:y0b_S>fme!q%kQpoFI*' );
define( 'LOGGED_IN_SALT',    '{TUF$1esi&7U=8~PL zrblAVzd$GU(nJ3|14pc4noX0dV@{4!rj2]wQcp6M <M?Y' );
define( 'NONCE_SALT',        'fH 2c3PHd^!`<if<FK /br0i)MvqS.ftO`0t}EGxBkrIs,=&[3t#TDshE|Ds3P<G' );
define( 'WP_CACHE_KEY_SALT', ']O>NO4s[)xR PiFOjoF9SFAM.uC;7fX9+DTf_,&=vQaGGM )v8EEf5*0YzsgR>L3' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'aed579f58b4327bf590f8820020b0610' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
