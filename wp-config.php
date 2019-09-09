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
define( 'DB_NAME', 'camila-web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '72xW^Jb&eH4E7D2ARNrq6<OY>=*I(tcv,S{,3E2.K4(iS 0&LKj*l.(8@{ex~{yH' );
define( 'SECURE_AUTH_KEY',  'du72v{E3J`fLT&#?GK]EM2H3essyCTIQTuCgR-9Y?O_ZJZZ:{C%x-pJQo8=;t(n#' );
define( 'LOGGED_IN_KEY',    'EO_2(iIjg,BQX#)zp:Pc}0baq0a$;YWsoGD`-J}9O~R`4$?EV/?uWEPFVyjpKt&m' );
define( 'NONCE_KEY',        '/u>f:>ya!oDSXWJ2MFMT>SQOC82_n[j97;kmx?$8G5%4*RG| ;jo`0UlS$40GiVK' );
define( 'AUTH_SALT',        '3UKKUj_6Y7-KIQIzO]rYeOn{07E)1}SsM8zvcb{XQ{#M9R[^!g3u6*Y;r)6 l;Yv' );
define( 'SECURE_AUTH_SALT', 'p^Vort.8hmx~2.c-oAuk_|j{DO~8*tPFo3lk<jk,*Is$4CP|O?t2AFK^4&/wp0FN' );
define( 'LOGGED_IN_SALT',   ']Ux^^Vup$*r9E5Y`(:)DaRRW;QO[#svd_I, .g.%Vb/@M)c~j-zKI[trPRB85{&U' );
define( 'NONCE_SALT',       'Z0x?3Gs:R>j~:IZrVAjv[cS{PO( $QWM2C0H3jviF0PR{QPTIQ{R10|8N5D6RItX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dl_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
