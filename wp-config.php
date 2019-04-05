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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\www\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'bC{@d%s%Tu6c11rRLh<(B8vp%Oi#dH94`oMCJ2BC1(^s^4U34%Uek0S]38rFTgbI' );
define( 'SECURE_AUTH_KEY',  '~I`j`GD)04pV9dkN#0wie ?Z{R2F!gZZfT`KX$J0=]jMO]xwbl.{Hif(Y`hOQ T<' );
define( 'LOGGED_IN_KEY',    '=1oS,RwCnRC?_*.WMB88ABRLvNVEx:34ik%,Z4U7pT&0*Js?]GP~Y]u/aVo{7Qw}' );
define( 'NONCE_KEY',        'Kn<%3~(:``F 8s+pxTCha6vgu+F5[44tZ7$<Jk0h::{fVe7pAsHgLW<a*G{+NJl_' );
define( 'AUTH_SALT',        'boUta+~DHDr:pC[aKGu9{N&+YEM]*7ah<fqmoncOPS->B,KBnV^cM5z--rWZB@FG' );
define( 'SECURE_AUTH_SALT', 'DoJ.*=_:Neub[D&Eu]R]FYM#&#H1},C_7f}E639pA@d0+h>vVE9[eF~DhJ[OH@ #' );
define( 'LOGGED_IN_SALT',   'lf[vb_jxR-;~mN20`E7hwrKezo.}WqH`6*~6,w$HP!&z-#|2#r*T3 94jKH,~~=A' );
define( 'NONCE_SALT',       'F_@q2T$gh6ivj8)mN^.*1&OW[|D#wer.<8[a;-A[TjdarEYRN1[,~u*+AE*Iny6W' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
