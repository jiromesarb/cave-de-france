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
define( 'DB_NAME', 'wordpress_sample' );

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
define( 'AUTH_KEY',         'fCWp,L4wQP&r$pL27q=;[~)-5KUW?UEq#e0D/oj~m:0KU@Nq47^8nO%X5MjDU~AK' );
define( 'SECURE_AUTH_KEY',  '.jPk=_vv/m X[^gzm Klt7 $5D/crywAxieUb^:%l_4DC>J L+e,lS]S(P0TgWv:' );
define( 'LOGGED_IN_KEY',    '@b] $5A[oc9,b]]pzr JH>~|Ee{D}+Ks6D**Zj.g#}E5}&w :Rr0mLzhfVc2eD;k' );
define( 'NONCE_KEY',        'VCaMi>5YzbJuj*xoL8B6;Wd;-p+6SOmu?sSA?SD#SM8#Rt4`gXfG(%eAzXgSBf<,' );
define( 'AUTH_SALT',        'J:!o B3=Ne[OXIRiuD=g/3RJU2Hl{nCG^hH[pZ3LS9W?[s`bk0o^A-fh{pTV>! Z' );
define( 'SECURE_AUTH_SALT', 'arh0vbuwS&rEfi?ovyoe8hQ]+:uwMf?Jq(8O.su7=+(HTjx/ge_Qz({pb|1|a$4d' );
define( 'LOGGED_IN_SALT',   'igyB-gWQLc[W@cHdIYRtIq>DX)!oz:~a{d9V-m&pn.lwxx%fHy$v(}Z(U~7/]O3]' );
define( 'NONCE_SALT',       '(t.6*n0jUK*h=:s:.LreQ4]b*Q{^?e]8L@oLrg5-gKe4yFksb 0l+_1M7+us3=!N' );

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
