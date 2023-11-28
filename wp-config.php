<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'u123962300_6CsUv' );

/** Database username */
define( 'DB_USER', 'u123962300_6P2ZK' );

/** Database password */
define( 'DB_PASSWORD', 'oqSE3hZknG' );

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
define( 'AUTH_KEY',          '%83Qn<8X~@3&V!m^.C0/dxEg}gW6xQ@v:Z$Hq;lM{twKJ 5]M-PJ~pA5hsNz)<;s' );
define( 'SECURE_AUTH_KEY',   'i~ K6Q6p^L[H{EU ;8X{d%~kG3Up~.@.lzc`5CE96j*|(Fy:$3>Npv9x:# {f!ib' );
define( 'LOGGED_IN_KEY',     ';0`rwwm%zj6P@jGKtM&{Dqu5|ged+G_hx.%`=B{T@jJBp`+(w@Jc:PU8<f@;M^KI' );
define( 'NONCE_KEY',         'Q`OfO9Dd8V+fxfEi_&[aX1()YYyD-Jz&<TCC3Yr[Ms gXFh3:nu2go]4(~t>SE7#' );
define( 'AUTH_SALT',         'vPp;Kv,gu`5Sb0dn,MLvv^*s-T(]/nK^z/JLhsV-Kjx#Qc f|%*?j0k39OFmVzry' );
define( 'SECURE_AUTH_SALT',  '1B!{S,Q-h_,zi-5hDZ/>Udm)3P%FeB{I68$+%+Z`yXU-J&X9uae]h?Hv=0p*#tE@' );
define( 'LOGGED_IN_SALT',    '/[g6MoI_CFu}X5.X^W9pgVvG!JP,8AjSciQV^Tpr_<3UV`Dcy5<Ejz0)>jN?KNLy' );
define( 'NONCE_SALT',        'XLM~xTxnI]8~V UEF;B(p^2(4==AGZOCN&q`7,^:TFh<qIi/B<jB9-6o%=?[2K9`' );
define( 'WP_CACHE_KEY_SALT', '2}JK%M#S3KYrG$+,ib!D4_@8-&tsW5oxje0mS}8*]QR3p9q6V1O+9J1{BT2nBJS%' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
