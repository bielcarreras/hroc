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
define( 'DB_NAME', 'hroctest' );

/** MySQL database username */
define( 'DB_USER', 'hrocuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hrocpassword' );

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
define( 'AUTH_KEY',         'rH2<Dpb2P&Eurj6X9taNtb~tl]SxAZ|*41/#2*o7)$NrWP@SL4%n?Jg+yiax8tCf' );
define( 'SECURE_AUTH_KEY',  '$JO&rKW[)xqV&1IY`xZ (Hz]az KNeoY2vA2bnkJf@LVZn.O%(em{*^JMZ8i~K{w' );
define( 'LOGGED_IN_KEY',    'O?O5fug#;oz8/rmM7BFm((u2:4ar9kFD0!JyQu`)^4*3tq/=B{+Yr)xQ.N|Pd&yP' );
define( 'NONCE_KEY',        ':|`t]BqGIw~FQH`uKG&fDEQqVrMjr{w52.[upiWP1FLT0~[ql;XC.w0dH5}Y$N%s' );
define( 'AUTH_SALT',        'UHR[:!Csi[&5>ahxuzl>UC6htFYy,,bp&#|}#w`*I1DdLLRr{XGCQ{1maU$C(#pb' );
define( 'SECURE_AUTH_SALT', '`9=+wL@=Rna[@sf$Co(z8};v6A~2msa0].IgJ;g|[ZZ}g<Q{tp&+&;x6 AIj^#x,' );
define( 'LOGGED_IN_SALT',   'Gh3n17,(l6- |ut->ID}df`yEL7I)&nqS=dyL=:nKN$m]fX|4kfk]c}*sHU#P l.' );
define( 'NONCE_SALT',       'IW|93k/>2ul>{]UT?%=4s{_yL,/11Y#?r9bU T!T&^OYO,[6W*ZaC^meFb$_fJPB' );

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
