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
define( 'DB_NAME', 'u437348132_Cuh1j' );

/** Database username */
define( 'DB_USER', 'u437348132_zLOtQ' );

/** Database password */
define( 'DB_PASSWORD', 'wPJYTc3pe2' );

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
define( 'AUTH_KEY',          'LuwY{M <I==r-Cwbp1hgdV2<ra/;L* Qkp4j>bT~bnLfQwm?KAB~eRuSM<e7 _4k' );
define( 'SECURE_AUTH_KEY',   'U&ym:QB5ZHfN+.=0u@}D(Z8Vo*D4rYdk [H?7mohZZiPxDye1nY{:>s(p9`c[vVA' );
define( 'LOGGED_IN_KEY',     ']Yqis-flFA1B$AD?Us+*;)oC|I!wSTV(jt`df<epN?zuCutk7Wg,PctCy(rs{S7j' );
define( 'NONCE_KEY',         '8bR6KUD|Flo/Y[Bzv#W2h**LeEhGb<?!fo-lO`oR}F1CB)$$C#2n.X^j+d|Gc{w-' );
define( 'AUTH_SALT',         'R_yg1Y^[UkR;]O3<Xn, N]U?%#a0].rTd:}i07[:_Cxw0QsKajA3}4X.qr.D>2?!' );
define( 'SECURE_AUTH_SALT',  '7Leq%)cI<mRI,_P@aXg8N)ZV^|T$*r[p,`YG>]j#l,5Li^CJ% Wr?h-zEN+Cn#hV' );
define( 'LOGGED_IN_SALT',    'c<|e1n$zUWRw(^Sh;|<n]X,c(h@0$7}K|L;LNvL@61Vd.Wd@p6[HV2&f-Un1O(G7' );
define( 'NONCE_SALT',        'BW-tNaU)4bqD+2%[%A).`B$j2,hInX{OqunDT!Nx25,=:iOPz0G73,v8Wv}*ru.+' );
define( 'WP_CACHE_KEY_SALT', '7>YRDHPtKQyJZ3xis*Q$SUGN[b|Whnyr<d.]_@izOpCMv<$+vEn8i@D0|oZduXLW' );


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
