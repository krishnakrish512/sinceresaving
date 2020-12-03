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
define( 'DB_NAME', 'Credit co-operative ltd' );

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
define( 'AUTH_KEY',         '(yjr/hP`mauK!y1XPmY`ZEWOs`kUa& qZqOWR$8>l5gOp#()]pZ?<s1A0$0@NyD(' );
define( 'SECURE_AUTH_KEY',  '471B0B|!M@WBn%+4RlHg/x8SWq>dD:6[A=JX3K?cyy#5+knRkn8w0-#Cj+)iMJ1_' );
define( 'LOGGED_IN_KEY',    '&HFI])}/1+$5JxSs(,NGc^B%C5kVyTJak$f]cQ2D<6C#M:^VK(9#@~m5+vGO_dK$' );
define( 'NONCE_KEY',        '64o93Dn=Kh|C?6z6@.o;q+H/_P!xjw(>G#s1&vPo1Pb6#hKx7&s5c%FBM081A*+i' );
define( 'AUTH_SALT',        '?X;O5%/?}wy]fe`7X|tPn:~^XlVt(YeN5g#DgQZ$ixxV|XCaYdWrSMM}.N<:?T|Y' );
define( 'SECURE_AUTH_SALT', '$?@2}PfC0LMdvLF9bSW_6JmOmpL<u9,+XlFk/,wZ 5}an,^z3|G0k/4~i<iD9,p1' );
define( 'LOGGED_IN_SALT',   ':^zfQ&3Rcyy;j*/8*5?zjgomlP2|_J)yu]u@5q6xVTIt OJ{:t)> [xchNM4!7UY' );
define( 'NONCE_SALT',       'b%fa.*_gR6:esvATg*L5EV[rC =54y]u4%%[_N;HrYpalI4T:<JK_|x[vZ8]sM(R' );

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
