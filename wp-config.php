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
define( 'DB_NAME', 'techamica' );

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
define( 'AUTH_KEY',         'fIUg,IFQl,Ne/]#|2{XJKH ?zL+g[WQVg&s1Mk{dv1`}4Vf{,9sf,#`t8;@Cjx:0' );
define( 'SECURE_AUTH_KEY',  '^C]lR);qm=b3/n7,gC_.BS|i~)L[R|Ml]fy$cvF`GHqIV5%(.m%]8tV%Ie8gHOLg' );
define( 'LOGGED_IN_KEY',    '9G7B/NfIfxlJYO1$o?#rY3bU8Axp6fD?.)}@m.i1i(g+9;##C%9hdq=3i>eHf~gm' );
define( 'NONCE_KEY',        'JG?McOP~qzPmKZ[}b&GqMrABCuFDZwZxp``YKUkn.qB.jk3yenC6xORAg^rAG8do' );
define( 'AUTH_SALT',        'H|M-wXh|goYi^+BR]((VcU0ifoMj}ca`T,0b=k/uPM*y3nL;E?&`9)c=j-dwxyF?' );
define( 'SECURE_AUTH_SALT', '-T[aGSE1>Y<yA3 tVeH[tFJj^iO*21-nwmL]zmO%d_Jnv`O~.2/@t=H_7:Vu`:yc' );
define( 'LOGGED_IN_SALT',   'SPC}-<KUX?%kHK]frp}12k499v RVRqo+F~T^ehsp?AU>j`Y2RGr-bCwJ3DX/F1R' );
define( 'NONCE_SALT',       'L+N*H|);QN&C^f4@zM+{XPk}ld7xY/4X}@_6%qu^tA&;Hko0^#]9SrS?[II{kD}z' );

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
