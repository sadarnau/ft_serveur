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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '<Lu?@Fp@Z-^fRC/x`?toh}T$I~TlPJ*<42zQkjP ^Soc#c$;+*K-[Xb1o{~n?d%Z' );
define( 'SECURE_AUTH_KEY',  'JDT3{1<>ly#61US&cJ$h)pwRLCEBO$1;`9DTU]MlrsROs:+zg)RQE|uA/(s;tMv.' );
define( 'LOGGED_IN_KEY',    '#;%M9J&2WCBS%m@3IvIUd=O|F#*}Zx&--0V$zMZ*n.QB~#1iieILjk]31A::&tet' );
define( 'NONCE_KEY',        '%gF!Feju4mXOr,p-xDTNyb<Fda_DB`, Q>WaPlsxQo3Pdh4!L3ifFr@O*}f~F}{d' );
define( 'AUTH_SALT',        'BQZ5RkV,E5+V!D9txQ~+Jjj./ap/Ty^&hh~A1%x#bW~to_=<)Gp05SbLzcIHn8y+' );
define( 'SECURE_AUTH_SALT', '[ibv@Mev_&1Lz;xO](V$YMbt<4xFAs#FMnVl}OC~:rk-S1Q73/}3~F*[$R|BKqk}' );
define( 'LOGGED_IN_SALT',   '[Ei}F7Dd[r2dFS]R.<*>^,}W^XkZGee{bGV0Z|CvXszAWhd_=]R<16#Yfvrv f5a' );
define( 'NONCE_SALT',       '4}.[cWSCQ[6Y(C<8n#B%wx^%!*efX*Npt/N{HR>]1$[eP=pb|DW?,7IZoEWj9SOm' );

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
