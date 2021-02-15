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
define( 'DB_NAME', 'ukulibot' );

/** MySQL database username */
define( 'DB_USER', 'ukulibot' );

/** MySQL database password */
define( 'DB_PASSWORD', '176hitler_' );

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
define( 'AUTH_KEY',         '`U1*4:I:[z4*_x2cPQ[_1IVt.XDO=a&G.o#:%_R[K{a?[hv#%|KKZ5_Dm>A=]5Si' );
define( 'SECURE_AUTH_KEY',  'USt(W3bdGeI`kOILb|jd%AYi:Hhwx l:Z*/eW~B+HuBg{Vx[&>t~Z#~g&:Pi#FHe' );
define( 'LOGGED_IN_KEY',    '9o+H?#6~UZHx6d!=oLs~*erKg>&dCd,nI{72U3v&`[3<lH]cP?JR&w-F?a(w;y_d' );
define( 'NONCE_KEY',        'meiYr}FpX:/9^HKgnDU/iA#Oo^%}`De,<[,6cX_6J7pc`ol%#j2R1rJvacC8/{+}' );
define( 'AUTH_SALT',        'nPxSb(>hi~?7bg<#jFLL7={S3$c%r6$BB5UMMNrI_o%!?tOpk%|@OX#%g$C(X~*H' );
define( 'SECURE_AUTH_SALT', 'S_f_a@4a|Y1.g?S`Ji+ XG_<pT!11CcG R{UCqG>OSMBEk~Ru1+*|h;v9lI]2l1L' );
define( 'LOGGED_IN_SALT',   '>c%Ol5Rk:M+u(]A#teC>eTkhA!Vlpjn(CaW5.T>NilxH+f5*Q^,!A;N85szxa{B<' );
define( 'NONCE_SALT',       '.X;LZ<m/`ht#s*oT|xn%EVGJNLobPlVhxab5f.}aEZ/#e,-`U/0Xt!wX/|)>gtd#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
