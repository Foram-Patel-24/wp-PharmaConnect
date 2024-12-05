<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'pharmaconnect' );

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
define( 'AUTH_KEY',         'k]Vf0_0K(S,ql[>:`l6SntHJH>Fh$#1E}jv:w[]X;bHHw_(AZnd$QsL>X_7dnUb}' );
define( 'SECURE_AUTH_KEY',  '30&UUI&$hC4km=IExzBL.iS*2ciymt%[-Xahlv/xwdunIJ5YnL?;Vu$nEDxwsV->' );
define( 'LOGGED_IN_KEY',    'dhS=47j)XuT6|~268$FQ.ee4E:y%<Ei3DX eq4!o>K<%yw ;@LON9f1S[T~;gzrv' );
define( 'NONCE_KEY',        'KNbDGZS[yZ_5|9bZbua+dP,qR]sD>l#Dku_DTeyy{WiE4<l eHv=DKwczT{PVwyS' );
define( 'AUTH_SALT',        '@QcAa[yf~<;6a %Gg,ZLq[M9Ylu@gv8&j9za,v-9JQD%wb_>N]XI_qx5..nuKbe5' );
define( 'SECURE_AUTH_SALT', 'PFxBUzL_@M[Ic(YPH&#YF_$FyXcR6h|W*HY<8e)k9>]|ZC5*;-_r.NdqGwJYOm&w' );
define( 'LOGGED_IN_SALT',   'dU`%Kb>Qs{Q4IS_S9tJQ?<hU~20te~5u1fIVIfT#QM{qT48(%G+WF0le=|(?y$lx' );
define( 'NONCE_SALT',       '*jnd>Wrz%O;7owy!$ja^wM+(BJd5ra^=IXe)qq,l6GcoKY$rAK _omt[ZG;i^l`E' );

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
