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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word123' );

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
define( 'AUTH_KEY',         'Kp_^-E4[q,*$_:#2%<LO`ZxWMxKN|afZjuPp! m9j`010Aj^IYI(qA#m.sCQehW ' );
define( 'SECURE_AUTH_KEY',  '+0BZ]4p@6-[,@El)qb&%!As_~sob78ek^(]l%3FQg HJ0a3.I/c/2TsDyOiij9kp' );
define( 'LOGGED_IN_KEY',    '}hmGP,er!(F.g%5MS17&ZQN^%emT+),s]L CRFL2<A;S<7lAT2KKUnfS|OcqFyVA' );
define( 'NONCE_KEY',        'kTR=GGM(o8bSvwy;Pd#[]yOH!h;g9Z%C35wV67hb~Vzy:8%$bW_K ~=DI1){;B|[' );
define( 'AUTH_SALT',        '{R%_-yB}w}t!sEAjD}RP:>1[Y#RD#T~xre &!XuC`(~&!ERGTLs,Fh%joAc:lV{*' );
define( 'SECURE_AUTH_SALT', '3*y@CdRiucqVdQ+Z:Q`};9n#0$h`RqKM&,l%,H?Sd2wa+V|*3agV0liA?0ye/*Y$' );
define( 'LOGGED_IN_SALT',   ']YYihW~(N/{9H/iG0V3D#,+nU[7) 470V?YU|po6~8%]w) imE4DB-3=*Rb^2$P.' );
define( 'NONCE_SALT',       '-!woK5q2} Rb~:Z}oRvte[}O-I7L5HcI^pY--eEYQv[IrV:>bN:kf+8nHV>g>N)o' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
