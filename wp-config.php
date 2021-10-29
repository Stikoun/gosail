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
define( 'DB_NAME', 'gosail' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Hm*rAwaqMK,Qesr|)fP,<iBFH65sK?J#IFmSGd,h/ur7:kb_SeGxQ.D5aAW{$Z(*' );
define( 'SECURE_AUTH_KEY',  '&l%qj@]E;lu{TWB9|:?h]y-w *bDdvG~o~()1)vH2z:{o->nEN(Q!.:C]4NxJ.D8' );
define( 'LOGGED_IN_KEY',    '%4E9s3J`L2`sYkPhga^F?S1d(qpTm]YkxZ.bu2/Pa!?zm7AzX,}!Mi>LBQ$E}GVn' );
define( 'NONCE_KEY',        'zz]GWUI54ZYetSwx|K?b5y^3Ysvv+Wrzbr2+<nZP)VtUJ%a:lIFv/rwSHA<d-[_0' );
define( 'AUTH_SALT',        'y*NYh7lZ7z&6g$rz}og-Z&Rq(G^E}NTi^SI}(v[HxYuUQ8u54%Tihf;M.gq3W?y>' );
define( 'SECURE_AUTH_SALT', 'x-:r+zbne9KhL:wFW{`6.Fa]:Tu78HQc>![Jfpf_qrL:a8}f8G3Row#PS6~.(IY4' );
define( 'LOGGED_IN_SALT',   '#dH0yx*n]On/8FIXahcq$[`{k]?j-2C;%}Oz`E>k!}n)=}_wKX!X_.oGrmsmNWeA' );
define( 'NONCE_SALT',       ' _wPh4C8<Mt>2AWp6-tV6p1s,g<fWo3zP-bUkb&_< f}$-6@9CioJ}|&]:fNKq4e' );

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

define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", "admin");
define("FTP_PASS", "tmYCdPOpMyPi*2VuxQ");

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
