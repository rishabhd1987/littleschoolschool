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
define( 'DB_NAME', 'littlehearts' );

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
define( 'AUTH_KEY',         'fVJ}m$sKvSY..8v*3X1Vton&=</},N~-6UYZjgv67_)xZrOIV$j#<+X;h{#HexL<' );
define( 'SECURE_AUTH_KEY',  'BCbs(cvIWqjts9NQd^e_3vM{D8vr):qS^sGw6g=gzCINp6y{wSkizl<8E}.SI{d;' );
define( 'LOGGED_IN_KEY',    'uk*S&N}]=&1II!6.ut?Khar49^hXgMLhT]]pbi[B5&Esek{YU,31k>D%:f))IgIr' );
define( 'NONCE_KEY',        'NA)T6Bpu;Zi<;N]1SJxx Yb85thdd8D0X XCykUY7|SapgYyu<Y#$+2$GTnHvJ9I' );
define( 'AUTH_SALT',        '%]oJ-]if+Bh>fU98OB=.q-$d|aFgd;He{k4`0RYbb`c>KHMY^a De4QC{/A$!o*U' );
define( 'SECURE_AUTH_SALT', 'lw[5NCTk7O<HAV15bp ATC4D}z+<*`8TVd%bl#axOf!L!QM2_I?.CS0gg/$a9d@S' );
define( 'LOGGED_IN_SALT',   'Ca=mMz|lj^0nlg<FNDAd50mcS`!vcelT6b0htM{>,x(LGf83$*sjm4~N&<A@qgSD' );
define( 'NONCE_SALT',       '[:1*,>{o0xUM+LQCe,Xl}W!@u&fp^O =9PfLD[U*h;jQg6F-BZJ#XMIO@fJ@f)-X' );

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
