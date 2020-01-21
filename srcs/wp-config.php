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
define( 'AUTH_KEY',         'Z+XUS=vzW>W?KW<!C}iW( d@{=42VOmhGj=u~-phY{ A2TVx _p#9L_fGA5h#`Y|' );
define( 'SECURE_AUTH_KEY',  '4H3FP9|MS-b!gC=_@33rB/$JrkqAs`OBAfz>(l1hDH2yt3+QCyj@vRk5([?IJ9Uu' );
define( 'LOGGED_IN_KEY',    'Q{;Dy!V$Gjyo=}(c}.NY F,>[L/JcXAQ<[=h*&]T5S(:w|oO@1<uaSr2o64]|ZlK' );
define( 'NONCE_KEY',        '>(om28W;BfBTfVlJhutw^87x4=v!@0G|C&/Of^vo}3:vEGgV.9DcMYEZK{)UB!e1' );
define( 'AUTH_SALT',        '|;i1|Yr>59Oem5uIcI1Y@}Y;bKjW}^JDxnm@$zRu2u[ E{^&?O_;*^t$O:9t&UL_' );
define( 'SECURE_AUTH_SALT', 'K2U$P|ZW|Qd%L2iy^)1<^;s:O/V.9v_A6Pp*e`)rO,hAdwsyPVNJ~*zK;_</!#-t' );
define( 'LOGGED_IN_SALT',   'aqG_6AXsF@(34_Q`4b|AE#]2,.{kK5M3ym]ns6KayEg1urY],wRcu Ia{QbCDC<f' );
define( 'NONCE_SALT',       ',2CNABICh<@R?-FR4W>(O!d?p-<1.^fmnig(AY}{n;IfO6Mh FApP5dK0936puZ ' );

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
