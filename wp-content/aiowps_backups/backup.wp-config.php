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
define( 'DB_NAME', 'zhwoocommerce' );

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
define( 'AUTH_KEY',         'TugI5i-[.=G3Fk,ug{GbD)*a*3{r9&^(8l;oq#7`$glbpcbtxR))K^Oe*)F38$>0' );
define( 'SECURE_AUTH_KEY',  '13ql(b]c;[>ra]Bb$JD@`IM=BugZ/94<J3`b489lNy);h]|&B0QIW}&Ii.awCT@`' );
define( 'LOGGED_IN_KEY',    'jt~w}N.b}l.r#CT~cXxZ/`kpl8d(u&dj2XeC%22HV#K-*SF$dQC3=#UY8+q&N@Pl' );
define( 'NONCE_KEY',        '%KXo2#(A0UIihL&r1=9zsc$OBMlSn<2h9SJE&7q(_/r3*o(m[ibOZ!L0Bq|/Dy]Z' );
define( 'AUTH_SALT',        'H21=+`J!V~j*w] :L%w=k?.>S].:IO]OpC0pVA]`Sj9_pp{P2[//cvD{=Bh7hk]p' );
define( 'SECURE_AUTH_SALT', 'Tepi[bo;s*wCtA,#[7UL:NC-%qLs]8z=~mtNQEK.!;o <n*6D09rSc{3iQ5,~u.c' );
define( 'LOGGED_IN_SALT',   '?v(^/ZoS!/19ptXWhDBz{Ofvt5_@p}#p`}ftuI_MzFNck37apce!6x_.+,o#?+& ' );
define( 'NONCE_SALT',       'f9]Dw22i#D6R0`!6+5>vX]d!{Rl$!4VB#?)>r,|r45cd[V%!lQ<1V-=le!5;bU,}' );

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
