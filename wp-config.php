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
define( 'DB_NAME', 'wordpress2020' );

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
define( 'AUTH_KEY',         'z[=/:bb3 gcsts)y|V+1Irn-E$hR|)H7j#ZInY`Jn>%_x`KGsV}Uha T*;q5Ss!}' );
define( 'SECURE_AUTH_KEY',  '!FCOfgSK4vSw4Pq6M[Y=6&||I@qDP>,Aia(XS62.&MpsF Pf+?k3b@}.s3GxKo9}' );
define( 'LOGGED_IN_KEY',    'mY-K$vNeBX:/6sxKtJmj4s_-+@;:!cdNVj@d;HBe-kK^XFww#M+$f}(,{;cV}W[V' );
define( 'NONCE_KEY',        'Ks|Pwm=Mic(v@)<9yLDjQ`x~YjsR2$&,r6RM@kboG}&2j*ud6RKL?,WA0YU`D3{P' );
define( 'AUTH_SALT',        'RbUNsQ5UhacpQ&.J]jys1{@Jkip*>-EH`u`EQcp$c`i;t9A7J>q[}T]IV?r?QNEe' );
define( 'SECURE_AUTH_SALT', 'h4C9FaOsNP9tL/UpRC OrL|faA)9W3X!/{DQ?kZ%@NOb3R3)5pmRFRE#>zY[|Q</' );
define( 'LOGGED_IN_SALT',   '/ZTOZf2u07PUX7Gr{mh36Id<|^/<a(,8FUhi UE-]o{[Aqcmv<tbveDa+M%.ST5e' );
define( 'NONCE_SALT',       '/V~XfW=QQB oG=^u3C$+zcjfD=hw/4EgN$~Og(Jt.KIJmCetSV+`oXmy?te!pS*_' );

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

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
