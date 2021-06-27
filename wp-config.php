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
define( 'DB_NAME', 'technicalplanets' );

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
define( 'AUTH_KEY',         '4D;O[gj|Nb]ZdUOKPcqS3G~8U^+T,U<=[5<<3hM&F?_f$NPk%fKd?t5ao$2%dMGz' );
define( 'SECURE_AUTH_KEY',  ';0H(|@N^2Y,c`WdG 7N6pwgUhzj4uh,dC_fHmudZv^E[fwaeLz,1$NM<Ay<Z4xs*' );
define( 'LOGGED_IN_KEY',    'yor4vj6EL{a{^C^V9ybbjSZyL/oh:]mi>o%C~rCy}Zbx?A};u_e|%[NeJ9ij5Jin' );
define( 'NONCE_KEY',        'loruI/^(:CvILEgM4*A0+JBg>h|-_)wpw+4Z*rR(1^NqI3)B#f`KQ?2x%!Hm?t?s' );
define( 'AUTH_SALT',        '[&.9*]C=tvE(gk zEOy{XX2,7QG:qYg=F#,)J1n-Bo#?TSr,Ug7~}W4|}BRVX/F5' );
define( 'SECURE_AUTH_SALT', 'u6>G4k-[0aTl:0 5.9G=?|&*d#d*XrlsRQoE[7WbHXkS9V-?9C{m{_ZK4|kn>m>5' );
define( 'LOGGED_IN_SALT',   '1JLw(fk 7TJ[I*D{ ^@Hi9@Ju82/YXRy#`7kIh/wW},3#xr0U7feHIYEva#YO_yU' );
define( 'NONCE_SALT',       '*^Jp{]+OzXU,uu;*=~6:($AmLbx_J%6^qeYND5fEo>W5boez+@sn)a /5P96rWza' );

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
