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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_gallery' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CNK@UF=kg-kt(DaVv:rG|7PB/vI)EQr~bq)ylVu#6%yvvP*|fD$*%=m=Ik0IE:Nk' );
define( 'SECURE_AUTH_KEY',  'yt[h7c4|r}F!Y.G2?b$:PdcM%6$ZN]E|Qjwn]g[m6Ul[M):(!zy0-NuIti]k`d]b' );
define( 'LOGGED_IN_KEY',    '[qsUVvy`D6eX^$)k%0I aP>aL YM b>+xBg2$ne`HuJB)yhDF{,b:$dWA#$dPPDw' );
define( 'NONCE_KEY',        '$,LX+Ml%D5.Z0:W<h-`)^N#oxglcO)&`!Zn.86i RJ:m9&.K > /V#O! iOEHP+k' );
define( 'AUTH_SALT',        '+9SdBqo*#=#NEtoFOREfxV-(-;~(,!zJ&zOR?8fzUjTaq|/n@ePG84z8nPR6-e.O' );
define( 'SECURE_AUTH_SALT', 'Izv, 0O/doD5%4U%=S$IyI5g#Wn=^asM.Desa}.sJ)-!1t_1zg~nxE!|.f/Z}<(m' );
define( 'LOGGED_IN_SALT',   ')r-YKaz52,vg] 6F]Bb*})#$Kz(N=PS?T[6mN[s=9u?vpxQKa;yQOc9{H->yCDll' );
define( 'NONCE_SALT',       'E|`]EENxWE:^K<uU{FHRt,e#UZafa7L Y6N:zO8uB_U?}[kL|Z-w,kL_Wu;-idc}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'my_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
